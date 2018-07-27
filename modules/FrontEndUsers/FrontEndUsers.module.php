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

/**
 * This file defines the FrontEndUsers module class.
 *
 * @package FrontEndUsers
 */

/**
 * The FrontEndUsers module, besides being a module to provide authentication services to the frontend of a CMSMS website also has a complete
 * and flexible API.
 *
 * @package FrontEndUsers
 */
final class FrontEndUsers extends CGExtensions
{
    /**
     * Constant to indentify a text property.
     */
    const FIELDTYPE_TEXT = 0;

    /**
     * Constant to indentify a checkbox property.
     */
    const FIELDTYPE_CHECKBOX = 1;

    /**
     * Constant to indentify an email property.
     */
    const FIELDTYPE_EMAIL = 2;

    /**
     * Constant to indentify a textarea property.
     */
    const FIELDTYPE_TEXTAREA = 3;

    /**
     * Constant to indentify a dropdown property.
     */
    const FIELDTYPE_DROPDOWN = 4;

    /**
     * Constant to indentify a multiselect property.
     */
    const FIELDTYPE_MULTISELECT = 5;

    /**
     * Constant to indentify an image property.
     */
    const FIELDTYPE_IMAGE = 6;

    /**
     * Constant to indentify a radio button group property.
     */
    const FIELDTYPE_RADIOBUTNS = 7;

    /**
     * Constant to indentify a date property.
     */
    const FIELDTYPE_DATE = 8;

    /**
     * Constant to indentify a data property.
     */
    const FIELDTYPE_DATA = 9;

    /**
     * How many seconds of inactivity before a user is automatically logged out.
     * @ignore
     */
    protected $expirytime;

    /**
     * Set this to true if user should be redirected to default page after logging in/out.
     * @ignore
     */
    protected $logintarget;

    /**
     * @ignore
     */
    protected $otherintarget;

    /**
     * @ignore
     */
    protected $logouttarget;

    /**
     * @ignore
     */
    protected $otherouttarget;

    /**
     * @ignore
     */
    protected $allowuseradmin;

    /**
     * @ignore
     */
    protected $enableemailpw;

    /**
     * @ignore
     */
    protected $lang="";

    /**
     * @ignore
     */
    private $usermanip = false;

    /**
     * @ignore
     */
    protected $types = false;


    /**
     * Constructor
     *
     * @ignore
     */
    public function __construct()
    {
        parent::__construct();
        $this->types = [ 'text' => self::FIELDTYPE_TEXT,
                         'checkbox' => self::FIELDTYPE_CHECKBOX,
                         'email' => self::FIELDTYPE_EMAIL,
                         'textarea' => self::FIELDTYPE_TEXTAREA,
                         'dropdown' => self::FIELDTYPE_DROPDOWN,
                         'multiselect' => self::FIELDTYPE_MULTISELECT,
                         'image' => self::FIELDTYPE_IMAGE,
                         'radiobuttons' => self::FIELDTYPE_RADIOBUTNS,
                         'date' => self::FIELDTYPE_DATE,
                         'data' => self::FIELDTYPE_DATA ];

        global $CMS_ADMIN_PAGE;
        if( !isset($CMS_ADMIN_PAGE) ) {
            $smarty = Smarty_CMS::get_instance();
            if( !$smarty ) return;
            $smarty->registerClass('feu_smarty','feu_smarty');
            $smarty->registerPlugin('block','feu_protect','feu_smarty_plugins::feu_protect');
        }
        $this->AddImageDir('icons');

        $contentops = ContentOperations::get_instance();

        $obj = new CmsContentTypePlaceholder();
        $obj->class = 'feu_protected_page';
        $obj->type  = strtolower($obj->class);
        $obj->filename = __DIR__.'/lib/class.feu_protected_page.php';
        $obj->loaded = false;
        $obj->friendlyname = $this->Lang('feu_protected_page');
        $contentops->register_content_type($obj);

        $obj = new CmsContentTypePlaceholder();
        $obj->class = 'feu_protected_sectionhead';
        $obj->type  = strtolower($obj->class);
        $obj->filename = __DIR__.'/lib/class.feu_protected_sectionheader.php';
        $obj->loaded = false;
        $obj->friendlyname = $this->Lang('feu_protected_sectionhead');
        $contentops->register_content_type($obj);

        $obj = new CmsContentTypePlaceholder();
        $obj->class = 'feu_protected_logoutlink';
        $obj->type  = strtolower($obj->class);
        $obj->filename = __DIR__.'/lib/class.feu_protected_logoutlink.php';
        $obj->loaded = false;
        $obj->friendlyname = $this->Lang('feu_protected_logoutlink');
        $contentops->register_content_type($obj);
    }

    /**
     * @ignore
     */
    private function _load()
    {
        if( $this->usermanip == NULL ) {
            // check a preference to see which user manipulator class
            // we should use.
            $manipulator = 'FrontEndUsersManipulator';
            $this->usermanip = new FrontEndUsersManipulator( $this );
            if( !is_object( $this->usermanip ) ) die("Error instantiationg $manipulator object");
            $this->usermanip->SetExpireNotifier(array($this,'NotifyExpiredUser'));
        }
    }

    /**
     * Get the User Manipulator Object
     * NOT FOR EXTERNAL USE
     *
     * @internal
     * @return object
     */
    public function &GetManipulator()
    {
        $this->_load();
        return $this->usermanip;
    }

    /**
     * @ignore
     */
    function GetName() { return 'FrontEndUsers'; }

    /**
     * @ignore
     */
    function GetVersion() { return '2.4.4'; }

    /**
     * @ignore
     */
    function HasContentType() { return TRUE; }

    /**
     * @ignore
     */
    function IsPluginModule() { return TRUE; }

    /**
     * @ignore
     */
    function AllowAutoInstall() { return FALSE; }

    /**
     * @ignore
     */
    function AllowAutoUpgrade() { return FALSE; }

    /**
     * @ignore
     */
    function LazyLoadAdmin() { return TRUE; }

    /**
     * @ignore
     */
    function MinimumCMSVersion() { return '2.1.5'; }

    /**
     * @ignore
     */
    function GetAdminDescription () { return $this->Lang ('moddescription'); }

    /**
     * @ignore
     */
    function GetAdminSection () { return 'usersgroups'; }

    /**
     * @ignore
     */
    function GetDependencies() { return array( 'CGExtensions' => '1.54.3','CGSimpleSmarty' => '2.1.5' ); }

    /**
     * @ignore
     */
    function GetEventDescription ( $eventname ) { return $this->Lang('event_info_'.$eventname ); }

    /**
     * @ignore
     */
    function GetEventHelp ( $eventname ) { return $this->Lang('event_help_'.$eventname ); }

