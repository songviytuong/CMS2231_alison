<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: FrontEndUsers (c) 2008-2014 by Robert Campbell
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
if( !defined('CMS_VERSION') ) exit;

$template = \feu_utils::get_template($params,'forcenewpwtemplate','FrontEndUsers::force new password');
$tpl = $this->CreateSmartyTemplate($template);
$tpl->assign('formstart',$this->CGCreateFormStart($id,'user_forcenewpw',$returnid,$params));
$tpl->assign('formend',$this->CreateFormEnd());

try {
    $uid = (int) cge_utils::get_param($params,'uid');
    if( $uid < 1 ) throw new \RuntimeException($this->Lang('error_invalidparams'));
    $uid2 = $this->LoggedInId();
    if( $uid != $uid2 ) throw new \RuntimeException($this->Lang('error_invalidparams'));

    if( isset($params['feu_submit']) ) {
        $pw1 = cms_html_entity_decode(cge_utils::get_param($params,'feu_password'));
        $pw2 = cms_html_entity_decode(cge_utils::get_param($params,'feu_repeatpassword'));
        if( $pw1 != $pw2 ) throw new \RuntimeException($this->Lang('error_passwordmismatch'));

        // see if it is a valid password.
        if( !$this->IsValidPassword($pw1 ) ) throw new \RuntimeException($this->Lang('error_invalidpassword'));

        // now see if the password has actually changed.
        $db = cmsms()->GetDb();
        $encrypted = $this->EncryptPassword($uid,$pw1);
        $query = 'SELECT password FROM '.cms_db_prefix().'module_feusers_users WHERE id = ?';
        $stored = $db->GetOne($query,array($uid));
        if( $encrypted == $stored ) throw new \RuntimeException($this->Lang('error_passwordnotchanged'));

        // set the password
        $this->SetUserPassword($uid,$pw1);

        // disable the force reset flag
        $this->ForcePasswordChange($uid,FALSE);

        // and redirect out o here.
        if( ($returnto = \cge_param::get_string($params,'returnto')) ) {
            $pageid = $this->resolve_alias_or_id($returnto);
            if( $pageid ) $this->RedirectContent($pageid);
        }
        if( ($url = $this->GetPostLoginURL()) ) {
            redirect($url);
        }
        else if( ($tplstr = $this->GetPreference('pageid_login')) ) {
            $tpl = $smarty->CreateTemplate('string:'.$tplstr);
            $groups = $this->GetMemberGroupsArray( $uid );
            $groupname = $this->GetGroupName( $groups[0]['groupid'] );
            $tpl->assign('username',$username);
            $tpl->assign('group',$groupname);
            $tmp = $tpl->fetch();
            if( $tmp ) {
                $pageid = $this->resolve_alias_or_id($tmp);
                if( $pageid ) $this->RedirectContent($pageid);
            }
        }
        // all else fails, redirect back to our curren page.
        $this->RedirectContent($returnid);
    }
}
catch( \Exception $e ) {
    // on error, we just display a message.
    $tpl->assign('error',$e->GetMessage());
}

$tpl->display();