<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: FrontEndUsers (c) 2008-2015 by Robert Campbell
#         (calguy1000@cmsmadesimple.org)
#  An addon module for CMS Made Simple to allow management of frontend
#  users, and their login process within a CMS Made Simple powered
#  website.
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
# Visit the CMSMS Homepage at: http://www.cmsmadesimple.org
#
#-------------------------------------------------------------------------
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# However, as a special exception to the GPL, this software is distributed
# as an addon module to CMS Made Simple.  You may not use this software
# in any Non GPL version of CMS Made simple, or in any version of CMS
# Made simple that does not indicate clearly and obviously in its admin
# section that the site was built with CMS Made simple.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------
#END_LICENSE
if( !isset($gCms) ) return;

if( !class_exists('FeuLoginFailedexception') ) {
    class FeuLoginFailedException extends \RuntimeException {}
}


$consumer = feu_utils::get_auth_consumer();
if( $consumer->has_capability(feu_auth_consumer::CAPABILITY_LOGIN) ) {
    // the consumer provides the login capabilities
    echo $consumer->get_login_display($id,$returnid,$params);
    return;
}

try {
    $error = $username = $password = $rememberme = null;
    $inline = \cge_param::get_bool($params,'inline');
    $nocaptcha = \cge_param::get_bool($params,'nocaptcha');
    $returnto = \cge_param::get_string($params,'returnto');
    $onlygroups = \cge_param::get_string($params,'only_groups');

    if( isset($params['submit']) || isset($params['feu_submit']) ) {
        $username = null;
        try {
            // check the honeypot
            if( isset($params['feu__data']) ) {
                $honeypot = \cge_param::get_string($params,'feu__data');
                if( $honeypot ) throw new \RuntimeException($this->Lang('error_youareabot'));
            }

            // this is the guts of the login process.
            $username = cms_html_entity_decode(\cge_param::get_string($params,'feu_input_username'));
            $password = cms_html_entity_decode(\cge_param::get_string($params,'feu_input_password'));
            $rememberme = \cge_param::get_bool($params,'feu_rememberme');

            // check username & password
            if( !$username ) throw new \RuntimeException($this->Lang('error_missingusername'));
            if( !$password ) throw new \RuntimeException($this->Lang('error_missingpassword'));

            // do BeforeLogin... these references are pretty hacky
            $ip = \cge_utils::get_real_ip();
            $ok = true;
            $msg = null;
            $parms = [ 'username'=>$username, 'groups'=>$onlygroups, 'ip'=>$ip, 'allow'=>&$ok, 'message'=>&$msg ];
            $this->SendEvent('BeforeLogin', $parms );
            if( !\cms_to_bool($ok) ) throw new \FeuLoginFailedException($msg);

            // check the captcha
            if( !$nocaptcha ) {
                $captcha = \cms_utils::get_module('Captcha');
                if( is_object($captcha) && !$captcha->CheckCaptcha(\cge_param::get_string($params,'feu_input_captcha')) ) {
                    throw new \FeuLoginFailedException($this->Lang('error_captchamismatch'));
                }
            }

            // check password, but do not login
            $uid = $this->CheckPassword( $username, $password, $onlygroups );
            if( $uid < 1 ) throw new \FeuLoginFailedException($this->Lang('error_loginfailed'));

            // login passed... now do the afterloginauth event
            // to see if any other module is preventing login.
            // references are pretty hacky.
            $ok = true;
            $msg = null;
            $parms = [ 'id'=>$uid, 'username'=>$username, 'groups'=>$onlygroups, 'ip'=>$ip, 'allow'=>&$ok, 'message'=>&$msg ];
            $this->SendEvent('AfterLoginAuth', $parms );
            if( !\cms_to_bool($ok) ) throw new \FeuLoginFailedException($msg);

            // get uid and userinfo
            $res = $this->GetUserInfo($uid);
            if( !$res[0] ) throw new \RuntimeException($this->Lang('error_usernotfound')); // should never ever happen.
            $user_info = $res[1];

            if( !empty($user_info['must_validate']) && $user_info['must_validate'] ) {
                // redirect to the verifyonly action...
                $generator = new \FrontEndUsers\email_verify_assistant($uid);
                $url = $generator->GetVerifyFormUrl(false);
                redirect($url);
            }

            // actually log the user in.
            $res = $this->Login( $username, $password, $onlygroups);
            if( !$res[0] ) throw new \FeuLoginFailedException($res[1]);
            $uid = $res[0];

            //
            // we're logged in
            //

            // send an email (deprecated)
            $this->_SendNotificationEmail('OnLogin',array('id'=>$uid,'username'=>$username));

            if( $user_info['must_validate'] ) {
                // force the user to validate themselves.
            }
            if( $user_info['force_chsettings'] ) {
                // force user to change settings.
                $cspage = $returnid;
                if( ($tmp = $this->GetPreference('pageid_changesettings')) ) {  // test me
                    $tpl2 = $smarty->CreateTemplate('string:'.$tmp);
                    $groups = $this->GetMemberGroupsArray( $uid );
                    $groupname = $this->GetGroupName( $groups[0]['groupid'] );
                    $tpl2->assign('username',$username);
                    $tpl2->assign('group',$groupname);
                    $tmp = $tpl2->fetch();
                    if( $tmp ) $cspage = $this->resolve_alias_or_id($tmp,$returnid);
                }
                $parms = array('uid'=>$uid);
                if( $returnto ) $parms['returnto'] = $returnto;
                $this->RedirectForFrontend($id,$cspage,'changesettings',$parms);
            }
            if( $user_info['force_newpw'] ) {
                // user cannot be remembered if force password reset (for security)
                $parms = array('uid'=>$uid);
                if( $returnto ) $parms['returnto'] = $returnto;
                $this->RedirectForFrontend($id,$returnid,'user_forcenewpw',$parms);
            }

            if( $rememberme ) {
                $data = array('uid'=>$uid,'time'=>time());
                $name = $this->GetPreference('cookiename');
                \cms_cookies::set($name,base64_encode(serialize($data)),time()+60*24*3600,'/');
            }

            // redirect somewhere ?
            if( $returnto ) {
                // a page id or alias
                $pageid = $this->resolve_alias_or_id($returnto);
                if( $pageid ) $this->RedirectContent($pageid);
            }
            if( ($url = $this->GetPostLoginURL() ) ) {
                // this overrides the preference, but not returnto.
                redirect($url);
            }
            else if( ($tplstr = $this->GetPreference('pageid_login')) ) {
                $tpl = $smarty->CreateTemplate('string:'.$tplstr);
                $groups = $this->GetMemberGroupsArray( $uid );
                $groupname = $this->GetGroupName( $groups[0]['groupid'] );
                $tpl->assign('username',$username);
                $tpl->assign('group',$groupname);
                $tmp = trim($tpl->fetch());
                if( $tmp ) {
                    $pageid = $this->resolve_alias_or_id($tmp);
                    if( $pageid ) $this->RedirectContent($pageid);
                }
            }
            // all else fails, redirect back to our curren page.
            $this->RedirectContent( $returnid );
        }
        catch( \FeuLoginFailedException $e ) {
            $error = $e->GetMessage();
            audit('',$this->GetName(),'Login failed for user '.$username);
            $this->SendEvent('OnLoginFailed', [ 'username' => $username, 'msg' => $error ] );
        }
        catch( \Exception $e ) {
            $error = $e->GetMessage();
        }
    }

    // build the form
    $content = \cms_utils::get_current_content();
    if( get_class($content) == 'ErrorPage' ) {
        // we're being called from an error page... so when we're done we want to redirect back to the
        // requested page, if enabled.
        $this->SetPostLoginURL($_SERVER['REQUEST_URI']);
    }

    $thetemplate = \feu_utils::get_template($params,'logintemplate','FrontEndUsers::login form');
    $tpl = $this->CreateSmartyTemplate($thetemplate);
    $parms = array();
    $parms['inline'] = $inline;
    $parms['nocaptcha'] = $nocaptcha;
    $parms['returnto'] = $returnto;
    $parms['only_groups'] = $onlygroups;
    $tpl->assign('startform', $this->CGCreateFormStart( $id, 'login', $returnid, $parms, $inline ));
    $tpl->assign('endform', $this->CreateFormEnd());

    $captcha = $this->GetModuleInstance('Captcha');
    if( is_object($captcha) && !$nocaptcha ) {
        $test = method_exists($captcha, 'NeedsInputField') ? $captcha->NeedsInputField() : true;
        $tpl->assign('captcha_title', $this->Lang('captcha_title'));
        $tpl->assign('captcha', $captcha->getCaptcha());
        $tpl->assign('need_captcha_input',$test);
    }

    $tpl->assign('error',$error);
    $tpl->assign('username_is_email',$this->GetPreference('username_is_email'));
    $tpl->assign('fldname_username',$id.'feu_input_username');
    $tpl->assign('prompt_username',$consumer->get_username_prompt());
    $tpl->assign('username_maxlength',$this->CGGetPreference('max_usernamelength',20));
    $tpl->assign('password_maxlength',$this->CGGetPreference('max_passwordlength',20));
    $tpl->assign('username_size',max(3,(int)$this->CGGetPreference('usernamefldlength',10)));
    $tpl->assign('password_size',max(3,$this->CGGetPreference('passwordfldlength',10)));
    $tpl->assign('username',$username);
    $tpl->assign('password',$password);
    $tpl->assign('rememberme',$rememberme);
    $tpl->assign('fldname_password',$id.'feu_input_password');
    $tpl->assign('prompt_password', $this->Lang('prompt_password'));
    if( $this->GetPreference('cookiename') && function_exists('mcrypt_module_open') ) {
        $tpl->assign('prompt_rememberme',$this->Lang('prompt_rememberme')); // can get rid of this too
        $tpl->assign('fldname_rememberme',$id.'feu_rememberme');
    }

    $pid = $returnid;
    if( ($tmp = $this->GetPreference('pageidforgotpasswd')) ) {
        $tmp = $this->ProcessTemplateFromData($this->GetPreference('pageidforgotpasswd'));
        if( $tmp ) $pid = $this->resolve_alias_or_id($tmp,$returnid);
    }
    if( $this->GetPreference('support_lostpw',1) ) $tpl->assign('url_forgot',$this->create_url($id,'forgotpw',$pid));
    if( $this->GetPreference('support_lostun',1) ) $tpl->assign('url_lostun',$this->create_url($id,'lostusername',$pid));

    if( $consumer->has_capability($consumer::CAPABILITY_ALTLOGIN) ) $tpl->assign('alt_loginform',$consumer->get_login_display($id,$returnid,$params));
    $tpl->display();
}
catch( \Exception $e ) {
    // fatal exceptions we can do nothing without.
    echo $this->_DisplayErrorMessage($e->GetMessage());
}
// EOF