    /**
     * @ignore
     */
    function GetFriendlyName () { return $this->Lang('friendlyname'); }

    /**
     * @ignore
     */
    function HasAdmin () { return TRUE; }

    /**
     * @ignore
     */
    function InstallPostMessage() { return $this->Lang('postinstallmessage'); }

    /**
     * @ignore
     */
    function GetAuthor() { return 'calguy1000'; }

    /**
     * @ignore
     */
    function GetAuthorEmail() { return 'calguy1000@hotmail.com'; }

    /**
     * @ignore
     */
    function GetChangeLog() { return file_get_contents(__DIR__.'/changelog.inc'); }

    /**
     * @ignore
     * @deprecated
     */
    protected function langifyKeys( $arr )
    {
        $out = array();
        foreach( $arr as $k=>$v ) {
            $k = $this->Lang($k);
            $out[ $k ] = $v;
        }
        return $out;
    }

    /**
     * @ignore
     */
    function InitializeFrontend()
    {
        $this->RestrictUnknownParams();
        $this->RegisterModulePlugin();
        $this->SetParameterType('code',CLEAN_STRING);
        $this->SetParameterType('form',CLEAN_STRING); // deprecated
        $this->SetParameterType('returnto',CLEAN_STRING);
        $this->SetParameterType('only_groups',CLEAN_STRING);
        $this->SetParameterType('nocaptcha',CLEAN_INT);
        $this->SetParameterType('input_username',CLEAN_STRING); // deprecated
        $this->SetParameterType('input_password',CLEAN_STRING); // deprecated
        $this->SetParameterType('input_repeatpassword',CLEAN_STRING); // deprecated
        $this->SetParameterType('error',CLEAN_INT); // deprecated
        $this->SetParameterType('message',CLEAN_STRING); // deprecated
        $this->SetParameterType('lostun_group',CLEAN_STRING);
        $this->SetParameterType('input_captcha',CLEAN_STRING); // deprecated
        $this->SetParameterType('submit',CLEAN_STRING); // deprecated
        $this->SetParameterType('cancel',CLEAN_STRING); // deprecated
        $this->SetParameterType('input_code',CLEAN_STRING); // deprecated
        $this->SetParameterType('uid',CLEAN_INT);
        $this->SetParameterType('checkonly',CLEAN_INT);
        $this->SetParameterType('inline',CLEAN_INT);
        $this->SetParameterType('logouttemplate',CLEAN_STRING);
        $this->SetParameterType('logintemplate',CLEAN_STRING);
        $this->SetParameterType('changesettingstemplate',CLEAN_STRING);
        $this->SetParameterType('forgotpwtemplate',CLEAN_STRING);
        $this->SetParameterType('forgotpwemailtemplate',CLEAN_STRING);
        $this->SetParameterType('lostuntemplate',CLEAN_STRING);
        $this->SetParameterType('lostunconfirmtemplate',CLEAN_STRING);
        $this->SetParameterType('forcenewpwtemplate',CLEAN_STRING);
        $this->SetParameterType('viewusertemplate',CLEAN_STRING);
        $this->SetParameterType('afterverifytemplate',CLEAN_STRING);
        $this->SetParameterType('resetsessiontemplate',CLEAN_STRING);
        $this->SetParameterType('verifyformtemplate',CLEAN_STRING);
        $this->SetParameterType(CLEAN_REGEXP.'/feu_.*/',CLEAN_STRING);

        $this->RegisterRoute('/[fF]eu\/verifycode\/(?P<returnid>[0-9]+)\/(?P<uid>[0-9]+)\/(?P<code>.*?)$/',array('action'=>'verifycode'));
        $this->RegisterRoute('/[fF]eu\/verify\/(?P<returnid>[0-9]+)\/(?P<uid>[0-9]+)\/(?P<code>.*?)$/',array('action'=>'verifyonly'));
        $this->RegisterRoute('/[fF]eu\/reset\/(?P<uid>[0-9]+)$/',array('action'=>'reset_session','showtemplate'=>'false','checkonly'=>'1'));
        $this->RegisterRoute('/[fF]eu\/edit\/(?P<returnid>[0-9]+)$/',array('action'=>'changesettings'));
        $this->RegisterRoute('/[fF]eu\/logout\/(?P<returnid>[0-9]+)$/',array('action'=>'logout'));
        $this->RegisterRoute('/[fF]eu\/forgot\/(?P<returnid>[0-9]+)$/',array('action'=>'forgotpw'));
        $this->RegisterRoute('/[fF]eu\/lostusername\/(?P<returnid>[0-9]+)$/',array('action'=>'lostusername'));
    }

    /**
     * @ignore
     */
    function InitializeAdmin()
    {
    }

    /**
     * @ignore
     */
    function get_tasks()
    {
        $tmp = $this->GetPreference('forcelogout_times');
        if( $tmp != '' ) {
            $obj = new FEUForcedLogoutTask($this);
            return $obj;
        }
        $tmp = null;
        return $tmp;
    }

    /**
     * @ignore
     */
	public function get_pretty_url($id,$action,$returnid='',$params=array(),$inline=false)
    {
        if( $action == 'default' ) {
            $form = \cge_param::get_string($params,'form');
            switch( $form ) {
            case 'forgotpw':
                $action = 'forgotpw';
                break;

            case 'login':
                $action = 'login';
                break;

            case 'lostusername':
                $action = 'lostusername';
                break;

            case 'changesettings':
                return "feu/edit/$returnid";
            }
        }

        if( $action == 'verifyonly' ) {
            $uid = \cge_param::get_int($params,'uid');
            $code = \cge_param::get_string($params,'code');
            if( $uid < 1 || !$code ) return;
            return "feu/verify/$returnid/$uid/$code";
        }
        if( $action == 'forgotpw') {
            return "feu/forgot/$returnid";
        } else if( $action == 'lostusername' ) {
            return "feu/lostusername/$returnid";
        } elseif( $action == 'logout' ) {
            $returnto = \cge_param::get_string($params,'returnto');
            if( $returnto ) return;
            return "feu/logout/$returnid";
        }
    }

