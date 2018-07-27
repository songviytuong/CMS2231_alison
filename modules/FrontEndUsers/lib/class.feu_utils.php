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

final class feu_utils
{
    private function __construct() {}
    private static $_mod;

    public static function &get_mod()
    {
        if( !self::$_mod ) self::$_mod = \cms_utils::get_module(MOD_FRONTENDUSERS);
        return self::$_mod;
    }

    public static function using_std_consumer()
    {
        $feu = self::get_mod();
        $name = $feu->GetPreference('auth_module','');
        if( $name == '' || $name == '__BUILTIN__' ) return TRUE;
        return FALSE;
    }

    public static function &get_std_consumer()
    {
        $obj = new feu_std_consumer();
        return $obj;
    }

    public static function &get_auth_consumer()
    {
        $feu = self::get_mod();
        $name = $feu->GetPreference('auth_module','');
        if( $name == '' || $name == '__BUILTIN__' ) {
            return self::get_std_consumer();
        }

        $module = cge_utils::get_module($name);
        $res = null;
        if( is_object($module) ) {
            $obj = $module->GetFEUAuthConsumer();
            return $obj;
        }

        return self::get_std_consumer();
    }

    public static function get_userlist($none = null)
    {
        static $list;
        if( !is_array($list) ) {
            $list = array();

            // now add in feu users
            $feu = self::get_mod();
            if( is_object($feu) ) {
                $query = new \feu_user_query;
                $query->add_and_opt(\feu_user_query_OPT::MATCH_NOTEXPIRED);
                $query->set_sortby(\feu_user_query::RESULT_SORTBY_USERNAME);
                $query->set_sortorder(\feu_user_query::RESULT_SORTORDER_ASC);
                $rs = $query->execute();
                if( $rs->get_found_rows() > 0 && $none ) {
                    $list[''] = $feu->Lang('none');
                }
                while( !$rs->EOF() ) {
                    $list[$rs->fields['id']] = $rs->fields['username'];
                    $rs->MoveNext();
                }
            }
        }
        return $list;
    }

    public static function get_template($params,$key,$typename)
    {
        if( $key ) {
            $tpl = \cge_param::get_string($params,$key);
            if( $tpl ) return $tpl;
        }

        $tpl = \CmsLayoutTemplate::load_dflt_by_type($typename);
        if( $tpl ) return $tpl->get_name();

        audit('','FrontEndUsers','No default template of type '.$typename.' found');
        return;
    }

