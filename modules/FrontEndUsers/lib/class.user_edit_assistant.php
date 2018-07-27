<?php

namespace FrontEndUsers;

// this class aids in adding or editing a user
// it encapsulates the read only user object.
// and provides editing and saving functionality.
class user_edit_assistant
{
    private $_user;
    private $_new_uid;
    private $_new_username;
    private $_new_password;
    private $_repeat_password;
    private $_draft_groups;
    private $_draft_props;
    private $_expires;
    private $_is_disabled;
    private $_force_password_change;
    private $_force_change_settings;
    private $_must_validate;

    public function __construct($user_id)
    {
        $mod = \feu_utils::get_mod();
        $user_id = (int) $user_id;
        if( $user_id < 1 ) {
            // a brand new user... set some defalt values.
            $user = new user;
            if( $mod->GetPreference('use_randomusername') ) $this->new_username = $mod->GenerateRandomUsername();
            $dflt_group = (int) $mod->GetPreference('default_group');
            $one_group = (bool) $mod->GetPreference('require_onegroup');
            $groups = $mod->GetGroupList();
            if( !count($groups) ) throw new \RuntimeException('Could not find any groups... cannot create users');
            $groups = array_flip($groups); // it's backwards for historical reasons.
            if( $dflt_group ) {
                if( isset($groups[$dflt_group]) ) $this->_draft_groups[] = $dflt_group;
            } else if( $one_group ) {
                $keys = array_keys($groups);
                $this->_draft_groups[] = $keys[0];
            }
            $tmp = (int) $mod->GetPreference('expireage_months',520);
            $this->_expires = strtotime("+{$tmp} months");
        } else {
            $user = user::load($user_id);
            $this->_draft_groups = $user->get_groups();
            $this->_expires = $user->expires_ts;
        }
        $this->_draft_props = $user->get_properties();
        $this->_user = $user;
    }

    public function __get($key)
    {
        switch( $key ) {
        case 'id':
            if( is_null($this->_new_uid) ) return $this->_user->id;
            return $this->_new_uid;

        case 'new_username':
            if( !$this->_new_username ) return $this->_user->username;
            return $this->_new_username;

        case 'new_password':
            return $this->_new_password;

        case 'repeat_password':
            return $this->_repeat_password;

        case 'expires':
            return $this->_expires;

        case 'force_password_change':
            if( is_null($this->_force_password_change) ) return $this->_user->force_newpw;
            return $this->_force_password_change;

        case 'force_change_settings':
            if( is_null($this->_force_change_settings) ) return $this->_user->force_chsettings;
            return $this->_force_change_settings;

        case 'must_validate':
            if( is_null($this->_must_validate) ) return $this->_user->must_validate;
            return $this->_must_validate;

        case 'is_disabled':
            if( is_null($this->_is_disabled) ) return $this->_user->disabled;
            return $this->_is_disabled;

        case 'verifycode':
            // gettable only
            if( $this->id > 1 ) return $feu->GetUserTempCode( $this->id );
            break;

        default:
            return $this->_user->__get($key);
        }
    }

    public function __set($key,$val)
    {
        switch( $key ) {
        case 'new_username':
            $this->_new_username = trim($val);
            break;

        case 'new_password':
            $this->_new_password = $val;
            break;

        case 'repeat_password':
            $this->_repeat_password = $val;
            break;

        case 'expires':
            $this->_expires = (int) $val;
            break;

        case 'is_disabled':
            $this->_is_disabled = (bool) $val;
            break;

        case 'force_password_change':
            $this->_force_password_change = (bool) $val;
            break;

        case 'force_change_settings':
            $this->_force_change_settings = (bool) $val;
            break;

        case 'must_validate':
            $this->_must_validate = (bool) $val;
            break;

        default:
            $this->_user->__set($key,$val);
            break;
        }
    }

    public function validate()
    {
        $mod = \feu_utils::get_mod();
        if( $this->_user->id < 1 ) {
            // new user
            // must have a username, and it must be valid
            if( !$mod->IsValidUsername( $this->new_username ) ) throw new \RuntimeException($mod->Lang('error_invalidusername'));
            $t_uid = $mod->GetUserID($this->new_username);
            if( $t_uid ) throw new \RuntimeException($mod->Lang('error_username_exists'));

            // must have a password, and it must be valid
            if( !$this->new_password ) throw new \RuntimeException($mod->Lang('error_invalidpassword'));
            if( !$mod->isValidPassword($this->new_password) ) throw new \RuntimeException($mod->Lang('error_invalidpassword'));

            // repeat password must be valid.
            if( $this->new_password != $this->repeat_password ) throw new \RuntimeException($mod->Lang('error_passwordmismatch'));
        } else {
            // editing a user.
            // if we have a username, it must be valid (changing username)
            if( $this->_new_username && !$mod->IsValidUsername($this->_new_username, FALSE) ) throw new \RuntimeException($mod->Lang('error_invalidusername'));
            $t_uid = $mod->GetUserID($this->new_username);
            if( $t_uid && $t_uid != $this->_user->id ) throw new \RuntimeException($mod->Lang('error_username_exists'));

            // if we have a password, it must be valid, and repeat must match
            if( $this->new_password ) {
                if( !$mod->isValidPassword($this->new_password) ) throw new \RuntimeException($mod->Lang('error_invalidpassword'));

                // repeat password must be valid.
                if( $this->new_password != $this->repeat_password ) throw new \RuntimeException($mod->Lang('error_passwordmismatch'));
            }
        }

        // need a valid expiry date when adding/editing a user.
        if( !$this->expires ) throw new \RuntimeException($mod->Lang('error_invalidexpirydate'));

        // if require membership in one gruop, make sure we have one.
        if( $mod->GetPreference('require_onegroup') && count($this->_draft_groups) < 1 ) throw new \Runtimeexception($mod->Lang('error_onegrouprequired'));
    }