    /**
     * @ignore
     */
    protected function _HasSufficientPermissions( $perm = '' )
    {
        if ($this->GetPreference('feusers_specific_permissions','0') == '1') {
            $p1 = $p2 = $p3 = $this->CheckPermission( 'FEU Modify Users' );
            $p4 = $p5 = $p6 = $p7 = $this->CheckPermission( 'FEU Modify Groups' );
            $p9 = $this->CheckPermission( 'FEU Modify FrontEndUserProps' );
        }
        else {
            $p1 = $p2 = $p3 = $this->CheckPermission( 'Manage Users' );
            $p4 = $p5 = $p6 = $p7 = $this->CheckPermission( 'Manage Groups' );
            $p9 = $this->CheckPermission( 'Modify FrontEndUserProps' );
        }

        $consumer = feu_utils::get_auth_consumer();
        $ret = 0;
        switch( $perm ) {
        case '':  // any permission for working with groups and users
            $ret = ($p1 || $p2 || $p3 || $p4 || $p5 || $p6 || $p7 || $p9 );
            break;

        case 'users':
            $ret = ($p1 || $p2 || $p3);
            break;

        case 'adduser':
            $ret = ($p1);
            break;

        case 'addprop':
        case 'editprop':
        case 'deleteprop':
            $ret = ($p9) && $consumer->has_capability($consumer::CAPABILITY_EDITPROPS);
            break;

        case 'properties':
            $ret = ($p9) && $consumer->has_capability($consumer::CAPABILITY_LISTPROPS);
            break;

        case 'listusers':
            $ret = ($p2 || $p3);
            break;

        case 'listgroups':
            $ret = ($p5 || $p6) &&
                ($consumer->has_capability($consumer::CAPABILITY_USESTDGROUPS) || $consumer->has_capability($consumer::CAPABILITY_LISTGROUPS));
            break;

        case 'groups':
            $ret = ($p4 || $p5 || $p7) &&
                ($consumer->has_capability($consumer::CAPABILITY_USESTDGROUPS) || $consumer->has_capability($consumer::CAPABILITY_LISTGROUPS));
            break;

        case 'addgroup':
            $ret = ($p4) && ($consumer->has_capability($consumer::CAPABILITY_USESTDGROUPS) || $consumer->has_capability($consumer::CAPABILITY_EDITGROUPS));
            break;

        case 'strict_editgroups':
            $ret = ($p5 || $p6) && ($consumer->has_capability($consumer::CAPABILITY_USESTDGROUPS) || $consumer->has_capability($consumer::CAPABILITY_EDITGROUPS));
            break;

        case 'editgroups':
            $ret = ($p5 || $p6) && $consumer->has_capability($consumer::CAPABILITY_USESTDGROUPS,$consumer::CAPABILITY_EDITGROUPS,$consumer::CAPABILITY_EDITGROUPPROPS);
            break;

        case 'editusers':
            $ret = ($p2);
            break;

        case 'removegroups':
            $ret = ($p7) && $consumer->has_capability($consumer::CAPABILITY_USESTDGROUPS,$consumer::CAPABILITY_EDITGROUPS);
            break;

        case 'removeusers':
            $ret = ($p3);
            break;

        case 'usersngroups':
            $ret = ($p1 || $p2 || $p3 || $p4 || $p5 || $p6 || $p7);
            break;

        default:
            $ret = 0;
            break;
        }

        return $ret;
    }

    /**
     * @ignore
     */
    function VisibleToAdminUser()
    {
        return $this->_HasSufficientPermissions('');
    }

    public function GetAdminMenuItems()
    {
        $out = array();
        if( $this->_HasSufficientPermissions('') ) $out[] = \CmsAdminMenuItem::from_module($this);
        if( $this->CheckPermission('Modify Site Preferences') ) {
            $obj = new CmsAdminMenuItem();
            $obj->module = $this->GetName();
            $obj->section = 'siteadmin';
            $obj->title = $this->Lang('title_adminnav_settings');
            $obj->description = $this->Lang('desc_adminnav_settings');
            $obj->action = 'admin_settings';
            $obj->url = $this->create_url('m1_',$obj->action);
            $out[] = $obj;
        }
        return $out;
    }

    /**
     * @ignore
     */
    protected function _DisplayErrorPage($id, &$params, $returnid, $message='')
    {
        echo $this->DisplayErrorMessage($message);
    }

    /**
     * @ignore
     */
    function DoAction($action, $id, $params, $returnid = -1)
    {
        if( isset($params['feu_enc']) ) {
            // restore parameters saved in the session on redirect.
            $sig = $params['feu_enc'];
            unset($params['feu_enc']);
            if( isset($_SESSION[$sig]) ) {
                $tmp = $_SESSION[$sig];
                unset($_SESSION[$sig]);
                $params = array_merge($tmp,$params);
            }
        }

        if( $action == 'default' ) {
            $form = 'login';
            if( $this->LoggedInId() ) $form = 'logout';
            $form = \cge_param::get_string($params,'form',$form);
            switch( $form ) {
            case 'login':
            case 'forgotpw':
            case 'silent':
            case 'changesettings':
            case 'lostusername':
                $action = $form;
                break;

            case 'logout':
                $action = 'logoutform';
                break;

            default:
                throw new \LogicExcception("$form is an invalid value for the form parameter");
            }
        }

        switch ($action) {
        case 'changesettings_url':
            break;

        default:
            parent::DoAction($action,$id,$params,$returnid);
            break;
        }
    }

    /**
     * @internal
     * @deprecated
     */
    function myRedirect( $id, $action, $returnid, $params = array(), $ignore_returnto = false )
    {
        // find any parameter values that are arrays
        // automatically store this data in the session
        unset($params['action'],$params['returnid']);

        $sig = md5(__METHOD__.time().serialize($params));
        $_SESSION[$sig] = $params;
        $params = [ 'feu_enc' => $sig ];
        $this->Redirect( $id, $action, $returnid, $params );
    }

    /**
     * @internal
     */
    public function GetHeaderHTML()
    {
        $txt = parent::GetHeaderHTML();
        $tmpl =<<<EOT
{JQueryTools action='require' lib='tablesorter,JQueryTools'}
{JQueryTools action='placemarker'}
EOT;

        $obj = cms_utils::get_module('JQueryTools','1.2');
        if( is_object($obj) ) {
            $smarty = Smarty_CMS::get_instance();
            $txt .= $smarty->fetch('string:'.$tmpl);
        }
        return $txt;
    }

    /**
     * send an event that this user account has been expired
     * @internal
     */
    protected function NotifyExpiredUser( $userid )
    {
        $user = $this->GetUserInfo( $userid );
        if( $user[0] == FALSE ) return; // this should be an error
        $parms = array();
        $parms['id'] = $userid;
        $parms['username'] = $user[1]['username'];
        $this->SendEvent('OnExpireUser',$parms);
        $this->_SendNotificationEmail('OnExpireUser',$parms);
    }

    /**
     * @internal
     */
    public function is_allowed_upload($srcfile)
    {
        $allowed_extensions=$this->GetPreference('allowed_image_extensions','.gif,.png,.jpg');
        $tmp = explode( ',', $allowed_extensions);

        foreach( $tmp as $ext ) {
            if( endswith( $srcfile, $ext ) ) return TRUE;
        }
        return FALSE;
    }

