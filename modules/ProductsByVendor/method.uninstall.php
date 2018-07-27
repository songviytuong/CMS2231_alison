use \ProductsByVendor\TransactionStorage;
if( !isset($gCms) ) exit;

$table_name = BoxStorage::box_table_name();
$db = $this->GetDb();
$dict = NewDataDictionary($db);
$sqlarr = $dict->DropTableSQL( $table_name );
$dict->ExecuteSQLArray( $sqlarr );

try {
    $types = CmsLayoutTemplateType::load_all_by_originator($this->GetName());
    if( is_array($types) && count($types) ) {
        foreach( $types as $type ) {
            $templates = $type->get_template_list();
            if( is_array($templates) && count($templates) ) {
                foreach( $templates as $template ) {
                    $template->delete();
                }
            }
            $type->delete();
        }
    }
}
catch( Exception $e ) {
    // log it
    audit('',$this->GetName(),'Uninstall Error: '.$e->GetMessage());
}
