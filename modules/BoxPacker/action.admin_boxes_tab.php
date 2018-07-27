<?php
namespace BoxPacker;
if( !isset($gCms) ) exit;
if( !$this->VisibleToAdminUser() ) exit;
$this->SetCurrentTab('boxes');

$boxes = $this->box_storage->get_all();
$tpl = $this->CreateSmartyTemplate('admin_boxes_tab.tpl');
$tpl->assign('boxes',$boxes);
$tpl->assign('weight_units',\cg_ecomm::get_weight_units());
$tpl->assign('length_units',\cg_ecomm::get_length_units());
$tpl->display();