    /**
     * @internal
     * @todo: move me out of here
     */
    public function get_upload_dirurl()
    {
        $config = \cms_config::get_instance();
        $dn = cms_join_path($config['uploads_url'],$this->GetPreference('image_destination_path', 'feusers'));
        $dn = str_replace('\\','/',$dn);
        return $dn;
    }

    /**
     * @internal
     */
    public function get_upload_dirname()
    {
        $config = \cms_config::get_instance();
        $dn = cms_join_path($config['uploads_path'],$this->GetPreference('image_destination_path', 'feusers'));
        return $dn;
    }

    /**
     * @internal
     */
    public function get_upload_filename($fldname,$srcfile)
    {
        // get the filename only, not the directory
        $ext = strchr($srcfile,'.');
        return md5(__FILE__.session_id().$fldname.$srcfile).$ext;
    }

    /**
     * @internal
     */
    public function ManageImageUpload($key, $fldname)
    {
        $res = \feu_utils::checkUpload($key);
        if( !$res[0] ) return $res;

        $file = $_FILES[$key];
        // set the destination name
        $destDir = $this->get_upload_dirname();
        $destname = $this->get_upload_filename($fldname,$file['name']);

        // Create the destination directory if necessary
        @mkdir($destDir,0777,TRUE);
        @touch($destdir.'/index.html');
        if( !is_writable( $destDir ) ) return [ false, $mod->Lang('error_destinationnotwritable') ];
        @cms_move_uploaded_file($file['tmp_name'], cms_join_path($destDir,$destname));

        return [ true, $destname ];
    }

    /**
     * @internal
     * @deprecated
     */
    protected function _SendNotificationEmail($event,$params)
    {
        $notifications = explode(',',$this->GetPreference('notifications',''));
        if( !in_array( $event, $notifications ) ) return;
        $dest = trim($this->GetPreference('notification_address'));
        if( empty($dest) ) return;
        if( !is_email($dest) ) {
            audit('',$this->GetName(),'Invalid email address specified for notification emails');
            return;
        }

        // Setup some smarty stuff.
        $tpl = $this->CreateSmartyTemplate('notification_template');
        $tpl->assign('event',$event);
        foreach( $params as $key => $value ) {
            $tpl->assign('param_'.$key,$value);
            $tpl->assign($key,$value);
        }
        $text = $tpl->fetch();

        $cmsmailer = new \cms_mailer();
        $cmsmailer->reset();
        $cmsmailer->AddAddress($dest);
        $cmsmailer->SetSubject($this->GetPreference('notification_subject'));
        $cmsmailer->SetBody($text);
        $cmsmailer->IsHTML(false);
        $cmsmailer->Send();
    }

    /**
     * @internal
     */
    public function SetPostLoginURL($url)
    {
        if( $url ) $this->session_put('postlogin_url',$url);
    }

    /**
     * @internal
     */
    public function GetPostLoginURL()
    {
        $out = $this->session_get('postlogin_url');
        $this->session_clear('postlogin_url');
        return $out;
    }

    //////////////////////////////////////////
    //  API FUNCTIONS //
    //////////////////////////////////////////

    /**
     * @internal
     */
    function add_history( $uid, $message )
    {
        $this->_load();
        return $this->usermanip->add_history( $uid, $message );
    }

    /**
     * Add a new group
     *
     * @param string $name The group name
     * @param string $description The group description
     * @return array Array containing two elements.  The first element is the return status of the function (boolean), the second element is either a message in the
     *    case of an error, or the group id (integer) on success.
     */
    function AddGroup( $name, $description )
    {
        $this->_load();
        return $this->usermanip->AddGroup( $name, $description );
    }


    /**
     * Add a new group property relation.
     *
     * @param int $grpid The group id
     * @param string $propname The property name
     * @param int $sortkey The sorting order for this relationship
     * @param int $required The required flag for this relationship.  0==off 1==optional, 2==required
     * @param boolean $lostun Wether this relationship should be used for the lostun stuff (deprecated)
     * @return array First element of the array is the return status, second element is the error message, if any.
     */
    function AddGroupPropertyRelation( $grpid, $propname, $sortkey, $lostun, $required )
    {
        $this->_load();
        return $this->usermanip->AddGroupPropertyRelation( $grpid, $propname, $sortkey, $lostun, $required );
    }


    /**
     * Add a new property definition
     *
     * @param string $name The property name
     * @param string $prompt The property prompt for use in various views
     * @param int $type The field type
     * @param int $length The default length for rendering the property
     * @param int $maxlength The maximum length for rendering the property
     * @param string $attribs A serialized array of attributes for the property
     * @param bool $force_unique Whether or not the value for this property should be unique across all users.
     * @param bool $encrypt Whether or not this data should be encrypted in the database.
     */
    function AddPropertyDefn( $name, $prompt, $type, $length, $maxlength = 0, $attribs = '', $force_unique = 0, $encrypt = 0 )
    {
        $this->_load();
        return $this->usermanip->AddPropertyDefn( $name, $prompt, $type, $length, $maxlength, $attribs, $force_unique, $encrypt  );
    }


    /**
     * Set select options for a dropdown/radio-button-group or multiselect property.
     *
     * @param string $name The property name
     * @param array $seloptions the Select options.
     */
    function AddSelectOptions( $name, $seloptions )
    {
        $this->_load();
        return $this->usermanip->AddSelectOptions( $name, $seloptions );
    }


    /**
     * Add a user to the syetem
     *
     * @param string $name The new username
     * @param string $password The plain text password
     * @param int $expires the Unix timestamp of the expiry date
     * @return array The first element of the array is a boolean indicating success or failure, the second element is an error message, or the new UID.
     */
    function AddUser( $name, $password, $expires )
    {
        $this->_load();
        return $this->usermanip->AddUser( $name, $password, $expires );
    }


    /**
     * Assign the specified user to the specified group
     *
     * @param int $uid The user identifier
     * @param int $gid The group identifier
     * @return boolean
     */
    function AssignUserToGroup( $uid, $gid )
    {
        $this->_load();
        return $this->usermanip->AssignUserToGroup( $uid, $gid );
    }


    /**
     * @ignore
     */
    function CountTempCodeRecords()
    {
        $this->_load();
        return $this->usermanip->CountTempCodeRecords();
    }


    /**
     * Count the number of non disabled users in a group, or in the entire system.
     *
     * @param int $gid Optional group identifier.
     * @return int
     */
    function CountUsersInGroup( $gid = '' )
    {
        $this->_load();
        return $this->usermanip->CountUsersInGroup( $gid );
    }