    /**
     * @ignore
     * @internal
     */
    public static function _DisplayAdminUserPage( $id, &$params, $returnid )
    {
        $mod = self::get_mod();
        $tpl = $mod->CreateSmartyTemplate('adduser1.tpl');

        // populate the template
        $editing = 0;
        $hidden = array();
        $username = '';
        $password = '';
        $repeatpassword = '';
        $expires = '';
        $uinfo = null;
        $tpl->assign('origparams',$params);

        if( isset($params['returnto']) ) $hidden['returnto'] = $params['returnto'];
        if( isset( $params['action'] ) && ($params['action'] == 'edituser'|| $params['action'] == 'do_edituser1' ) ) {
            $editing = 1;
            $hidden['user_id'] = $params['user_id'];
            $uinfo = $mod->GetUserInfo($params['user_id']);
            $tpl->assign('title', $mod->Lang('edituser'));
            $tpl->assign('startform',$mod->CreateFormStart($id,'do_edituser1',$returnid));
        }
        else {
            $tpl->assign('title', $mod->Lang('adduser'));
            $tpl->assign('startform',$mod->CreateFormStart($id,'do_adduser1',$returnid));
        }

        if( !empty($hidden) ) {
            $txt = '';
            foreach( $hidden as $key => $value ) {
                $txt .= $mod->CreateInputHidden($id,$key,$value);
            }
            $tpl->assign('hidden',$txt);
        }

        if( isset($params['error']) ) $tpl->assign('error',$params['error']);
        if( isset($params['message']) ) $tpl->assign('message',$params['message']);

        if( $mod->GetPreference('use_randomusername',0) == 1 ) $username = $mod->GenerateRandomUsername();
        //$disabled = (int) cge_utils::get_param($params,'input_disabled');
        //$force_newpw = (int) cge_utils::get_param($params,'input_force_newpw');
        if( isset($params['input_username']) )  $username = trim($params['input_username']);
        if( isset($params['input_password']) ) $password = trim($params['input_password']);
        if( isset($params['input_repeatpassword']) ) $repeatpassword = trim($params['input_repeatpassword']);
        if( isset($params['input_expires']) ) $expires = trim($params['input_expires']);

        $tpl->assign('endform', $mod->CreateFormEnd());
        $tpl->assign('submit', $mod->CreateInputSubmit($id, 'submit', $mod->Lang('next')));
        $tpl->assign('cancel', $mod->CreateInputSubmit($id, 'cancel', $mod->Lang('cancel')));

        $auth_consumer = feu_utils::get_auth_consumer();
        $addtext = '';
        if( $editing && $uinfo[1]['nonstd'] ) {
            $addtext = 'readonly="readonly"';
            $tpl->assign('username_readonly',1);
        }
        $tpl->assign('prompt_username',$auth_consumer->get_username_prompt());
        $tpl->assign('unfldlen',$mod->GetPreference('usernamefldlength'));
        $tpl->assign('max_unfldlen',$mod->GetPreference('max_usernamelength'));
        $tpl->assign('pwfldlen',$mod->GetPreference('passwordfldlength'));
        $tpl->assign('max_pwfldlen',$mod->GetPreference('max_passwordlength'));
        $tpl->assign('input_username', $mod->CreateInputText($id, 'input_username',$username,
                                                                 $mod->GetPreference('usernamefldlength'),
                                                                 $mod->GetPreference('max_usernamelength'),
                                                                 $addtext));

        $addtext = '';
        if( $editing && $uinfo[1]['nonstd'] ) {
            $addtext = 'readonly="readonly"';
            $tpl->assign('password_readonly',1);
        }
        $tpl->assign('prompt_password',$mod->Lang('password'));
        $tpl->assign('input_password',
        $mod->CreateInputPassword($id, 'input_password', $password,
                                   $mod->GetPreference('passwordfldlength'),
                                   $mod->GetPreference('max_passwordlength'),
        $addtext));
        $tpl->assign('prompt_repeatpassword',$mod->Lang ('repeatpassword'));
        $tpl->assign('input_repeatpassword',
        $mod->CreateInputPassword($id, 'input_repeatpassword', $repeatpassword,
        $mod->GetPreference('passwordfldlength'),
        $mod->GetPreference('max_passwordlength'),
        $addtext));

        if( $editing == 1 ) {
            $tpl->assign('info_password',$mod->Lang('info_admin_password'));
            $tpl->assign('info_repeatpassword',$mod->Lang('info_admin_repeatpassword'));
        }

        $tpl->assign('prompt_expires',$mod->Lang('expires'));
        $tpl->assign('expires_dateprefix',$id.'expiresdate_');
        $tmp = $mod->GetPreference('expireage_months',520);
        $expiresdate = strtotime("+{$tmp} months", time());
        if( isset( $params['input_expiresdate'] ) ) $expiresdate = $params['input_expiresdate'];
        $tpl->assign ('expiresdate', $expiresdate );

        // display and edit groups
        if( $mod->_HasSufficientPermissions('strict_editgroups') ) {
            if( isset($params['memberof'] ) ) {
                $tmp = (int)$params['memberof'];
                $params['memberof_'.$tmp] = 1;
            }

            // now display a list of groups that this user may optionally be in
            $tpl->assign( 'idtext', $mod->Lang('id') );
            $tpl->assign( 'nametext', $mod->Lang('name') );
            $tpl->assign( 'desctext', $mod->Lang('description') );

            $groups = $mod->GetGroupListFull();
            $checked = -1;
            if( $mod->GetPreference('require_onegroup') &&  count($groups) == 1 ) {
                $keys = array_keys($groups);
                $checked = $keys[0];
            }

            $rowarray = array();
            $rowclass = 'row1';
            foreach( $groups as $group ) {
                $onerow = new StdClass();
                $onerow->id = $group['id'];
                $onerow->name = $group['groupname'];
                $onerow->desc = $group['groupdesc'];
                if( isset($params['memberof_'.$group['id']]) ) $checked = $params['memberof_'.$group['id']];
                $onerow->member = $mod->CreateInputCheckbox($id,'memberof_'.$group['id'], $group['id'],$checked);
                $onerow->rowclass = $rowclass;

                $rowarray[] = $onerow;
                ($rowclass == "row1" ? $rowclass = "row2" : $rowclass = "row1");
            }
            $tpl->assign('itemcount',count($rowarray));
            $tpl->assign('items',$rowarray);
        }

        $tpl->assign('propadd', $mod->CreateInputSubmit( $id, 'propadd',$mod->Lang('add')));
        $tpl->assign('groupstitle', $mod->Lang('groups'));
        $tpl->assign('propertiestitle', $mod->Lang('properties'));

        $tpl->assign('props', $mod->CreateInputSubmit($id, 'props', $mod->Lang('properties')."..."));
        $tpl->display();
    }

