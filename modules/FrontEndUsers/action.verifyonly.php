<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: FrontEndUsers (c) 2008-2016 by Robert Campbell
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
if( !isset($gCms) ) exit;

$title = $error = $msg = null;

try {
    $uid = \cge_param::get_int($params,'uid');
    if( $uid < 1 ) throw new \RuntimeException($this->Lang('error_insufficientparams'));
    $res = $this->GetUserInfo($uid);
    if( !$res ) throw new \RuntimeException($this->Lang('error_usernotfound'));
    $uinfo = $res[1];
    if( !is_array($uinfo )) throw new \RuntimeException($this->Lang('error_usernotfound'));
    if( $uinfo['disabled'] ) throw new \RuntimeException($this->Lang('error_accountdisabled'));
    if( time() > strtotime($uinfo['expires']) ) throw new \RuntimeException($this->Lang('error_accountexpired'));
    unset($res);
    $code = \cge_param::get_string($params,'code');
    if( !$code ) throw new \RuntimeException($this->Lang('error_insufficientparams'));
    if( $code == 'xxxx' ) $code = null;

    if( isset($params['feu_submit']) ) {
        try {
            $title = $this->Lang('account_verification');
            $msg = null;
            $error = false;

            $dbcode = $this->GetUserTempCode($uid);
            if( !$dbcode || $dbcode != $code ) throw new \RuntimeException($this->Lang('error_invalidcode'));

            // success condition
            $this->RemoveUserTempCode($uid);
            audit($uid,$this->GetName(),'Successfully verified his/her information');
            $this->add_history($uid,'verify complete');

            if( $uinfo['must_validate'] ) {
                // we can reset this.
                $this->ForceVerify($uid,FALSE);

                $event_parms = [];
                $event_parms['id'] = $uid;
                $event_parms['name'] = $uinfo['username'];
                $this->SendEvent('OnUpdateUser',$event_parms);
            }

            // see if we can redirect
            $page = \feu_utils::resolve_preftpl_to_page('pageid_afterverify',$uid);
            if( $page ) $this->RedirectContent($page);

            // no pagetemplate or other error means no redirect
            // fall through to displaying a message
            $msg = $this->Lang('msg_verification_complete');
        }
        catch( \Exception $e ) {
            $msg = $e->GetMessage();
            $error = true;
        }
        $this->ShowFormattedMessage($msg,$error,$title);
        return;
    } // submit

    // display the form
    $thetemplate = \feu_utils::get_template($params,'verifyformtemplate','FrontEndUsers::verify_form');
    $tpl = $this->CreateSmartyTemplate($thetemplate);
    $tpl->assign('uid',$uid);
    $tpl->assign('code',$code);
    $tpl->display();
}
catch( \Exception $e ) {
    $msg = $e->GetMessage();
    $error = true;
    $this->ShowFormattedMessage($msg,$error,$title);
}