    /**
     * Delete all property relations for a group
     *
     * @internal
     * @param int $groupid
     * @return array The first element of the array is the boolean result, second element (if any) is an error message.
     */
    function DeleteAllGroupPropertyRelations( $grpid )
    {
        $this->_load();
        return $this->usermanip->DeleteAllGroupPropertyRelations( $grpid );
    }


    /**
     * Permanently remove a property
     *
     * @param string $name The property name
     * @return boolean
     */
    function DeletePropertyDefn( $name )
    {
        $this->_load();
        return $this->usermanip->DeletePropertyDefn( $name );
    }


    /**
     * Delete all property definitions.
     *
     * @internal
     */
    function DeletePropertyDefns()
    {
        $this->_load();
        return $this->usermanip->DeletePropertyDefns();
    }

    /**
     * Delete the select options (if any) for a property
     *
     * @param string $name The property name
     * @return array The first element of the array is a boolean status, the second element (if any) is an error message.
     */
    function DeleteSelectOptions( $name )
    {
        $this->_load();
        return $this->usermanip->DeleteSelectOptions( $name );
    }

    /**
     * Completely delete a user from the database.  Including all properties, group memberships, etc.
     *
     * @param int $uid The user identifier to delete.
     * @return array The first element of the array is a boolean status, the second element (if any) is an error message.
     */
    function DeleteUserFull( $uid )
    {
        $this->_load();
        return $this->usermanip->DeleteUserFull( $uid );
    }

    /**
     * Remove a specified property for all users, but do not remove the property definition.
     *
     * @param string $title The property name
     * @return boolean
     */
    function DeleteUserPropertyByName( $title )
    {
        $this->_load();
        return $this->usermanip->DeleteUserPropertyByName($title);
    }

    /**
     * Delete a user property for a specific user.
     *
     * @param string $title The property name
     * @param boolean $all Wether or not to delete all properties for the user.
     * @return boolean
     */
    function DeleteUserProperty($title,$all=false)
    {
        $this->_load();
        return $this->usermanip->DeleteUserProperty($title,$all);
    }

    /**
     * Delete all user properties, for all users
     *
     * @internal
     * @return boolean
     */
    function DeleteAllUserProperties()
    {
        $this->_load();
        return $this->usermanip->DeleteAllUserProperties();
    }

    /**
     * Delete all user properties for the specified user.
     *
     * @param int $userid The userid
     * @return boolean
     */
    function DeleteAllUserPropertiesFull($userid)
    {
        $this->_load();
        return $this->usermanip->DeleteAllUserPropertiesFull($userid);
    }

    /**
     * Delete specified user properties for the specified user.
     *
     * @param string $title The property name
     * @param int $userid The userid
     * @param boolean $all Wether or not to delete all properties for the specified user.
     */
    function DeleteUserPropertyFull($title,$userid,$all=false)
    {
        $this->_load();
        return $this->usermanip->DeleteUserPropertyFull($title,$userid,$all);
    }

    /**
     * Delete a specified group.
     *
     * @param int $gid The group identifier
     * @return array The first element of the array is a boolean status, the second element (if any) is an error message.
     */
    function DeleteGroupFull( $gid )
    {
        $this->_load();
        return $this->usermanip->DeleteGroupFull( $gid );
    }

    /**
     * Delete the specified user account.
     *
     * @deprecated
     * @see DeleteUserFull
     * @param int $id The uid
     * @return array The first element of the array is a boolean status, the second element (if any) is an error message.
     */
    function DeleteUser($id)
    {
        $this->_load();
        return $this->usermanip->DeleteUser( $id );
    }

    /**
     * @ignore
     */
    function ExpireUsers()
    {
        $this->_load();
        return $this->usermanip->ExpireUsers();
    }

    /**
     * @ignore
     */
    function ExpireTempCodes( $expirycode )
    {
        $this->_load();
        return $this->usermanip->ExpireTempCodes( $expirycode );
    }

    /**
     * Generate a random username
     *
     * @param string $prefix an optional prefix for the username
     * @return string
     */
    function GenerateRandomUsername( $prefix = 'user' )
    {
        $this->_load();
        return $this->usermanip->GenerateRandomUsername( $prefix );
    }

    /**
     * Get all properties for the specified user.
     *
     * @param int $uid The user identifier
     * @return array The user properties as read from the database.
     */
    function GetUserProperties($uid)
    {
        $this->_load();
        return $this->usermanip->GetUserProperties($uid);
    }

    /**
     * Get a list of the specified users groups (if any)
     *
     * @param int $userid The user identifier
     * @return null|array If the user is a member of any groups the resulting array will contail the userid, and the groupid in each element of the returned array.
     */
    function GetMemberGroupsArray($userid)
    {
        $this->_load();
        return $this->usermanip->GetMemberGroupsArray($userid);
    }

    /**
     * Get a property value for the currently logged in user.
     *
     * @param string $title The property name
     * @param mixed $defaultvalue An optional default value if the property is not set for the user.  Note, an empty string may be a valid property value.
     * @return string (All properties are stored as strings in the database)
     */
    function GetUserProperty($title,$defaultvalue=false)
    {
        $this->_load();
        return $this->usermanip->GetUserProperty( $title, $defaultvalue );
    }

    /**
     * Get a property value for the specified user id
     *
     * @param string $title the property name
     * @param int $userid The user identifier
     * @param mixed $defaultvalue An optional default value if the property is not set for the user.  Note, an empty string may be a valid property value.
     * @return string (All properties are stored as strings in the database)
     */
    function GetUserPropertyFull($title,$userid, $defaultvalue=false)
    {
        $this->_load();
        return $this->usermanip->GetUserPropertyFull($title,$userid,$defaultvalue);
    }

    /**
     * @ignore
     */
    function GetUserTempCode( $uid )
    {
        $this->_load();
        return $this->usermanip->GetUserTempCode( $uid );
    }

    /**
     * Get the group property relations for the specified property, for all groups.
     *
     * @param string $title the property title.
     * @return array
     */
    function GetPropertyGroupRelations( $title )
    {
        $this->_load();
        return $this->usermanip->GetPropertyGroupRelations( $title );
    }

    /**
     * Get the property relations for the specified user
     *
     * @param int $uid
     * @return array
     */
    function GetUserPropertyRelations($uid)
    {
        $this->_load();
        return $this->usermanip->GetUserPropertyRelations( $uid );
    }

    /**
     * Get the property relations for the specified group
     *
     * @param int $grpid The group identifier
     * @return array
     */
    function GetGroupPropertyRelations( $grpid )
    {
        $this->_load();
        return $this->usermanip->GetGroupPropertyRelations( $grpid );
    }

    /**
     * Get the group information for the specified group
     *
     * @param int $gid The group identifier
     * @return array
     */
    function GetGroupInfo( $gid )
    {
        $this->_load();
        return $this->usermanip->GetGroupInfo( $gid );
    }

