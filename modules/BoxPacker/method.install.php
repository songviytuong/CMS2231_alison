<?php
use \BoxPacker\BoxStorage;
if( !isset($gCms) ) exit;

$table_name = BoxStorage::box_table_name();
$db = $this->GetDb();
$dict = NewDataDictionary($db);
$taboptarray = array('mysql' => 'TYPE=MyISAM');

$flds = 'id I KEY AUTO NOTNULL,
         ref C(255) NOTNULL,
         outer_width F NOTNULL,
         outer_length F NOTNULL,
         outer_depth F NOTNULL,
         empty_weight F,
         inner_width F NOTNULL,
         inner_length F NOTNULL,
         inner_depth F NOTNULL,
         max_weight F NOTNULL';
$sqlarr = $dict->CreateTableSQL( $table_name, $flds, $taboptarray );
$dict->ExecuteSQLArray($sqlarr);
$sqlarr = $dict->CreateIndexSQL( 'boxpacker_idx1', $table_name, 'name', [ 'UNIQUE' ] );
$dict->ExecuteSQLArray($sqlarr);
