<?php
namespace ProductsByVendor;

class MetaOrderResultset extends \CGExtensions\query\resultset
{
    private $_tr_cache;

    protected function _query()
    {
        if( $this->_rs ) return;
        $db = \CmsApp::get_instance()->GetDb();

        // get the distinct oder numbers for all sale transactions between start and end
        $where = $parms = [];
        $sql = 'SELECT SQL_CALC_FOUND_ROWS DISTINCT(order_id) FROM '.TransactionStorage::transaction_table_name();
        $where[] = 'type = ? AND payout_id < 1'; $parms[] = Transaction::TYPE_SALE;

        $start_id = \cge_param::get_int($this->_filter,'start_id');
        $end_id = \cge_param::get_int($this->_filter,'end_id');
        if( $start_id < 1 || $end_id < 1 ) throw new \LogicException('Invalid filter valus passed to '.__CLASS__);
        if( $start_id > $end_id ) { $tmp = $start_id; $start_id = $end_id; $end_id = $tmp; } // swap
        $where[] = 'id >= ?'; $parms[] = $start_id;
        $where[] = 'id <= ?'; $parms[] = $end_id;
        $sql .= ' WHERE '.implode(' AND ',$where);

        $limit = $this->_filter['limit'];
        $offset = $this->_filter['offset'];
        $this->_rs = $db->SelectLimit( $sql, $limit, $offset, $parms);
        $this->_totalmatching = $db->GetOne('SELECT FOUND_ROWS()');
        $this->preload();
    }

    protected function preload()
    {
        $order_list = [];
        while( !$this->_rs->EOF() ) {
            $order_list[] = $this->_rs->fields('order_id');
            $this->_rs->MoveNext();
        }
        $this->_rs->MoveFirst();

        $db = \CmsApp::get_instance()->GetDb();
        $sql = 'SELECT * FROM '.TransactionStorage::transaction_table_name().' WHERE order_id IN (%%) AND type = ? AND payout_id < 1 ORDER BY order_id, created';
        $sql = str_replace('%%',implode(',',$order_list),$sql);
        $this->_tr_cache = $db->GetArray( $sql, [ Transaction::TYPE_SALE ]);
    }

    public function &get_object()
    {
        $order_id = (int) $this->_rs->fields('order_id');
        if( $order_id < 1 ) throw new \LogicException('INTERNAL ERROR: '.__CLASS__.' returned an invalid order id');

        $list = [];
        foreach( $this->_tr_cache as $row ) {
            if( $row['order_id'] < $order_id ) continue;
            if( $row['order_id'] > $order_id ) break;

            $list[] = $row;
        }

        if( !count($list) ) throw new \LogicException('INTERNAL ERROR: in '.__CLASS__."order $order_id has no unpaid transactions");
        $obj = new MetaOrder( $list );
        return $obj;
    }
}