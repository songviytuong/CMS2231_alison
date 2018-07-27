<?php
namespace BoxPacker;

if( !isset($gCms) ) exit;
if( !$this->VisibleToAdminUser() ) return;
$weight_units = \cg_ecomm::get_weight_units();
$length_units = \cg_ecomm::get_length_units();
$box = new Box;
if( ($boxid = \cge_param::get_int($params,'boxid')) ) {
    $box = $this->box_storage->load_by_id( $boxid );
}

if( \cge_param::exists($params,'cancel') ) {
    $this->RedirectToTab();
}
if( \cge_param::exists($params,'submit') ) {
    $params['id'] = $box->id;
    $box = new Box( $params );
    $this->box_storage->save( $box );
    $this->RedirectToTab();
}
$tpl = $this->CreateSmartyTemplate('admin_editbox.tpl');
$tpl->assign('box',$box);
$tpl->assign('weight_units',$weight_units);
$tpl->assign('length_units',$length_units);
$tpl->display();
