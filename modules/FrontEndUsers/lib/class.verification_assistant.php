<?php
namespace FrontEndUsers;

abstract class verification_assistant
{
    private $_uid;
    private $_destpage;
    private $_code;

    private function generate_code()
    {
        $code = substr(strtoupper(md5(__FILE__.session_id().microtime(TRUE))),0,25);
        $feu = \feu_utils::get_mod();
        $feu->SetUserTempCode($this->_uid,$code);
        return $code;
    }

    private function generate_destpage()
    {
        $dflt = \ContentOperations::get_instance()->GetDefaultContent();
        $page = \feu_utils::resolve_preftpl_to_page('pageid_onverify',$this->_uid);
        if( !$page ) $page = $dflt;
        return $page;
    }

    public function __construct($uid, $code = null)
    {
        $uid = (int) $uid;
        if( $uid < 1 ) throw new \LogicException('Invalid uid passed to '.__METHOD__);

        $feu = \feu_utils::get_mod();
        $this->_uid = $uid;
        $this->_code = $code;
        if( !$this->_code ) $this->_code = $feu->GetUserTempCode($uid);
        if( !$this->_code ) $this->_code = $this->generate_code();
        $this->_destpage = $this->generate_destpage();
    }

    public function get_uid()
    {
        return $this->_uid;
    }

    public function get_code()
    {
        return $this->_code;
    }

    public function get_destpage()
    {
        return $this->_destpage;
    }

    public function SetDestPage($str)
    {
        if( $str ) {
            $feu = \feu_utils::get_mod();
            $this->_destpage = $feu->resolve_alias_or_id($str,$this->_destpage);
        }
    }

    public function GetVerifyFormUrl($withcode = true)
    {
        $code = $this->_code;
        if( !$withcode ) $code = 'xxxx';
        $feu = \feu_utils::get_mod();
        $url = $feu->create_url('cntnt01','verifyonly',$this->_destpage,[ 'uid'=>$this->_uid, 'code'=>$code ] );
        return $url;
    }

    abstract public function send();
}