<?php
namespace ProductsByVendor;
if( !isset($gCms) ) exit;
if( !$this->VisibleToAdminUser() ) exit;

//
// list of all vendors needing payouts
$query = new UnpaidVendorQuery();
$rs = $query->execute();
$list = $rs->FetchAll();

$tpl = $this->CreateSmartyTemplate('admin_view_pending_payouts.tpl');
$tpl->assign('vendor_list',$list);
$tpl->display();