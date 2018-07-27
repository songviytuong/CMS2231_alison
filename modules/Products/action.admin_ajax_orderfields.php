<?php
if( !isset($gCms) ) exit;
if( !$this->CheckPermission('Modify Products') ) exit;

try {
    $idlist = \cge_utils::get_param($params,'idlist');
    debug_to_log($idlist,'admin_ajax_orderfields');

    $sql = 'UPDATE '.cms_db_prefix().'module_products_fielddefs SET item_order = ?, modified_date = NOW()  WHERE id = ?';
    $item_order = 1;
    foreach( $idlist as $id ) {
        $db->Execute( $sql, [ $item_order, (int) $id ] );
        debug_to_log($db->sql,'admin_ajax_orderfields');
        $item_order++;
    }
    // nothong to output.
}
catch( \Exception $e ) {
    header('HTTP/1.0 500 '.$e->GetMessage());
}
exit;