    /**
     * Get user history records, by descending date.
     * Warning: This could potentially return a very large array.
     *
     * @param int $uid
     * @param string $action An optional action filter (such as login or logout)
     * @param int $count An optional limit
     * @return array
     */
    function GetUserHistory( $uid, $action = '', $count = -1 )
    {
        $this->_load();
        return $this->usermanip->GetUserHistory($uid,$action,$count);
    }

    /**
     * Get a list of the currently logged in users.
     *
     * @param int $not_active_since An optional unix timestamp filter indicating last activity.
     * @return int[] Array of logged in uids.
     */
    function GetLoggedInUsers( $not_active_since = '' )
    {
        $this->_load();
        return $this->usermanip->GetLoggedInUsers($not_active_since);
    }


    /**
     * @itnore
     */
    function GetBulkUserInfo( $uids, $deep = TRUE )
    {
        $this->_load();
        return $this->usermanip->GetBulkUserInfo($uids,$deep);
    }


    /**
     * Get user information for the specified user.
     *
     * @param int $uid
     * @param bool $deep Optionally also retrieve property values.
     * @return array
     */
    function GetUserInfo( $uid, $deep = FALSE )
    {
        $this->_load();
        return $this->usermanip->GetUserInfo( $uid, $deep );
    }

    /**
     * Get user information for the specified user, by his username.
     *
     * @param string $username
     * @return array
     */
    function GetUserInfoByName( $username )
    {
        $this->_load();
        return $this->usermanip->GetUserInfoByName( $username );
    }


    /**
     * Get info for the users by their group.
     * Warning: This could potentially return alot of data.
     *
     * @param int $gid
     * @return array Array of userinfo data.  One element per user.
     */
    function GetFullUsersInGroup($gid)
    {
        $this->_load();
        return $this->usermanip->GetFullUsersInGroup($gid);
    }

    /**
     * @ignore
     * @deprecated
     */
    function GetUsersInGroup( $gid = '', $regex = '', $limit = '', $sort = '',
                              $property = '', $propregex = '', $loggedinonly = 0, $start_record = 0)
    {
        $this->_load();
        return $this->usermanip->GetUsersInGroup( $gid, $regex, $limit, $sort, $property, $propregex, $loggedinonly, $start_record );
    }

    /**
     * @ignore
     * @deprecated
     */
    function get_lastuserquery_matches()
    {
        $this->_load();
        return $this->usermanip->get_lastuserquery_matches();
    }

    /**
     * @ignore
     * @deprecated
     */
    function get_lastuserquery_count()
    {
        $this->_load();
        return $this->usermanip->get_lastuserquery_count();
    }

    /**
     * @ignore
     * @deprecated
     */
    function reset_lastuserquery()
    {
        $this->_load();
        return $this->usermanip->reset_lastuserquery();
    }

    /**
     * Test if the guid specified is a valid, existing group id.
     *
     * @param int $gid
     * @return bool
     */
    function GroupExistsByID( $gid )
    {
        $this->_load();
        return $this->usermanip->GroupExistsByID( $gid );
    }

    /**
     * Test if the group name specified is a valid, existing group.
     *
     * @param string $name The group name.
     * @return bool
     */
    function GroupExistsByName( $name )
    {
        $this->_load();
        return $this->usermanip->GroupExistsByName( $name );
    }

    /**
     * The email of the currently logged in user for this request.
     *
     * @return string
     */
    function LoggedInEmail()
    {
        $this->_load();
        return $this->usermanip->LoggedInEmail();
    }

    /**
     * Get the email address of the specified user.
     *
     * @param int $uid
     * @return string
     */
    function GetEmail($uid)
    {
        $this->_load();
        return $this->usermanip->GetEmail($uid);
    }

    /**
     * @internal
     * @ignore
     */
    function ClearPropertyCache()
    {
        $this->_load();
        return $this->usermanip->ClearPropertyCache();
    }

    /**
     * Get all property definitions.
     *
     * @return array
     */
    function GetPropertyDefns()
    {
        $this->_load();
        return $this->usermanip->GetPropertyDefns();
    }

    /**
     * Get a property definition record by its name
     *
     * @param string $name the property name.
     * @return array
     */
    function GetPropertyDefn( $name )
    {
        $this->_load();
        return $this->usermanip->GetPropertyDefn( $name );
    }

    /**
     * Return select options for a property as a simple, or a 2 dimensional array
     *
     * @param string $name The property name
     * @param int $dim  If 1, return a simple associative array.  If 2, return a multi-dimensional array with properties option_name, option_text and control_name
     */
    function GetSelectOptions( $name, $dim = 1 )
    {
        $this->_load();
        return $this->usermanip->GetSelectOptions( $name, $dim );
    }

    /**
     * Get the username for a specified uid
     *
     * @param int $userid
     * @return string
     */
    function GetUserName($userid)
    {
        $this->_load();
        return $this->usermanip->GetUserName($userid);
    }

    /**
     * Get the userid for a specified username
     *
     * @param string $username
     * @return it
     */
    function GetUserID($username)
    {
        $this->_load();
        return $this->usermanip->GetUserID($username);
    }

    /**
     * Get the group name for a specified group id
     *
     * @param int $groupid
     * @return string
     */
    function GetGroupName($groupid)
    {
        $this->_load();
        return $this->usermanip->GetGroupName( $groupid );
    }

    /**
     * Get the descriptionf or a specified group id
     *
     * @param int $groupid
     * @return string
     */
    function GetGroupDesc($groupid)
    {
        $this->_load();
        return $this->usermanip->GetGroupDesc( $groupid );
    }

    /**
     * Get a list of the groups, for use in a dropdown.
     *
     * @return array
     */
    function GetGroupList()
    {
        $this->_load();
        return $this->usermanip->GetGroupList();
    }

    /**
     * Get a full group list, with all information about that group.
     *
     * @param bool $with_count optionally include membership info.
     * @return array
     */
    function GetGroupListFull($with_count = FALSE)
    {
        $this->_load();
        return $this->usermanip->GetGroupListFull($with_count);
    }

    /**
     * Given a group name, get a group id.
     *
     * @param string $groupname
     * @return int
     */
    function GetGroupID($groupname)
    {
        $this->_load();
        return $this->usermanip->GetGroupID( $groupname );
    }

    /**
     * Get the list of groups (by name) that a user is a member of.
     *
     * @param int $userid
     * @return string[]
     */
    function GetMemberGroups($userid)
    {
        $this->_load();
        return $this->usermanip->GetMemberGroups($userid);
    }

    /**
     * Get the date that a user account expires.
     *
     * @param $uid
     * @return int A unix timestamp of the expiry date.
     */
    function GetExpiryDate( $uid )
    {
        $this->_load();
        return $this->usermanip->GetExpiryDate( $uid );
    }