    public static function checkUpload($key)
    {
        $mod = self::get_mod();
        if( !isset($_FILES[$key]) || !isset($_FILES) ) return [ false, $mod->Lang('error_missing_upload') ];
        $file = $_FILES[$key];
        if( !isset($file['name']) || !isset($file['size']) || $file['size'] == 0 ) return [ false,$mod->Lang('error_problem_upload') ];

        if (!isset ($file['type'])) $file['type'] = '';
        if (!isset ($file['size'])) $file['size'] = '';
        if (!isset ($file['tmp_name'])) return [ false, $mod->Lang('error_problem_upload') ];
        $file['name'] =
            preg_replace('/[^a-zA-Z0-9\.\$\%\'\`\-\@\{\}\~\!\#\(\)\&\_\^]/', '',
            str_replace (array (' ', '%20'), array ('_', '_'), $file['name']));

        // check the filename
        if( !$mod->is_allowed_upload($file['name']) ) return [ false, $mod->Lang('error_invalidfileextension') ];
        return [ TRUE ];
    }

    public static function get_properties_for_groups( $grouplist ) {
        $out = [];
        foreach( $grouplist as $gid ) {
            $gid = (int) $gid;
            if( $gid < 1 ) continue;

            $relations = \feu_utils::get_mod()->GetGroupPropertyRelations( $gid );
            $out = \RRUtils::array_merge_by_name_required( $out, $relations );
        }
        uasort( $out, array('cge_array','compare_elements_by_sortorder_key') );
        return $out;
    }

    public static function resolve_preftpl_to_page($prefname,$uid,$dflt = null)
    {
        $prefname = trim($prefname);
        $uid = (int) $uid;
        if( !$prefname || $uid < 1 ) return $dflt;

        // should throw an exception maybe.
        $feu = self::get_mod();
        $res = $feu->GetUserInfo( $uid );
        if( !is_array($res) || $res[0] == FALSE ) return $dflt;
        $uinfo = $res[1];

        $tpldata = $feu->GetPreference($prefname);
        if( !$tpldata ) return $dflt;

        $smarty = \Smarty_CMS::get_instance();
        $tmp_tpl = $smarty->CreateTemplate('string:'.$tpldata);
        $tmp_tpl->assign('username',$uinfo['username']);
        $tmp_tpl->assign('uid',$uid);
        $groups = $feu->GetMemberGroupsArray($uid);
        $groupname = null;
        if( count($groups) ) $groupname = $feu->GetGroupName( $groups[0]['groupid'] );
        $tmp_tpl->assign('groupname',$groupname);
        $page = $tmp_tpl->fetch();
        $dest = $feu->resolve_alias_or_id($page);
        if( $dest ) return $dest;
        return $dflt;
    }
} // class

#
# EOF
#
