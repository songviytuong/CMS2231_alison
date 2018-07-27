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
use \FrontEndUsers\user_edit_assistant;
if( !isset( $gCms ) ) exit;
$this->SetCurrentTab('users');

$db = \cge_utils::get_db();
try {
    $job = trim($params['job']);
    $sel = unserialize(base64_decode($params['uids']));
    $sel = array_slice($sel,0,500); // maximum of 500 ids.
    if( !is_array($sel) || !count($sel) ) throw new \Exception($this->Lang('error_insufficientparams'));

    switch( $job ) {
    case 'delete':
        if( !$this->_HasSufficientPermissions('removeusers') ) throw new \Exception($this->Lang('accessdenied'));
        try {
            $db->BeginTrans();
            foreach( $sel as $oneuid ) {
                $this->DeleteUserFull( $oneuid );
                $parms = [ 'uid' => $oneuid ];
                $this->_SendNotificationEmail('OnDeleteUser',$parms); // deprecated
            }
            $db->CommitTrans();
        }
        catch( \Exception $e ) {
            $this->RollbackTrans();
            throw $e;
        }
        break;

    case 'disable':
    case 'enable':
        if( !$this->_HasSufficientPermissions('editusers') ) throw new \Exception($this->Lang('accessdenied'));
        try {
            $db->BeginTrans();
            foreach( $sel as $oneuid ) {
                $user = new user_edit_assistant($oneuid);
                $user->is_disabled = ($job == 'disable') ? TRUE : FALSE;
                $user->save();
                $this->SendEvent('OnUpdateUser', [ 'name'=>$user->username, 'id'=>$user->id ]);
            }
            $db->CommitTrans();
        }
        catch( \Exception $e ) {
            $db->RollbackTrans();
            throw $e;
        }
        break;

    case 'forcechpw':
        if( !$this->_HasSufficientPermissions('editusers') ) throw new \Exception($this->Lang('accessdenied'));
        try {
            $db->BeginTrans();
            foreach( $sel as $oneuid ) {
                $user = new user_edit_assistant($oneuid);
                $user->force_password_change = TRUE;
                $user->save();
                $this->SendEvent('OnUpdateUser', [ 'name'=>$user->username, 'id'=>$user->id ]);
            }
            $db->CommitTrans();
        }
        catch( \Exception $e ) {
            $db->RollbackTrans();
            throw $e;
        }
        break;

    case 'setpassword':
        // requires a form
        if( !$this->_HasSufficientPermissions('editusers') ) throw new \Exception($this->Lang('accessdenied'));
        if( isset($params['cancel']) ) {
            $this->SetMessage($this->Lang('msg_cancelled'));
            $this->RedirectToTab();
        }
        else if( isset($params['submit']) ) {
            try {
                $passwd1 = \cge_param::get_string($params,'password');
                $passwd2 = \cge_param::get_string($params,'repeatpassword');
                if( !$this->isValidPassword( $passwd1 ) ) throw new \InvalidArgumentException($this->Lang('error_invalidpassword'));
                if( $passwd1 != $passwd2 ) throw new \InvalidArgumentException($this->Lang('error_passwordmismatch'));

                $db->BeginTrans();
                foreach( $sel as $oneuid ) {
                    $user = new user_edit_assistant($oneuid);
                    $user->new_password = $passwd1;
                    $user->save();
                    $this->SendEvent('OnUpdateUser', [ 'name'=>$user->username, 'id'=>$user->id ]);
                }
                $db->CommitTrans();
                $this->Setmessage($this->Lang('operation_completed'));
                $this->RedirectToTab(); // done
            }
            catch( \InvalidArgumentException $e ) {
                echo $this->ShowErrors($e->GetMessage());
            }
            catch( \Exception $e ) {
                $db->RollbackTrans();
                throw $e;
            }
        }
        $tpl = $this->CreateSmartyTemplate('admin_bulk_setpasswd.tpl');
        $tpl->assign('uids',$params['uids']);
        $tpl->assign('job',$job);
        $tpl->assign('selected',$sel);
        $tpl->display();
        return;

    case 'setexpiry':
        // requires a form
        if( !$this->_HasSufficientPermissions('editusers') ) throw new \Exception($this->Lang('accessdenied'));
        if( isset($params['cancel']) ) {
            $this->SetMessage($this->Lang('msg_cancelled'));
            $this->RedirectToTab();
        }
        else if( isset($params['submit']) ) {
            try {
                $new_expires = \cge_param::get_separated_date($params,'expires');

                $db->BeginTrans();
                foreach( $sel as $oneuid ) {
                    $user = new user_edit_assistant($oneuid);
                    $user->expires = $new_expires;
                    $user->save();
                    $this->SendEvent('OnUpdateUser', [ 'name'=>$user->username, 'id'=>$user->id ]);
                }
                $db->CommitTrans();
                $this->Setmessage($this->Lang('operation_completed'));
                $this->RedirectToTab(); // done
            }
            catch( \InvalidArgumentException $e ) {
                echo $this->ShowErrors($e->GetMessage());
            }
            catch( \Exception $e ) {
                $db->RollbackTrans();
                throw $e;
            }
        }
        $tpl = $this->CreateSmartyTemplate('admin_bulk_setexpiry.tpl');
        $tpl->assign('uids',$params['uids']);
        $tpl->assign('job',$job);
        $tpl->assign('selected',$sel);
        $tpl->display();
        return;

    default:
        // invalid job
        throw new \Exception($this->Lang('error_insufficientparams'));
    }

    $this->Setmessage($this->Lang('operation_completed'));
}
catch( \Exception $e ) {
    audit('',$this->GetName(),'Failed bulk transaction');
    \cge_utils::log_exception($e);
    $this->SetError($e->GetMessage());
}

$this->RedirectToTab();

#
# EOF
#
