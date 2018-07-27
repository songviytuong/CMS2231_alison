<?php
namespace ProductsByVendor;
if( !isset($gCms) ) exit;
if( !($feu_uid = utils::visible_to_feu()) ) return;

$thetemplate = utils::find_layout_template($params,'matpl','ProductsByVendor::My Activity');
$tpl = $this->CreateSmartyTemplate($thetemplate);

$parms = [ 'uid'=>$feu_uid ];
$page = \cge_param::get_int($params,'pbv_page');
if( $page ) {
    $offset = (int) $parms['limit'] * ($page - 1);
    $parms['offset'] = $offset;
}
$query = new TransactionQuery( $parms );
$rs = $query->execute();
$items = $rs->FetchAll();
$product_ids = [];
foreach( $items as $item ) {
    $product_ids[] = $item->product_id;
}
$pagination = $rs->get_pagination();

$products = null;
$product_ids = array_unique($product_ids);
if( count($product_ids) ) {
    $pquery = new \products_query( ['owner'=>$feu_uid, 'productlist'=>$product_ids] );
    $prs = $pquery->execute();
    while( !$prs->EOF() ) {
        $obj = $prs->get_product();
        $products[$obj->id] = $obj;
        $prs->MoveNext();
    }
}
$tpl->assign('items',$items);
$tpl->assign('products',$products);
$tpl->assign('pagination',$pagination);
$tpl->assign('accrued_payout',$this->transactionStorage->get_accrued_payout( $feu_uid ));
$tpl->display();