<?php
namespace BoxPacker;
if( !isset($gCms) ) exit;
if( !$this->VisibleToAdminUser() ) exit;
$this->SetCurrentTab('settings');

if( \cge_param::exists($params,'submit') ) {
    $this->SetPreference('oversize_handler',\cge_param::get_string($params,'oversize_handler'));
    $tmp = ['thickness' => \cge_param::get_float($params,'oversize_thickness'), 'weight' => \cge_param::get_float($params,'oversize_weight') ];
    $this->SetPreference('oversize_wrapper',serialize($tmp));
    $this->SetPreference('noweight_handler',\cge_param::get_string($params,'noweight_handler'));
    $this->SetPreference('noweight_dflt',\cge_param::get_float($params,'noweight_dflt'));
    $this->SetPreference('nodimensions_handler',\cge_param::get_string($params,'nodimensions_handler'));
    $tmp = [ 'width' => \cge_param::get_float($params,'nodimensions_width'),
             'length' => \cge_param::get_float($params,'nodimensions_length'),
             'depth' => \cge_param::get_float($params,'nodimensions_depth') ];
    $this->SetPreference('nodimensions_dflt',serialize($tmp));
}

$prefs = [];
$prefs['oversize_handler'] = $this->GetPreference('oversize_handler');
$prefs['oversize_wrapper'] =  unserialize($this->GetPreference('oversize_wrapper'));
$prefs['noweight_handler'] = $this->GetPreference('noweight_handler');
$prefs['noweight_dflt'] = $this->GetPreference('noweight_dflt');
$prefs['nodimensions_handler'] = $this->GetPreference('nodimensions_handler');
$prefs['nodimensions_dflt'] = unserialize($this->GetPreference('nodimensions_dflt'));
$oversize_handlers = [];
$oversize_handlers['ignore'] = $this->Lang('opt_ignore');
$oversize_handlers['error'] = $this->Lang('opt_generate_error');
$oversize_handlers['usedflt'] = $this->Lang('opt_use_wrapper');
$noweight_handlers = [];
$noweight_handlers['ignore'] = $this->Lang('opt_ignore');
$noweight_handlers['error'] = $this->Lang('opt_generate_error');
$noweight_handlers['usedflt'] = $this->Lang('opt_use_defaults');
$nodimensions_handlers = [];
$nodimensions_handlers['ignore'] = $this->Lang('opt_ignore');
$nodimensions_handlers['error'] = $this->Lang('opt_generate_error');
$nodimensions_handlers['usedflt'] = $this->Lang('opt_use_defaults');

$tpl = $this->CreateSmartyTemplate('admin_settings_tab.tpl');
$tpl->assign('prefs',$prefs);
$tpl->assign('oversize_handlers',$oversize_handlers);
$tpl->assign('noweight_handlers',$noweight_handlers);
$tpl->assign('nodimensions_handlers',$nodimensions_handlers);
$tpl->assign('weight_units',\cg_ecomm::get_weight_units());
$tpl->assign('length_units',\cg_ecomm::get_length_units());
$tpl->display();