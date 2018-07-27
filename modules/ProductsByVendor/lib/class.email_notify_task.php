<?php
namespace ProductsByVendor;

class email_notify_task implements \CmsRegularTask
{
    const PREF_LASTID = 'email_notify_lastid';
    const PREF_LASTRUN = 'email_notify_lastrun';
    const PREF_INTERVAL = 300;

    private $_mod;
    private $_storage;

    public function __construct( \ProductsByVendor $mod, \ProductsByVendor\TransactionStorage $storage )
    {
        $this->_mod = $mod;
        $this->_storage = $storage;
    }

    public function get_name() { return get_class($this); }

    public function get_description()
    {
        return $this->_mod->Lang('desc_emailnotify_task');
    }

    public function test($time = '')
    {
        if( !$time ) $time = time();

        // get the last transaction id of type sale
        // compare it with the
        $last_sale_id = $this->_storage->get_latest_unpaid_sale();
        $lastid = $this->_mod->GetPreference(self::PREF_LASTID);
        if( $last_sale_id <= $lastid ) return FALSE;

        // at most run every N minutes
        //$lastrun = $this->_mod->GetPreference(self::PREF_LASTRUN);
        //if( $lastrun + self::PREF_INTERVAL < $time ) return FALSE;
        return TRUE;
    }

    protected function notify_user( FilteredMetaOrder $order )
    {
        $uid = $order->get_uid();
        $feu = \cms_utils::get_module(MOD_FRONTENDUSERS);
        $uinfo = $feu->GetUserInfo( $uid );
        if( !is_array($uinfo) || count($uinfo) == 0 || $uinfo[0] == FALSE ) throw new \RuntimeException('Could not find user info for '.$uid);
        $uinfo = $uinfo[1];
        $username = $uinfo['username'];
        $email = $feu->GetEmail( $uid );


        $subj_txt = $this->_mod->GetPreference('notify_email_subject');
        $body_txt = $this->_mod->GetPreference('notify_email_body_tpl');
        if( !$subj_txt || !$body_txt ) throw new \RuntimeException('Empty notification template results in no outgoing mail');

        $subj_tpl = $this->_mod->CreateSmartyTemplate('string:'.$subj_txt);
        $subj_tpl->assign('order',$order);
        $subj_tpl->assign('total_accrued',$this->_storage->get_accrued_payout($uid));
        $subj_tpl->assign('username',$username);
        $subject = $subj_tpl->fetch();
        unset($subj_tpl);

        $body_tpl = $this->_mod->CreateSmartyTemplate('string:'.$body_txt);
        $body_tpl->assign('order',$order);
        $body_tpl->assign('username',$username);
        $subj_tpl->assign('total_accrued',$this->_storage->get_accrued_payout($uid));
        $body = $body_tpl->fetch();
        unset($body_tpl);
        if( !$subject || !$body )  throw new \RuntimeException('Empty notification template results in no outgoing mail');

        $mailer = new \cms_mailer;
        $mailer->AddAddress($email);
        $mailer->IsHTML(TRUE);
        $mailer->SetSubject($subject);
        $mailer->SetBody($body);
        $res = $mailer->Send();
        if( !$res ) throw new \RuntimeException('Problem sending email to '.$email);
    }

    public function execute($time = '')
    {
        if( !$time ) $time = time();
        try {
            $start_id = $this->_mod->GetPreference(self::PREF_LASTID) + 1;
            $end_id = $this->_storage->get_latest_unpaid_sale();

            // get all of the sale transactions from start_id to end_id (inclusive)
            // organize them by order id
            // then for each user for that order id
            // send emails.
            $qry = new MetaOrderQuery( [ 'start_id'=>$start_id, 'end_id'=>$end_id] );
            $rs = $qry->execute();
            $orders = $rs->FetchAll();
            foreach( $orders as $order ) {
                // each $order is an array of MetaOrder objects.
                $uids = $order->get_distinct_uids();
                foreach( $uids as $uid ) {
                    try {
                        $new_order = new FilteredMetaOrder( $order, $uid );
                        $this->notify_user( $new_order );
                    }
                    catch( \RuntimeException $e ) {
                        \cge_utils::log_exception($e);
                        audit('','ProductsByVendor','ISSUE: '.$e->GetMessage());
                    }
                }
            }

            // set the last transaction id
            $this->_mod->SetPreference(self::PREF_LASTID,$end_id);
            return TRUE;
        }
        catch( \Exception $e ) {
            \cge_utils::log_exception( $e );
            audit('','ProductsByVendor','ERROR: '.$e->GetMessage());
            return FALSE;
        }
    }

    public function on_success($time = '')
    {
        if( !$time ) $time = time();
        $this->_mod->SetPreference(self::PREF_LASTRUN,$time);
    }

    public function on_failure($time = '')
    {
        if( !$time ) $time = time();
    }

}