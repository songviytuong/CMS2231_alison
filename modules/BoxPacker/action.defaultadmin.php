<?php
namespace BoxPacker;
if( !isset($gCms) ) exit;
if( !$this->VisibleToAdminUser() ) exit;

echo $this->StartTabHeaders();
echo $this->SetTabHeader('boxes',$this->Lang('tab_boxes'));
echo $this->SetTabHeader('settings',$this->Lang('tab_settings'));
echo $this->EndTabHeaders();

echo $this->StartTabContent();
echo $this->StartTab('boxes',$params);
include_once(__DIR__.'/action.admin_boxes_tab.php');
echo $this->EndTab();
echo $this->StartTab('settings',$params);
include_once(__DIR__.'/action.admin_settings_tab.php');
echo $this->EndTab();
echo $this->EndTabContent();
