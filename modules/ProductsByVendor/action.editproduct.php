<?php
namespace ProductsByVendor;
if( !isset($gCms) ) exit;
if( !($feu_uid = utils::visible_to_feu()) ) return;

try {
    $product = new \Products\Product;
    if( ($pid = \cge_param::get_int($params,'pbv_pid')) ) {
        $product = utils::get_product_storage()->get_by_id( $pid );
        if( $product->owner != $feu_uid ) throw new \RuntimeException($this->Lang('err_permission_denied'));
    }
    $fielddefs = \product_utils::get_fielddefs(true);
    $fieldinfo = [];
    foreach ($fielddefs as $fielddef) {
        $field = new \stdClass();

        $value = $product->get_field_value( $fielddef->id );
        $field->id = $fielddef->id;
        $field->name = $fielddef->name;
        $field->prompt = $fielddef->prompt;
        $field->type = $fielddef->type;
        $field->options = $fielddef->options;
        $field->raw_value = $value;
        $field->value = $value;
        $field->fldname = 'pbv_'.$field->name;
        if( $field->type == 'dimensions' ) {
            if( !$field->value ) {
                $field->value = ['length'=>0,'width'=>0,'height'=>0 ];
            } elseif( is_string($field->value) ) {
                $field->value = unserialize($field->value);
            }
        }
        $fieldinfo[$field->name] = $field;
    }
    $destdir = null;
    if( $product->id ) $destdir = \product_utils::get_product_upload_path( $product->id );
    $errors = null;

    //
    // handling / processing
    //
    if( \cge_param::exists($params,'pbv_cancel') ) {
        $this->Redirect($id,'default',$returnid);
    }
    else if( \cge_param::exists($params,'pbv_delete') ) {
        utils::get_product_storage()->delete_by_id( $product->id );
        $this->Redirect($id,'default',$returnid);
    }
    else if( \cge_param::exists($params,'pbv_submit') ) {
        try {
            $product->set_status( (\cge_param::get_int($params,'pbv_active')) ? $product::STATUS_PUBLISHED : $product::STATUS_DISABLED );
            $product->set_taxable(TRUE); // hardcoded to taxable.
            $product->set_name( \cge_param::get_string($params,'pbv_name') );
            $product->set_details( \cge_param::get_string($params,'pbv_details') );
            $product->set_price( \cge_param::get_float($params,'pbv_price') );
            $product->set_weight( \cge_param::get_float($params,'pbv_weight') );
            $product->set_categories( \cge_utils::get_param( $params, 'pbv_categories' ) );
            $product->set_sku( \cge_param::get_string($params,'pbv_sku') );
            $tmp = \cge_param::get_int($params,'pbv_hierarchy');
            if( $tmp ) $tmp = [ $tmp ];
            $product->set_hierarchies( $tmp );
            $product->set_owner( $feu_uid );

            $del_product_file = function($destdir,$name) {
                $fn = cms_join_path($destdir,$name);
                if( is_file($fn) && is_writable($fn) ) unlink($fn);
            };

            // if we have a product id, check for deleted files.
            if( $product->id && \cge_param::exists($params,'pbv_delfile') ) {
                $deleted = \cge_utils::get_param($params,'pbv_delfile');
                foreach( $deleted as $fieldname ) {
                    $fieldname = substr($fieldname,4); // strip off pbv_ prefix
                    if( !isset($fieldinfo[$fieldname]) ) continue;
                    $field = $fieldinfo[$fieldname];
                    $cur_value = $product->get_field_value( $field->id );
                    if( !$cur_value ) continue;
                    $del_product_file($destdir,$cur_value);
                    $product->set_field( $field->id, null );
                }
            }

            $file_fields = [];
            foreach( $fieldinfo as $name => $field ) {
                $cur_field_value = $product->get_field_value( $field->id );
                $val = null;
                switch( $field->type ) {
                case 'image':
                case 'file':
                    $handler = new \cg_fileupload($id);
                    $handler->set_accepted_filetypes($this->GetPreference('allowed_filetypes'));
                    if( $product->id && $cur_field_value ) {
                        $res = $handler->check_upload($field->fldname,'',FALSE);
                        $err = $handler->get_error();
                        if( $res ) {
                            // have a valid replacement upload.
                            $del_product_file($destdir,$cur_field_value);
                        }
                    }
                    $val = $handler->get_uploaded_filename($field->fldname);
                    $file_fields[$name] = ['input_name'=>$field->fldname, 'val'=>$val ];
                    // note: don't set the field val yet.
                    break;
                case 'dimensions':
                    $arr = \cge_utils::get_param($params,$field->fldname);
                    $val = ['length'=>\cge_param::get_float($arr,'l'), 'width'=>\cge_param::get_float($arr,'w'), 'height'=>\cge_param::get_float($arr,'h') ];
                    $product->set_field( $field->id, $val );
                    break;
                case 'subscription':
                    die('todo');
                    $product->set_field( $field->id, $val );
                    break;
                case 'textarea':
                    $val = \cge_param::get_html($params,$field->fldname);
                    $product->set_field( $field->id, $val );
                    break;
                default:
                    $val = \cge_param::get_string($params,$field->fldname);
                    $product->set_field( $field->id, $val );
                    break;
                }
            }

            // attributes
            $in_attribs = \cge_utils::get_param($params,'pbvx_attrib');
            if( is_array($in_attribs) && count($in_attribs) ) {
                $list = [];
                foreach( $in_attribs as $row ) {
                    $obj = new \Products\ProductAttribute;
                    $obj->from_array( $row );
                    $list[] = $obj;
                }
                $product->set_attributes( $list );
            }

            // save the product
            utils::get_product_storage()->save( $product );

            if( count($file_fields) ) {
                $modified = false;
                // move uploaded files.
                \cge_dir::mkdirr( $destdir );
                foreach( $file_fields as $name => $rec ) {
                    $field = $fieldinfo[$name];
                    $handler = new \cg_fileupload($id,$destdir);
                    $res = $handler->handle_upload( $field->fldname );
                    $err = $handler->get_error();
                    if( !$res && $err != $handler::NOFILE ) {
                        $errors[] = sprintf("%s %s: %s",$this->Lang('field'),$def->name,$this->GetUploadErrorMessage($err));
                    } else if( $res ) {
                        $product->set_field( $field->id, $res );
                        $modified = true;
                    }
                }

                // save the product again.
                if( $modified ) utils::get_product_storage()->save( $product );
            }

            // now, after the item is saved... if dimensions are required check them
            // and generate an error if necessary.
            if( $this->GetPreference('dimensions_required') ) {
                $have_dimensions = function($fieldinfo, \Products\Product $product) {
                    $dim_field = null;
                    foreach( $fieldinfo as $name => $obj ) {
                        if( $obj->type == 'dimensions' ) {
                            $dim_field = $obj->id;
                            break;
                        }
                    }
                    if( !$dim_field ) return FALSE;
                    $val = $product->get_field_value( $dim_field );
                    if( !$val ) return FALSE;
                    if( !is_array($val) || !isset($val['length']) | !isset($val['width']) || !isset($val['height']) ) return FALSE;
                    if( $val['length'] < 0.001 || $val['width'] < 0.001 || $val['height'] < 0.001 ) return FALSE;
                    return TRUE;
                };

                if( $product->weight < 0.001 || !$have_dimensions( $fieldinfo, $product) ) {
                    $errors[] = $this->Lang('err_dimensions_required');
                }
            }

            // and we're done.
            if( !count($errors) ) $this->Redirect($id,'default',$returnid);
        }
        catch( \Exception $e ) {
            $errors[] = $e->GetMessage();
        }
    }

    //
    // give everything to smarty
    //
    $attribs = null;
    foreach( $product->attribs as $attr ) {
        $attribs[] = $attr->to_array();
    }
    $thetemplate = utils::find_layout_template($params,'eptpl','ProductsByVendor::Edit Product');
    //$thetemplate = 'orig_editproduct.tpl'; // debug
    $tpl = $this->CreateSmartyTemplate($thetemplate);
    $tpl->assign('product',$product);
    $tpl->assign('categories',\product_utils::get_category_list());
    $tpl->assign('hierarchy_list',\hierarchy_ops::build_hierarchy_list());
    $tpl->assign('length_units',\product_ops::get_length_units());
    $tpl->assign('weight_units',\product_ops::get_length_units());
    $tpl->assign('currency_symbol',\product_ops::get_currency_symbol());
    $tpl->assign('fieldinfo',$fieldinfo);
    $tpl->assign('file_location',$destdir);
    $tpl->assign('errors',$errors);
    $tpl->assign('attribs_json',json_encode($attribs));
    $tpl->display();
}
catch( \Exception $e ) {
    $this->ShowFormattedMessage($e->GetMessage(),TRUE);
}
