<?php
namespace ProductsByVendor;

// a class representing a single order but only with unpaid transactions
class MetaOrder
{
    private $_tr;

    public function __construct( array $in )
    {
        if( !count($in) ) throw new \LogicException('Cannot create a '.__CLASS__.' without providing valid transaction info');

        $order_id = null;
        foreach( $in as $row ) {
            if( is_array($row) ) {
                if( $row['type'] != Transaction::TYPE_SALE ) throw new \LogicException('Cannot create a MetaOrder object from non-sale transactions');
                if( is_null($order_id) ) {
                    $order_id = $row['order_id'];
                } else if( $order_id != $row['order_id'] ) {
                    throw new \LogicException('Cannot crerate a MetaOrder object from transactions for multiple orders');
                }
                $tr = new Transaction( $row );
                $this->_tr[] = $tr;
            } else {
                // it's a transaction object.16
                $this->_tr[] = $row;
            }
        }
    }

    public function __get($key)
    {
        switch( $key ) {
        case 'order_num':
            return $this->_tr[0]->order_id;

        case 'date':
            return $this->_tr[0]->created;

        case 'total':
            return $this->get_total();

        case 'unpaid_total':
            return $this->get_unpaid_total();

        case 'transactions':
            return $this->get_transactions();
        }
    }

    public function get_total()
    {
        $total = 0;
        foreach( $this->_tr as $one ) {
            $total += $one->amount;
        }
        return $total;
    }

    public function get_unpaid_total()
    {
        $total = 0;
        foreach( $this->_tr as $one ) {
            if( $one->payout_id > 0 ) continue;
            $total += $one->amount;
        }
        return $total;
    }

    public function get_transactions()
    {
        // return an array of Transaction objects.
        return $this->_tr;
    }

    public function get_distinct_uids()
    {
        $out = [];
        foreach( $this->_tr as $one ) {
            if( !in_array($one->uid,$out) ) $out[] = $one->uid;
        }
        return $out;
    }
}