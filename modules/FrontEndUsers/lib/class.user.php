<?php

namespace FrontEndUsers;

class user implements \ArrayAccess
{
    private $_data = [ 'id' => null, 'username' => null, 'createdate' => null, 'expires' => null, 'nonstd' => FALSE, 'disabled' => FALSE, 'force_newpw' => FALSE,
                       'force_chsettings' => FALSE, 'must_validate' => FALSE, 'loggedin' => null ];
    private $_new_password;
    private $_props;
    private $_groups; // lazy loaded.
    private $_dirty;

    public function OffsetGet($key)
    {
        return $this->__get($key);
    }

    public function OffsetSet($key,$val)
    {
        return $this->__set($key,$val);
    }

    public function OffsetUnset($key) { /* do nothing */ }

    public function OffsetExists($key) {
        return isset($this->_data[$key]);
    }

    public function __get($key)
    {
        switch( $key ) {
        case 'id':
            return (int) $this->_data[$key];

        case 'username':
            return trim($this->_data[$key]);

        case 'createdate_ts':
            if( !$this->_data['createdate'] ) return 0;
            $db = \CmsApp::get_instance()->GetDb();
            return $db->UnixTimeStamp($this->_data['createdate']);

        case 'createdate_str': // db date
            return trim($this->_data['createdate']);

        case 'expires_ts':
            if( !$this->_data['expires'] ) return 0;
            $db = \CmsApp::get_instance()->GetDb();
            return $db->UnixTimeStamp($this->_data['expires']);

        case 'expires_str': // db date
            return trim($this->_data['expires']);

        case 'nonstd':
        case 'disabled':
        case 'force_newpw':
        case 'force_chsettings':
        case 'must_validate':
        case 'loggedin':
            return (bool) $this->_data[$key];

        default:
            throw new \LogicException("$key is not a gettable member of ".__CLASS__);
        }
    }

    public function is_expired()
    {
        return ($this->expires_ts < time());
    }

    public function get_property($key)
    {
        $key = trim($key);
        if( !$key ) throw new \LogicException('Invalid key passed to '.__METHOD__);
        if( isset($this->_props[$key]) ) return $this->_props[$key];
    }

    public function get_properties()
    {
        return $this->_props;
    }

    public function get_groups()
    {
        if( !$this->_groups ) {
            if( !$this->id ) return;
            $mod = \cms_utils::get_module(MOD_FRONTENDUSERS);
            $tmp = $mod->GetMemberGroupsArray($this->id);
            if( $tmp && count($tmp) ) {
                $out = array();
                foreach( $tmp as $one ) $out[] = (int) $one['groupid'];
                $this->_groups = $out;
            }
        }
        return $this->_groups;
    }

    public function memberof($gid)
    {
        $gid = (int) $gid;
        if( $gid < 1 ) throw new \LogicException('Invalid gid passed to '.__METHOD__);
        $groups = $this->get_groups();
        return in_arra($gid,$groups);
    }

    public static function load($user_id)
    {
        $user_id = (int) $user_id;
        if( $user_id < 1 ) throw new \LogicException('Invalid user_id passed to '.__METHOD__);

        $row = \feu_user_cache::get_user($user_id,TRUE);
        $obj = new self();

        $keys = array_keys($obj->_data);
        foreach( $keys as $key ) {
            switch( $key ) {
            case 'id':
                $obj->_data[$key] = (int) $row[$key];
            case 'username':
            case 'createdate':
            case 'expires':
                $obj->_data[$key] = trim($row[$key]);
                break;

            case 'nonstd':
            case 'disabled':
            case 'force_newpw':
            case 'force_chsettings':
            case 'must_validate':
            case 'loggedin':
                $obj->_data[$key] = false;
                if( isset($row[$key]) ) $obj->_data[$key] = (bool) $row[$key];
                break;
            }
        }

        // note: encrypted properties are already decrypted here.
        if( isset($row['fprops']) && count($row['fprops']) ) {
            $obj->_props = [];
            foreach( $row['fprops'] as $prop ) {
                $obj->_props[$prop['title']] = $prop['data'];
            }
        }

        return $obj;
    }
}