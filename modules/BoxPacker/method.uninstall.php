<?php
use \BoxPacker\BoxStorage;
if( !isset($gCms) ) exit;

$table_name = BoxStorage::box_table_name();
$db = $this->GetDb();
$dict = NewDataDictionary($db);
$sqlarr = $dict->DropTableSQL( $table_name );
$dict->ExecuteSQLArray( $sqlarr );