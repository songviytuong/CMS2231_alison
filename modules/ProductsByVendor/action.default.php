<?php
namespace ProductsByVendor;
if( !isset($gCms) ) exit;
if( !($feu_uid = utils::visible_to_feu()) ) return;

//
// this is the myproducts view
//
$query = new \products_query(['owner'=>$feu_uid, 'status'=>'*' ]);
$page = \cge_param::get_int($params,'pbv_page',1);
if( $page > 0 ) $query['offset'] = ($page - 1) * $query['limit'];

$rs = $query->execute();
$products = [];
while( !$rs->EOF ) {
    $products[] = $rs->get_product();
    $rs->MoveNext();
}
$pagination = $rs->get_pagination();

$thetemplate = utils::find_layout_template($params,'mptpl','ProductsByVendor::My Products');
$tpl = $this->CreateSmartyTemplate($thetemplate);
$tpl->assign('products',$products);
$tpl->assign('pagination',$pagination);
$tpl->display();