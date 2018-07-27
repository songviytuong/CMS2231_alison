<?php

if( !defined('CMS_VERSION') ) exit;

if (!$this->CheckPermission($this->_GetModuleAlias() . '_modify_item'))
{    
  return;
}
#---------------------
# Check Preferences
#---------------------

$admintheme = cms_utils::get_theme_object();

$singular         	= $this->GetPreference('item_singular', '');
$plural           	= $this->GetPreference('item_plural', '');
$fields           	= explode( ',', $this->GetPreference('item_cols', '') );
$limit            	= $this->GetPreference('items_per_page', 20);
$dateformat       	= trim( get_preference(get_userid(), 'date_format_string', '%Y-%m-%d') );

if(empty($dateformat)) 
{	
  $dateformat = '%Y-%m-%d';
}

#---------------------
# Init items
#---------------------	
$params['pagelimit'] 			= $limit;
$params['showall'] 				= true;	// <- To disable time control queries
$item_query = new LISEItemQuery($this, $params);

if(!$this->CheckPermission($this->_GetModuleAlias() . '_modify_all_item')) 
{
	$item_query->AppendTo(LISEQuery::VARTYPE_WHERE, 'A.owner = ?');
	$item_query->AppendTo(LISEQuery::VARTYPE_QPARAMS, get_userid(false));
}

$result = $item_query->Execute(true);

$page = $item_query->GetPageNumber();
$totalcount = $item_query->TotalCount();

$items = array();
while ($result && $row = $result->FetchRow()) {
    $obj = $this->InitiateItem($fields);
    LISEItemOperations::Load($this, $obj, $row, $mleblock);
    
    
    // Check if we need to show any fields
    if (count($fields) > 0) {
        // Check static
        if (!in_array('alias', $fields)) {
            unset($obj->alias);
        }
       
        if (!in_array('create_time', $fields)) {
            unset($obj->create_time);
        } else {
            $obj->create_time = strftime($dateformat, strtotime($obj->create_time));
        }

        if (!in_array('modified_time', $fields)) {
            unset($obj->modified_time);
        } else {
            $obj->modified_time = strftime($dateformat, strtotime($obj->modified_time));
        }

        if (in_array('start_time', $fields)) {
            $obj->start_time = !empty($obj->start_time) ? strftime($dateformat, strtotime($obj->start_time)) : '';
        }

        if (in_array('end_time', $fields)) {
            $obj->end_time = !empty($obj->end_time) ? strftime($dateformat, strtotime($obj->end_time)) : '';
        }
    }

    // approve
    if ($this->CheckPermission($this->_GetModuleAlias() . '_approve_item')) {
        if ($obj->active) {
            $obj->approve = $this->CreateLink($id, 'admin_approveitem', $returnid, $admintheme->DisplayImage('icons/system/true.gif', $this->ModLang('revert'), '', '', 'systemicon'), array(
                'approve' => 0,
                'item_id' => $row['item_id']
            ));
        } else {
            $obj->approve = $this->CreateLink($id, 'admin_approveitem', $returnid, $admintheme->DisplayImage('icons/system/false.gif', $this->ModLang('approve'), '', '', 'systemicon'), array(
                'approve' => 1,
                'item_id' => $row['item_id']
            ));
        }
    }

    $linkparams = array();
    $linkparams['item_id'] = $row['item_id'];
    
    lise_utils::clean_params($params, array('page'), true);
    $linkparams = array_merge($linkparams, $params);
    
    // edit
    $obj->editlink = $this->CreateLink($id, 'admin_edititem', $returnid, $admintheme->DisplayImage('icons/system/edit.gif', $this->ModLang('edit'), '', '', 'systemicon'), $linkparams);
    $obj->title = $this->CreateLink($id, 'admin_edititem', $returnid, $obj->title, $linkparams);

    $linkparams['mode'] = 'copy';

    // copy
    $obj->copylink = $this->CreateLink($id, 'admin_edititem', $returnid, $admintheme->DisplayImage('icons/system/copy.gif', $this->ModLang('copy'), '', '', 'systemicon'), $linkparams);

    // delete
    if ($this->CheckPermission($this->_GetModuleAlias() . '_remove_item')) {
        $obj->delete = $this->CreateLink($id, 'admin_deleteitem', $returnid, $admintheme->DisplayImage('icons/system/delete.gif', $this->ModLang('delete'), '', '', 'systemicon'), array(
            'item_id' => $row['item_id']
        ));
    }
    
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $charactersLength = strlen($characters);
    $booking_code = '';
    for ($i = 0; $i < 13; $i++) {
        $booking_code .= $characters[rand(0, $charactersLength - 1)];
    }
    
    if ($this->GetPreference('sent_email') == 1) {
        foreach ($obj->fielddefs as $i) {
            if ($i->alias == "email") {
                $email_value = $i->value;
            }
            
            if ($i->alias == "brochure") {
                $brochure_value = $i->value;
            }
            
            if ($i->alias == "booking") {
                $booking_value = $i->value;
            }
        }
        $obj->sent = $this->CreateLink($id, 'admin_sentitem', $returnid, $admintheme->DisplayImage('icons/system/sent.png', $this->ModLang('sent'), '', '', 'systemicon'), array(
            'mode' => 'sent',
            'email' => $email_value,
            'brochure' => $brochure_value,
            'booking_date' => $booking_value,
            'booking_code' => $booking_code,
            'item_id' => $row['item_id']
        ));
    }

    // select box
    $obj->select = $this->CreateInputCheckbox($id, 'items[]', $row['item_id']);

    $items[] = $obj;
    
}

