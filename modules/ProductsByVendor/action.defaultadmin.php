<?php
if( !isset($gCms) ) exit;
if( !$this->VisibleToAdminUser() ) exit;

echo $this->StartTabHeaders();
echo $this->SetTabHeader('status',$this->Lang('tab_status'));
echo $this->SetTabHeader('notify',$this->Lang('tab_notifications'));
echo $this->SetTabHeader('prefs',$this->Lang('tab_prefs'));
echo $this->EndTabHeaders();

echo $this->StartTabContent();
echo $this->StartTab('status',$params);
include(__DIR__.'/action.admin_statustab.php');
echo $this->EndTab();
echo $this->StartTab('notify',$params);
include(__DIR__.'/action.admin_notifytab.php');
echo $this->EndTab();
echo $this->StartTab('prefs',$params);
include(__DIR__.'/action.admin_prefstab.php');
echo $this->EndTab();
echo $this->EndTabContent();
