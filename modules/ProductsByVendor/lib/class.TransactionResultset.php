<?php
namespace ProductsByVendor;

class TransactionResultset extends \CGExtensions\query\resultset
{
    protected function _query()
    {
        if( $this->_rs ) return;
        if( !($uid = $this->_filter['uid']) ) throw new \LogicException('Cannot execute a TransactionResultset without a valid UID');

        $db = \CmsApp::get_instance()->GetDb();
        $sql = 'SELECT SQL_CALC_FOUND_ROWS * FROM '.TransactionStorage::transaction_table_name().' WHERE uid = ? ORDER BY created DESC';
        $parms = [ $uid ];

        $limit = $this->_filter['limit'];
        $offset = $this->_filter['offset'];
        $this->_rs = $db->SelectLimit( $sql, $limit, $offset, $parms );
        $this->_totalmatching = $db->GetOne('SELECT FOUND_ROWS()');
    }

    public function &get_object()
    {
        $row = $this->fields;
        $obj = new Transaction( $row );
        return $obj;
    }
}