#---------------------
# Smarty processing
#---------------------

$pagenumber = $item_query->GetPageNumber();
$pagecount = $item_query->GetPageCount();
$smarty->assign('totalcount', $totalcount);

// some pagination variables to smarty.
if( $pagenumber == 1 )
  {
    $smarty->assign('prevpage','<');
    $smarty->assign('firstpage','<<');
  }
else
  {
    $smarty->assign('prevpage',
		    $this->CreateLink($id,'defaultadmin',
				      $returnid,'<',
				      array('pagenumber'=>$pagenumber-1,
					    'active_tab'=>'itemtab')));
    $smarty->assign('firstpage',
		    $this->CreateLink($id,'defaultadmin',
				      $returnid,'<<',
				      array('pagenumber'=>1,
					    'active_tab'=>'itemtab')));
  }
if( $pagenumber >= $pagecount )
  {
    $smarty->assign('nextpage','>');
    $smarty->assign('lastpage','>>');
  }
else
  {
    $smarty->assign('nextpage',
		    $this->CreateLink($id,'defaultadmin',
				      $returnid,'>',
				      array('pagenumber'=>$pagenumber+1,
					    'active_tab'=>'itemtab')));
    $smarty->assign('lastpage',
		    $this->CreateLink($id,'defaultadmin',
				      $returnid,'>>',
				      array('pagenumber'=>$pagecount,
					    'active_tab'=>'itemtab')));
  }
#Find Mact = LISESEO
$liseseo = explode(',', $_REQUEST['mact']);
#Status: Active Languages  
$language_status = active_languages();
if($language_status){
    if($liseseo[0] !== 'LISESEO'){
        $smarty->assign('activelang',$language_status);
    }
}
#Status: End Active Languages
  
$smarty->assign('pagenumber',$pagenumber);
$smarty->assign('pagecount',$pagecount);
$smarty->assign('oftext',$this->ModLang('prompt_of'));

$smarty->assign('items', $items);
$smarty->assign('title', $this->GetPreference('item_singular', ''));
$smarty->assign('title_plural', $this->GetPreference('item_plural', ''));

$smarty->assign('submitorder', $this->CreateInputSubmit($id, 'submit_itemorder', $this->ModLang('submit_order')));
$smarty->assign('addlink', $this->CreateLink($id, 'admin_edititem', $returnid, $admintheme->DisplayImage('icons/system/newobject.gif', $this->ModLang('add', $singular), '', '', 'systemicon') . 
	$this->ModLang('add', $singular)));

if($this->CheckPermission($this->_GetModuleAlias() . '_modify_all_item')) 
{
	$smarty->assign('exportlink', $this->CreateLink($id, 'admin_exportitems', $returnid, $admintheme->DisplayImage('icons/system/export.gif', $this->ModLang('export', $singular), '', '', 'systemicon') . 
		$this->ModLang('export', $plural)));
	$smarty->assign('importlink', $this->CreateLink($id, 'admin_importitems', $returnid, $admintheme->DisplayImage('icons/system/import.gif', $this->ModLang('import', $singular), '', '', 'systemicon') . 
		$this->ModLang('import', $plural)));	
}	
	
echo $this->ModProcessTemplate('itemtab.tpl');
?>
