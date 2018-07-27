<?php
if( !isset($gCms) ) exit;
if( !$this->VisibleToAdminUser() ) exit;
$this->SetCurrentTab('prefs');

$feu = \cms_utils::get_module(MOD_FRONTENDUSERS);

if( \cge_param::exists( $params,'submit') ) {
    $this->SetPreference('markup_percent',\cge_param::get_float($params,'markup_percent'));
    $this->SetPreference('dimensions_required',\cge_param::get_bool($params,'dimensions_required'));
    $this->SetMessage($this->Lang('msg_prefs_saved'));
    $this->RedirectToTab();
}

$prefs = [ 'markup_percent'=>(float) $this->GetPreference('markup_percent') , 'dimensions_required'=>$this->GetPreference('dimensions_required') ];
$tpl = $this->CreateSmartyTemplate('admin_prefstab.tpl');
$tpl->assign('prefs',$prefs);
$tpl->display();