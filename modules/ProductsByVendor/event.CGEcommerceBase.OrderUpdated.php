<?php
if( !isset($gCms) ) exit;
if( !($order_id = \cge_param::get_int($params,'order_id')) ) return;

// handle the case of attempted recursion.
if( cge_tmpdata::exists(__FILE__) ) return;
cge_tmpdata::set(__FILE__,1);

//
// do the real work
//
$order_obj = orders_ops::load_by_id($order_id);
if( !$order_obj ) return;
if( !in_array($order_obj->get_status(),array('invoiced','paid')) ) return;

//
// we are preparing multiple transactions from the order.
// one transaction for each line item where the product has an owner.
//

// build our transaction arrays
debug_to_log(__FILE__.' start');
$product_ids = $transactions_arr = [];
for( $s = 0; $s < $order_obj->count_destinations(); $s++ ) {
    $dest_obj = $order_obj->get_shipping( $s );
    for( $i = 0; $i < $dest_obj->count_all_items(); $i++ ) {
        $item = $dest_obj->get_item($i);
        if( $item->get_source() != 'Products' ) continue;
        if( $item->get_item_type() != line_item::ITEMTYPE_PRODUCT ) continue;

        $sku = $item->get_sku();
        $product_id = $item->get_item_id();
        $product_ids[] = $product_id;
        $rec = [ 'order_id'=>$order_id, 'product_id'=>$product_id, 'uid'=>null, 'qty'=>null, 'unit_price'=>null, 'amount'=>null ];
        $rec['qty'] = $item->get_quantity();
        $rec['unit_price'] = $item->get_net_price(); // todo: take off the markup.
        $rec['summary'] = $item->get_description();
        $rec['amount'] = $rec['qty'] * $rec['unit_price'];
        $transaction_arr[] = $rec;
    }
}
$product_ids = array_unique($product_ids);

$set_transaction_uid = function( array& $transaction_arr, $product_id, $owner_id ) {
    foreach( $transaction_arr as &$rec ) {
        if( $rec['product_id'] != $product_id ) continue;
        $rec['uid'] = $owner_id;
    }
};

$unadjust_prices = function( array& $transaction_arr, \Products\Product $product ) {
    foreach( $transaction_arr as &$rec ) {
        if( $rec['product_id'] != $product->id ) continue;
        if( $rec['uid'] < 1 ) continue;
        $rec['unit_price'] = $this->priceAdjuster->unadjust_price( $product, $rec['unit_price'] );
        $rec['amount'] = $rec['unit_price'] * $rec['qty'];
    }
};

$clean_transactions_with_empty_uid = function( array $transaction_arr ) {
    $out = [];
    foreach( $transaction_arr as $rec ) {
        if( $rec['uid'] < 1 ) continue;
        $out[] = $rec;
    }
    return $out;
};

// get all of the products and get the uids for each product and fill them in
if( !count($product_ids) ) return;
$query = new \products_query( ['productlist'=>$product_ids, 'limit'=>10000 ] );
$rs = $query->execute();
while( !$rs->EOF ) {
    $product = $rs->get_product();
    if( $product->owner > 0 ) {
        $set_transaction_uid( $transaction_arr, $product->id, $product->owner );
        $unadjust_prices( $transaction_arr, $product );
    }
    $rs->MoveNext();
}
// clean out any transactions for products that don't have valid uids
$transaction_arr = $clean_transactions_with_empty_uid( $transaction_arr );
$have_transactions = $this->transactionStorage->load_sales_by_order( $order_id );
if( count($have_transactions) ) {
    // somebody be playin with the order
    $have_payout = false;
    foreach( $have_transactions as $tr ) {
        if( $tr->payout_id > 0 ) {
            $have_payout = true;
            break;
        }
    }
    if( $have_payout ) {
        // we are not doing any more
        audit('',$this->GetName(),'Already have paid out transactions for order '.$order_id);
        return;
    }

    // we have transactions for this order.. but we're gonna replace them.
    foreach( $have_transactions as $tr ) {
        $this->transactionStorage->delete_by_id( $tr->id );
    }
}
$this->transactionStorage->create_bulk_sales( $transaction_arr );
if( count($transaction_arr) ) audit('',$this->GetName(),' created '.count($transaction_arr).' transactions from order '.$order_id);

// setup for another order... shouldn't happen, but just in case.
cge_tmpdata::erase(__FILE__);
debug_to_log(__FILE__.' finished');