    public function set_groups($groups = null)
    {
        if( is_null($groups) ) {
            $this->_draft_groups = [];
            return;
        }
        if( !is_array($groups) || !count($groups) ) throw new \LogicException('Invalid group array passed to '.__METHOD__);
        $tmp = array();
        foreach( $groups as $one ) {
            $one = (int) $one;
            if( $one < 1 ) continue;
            if( !in_array($one,$tmp) ) $tmp[] = $one;
        }
        $tmp = array_unique($tmp);
        $this->_draft_groups = $tmp;
    }

    public function memberof($gid)
    {
        $gid = (int) $gid;
        if( $gid < 1 ) throw new \LogicException('Invalid gid passed to '.__METHOD__);
        return (is_array($this->_draft_groups) && in_array($gid,$this->_draft_groups));
    }

    public function get_groups()
    {
        return $this->_draft_groups;
    }

    public function set_property($name,$val)
    {
        $name = trim($name);
        if( !$name ) throw new \LogicException('Invalid name passed to '.__METHOD__);
        $this->_draft_props[$name] = (string) $val;
    }

    public function get_property($name)
    {
        $name = trim($name);
        if( !$name ) throw new \LogicException('Invalid name passed to '.__METHOD__);
        if( isset($this->_draft_props[$name]) ) return $this->_draft_props[$name];
    }

    public function erase_property($name)
    {
        $name = trim($name);
        if( !$name ) throw new \LogicException('Invalid name passed to '.__METHOD__);
        if( isset($this->_draft_props[$name]) ) unset($this->_draft_props[$name]);
    }

    public function can_validate()
    {
        // test if there is enough information for this user to be able to re-validate himself
        if( $this->id < 1 ) return FALSE;

        $feu = \feu_utils::get_mod();
        if( $feu->GetPreference('username_is_email') ) return TRUE;

        $props = \feu_utils::get_properties_for_groups( $this->get_groups() );
        if( !count($props) ) return FALSE;
        $alldefns = $feu->GetPropertyDefns();
        $fnd = null;
        foreach( $props as $prop ) {
            $prop_name = $prop['name'];
            if( isset($alldefns[$prop_name]) && $alldefns[$prop_name]['type'] == 2 ) {
                $val = $this->get_property($prop_name);
                if( $val ) return TRUE;
            }
        }
        return FALSE;
    }

    public function store()
    {
        $key = md5(__FILE__);
        $_SESSION[$key] = serialize($this);
    }

    public static function retrieve()
    {
        $key = md5(__FILE__);
        if( !isset($_SESSION[$key]) ) return;
        $obj = unserialize($_SESSION[$key]);
        unset($_SESSION[$key]);
        return $obj;
    }

    public function save()
    {
        $uid = $this->id;
        $mod = \feu_utils::get_mod();
        if( $uid < 1 ) {
            // adding a new user
            $ret = $mod->AddUser( $this->new_username, $this->new_password, $this->expires );
            if( !is_array($ret) || $ret[0] == FALSE ) throw new \RuntimeException( $ret[1] );
            $uid = $this->_new_uid = (int) $ret[1];
        } else {
            // updating an existing user
            $res = $mod->SetUser( $uid, $this->new_username, $this->new_password, $this->expires );
            if( !is_array($res) || $res[0] == FALSE ) throw new \RuntimeException('Error setting user '.$res[1]);
        }

        $mod->SetUserDisabled( $uid, $this->is_disabled );
        $mod->ForcePasswordChange( $uid, $this->force_password_change );
        $mod->ForceChangeSettings( $uid, $this->force_change_settings );
        $mod->ForceVerify( $uid, $this->must_validate );

        // do this, just i n case.
        $mod->RemoveUserTempCode( $uid );

        // add the user to his groups
        $ret = $mod->SetUserGroups( $uid, $this->_draft_groups );
        if( !is_array($ret) || $ret[0] == FALSE ) throw new \RuntimeException($mod->Lang('error_cantassignuser'));

        // and then add his properties.
        $mod->SetEncryptionKey($uid);

        //$mod->DeleteUserPropertyFull( '', $uid, TRUE ); // DELETE ALL PROPERTIES
        if( count($this->_draft_props) )  {
            foreach( $this->_draft_props as $prop_name => $val ) {
                $ret = $mod->SetUserPropertyFull( $prop_name, $val, $uid );
                if( !$ret ) throw new \RuntimeException('Error Setting property '.$prop_name.' to '.$val.' for user '.$uid);
            }
        }
    }
}