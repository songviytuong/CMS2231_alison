<?php
use \ProductsByVendor\TransactionStorage;
if( !isset($gCms) ) exit;

$table_name = TransactionStorage::transaction_table_name();
$db = $this->GetDb();
$dict = NewDataDictionary($db);
$taboptarray = array('mysql' => 'TYPE=MyISAM');
$flds = "id I KEY AUTO NOTNULL,
         uid I NOTNULL,
         created I NOTNULL,
         type C(25) NOTNULL,
         payout_id I,
         order_id I,
         product_id I,
         qty I,
         unit_price F,
         amount F,
         summary X
          ";
$sqlarr = $dict->CreateTableSQL( $table_name, $flds, $taboptarray );
$dict->ExecuteSQLArray($sqlarr);
$sqlarr = $dict->CreateIndexSQL( 'pbv_tr_idx1', $table_name, 'uid,created' );
$dict->ExecuteSQLArray($sqlarr);

$this->AddEventHandler('CGEcommerceBase','OrderUpdated',FALSE);


#
# Templates
#
$create_template_type = function($type_name,$mod) {
    try {
        $tpl_type = new \CmsLayoutTemplateType();
        $tpl_type->set_originator('ProductsByVendor');
        $tpl_type->set_dflt_flag();
        $tpl_type->set_name($type_name);
        $tpl_type->set_lang_callback('ProductsByVendor::tpl_type_lang_cb');
        $tpl_type->set_content_callback('ProductsByVendor::tpl_type_reset_cb');
        $tpl_type->reset_content_to_factory();
        $tpl_type->save();
    }
    catch( \CmsException $e ) {
        \cge_utils::log_exception($e);
        audit('','ProductsByVendor','Install error: '.$e->GetMessage());
    }

    $tpl_type = \CmsLayoutTemplateType::load('ProductsByVendor::'.$type_name);
    return $tpl_type;
};

$create_template_of_type = function($type_ob,$dflt = true) {
    $name = 'Products Sample '.$type_ob->get_name();
    $ob = new \CmsLayoutTemplate();
    $ob->set_type( $type_ob );
    $ob->set_content( $type_ob->get_dflt_contents() );
    $ob->set_owner( get_userid() );
    $ob->set_type_dflt( $dflt );
    $new_name = $ob->generate_unique_name( $name );
    $ob->set_name( $new_name );
    $ob->save();
};

$editproduct_type = $create_template_type('Edit Product',$this);
$create_template_of_type( $editproduct_type );
$myproducts_type = $create_template_type('My Products',$this);
$create_template_of_type( $myproducts_type );
$myactivity_type = $create_template_type('My Activity',$this);
$create_template_of_type( $myactivity_type );