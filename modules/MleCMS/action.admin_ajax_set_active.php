<?php

if (!isset($gCms))
    exit;

if (!$this->CheckAccess('manage translator_mle')) {
    echo $this->ShowErrors($this->Lang('accessdenied'));
    return;
}
#Active 0|1
if (mle_tools::is_ajax() && $_POST['aAction'] == 'SetActive') {
    Translation::setActive($_POST);
}
#Sync Data Alter Table
if (mle_tools::is_ajax() && $_POST['aAction'] == 'SyncData') {

    $rest = "";
    
    #LISE MODULE
    $LISE_TABLE_QUERY = "SELECT module_name FROM " . cms_db_prefix() . "modules WHERE module_name LIKE '%LISE%' AND module_name != 'LISE' AND sync = 1";
    $LIST_TABLE_ARR = $db->GetAll($LISE_TABLE_QUERY);
    foreach ($LIST_TABLE_ARR as $MODULE) {
        $table = cms_db_prefix() . 'module_' . strtolower($MODULE["module_name"]) . '_item';
        $fields = array(
            'desc',
            'title'
        );

        alter($table, $fields, $_POST["alias"], 'alias');
        $rest .= "- TABLE: " . $table . "<br/>";
    }
    
    #CONTENT
    $table = cms_db_prefix() . 'content';
    $fields = array(
        'content_name',
        'menu_text'
    );
    alter($table, $fields, $_POST["alias"], 'content_name');
    $rest .= "- TABLE: " . $table . "<br/>";
    
    #PRODUCTS
    $table = cms_db_prefix() . 'module_products';
    $fields = array(
        'product_name',
        'details'
    );
    alter($table, $fields, $_POST["alias"], 'product_name');
    $rest .= "- TABLE: " . $table . "<br/>";

    echo $rest;
}

function alter($table, $fields, $post, $alias) {
    $db = cmsms()->GetDb();
    foreach ($fields as $item) {
        if (cms_utils::db_column_exists($table, $item . '_' . $post) == false) {
            $q = 'ALTER TABLE ' . $table . ' ADD ' . $item . '_' . $post . ' VARCHAR(250) AFTER '.$alias;
            if($post == 'en'){
                continue;
            } else{
                $r = $db->Execute($q);
            }
//            if (!$r)
//                    throw new Exception($db->ErrorMsg());
        }
    }
}

exit;
?>