    /**
     * Test if the specified account is expired.
     *
     * @param int $uid
     * @return bool
     */
    function IsAccountExpired( $uid )
    {
        $this->_load();
        return $this->usermanip->IsAccountExpired( $uid );
    }

    /**
     * Test if the specified plain text password is suitable (matches module settings)
     *
     * @param string $password
     * @return bool
     */
    function IsValidPassword( $password )
    {
        $this->_load();
        return $this->usermanip->IsValidPassword( $password );
    }

    /**
     * Get the prompt for a username.
     * This may change based on module settings.
     *
     * @return string
     */
    function GetUsernamePrompt()
    {
        $this->_load();
        return $this->usermanip->GetUsernamePrompt();
    }

    /**
     * Test if the email specified is valid, and optionally not used.
     *
     * @param string $email The email address to test
     * @param int $uid If speciied, this value will be used to ensure that the email addresss is stored in the database and not associated with any other users.
     * @param boolean $check_existing.  If specified, this flag indicates that the system should check if the email address is not used currently in the system.
     * @return boolean indicating wether this email address can be used within the system.
     */
    function IsValidEmailAddress( $email, $uid = -1, $check_existing = FALSE )
    {
        $this->_load();
        return $this->usermanip->IsValidEmailAddress( $email, $uid, $check_existing );
    }

    /**
     * Test wether the specified username is valid for the system.
     *
     * @param string $username
     * @param boolean $check Optionally test whether this username is in current use.
     * @param int $uid If $check is true, indicate an optional uid to exclude from the check
     * @return boolean
     */
    function IsValidUsername( $username, $check = true, $uid = -1 )
    {
        $this->_load();
        return $this->usermanip->IsValidUsername( $username, $check, $uid );
    }

    /**
     * Validate the user password.
     * This is is not a login operation, but does perform the validation of the password.
     *
     * @param string $username The user name
     * @param string $password The plain text password.
     * @param string $groups An optional comma separated list of group names.  If specified, the user must also belong to one of these groups.
     * @return boolean
     */
    function CheckPassword($username, $password, $groups = '')
    {
        $this->_load();
        return $this->usermanip->CheckPassword($username, $password, $groups);
    }

    /**
     * Log the user into the system.
     *
     * @param string $username
     * @param string $password The plain text password
     * @param string $groups An optional comma separated list of group names.  If specified, the user must also belong to one of these groups.
     * @param boolean $ignored No longer used
     * @param boolean $force_lgout Force the user to a logged out state before being logged in again.
     * @return array The first element of the array is either the uid or FALSE.  If false, the second element is an error string.
     */
    function Login( $username, $password, $groups = '', $ignored = false, $force_logout = false)
    {
        $this->_load();
        return $this->usermanip->Login( $username, $password, $groups, false, $force_logout);
    }

    /**
     * The username of the currently logged in user for this request.
     *
     * @return string
     */
    function LoggedInName()
    {
        $this->_load();
        $str = $this->usermanip->LoggedInName();
        return $str;
    }

    /**
     * Logout the specified user, or the current user.
     *
     * @param int $uid An optional uid.  If not specified, the current logged in uid for this request will be used.
     * @param string $message An optional string to include in thie history log.
     */
    function Logout($uid = '',$message = 'logout')
    {
        $this->_load();
        return $this->usermanip->Logout($uid,$message);
    }

    /**
     * Logout the specified user.
     *
     * @param int $uid An optional uid.  If not specified, the current logged in uid for this request will be used.
     * @param string $message An optional string to include in thie history log.
     */
    function LogoutUser($uid,$eventmsg = 'logout')
    {
        $this->_load();
        return $this->usermanip->LogoutUser($uid,$eventmsg);
    }

    /**
     * Return the uid of the current logged in user for this request.
     *
     * @return int
     */
    function LoggedInId()
    {
        $this->_load();
        return $this->usermanip->LoggedInId();
    }

    /**
     * Test whether the current site visitor is logged in to FrontEndUsers
     *
     * @return boolean
     */
    function LoggedIn()
    {
        $tmp = $this->LoggedInId();
        if( $tmp > 0 ) return TRUE;
        return FALSE;
    }

    /**
     * Test whether the specified user is a member of the specified group.
     *
     * @param int $userid
     * @param int $groupid
     * @return boolean
     */
    function MemberOfGroup($userid,$groupid)
    {
        $this->_load();
        return $this->usermanip->MemberOfGroup($userid,$groupid);
    }

    /**
     * @ignore
     * @internal
     */
    function RemoveUserTempCode( $uid )
    {
        $this->_load();
        return $this->usermanip->RemoveUserTempCode( $uid );
    }

    /**
     * Remove the specified user from the specified group.
     *
     * @param int $uid
     * @param int $gid
     * @return array The first element of the array is a boolean status.  If false, the second element is an error string.
     */
    function RemoveUserFromGroup( $uid, $gid )
    {
        $this->_load();
        return $this->usermanip->RemoveUserFromGroup( $uid, $gid );
    }

    /**
     * @ignore
     * @internal
     */
    function SetUserTempCode( $uid, $code )
    {
        $this->_load();
        return $this->usermanip->SetUserTempCode( $uid, $code, $this->GetPreference('allow_duplicate_reminders') );
    }

    /**
     * Update the information for an existing property definition.
     * This method does not update the properties table if the property is given a new name, or force_unique or encrypt values.
     *
     * @internal
     * @param string $name The property definition name
     * @param string $newname A new name for the property.
     * @param string $prompt The property prompt
     * @param int $length The property input field length
     * @param int $type The property type
     * @param int $maxlength The property input field maximum length.
     * @param string $attribs A serialized array of attributes for the property
     * @param bool $force_unique Force this property to be unique across all users.
     * @param bool $encrypt Force the values of this property to be encrypted when saved.
     * @return boolean
     */
    function SetPropertyDefn( $name, $newname, $prompt, $length, $type, $maxlength = 0, $attribs = '', $force_unique = 0, $encrypt = 0 )
    {
        $this->_load();
        return $this->usermanip->SetPropertyDefn( $name, $newname, $prompt, $type, $length, $maxlength, $attribs, $force_unique, $encrypt );
    }

    /**
     * Set the extra information for a proerty.
     *
     * @param string $name The property name
     * @param string $extra The extra value.
     */
    function SetPropertyDefnExtra($name,$extra)
    {
        $this->_load();
        return $this->usermanip->SetPropertyDefnExtra($name,$extra);
    }

