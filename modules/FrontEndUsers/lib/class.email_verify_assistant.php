<?php
namespace FrontEndUsers;

class email_verify_assistant extends verification_assistant
{
    private $_template;
    private $_subject;
    private $_title;
    private $_msg;
    private $_code_prompt;
    private $_link_prompt;
    private $_sent;

    private function get_default_template()
    {
        $typename = 'FrontEndUsers::forgot password email';
        $tpl = \CmsLayoutTemplate::load_dflt_by_type($typename);
        if( !$tpl ) {
            audit('','FrontEndUsers','No default template of type '.$typename.' found');
            throw new \RuntimeException('No default template of type '.$typename);
        }
        return $tpl->get_name();
    }

    public function __construct($uid)
    {
        parent::__construct($uid);
        $feu = \cms_utils::get_module(MOD_FRONTENDUSERS);
        $this->_email = $feu->GetEmail($uid);
        if( !$this->_email ) throw new \LogicException('Attempt to create a '.__CLASS__.' for a user without a valid email address');

        $this->_template = $this->get_default_template();
        $this->_subject = 'Please verify your account for {sitename}';
        $this->_title = 'Please verify your account';
        $this->_msg = '<p>For security purposes we need to validate your identity.  This is done by verifying that you received this email correctly, and can follow these instructions.</p>
<p>Below, We have provided a unique security code to use to validate your credentials. Please click on the link provided and enter the security code. <em>It may already be filled in on the form</em>.  This will complete the operation and allow you to login to the service.</p>';
        $this->_code_prompt = 'Your security code is:';
        $this->_link_prompt = 'Please click on this link';
    }

    public function SetTemplate($str)
    {
        if( $str ) $this->_template = $str;
    }

    public function SetTitle($str)
    {
        if( $str ) $this->_title = $str;
    }

    public function SetSubject($str)
    {
        if( $str ) $this->_subject = $str;
    }

    public function SetMessage($str)
    {
        if( $str ) $this->_msg = $str;
    }

    public function SetCodePrompt($str)
    {
        if( $str ) $this->_code_prompt = $str;
    }

    public function SetLinkPrompt($str)
    {
        if( $str ) $this->_link_prompt = $str;
    }

    public function send()
    {
        if( $this->_sent ) throw new \LogicException('Cannot use the send method on an object of type '.__CLASS__.' more than once');

        $uid = $this->get_uid();
        $destpage = $this->get_destpage();
        $code = $this->get_code();

        $feu = \feu_utils::get_mod();
        $url = $feu->create_url('cntnt01','verifyonly',$destpage,['uid'=>$uid,'code'=>$code]);

        $tpl = $feu->CreateSmartyTemplate($this->_template);
        $tpl->assign('title',$this->_title);
        $tpl->assign('message_forgotpwmail',$this->_msg);
        $tpl->assign('message_forgotpwemail',$this->_msg);
        $tpl->assign('message',$this->_msg);
        $tpl->assign('prompt_code',$this->_code_prompt);
        $tpl->assign('prompt_link',$this->_link_prompt);
        $tpl->assign('destpage',$destpage);
        $tpl->assign('data_code',$code);
        $tpl->assign('subject',$this->_subject);
        $tpl->assign('data_url',$url);
        $body = $tpl->fetch();

        // duplicated code... I know, I know... shaddap
        $smarty = \Smarty_CMS::get_instance();
        $tpl = $smarty->CreateTemplate('string:'.$this->_subject);
        $tpl->assign('title',$this->_title);
        $tpl->assign('message_forgotpwmail',$this->_msg);
        $tpl->assign('message_forgotpwemail',$this->_msg);
        $tpl->assign('message',$this->_msg);
        $tpl->assign('prompt_code',$this->_code_prompt);
        $tpl->assign('prompt_link',$this->_link_prompt);
        $tpl->assign('destpage',$destpage);
        $tpl->assign('data_code',$code);
        $tpl->assign('subject',$this->_subject);
        $tpl->assign('data_url',$url);
        $subject = $tpl->fetch();

        $mailer = new \cms_mailer();
        $mailer->AddAddress($this->_email);
        $mailer->SetBody($body);
        $mailer->SetSubject($subject);
        $mailer->IsHTML(TRUE);
        $mailer->SetPriority(1);
        $mailer->Send();
        $this->_sent = TRUE;

        audit($uid,$feu->GetName(),'Verification email sent');
        $feu->add_history($uid,'init_verify');
    }
}