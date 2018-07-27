<?php
namespace ProductsByVendor;

class TransactionStorage
{
    private $db;

    public function __construct( $db )
    {
        $this->_db = $db;
    }

    public function delete_by_id( $transaction_id )
    {
        $transaction_id = (int) $transaction_id;
        if( $transaction_id < 1 ) throw new \LogicException('Invalid id passed to '.__METHOD__);

        $sql = 'DELETE FROM '.self::transaction_table_name().' WHERE id = ?';
        $this->_db->Execute( $sql, [ $transaction_id ] );
    }

    public function load_sales_by_order( $order_id )
    {
        $order_id = (int) $order_id;
        if( $order_id < 1 ) throw new \LogicException('Invalid order_id passed to '.__METHOD__);

        $sql = 'SELECT * FROM '.self::transaction_table_name().' WHERE order_id = ? AND type = ? ORDER BY created, product_id';
        $list = $this->_db->GetArray($sql, [ $order_id, Transaction::TYPE_SALE ] );
        if( !count($list) ) return;

        $out = [];
        foreach( $list as $row ) {
            $out[] = new Transaction( $row );
        }
        return $out;
    }

    public function insert( Transaction $tr )
    {
        $sql = 'INSERT INTO '.self::transaction_table_name().' (uid, type, payout_id, order_id, product_id, qty, unit_price, amount, summary, created)
                VALUES (?,?,?,?,?,?,?,?,?,?)';
        $this->_db->Execute( $sql, [ $tr->uid, $tr->type, $tr->payout_id, $tr->order_id, $tr->product_id, $tr->qty, $tr->unit_price, $tr->amount,
                                     $tr->summary, time() ] );
    }

    protected function is_minimally_complete( array $tr )
    {
        if( !$tr['amount'] ) return FALSE;
        if( !$tr['uid'] ) return FALSE;
        switch( $tr['type']) {
        case Transaction::TYPE_SALE:
            if( !$tr['order_id'] ) return FALSE;
            if( !$tr['product_id'] ) return FALSE;
            if( !$tr['unit_price'] ) return FALSE;
            if( !$tr['qty'] ) return FALSE;
            break;
        case Transaction::TYPE_PAYOUT:
            if( !$tr['payout_id'] ) return FALSE;
            break;
        default:
            return FALSE;
        }
        return TRUE;
    }

    public function create_bulk_sales( array $transactions )
    {
        // accepts an array of transaction arrays
        // returns void

        if( !count($transactions) ) return;
        // check for minimal data
        foreach( $transactions as &$tr ) {
            if( !isset($tr['type']) || !$tr['type'] ) $tr['type'] = Transaction::TYPE_SALE;
            if( !$this->is_minimally_complete( $tr ) ) throw new \LogicException('Attempt to create bulk transactions with invalid data.  in '.__METHOD__);
        }

        foreach( $transactions as $tr_arr ) {
            $tr_ob = new Transaction( $tr_arr );
            $this->insert( $tr_ob );
        }
    }

    public function get_latest_unpaid_sale($uid = null)
    {
        $sql = 'SELECT id FROM '.self::transaction_table_name().' WHERE type = ? AND payout_id < 1';
        $parms = [ Transaction::TYPE_SALE ];
        if( !is_null($uid) && (int) $uid > 0 ) {
            $sql .= ' AND uid = ?';
            $parms[] = (int) $uid;
        }
        $sql .= ' ORDER BY created DESC';
        $val = (int) $this->_db->GetOne($sql,$parms);
        if( $val < 1 ) return;
        return $val;
    }

    public function get_accrued_payout( $uid )
    {
        $uid = (int) $uid;
        if( $uid < 1 ) throw new \LogicException('Invalid uid passed to '.__METHOD__);

        // get the sum of the amounts of all sales since then, where payout_id is null
        $sql = 'SELECT SUM(amount) FROM '.self::transaction_table_name().' WHERE type = ? AND payout_id < 1 AND uid = ?';
        $sum = (float) $this->_db->GetOne( $sql, [ Transaction::TYPE_SALE, $uid ]);
        return $sum;
    }

    public function calc_total_unpaid()
    {
        $sql = 'SELECT SUM(amount) FROM '.self::transaction_table_name().' WHERE type = ? AND payout_id < 1 AND created > 0';
        $sum = (float) $this->_db->GetOne( $sql, [ Transaction::TYPE_SALE ] );
        return $sum;
    }

    public function calc_oldest_unpaid()
    {
        $sql = 'SELECT MIN(created) FROM '.self::transaction_table_name().' WHERE type = ? AND payout_id < 1 AND created > 0';
        $oldest = (int) $this->_db->GetOne( $sql, [ Transaction::TYPE_SALE ] );
        return $oldest;
    }

    public function get_unpaid_vendors()
    {
        // get the distinct product ids for transactions that are not paid
        $sql = 'SELECT DISTINCT(uid) FROM '.self::transaction_table_name().' WHERE type = ? AND payout_id < 1 AND created > 0';
        $owner_ids = $this->_db->GetCol( $sql, [ Transaction::TYPE_SALE ] );
        if( !is_array($owner_ids) || !count($owner_ids) ) return;
        return $owner_ids;
    }

    public function count_unpaid_vendors()
    {
        return count($this->get_unpaid_vendors());
    }

    public static function transaction_table_name()
    {
        return CMS_DB_PREFIX.'mod_pbv_transactions';
    }

}