    /**
     * Update a group definition.
     *
     * @param int $gid
     * @param string $name The group name
     * @param string $desc An optional group description
     * @return array The first element of the array is a boolean status.  If false, the second element is an error string.
     */
    function SetGroup( $gid, $name, $desc = null )
    {
        $this->_load();
        return $this->usermanip->SetGroup( $gid, $name, $desc );
    }

    /**
     * Given a plain text password, encrypt it for a user
     *
     * @param int $uid
     * @param string $password
     * @return string
     */
    function EncryptPassword( $uid, $plain_password )
    {
        $this->_load();
        return $this->usermanip->EncryptPassword( $uid, $plain_password );
    }

    /**
     * Set the password for a user
     *
     * @param int $uid
     * @param string $password
     * @return array The first element of the array is a boolean status.  If false, the second element is an error string.
     */
    function SetUserPassword( $uid, $password )
    {
        $this->_load();
        return $this->usermanip->SetUserPassword( $uid, $password );
    }

    /**
     * Toggle a user account as disbled.
     *
     * @param int $uid
     * @param boolean $flag Whether or not the account is disabled.
     */
    function SetUserDisabled( $uid, $flag = TRUE )
    {
        $this->_load();
        $this->usermanip->SetUserDisabled($uid,$flag);
    }

    /**
     * Toggle whether a user is forced to change his password at the next login.
     *
     * @param int $uid
     * @param boolean $flag
     */
    function ForcePasswordChange( $uid, $flag = TRUE )
    {
        $this->_load();
        $this->usermanip->ForcePasswordChange($uid,$flag);
    }

    /**
     * Toggle whether a user is forced to change his settings in some way at the next login.
     *
     * @param int $uid
     * @param boolean $flag
     */
    function ForceChangeSettings( $uid, $flag = TRUE )
    {
        $this->_load();
        $this->usermanip->ForceChangeSettings($uid,$flag);
    }

    /**
     * Toggle whether a user is forced to revalidate themselves
     *
     * @param int $uid
     * @param boolean $flag
     */
    function ForceVerify( $uid, $flag = TRUE )
    {
        $this->_load();
        $this->usermanip->ForceVerify($uid,$flag);
    }

    /**
     * Adjust user details
     *
     * @param int $uid
     * @param string $username The user name
     * @param string $password The users plain text password
     * @param int $expires An optional expiry date.
     */
    function SetUser( $uid, $username, $password, $expires = false )
    {
        $this->_load();
        return $this->usermanip->SetUser( $uid, $username, $password, $expires );
    }

    /**
     * Set explicit group membership.
     * This method does not alter the user properties.
     *
     * @param int $uid
     * @param int[] $grpids
     */
    function SetUserGroups( $uid, $grpids )
    {
        $this->_load();
        return $this->usermanip->SetUserGroups( $uid, $grpids );
    }

    /**
     * Add user to a group
     *
     * does not effect user properties
     * does not validate gid
     * userid is validated
     *
     * @param int user id
     * @param int group id
     * @return boolean
     */
    function AddUserToGroup( $uid, $gid )
    {
        $this->_load();
        return $this->usermanip->AddUserToGroup( $uid, $gid );
    }

    function SetUserProperties( $uid, $props )
    {
        $this->_load();
        return $this->usermanip->SetUserProperties( $uid, $props );
    }

    function SetUserProperty($title,$data)
    {
        $this->_load();
        return $this->usermanip->SetUserProperty($title,$data);
    }

    function IsUserPropertyValueUnique($uid,$title,$value)
    {
        $this->_load();
        return $this->usermanip->IsUserPropertyValueUnique($uid,$title,$value);
    }

    function SetUserPropertyFull($title,$data,$userid)
    {
        $this->_load();
        return $this->usermanip->SetUserPropertyFull($title,$data,$userid);
    }

    function UserExistsByID( $uid )
    {
        $this->_load();
        return $this->usermanip->UserExistsByID( $uid );
    }

    function SetEncryptionKey($uid = -1,$force = FALSE)
    {
        $this->_load();
        return $this->usermanip->SetEncryptionKey( $uid, $force );
    }

    /**
     * @internal
     */
    function DecryptUserData($uid,$data)
    {
        $this->_load();
        return $this->usermanip->DecryptUserData($uid,$data);
    }

    /**
     * @internal
     */
    function HasCapability($capability,$params = array())
    {
        switch( $capability ) {
        case 'content_types':
        case 'content_attributes':
        case 'tasks':
            return TRUE;
        default:
            return FALSE;
        }
    }

    /**
     * @internal
     */
    function get_content_attributes($content_type)
    {
        $tmp = array();
        $attr = new CmsContentTypeProfileAttribute('feu_groups','visitors');
        $attr->set_helper(feu_content_attribute_helper::get_instance());
        $tmp[] = $attr;
        return $tmp;
    }

    /**
     * @internal
     */
    static public function page_type_lang_callback($str)
    {
        $mod = cms_utils::get_module('FrontEndUsers');
        $str = str_replace(' ','_',$str);
        if( $str == 'forgot_password_email' ) $str = 'verify_email';
        $str = 'tpltype_'.$str;
        if( is_object($mod) ) return $mod->Lang($str);
    }

    /**
     * @internal
     */
    static public function reset_page_type_defaults(CmsLayoutTemplateType $type)
    {
        if( $type->get_originator() != 'FrontEndUsers' ) throw new CmsLogicException('Cannot reset contents for this template type');

        $fn = null;
        switch( $type->get_name() ) {
        case 'login form':
            $fn = 'orig_loginform.tpl';
            break;
        case 'logout form':
            $fn = 'orig_logoutform.tpl';
            break;
        case 'chsettings form':
            $fn = 'orig_changesettings.tpl';
            break;
        case 'forgot password form':
            $fn = 'orig_forgotpassword1.tpl';
            break;
        case 'forgot password email':
            $fn = 'orig_forgotpassword2.tpl';
            break;
        case 'forgot password verify':
            $fn = 'orig_forgotpassword3.tpl';
            break;
        case 'force new password':
            $fn = 'orig_force_newpw_form.tpl';
            break;
        case 'lost username form':
            $fn = 'orig_lostunform_template.tpl';
            break;
        case 'lost username confirm':
            $fn = 'orig_lostunform_confirm_template.tpl';
            break;
        case 'view user':
            $fn = 'orig_viewuser_template.tpl';
            break;
        case 'reset session':
            $fn = 'orig_resetsession_template.tpl';
            break;
        case 'verify_form':
        case 'verify form':
            $fn = 'orig_verifyform.tpl';
            break;
        default:
            throw new \LogicException($type->get_name().' is not a known type for the '.$type->get_originator().' originator');
        }

        $fn = cms_join_path(__DIR__,'templates',$fn);
        if( is_file($fn) ) return @file_get_contents($fn);
    }
} // class

// EOF
