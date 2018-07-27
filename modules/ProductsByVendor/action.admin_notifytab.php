<?php
namespace ProductsByVendor;
if( !isset($gCms) ) exit;
if( !$this->VisibleToAdminUser() ) exit;
$this->SetCurrentTab('notify');

if( isset($params['reset']) ) {
    utils::reset_notify_settings();
    $this->RedirectToTab();
}
else if( isset($params['submit']) ) {
    $this->SetPreference('notify_email_subject',\cge_param::get_string($params,'notify_email_subject'));
    $this->SetPreference('notify_email_body_tpl',\cge_utils::get_param($params,'notify_email_body_tpl'));
    $this->SetMessage($this->Lang('msg_prefs_saved'));
    $this->RedirectToTab();
}

$prefs = ['email_subject'=>$this->GetPreference('notify_email_subject')];
$prefs['email_body_tpl'] = $this->GetPreference('notify_email_body_tpl');
$tpl = $this->CreateSmartyTemplate('admin_notifytab.tpl');
$tpl->assign('prefs',$prefs);
$tpl->display();
