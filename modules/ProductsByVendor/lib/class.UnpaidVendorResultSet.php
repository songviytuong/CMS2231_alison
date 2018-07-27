<?php
namespace ProductsByVendor;

class UnpaidVendorResultset extends \CGExtensions\query\resultset
{
    private $_cached_users;
    private $_cached_totals;

    protected function _query()
    {
        if( $this->_rs ) return;
        $db = \CmsApp::get_instance()->GetDb();

        $where = $parms = [];
        $sql = 'SELECT SQL_CALC_FOUND_ROWS DISTINCT(uid) FROM '.TransactionStorage::transaction_table_name();
        $where[] = 'type = ?';
        $parms[] = Transaction::TYPE_SALE;
        $where[] = 'payout_id < 1';
        if( ($since = $this->_filter['since']) ) {
            $where[] = 'created >= ?';
            $parms[] = $since;
        }
        $sql .= ' WHERE '.implode(' AND ',$where);

        $limit = $this->_filter['limit'];
        $offset = $this->_filter['offset'];
        $this->_rs = $db->SelectLimit( $sql, $limit, $offset,$parms);
        $this->_totalmatching = $db->GetOne('SELECT FOUND_ROWS()');

        $this->preload();
    }

    protected function preload_uinfo( array $uid_list )
    {
        if( !count($uid_list) ) return;
        $feu = \cms_utils::get_module(MOD_FRONTENDUSERS);

        $feu_query = new \feu_user_query;
        $opt = new \feu_user_query_opt(\feu_user_query_opt::MATCH_USERLIST,$uid_list);
        // note, we don't futher filter by vendor group because of the potential error that somebody was moved out of this group.
        $feu_query->add_and_opt_obj($opt);
        $rs = $feu_query->execute();
        $arr = [];
        while( !$rs->EOF ) {
            $row = $rs->fields;
            $inactive = ( $row['disabled'] || strtotime($row['expires']) < time() );
            $rec = [ 'username'=>$row['username'], 'email'=>$row['email'], 'member_since'=>strtotime($row['createdate']), 'inactive'=>$inactive ];
            $arr[$row['id']] = $rec;
            $rs->MoveNext();
        }
        return $arr;
    }

    protected function preload_totals( array $uid_list )
    {
        if( !count($uid_list) ) return;

        $sql = 'SELECT uid,SUM(amount) AS unpaid, MIN(created) AS mindate, MAX(created) AS maxdate, COUNT(DISTINCT order_id) AS numorders
                FROM '.TransactionStorage::transaction_table_name().' WHERE uid IN (XX) AND type = ? AND payout_id < 1
                GROUP BY uid';
        $sql = str_replace('XX',implode(',',$uid_list),$sql);
        $db = \CmsApp::get_instance()->GetDb();
        $list = $db->GetArray($sql, [ Transaction::TYPE_SALE ]);
        if( !count($list) || count($list) != count($uid_list) ) throw new \LogicException('INTERNAL ERROR: Could not get unpaid amounts for specified users');

        $out = [];
        foreach( $list as $row ) {
            $out[$row['uid']] = $row;
        }
        return $out;
    }

    protected function preload()
    {
        if( $this->_totalmatching == 0 ) return;

        // given all the UID's.. gather user info, and payout total, and minimum date
        $uid_list = [];
        while( !$this->_rs->EOF() ) {
            $uid_list[] = $this->_rs->fields('uid');
            $this->_rs->MoveNext();
        }
        $this->_rs->MoveFirst();

        $this->_cached_users = $this->preload_uinfo( $uid_list );
        $this->_cached_totals = $this->preload_totals( $uid_list );
    }

    public function &get_object()
    {
        $uid = $this->_rs->fields['uid'];
        if( $uid < 1 ) throw new \LogicException('INTERNAL ERROR: Invalid current uid in query resultset');

        $arr = $this->_cached_users[$uid];
        $arr = array_merge( $arr, $this->_cached_totals[$uid] );
        $oot = new UnpaidVendorMeta( $arr );
        return $out;
    }
}
