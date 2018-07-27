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
if( !$this->_HasSufficientPermissions( 'users' ) ) return;

// this action handles the first portion of the add/edit user wizard.

$default_group = (int) $this->GetPreference('default_group');

try {
    $this->SetCurrentTab('users');
    if( isset($params['cancel']) ) {
        // we're cancelling.
        $this->SetMessage($this->Lang('msg_cancelled'));
        $this->RedirectToTab();
    }

    $user_id = \cge_param::get_int($params,'user_id');
    $user = \FrontEndUsers\user_edit_assistant::retrieve();
    if( $user ) {
        // we are here from the 'back' operation. or an error in step2.
        if( $user->id != $user_id ) $user = null;
    }
    if( !$user ) $user = new \FrontEndUsers\user_edit_assistant($user_id);

    if( isset($params['submit']) ) {
        try {
            // fill the data from the form
            $user->new_username = \cge_param::get_string($params,'username');
            $user->new_password = \cge_param::get_string($params,'password');
            $user->repeat_password = \cge_param::get_string($params,'repeatpassword');
            $user->expires = \cge_param::get_separated_date($params,'expires');
            $user->is_disabled = \cge_param::get_bool($params,'disabled');
            $user->force_change_settings = \cge_param::get_bool($params,'force_chsettings');
            $user->force_password_change = \cge_param::get_bool($params,'force_newpw');
            $user->must_validate = \cge_param::get_bool($params,'must_validate');
            $user->set_groups(\cge_utils::get_param($params,'memberof'));

            // validate the data
            $user->validate();

            // save the data (temporarily)
            $user->store();

            // redirect to the next step.
            $this->Redirect($id,'admin_edituser2',$returnid);
        }
        catch( \Exception $e ) {
            echo $this->ShowErrors($e->GetMessage());
        }
    }

    $auth_consumer = feu_utils::get_auth_consumer();
    $tpl = $this->CreateSmartyTemplate('admin_edituser.tpl');
    $tpl->assign('formstart',$this->CGCreateFormStart($id,'admin_edituser',$returnid,[ 'user_id' => $user_id ]));
    $tpl->assign('formend',$this->CreateFormEnd());
    $tpl->assign('user',$user);
    $tpl->assign('prompt_username',$auth_consumer->get_username_prompt());
    $tpl->assign('unfldlen',$this->GetPreference('usernamefldlength'));
    $tpl->assign('max_unfldlen',$this->GetPreference('max_usernamelength'));
    $tpl->assign('pwfldlen',$this->GetPreference('passwordfldlength'));
    $tpl->assign('max_pwfldlen',$this->GetPreference('max_passwordlength'));
    $tpl->assign('require_onegroup',$this->GetPreference('require_onegroup'));

    $groups = null;
    $groups = $this->GetGroupListFull();
    if( $default_group < 1 && count($groups) ) {
        $gids = array_keys($groups);
        $default_group = $gids[0];
    }
    $tpl->assign('default_group',$default_group);
    $tpl->assign('groups',$groups);

    $tpl->display();
}
catch( \Exception $e ) {
    $this->SetError($e->GetMessage());
    $this->RedirectToTab();
}
