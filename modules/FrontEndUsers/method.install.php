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
if( !isset($gCms) ) exit;

if( version_compare(phpversion(),'5.4.3') < 0 ) {
    return "Minimum PHP version of 5.4.3 required";
}

$log_exception = function(\Exception $e) {
    $out = '-- EXCEPTION DUMP --'."\n";
    $out .= "TYPE: ".get_class($e)."\n";
    $out .= "MESSAGE: ".$e->getMessage()."\n";
    $out .= "FILE: ".$e->getFile().':'.$e->GetLine()."\n";
    $out .= "TREACE:\n";
    $out .= $e->getTraceAsString();
    debug_to_log($out,'-- '.__METHOD__.' --');
};

$db = $this->GetDb();
$dict = NewDataDictionary($db);

$taboptarray = array('mysql' => 'ENGINE=InnoDB');

//User list
$flds = "
         id I KEY AUTO NOTNULL,
         username C(80) NOTNULL,
         password C(64) NOTNULL,
         createdate ".CMS_ADODB_DT.",
         expires    ".CMS_ADODB_DT.",
         nonstd   I1,
         disabled I1,
         salt     C(32),
         force_newpw I1,
         force_chsettings I1,
         must_validate I1
        ";
$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_feusers_users", $flds, $taboptarray );
$dict->ExecuteSQLArray( $sqlarray );

//Group list
$flds = "
	     id I KEY AUTO NOTNULL,
	     groupname C(32) NOTNULL,
	     groupdesc C(128)
	    ";
$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_feusers_groups", $flds, $taboptarray );
$dict->ExecuteSQLArray( $sqlarray );

// loggedin
$flds = "
	     sessionid C(255),
	     lastused I,
	     userid I
	    ";
$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_feusers_loggedin", $flds, $taboptarray );
$dict->ExecuteSQLArray( $sqlarray );

//Connections between users and groups
$flds = "
	     userid I KEY NOTNULL,
	     groupid I KEY NOTNULL
	    ";
$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_feusers_belongs", $flds, $taboptarray );
$dict->ExecuteSQLArray( $sqlarray );

//property definition
$flds = "
         name      C(40) KEY NOTNULL,
         prompt    C(255) NOTNULL,
         type      C(20) NOTNULL,
         length    I,
         maxlength I,
         attribs   C(255),
         force_unique I1,
         encrypt   I1,
         extra     X
        ";
$sqlarray = $dict->CreateTableSql(cms_db_prefix()."module_feusers_propdefn", $flds, $taboptarray );
$dict->ExecuteSQLArray( $sqlarray );

//dropdown select options
$flds = "
         order_id		I NOTNULL,
         option_name	C(40) NOTNULL,
         option_text	C(255) NOTNULL,
         control_name	C(40) NOTNULL;
        ";
$sqlarray = $dict->CreateTableSql(cms_db_prefix()."module_feusers_dropdowns", $flds, $taboptarray );
$dict->ExecuteSQLArray( $sqlarray );

// group property map
// used to associate a property to a group
$flds = "
         name    C(40) KEY NOTNULL,
         group_id I KEY NOTNULL,
         sort_key I NOTNULL,
         required I NOTNULL,
         lostunflag I
        ";
$sqlarray = $dict->CreateTableSql(cms_db_prefix()."module_feusers_grouppropmap", $flds, $taboptarray );
$dict->ExecuteSQLArray( $sqlarray );

//user properties
$flds = "
	     id I KEY AUTO NOTNULL,
	     userid I NOTNULL,
	     title C(100) NOTNULL,
	     data X2
	    ";
$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_feusers_properties", $flds, $taboptarray );
$dict->ExecuteSQLArray( $sqlarray );
//$db->CreateSequence( cms_db_prefix()."module_feusers_properties_seq" );

// forgotten password stuff
$flds = "
	     userid I KEY,
         code C(25) NOTNULL,
         created ".CMS_ADODB_DT;
$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_feusers_tempcode", $flds, $taboptarray );
$dict->ExecuteSQLArray( $sqlarray );

// login history stuff
$flds = "
         userid I NOTNULL,
	     sessionid C(32) NOTNULL,
         action C(255) NOTNULL,
         refdate ".CMS_ADODB_DT.",
         ipaddress C(64)";
$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_feusers_history", $flds, $taboptarray );
$dict->ExecuteSQLArray( $sqlarray );

// indexes
$sqlarray = $dict->CreateIndexSQL(cms_db_prefix().'feu_idx_belongs',cms_db_prefix().'module_feusers_belongs','groupid');
$dict->ExecuteSQLArray($sqlarray);
$sqlarray = $dict->CreateIndexSQL(cms_db_prefix().'feu_idx_username',cms_db_prefix().'module_feusers_users','username');
$dict->ExecuteSQLArray($sqlarray);
$sqlarray = $dict->CreateIndexSQL(cms_db_prefix().'feu_idx_expires',cms_db_prefix().'module_feusers_users','expires');
$dict->ExecuteSQLArray($sqlarray);
$sqlarray = $dict->CreateIndexSQL(cms_db_prefix().'feu_idx_refdate',cms_db_prefix().'module_feusers_history','userid,refdate,action');
$dict->ExecuteSQLArray($sqlarray);
$sqlarray = $dict->CreateIndexSQL(cms_db_prefix().'feu_idx_propusertitle',cms_db_prefix().'module_feusers_properties','userid,title');
$dict->ExecuteSQLArray($sqlarray);
$sqlarray = $dict->CreateIndexSQL(cms_db_prefix().'feu_idx_proptitle',cms_db_prefix().'module_feusers_properties','title');
$dict->ExecuteSQLArray($sqlarray);

// setup foreign key relationships
$sql = 'ALTER TABLE '.cms_db_prefix().'module_feusers_belongs ADD FOREIGN KEY (userid) REFERENCES '.cms_db_prefix().'module_feusers_users (id)';
$db->Execute($sql);
$sql = 'ALTER TABLE '.cms_db_prefix().'module_feusers_loggedin ADD FOREIGN KEY (userid) REFERENCES '.cms_db_prefix().'module_feusers_users (id)';
$db->Execute($sql);
$sql = 'ALTER TABLE '.cms_db_prefix().'module_feusers_belongs ADD FOREIGN KEY (groupid) REFERENCES '.cms_db_prefix().'module_feusers_groups (id)';
$db->Execute($sql);
$sql = 'ALTER TABLE '.cms_db_prefix().'module_feusers_dropdowns ADD FOREIGN KEY (control_name) REFERENCES '.cms_db_prefix().'module_feusers_propdefn (name)';
$db->Execute($sql);
$sql = 'ALTER TABLE '.cms_db_prefix().'module_feusers_grouppropmap ADD FOREIGN KEY (group_id) REFERENCES '.cms_db_prefix().'module_feusers_groups (id)';
$db->Execute($sql);
$sql = 'ALTER TABLE '.cms_db_prefix().'module_feusers_grouppropmap ADD FOREIGN KEY (name) REFERENCES '.cms_db_prefix().'module_feusers_propdefn (name)';
$db->Execute($sql);
$sql = 'ALTER TABLE '.cms_db_prefix().'module_feusers_properties ADD FOREIGN KEY (userid) REFERENCES '.cms_db_prefix().'module_feusers_users (id)';
$db->Execute($sql);
$sql = 'ALTER TABLE '.cms_db_prefix().'module_feusers_properties ADD FOREIGN KEY (title) REFERENCES '.cms_db_prefix().'module_feusers_propdefn (name)';
$db->Execute($sql);
$sql = 'ALTER TABLE '.cms_db_prefix().'module_feusers_tempcode ADD FOREIGN KEY (userid) REFERENCES '.cms_db_prefix().'module_feusers_users (id)';
$db->Execute($sql);
$sql = 'ALTER TABLE '.cms_db_prefix().'module_feusers_history ADD FOREIGN KEY (userid) REFERENCES '.cms_db_prefix().'module_feusers_users (id)';
$db->Execute($sql);

$uid = get_userid();
$login_tpl_type = $logout_tpl_type = $chsettings_tpl_type = $forgotpwform_tpl_type = $forgotpwverify_tpl_type =
    $forcenewpw_tpl_type = $lostunform_tpl_type = $lostunconfirm_tpl_type = $viewuser_tpl_type = $resetsession_tpl_type = null;

$mod = $this;
$create_dflt_template = function($new_type) use (&$mod,&$_fix_name,$uid) {
    try {
        $prototype = 'FEU '.$new_type->get_name();
        $tpl = new CmsLayoutTemplate;
        $tpl->set_name($tpl::generate_unique_name($prototype));
        $tpl->set_owner($uid);
        $tpl->set_type($new_type);
        $tpl->set_content($new_type->get_dflt_contents());
        $tpl->set_type_dflt(TRUE); // FEU only had one template of each type.
        $tpl->save();
    }
    catch( \CmsInvalidDataException $e ) {
        $log_exception($e);
        audit('',$mod->GetName(),'Upgrade Problem '.$e->GetMessage());
    }
};

try {
    $login_tpl_type = new \CmsLayoutTemplateType();
    $login_tpl_type->set_originator($this->GetName());
    $login_tpl_type->set_name('login form');
    $login_tpl_type->set_dflt_flag(TRUE);
    $login_tpl_type->set_lang_callback('FrontEndUsers::page_type_lang_callback');
    $login_tpl_type->set_content_callback('FrontEndUsers::reset_page_type_defaults');
    $login_tpl_type->reset_content_to_factory();
    $login_tpl_type->save();

    $logout_tpl_type = new \CmsLayoutTemplateType();
    $logout_tpl_type->set_originator($this->GetName());
    $logout_tpl_type->set_name('logout form');
    $logout_tpl_type->set_dflt_flag(TRUE);
    $logout_tpl_type->set_lang_callback('FrontEndUsers::page_type_lang_callback');
    $logout_tpl_type->set_content_callback('FrontEndUsers::reset_page_type_defaults');
    $logout_tpl_type->reset_content_to_factory();
    $logout_tpl_type->save();

    $chsettings_tpl_type = new \CmsLayoutTemplateType();
    $chsettings_tpl_type->set_originator($this->GetName());
    $chsettings_tpl_type->set_name('chsettings form');
    $chsettings_tpl_type->set_dflt_flag(TRUE);
    $chsettings_tpl_type->set_lang_callback('FrontEndUsers::page_type_lang_callback');
    $chsettings_tpl_type->set_content_callback('FrontEndUsers::reset_page_type_defaults');
    $chsettings_tpl_type->reset_content_to_factory();
    $chsettings_tpl_type->save();

    $forgotpwform_tpl_type = new \CmsLayoutTemplateType();
    $forgotpwform_tpl_type->set_originator($this->GetName());
    $forgotpwform_tpl_type->set_name('forgot password form');
    $forgotpwform_tpl_type->set_dflt_flag(TRUE);
    $forgotpwform_tpl_type->set_lang_callback('FrontEndUsers::page_type_lang_callback');
    $forgotpwform_tpl_type->set_content_callback('FrontEndUsers::reset_page_type_defaults');
    $forgotpwform_tpl_type->reset_content_to_factory();
    $forgotpwform_tpl_type->save();

    $forgotpwemail_tpl_type = new \CmsLayoutTemplateType();
    $forgotpwemail_tpl_type->set_originator($this->GetName());
    $forgotpwemail_tpl_type->set_name('forgot password email');
    $forgotpwemail_tpl_type->set_dflt_flag(TRUE);
    $forgotpwemail_tpl_type->set_lang_callback('FrontEndUsers::page_type_lang_callback');
    $forgotpwemail_tpl_type->set_content_callback('FrontEndUsers::reset_page_type_defaults');
    $forgotpwemail_tpl_type->reset_content_to_factory();
    $forgotpwemail_tpl_type->save();

    $forgotpwverify_tpl_type = new \CmsLayoutTemplateType();
    $forgotpwverify_tpl_type->set_originator($this->GetName());
    $forgotpwverify_tpl_type->set_name('forgot password verify');
    $forgotpwverify_tpl_type->set_dflt_flag(TRUE);
    $forgotpwverify_tpl_type->set_lang_callback('FrontEndUsers::page_type_lang_callback');
    $forgotpwverify_tpl_type->set_content_callback('FrontEndUsers::reset_page_type_defaults');
    $forgotpwverify_tpl_type->reset_content_to_factory();
    $forgotpwverify_tpl_type->save();

    $forcenewpw_tpl_type = new \CmsLayoutTemplateType();
    $forcenewpw_tpl_type->set_originator($this->GetName());
    $forcenewpw_tpl_type->set_name('force new password');
    $forcenewpw_tpl_type->set_dflt_flag(TRUE);
    $forcenewpw_tpl_type->set_lang_callback('FrontEndUsers::page_type_lang_callback');
    $forcenewpw_tpl_type->set_content_callback('FrontEndUsers::reset_page_type_defaults');
    $forcenewpw_tpl_type->reset_content_to_factory();
    $forcenewpw_tpl_type->save();

    $lostunform_tpl_type = new \CmsLayoutTemplateType();
    $lostunform_tpl_type->set_originator($this->GetName());
    $lostunform_tpl_type->set_name('lost username form');
    $lostunform_tpl_type->set_dflt_flag(TRUE);
    $lostunform_tpl_type->set_lang_callback('FrontEndUsers::page_type_lang_callback');
    $lostunform_tpl_type->set_content_callback('FrontEndUsers::reset_page_type_defaults');
    $lostunform_tpl_type->reset_content_to_factory();
    $lostunform_tpl_type->save();

    $lostunconfirm_tpl_type = new \CmsLayoutTemplateType();
    $lostunconfirm_tpl_type->set_originator($this->GetName());
    $lostunconfirm_tpl_type->set_name('lost username confirm');
    $lostunconfirm_tpl_type->set_dflt_flag(TRUE);
    $lostunconfirm_tpl_type->set_lang_callback('FrontEndUsers::page_type_lang_callback');
    $lostunconfirm_tpl_type->set_content_callback('FrontEndUsers::reset_page_type_defaults');
    $lostunconfirm_tpl_type->reset_content_to_factory();
    $lostunconfirm_tpl_type->save();

    $viewuser_tpl_type = new \CmsLayoutTemplateType();
    $viewuser_tpl_type->set_originator($this->GetName());
    $viewuser_tpl_type->set_name('view user');
    $viewuser_tpl_type->set_dflt_flag(TRUE);
    $viewuser_tpl_type->set_lang_callback('FrontEndUsers::page_type_lang_callback');
    $viewuser_tpl_type->set_content_callback('FrontEndUsers::reset_page_type_defaults');
    $viewuser_tpl_type->reset_content_to_factory();
    $viewuser_tpl_type->save();

    $resetsession_tpl_type = new \CmsLayoutTemplateType();
    $resetsession_tpl_type->set_originator($this->GetName());
    $resetsession_tpl_type->set_name('reset session');
    $resetsession_tpl_type->set_dflt_flag(TRUE);
    $resetsession_tpl_type->set_lang_callback('FrontEndUsers::page_type_lang_callback');
    $resetsession_tpl_type->set_content_callback('FrontEndUsers::reset_page_type_defaults');
    $resetsession_tpl_type->reset_content_to_factory();
    $resetsession_tpl_type->save();

    $verifyform_tpl_type = new \CmsLayoutTemplateType();
    $verifyform_tpl_type->set_originator($this->GetName());
    $verifyform_tpl_type->set_name('verify_form');
    $verifyform_tpl_type->set_dflt_flag(TRUE);
    $verifyform_tpl_type->set_lang_callback('FrontEndUsers::page_type_lang_callback');
    $verifyform_tpl_type->set_content_callback('FrontEndUsers::reset_page_type_defaults');
    $verifyform_tpl_type->reset_content_to_factory();
    $verifyform_tpl_type->save();
}
catch( \CmsSQLErrorException $e ) {
    $log_exception($e);
    audit('',$this->GetName(),'Upgrade Error: '.$e->GetMessage());
}
catch( \Exception $e ) {
    $log_exception($e);
    audit('',$this->GetName(),'Upgrade Error: '.$e->GetMessage());
    return 'ERROR: '.$e->GetMessage();
}

// now create the templates themselves.
$create_dflt_template($login_tpl_type);
$create_dflt_template($logout_tpl_type);
$create_dflt_template($chsettings_tpl_type);
$create_dflt_template($forgotpwform_tpl_type);
$create_dflt_template($forgotpwemail_tpl_type);
$create_dflt_template($forgotpwverify_tpl_type);
$create_dflt_template($forcenewpw_tpl_type);
$create_dflt_template($lostunform_tpl_type);
$create_dflt_template($lostunconfirm_tpl_type);
$create_dflt_template($viewuser_tpl_type);
$create_dflt_template($resetsession_tpl_type);
$create_dflt_template($verifyform_tpl_type);

// preferences
$this->SetPreference('min_passwordlength', 6);
$this->SetPreference('max_passwordlength', 20);
$this->SetPreference('enhanced_password',1);
$this->SetPreference('pwrequiredchars','~@#$%^&*=+_-().,!');
$this->SetPreference('min_usernamelength', 4);
$this->SetPreference('max_usernamelength', 40);
$this->SetPreference('user_session_expires', 1800);
$this->SetPreference('cookie_keepalive',0);
$str = 'x'.substr(str_shuffle(md5(time().$config['root_url'].__FILE__)),0,7);
$this->SetPreference('cookiename',$str);
$this->SetPreference('default_group', -1);
$this->SetPreference('required_field_marker', '*');
$this->SetPreference('required_field_color', 'blue');
$this->SetPreference('require_onegroup', 1);
$this->SetPreference('hidden_field_marker', '!');
$this->SetPreference('hidden_field_color', 'green');
$this->SetPreference('pageid_forgotpasswd', '');
$this->SetPreference('pageid_changesettings', '');
$this->SetPreference('pageid_login','');
$this->SetPreference('pageid_logout','');
$this->SetPreference('pageid_afterverify','');
$this->SetPreference('allow_duplicate_emails',0);
$this->SetPreference('username_is_email',1);
$this->SetPreference('passwordfldlength', 20);
$this->SetPreference('usernamefldlength', 40);
$this->SetPreference('allow_repeated_logins',0);
$this->SetPreference('image_destination_path','_feusers');
$this->SetPreference('allowed_image_extensions','.gif,.png,.jpg');
$this->SetPreference('notification_subject',$this->Lang('feu_event_notification'));
$this->SetPreference('expireage_months',60);

$this->SetPreference('use_usersalt',1);

// Events
$this->CreateEvent( 'AfterLoginAuth' );
$this->CreateEvent( 'BeforeLogin' );
$this->CreateEvent( 'OnLogin' );
$this->CreateEvent( 'OnLoginFailed' );
$this->CreateEvent( 'OnLogout' );
$this->CreateEvent( 'OnExpireUser' );
$this->CreateEvent( 'OnCreateUser' );
$this->CreateEvent( 'OnDeleteUser' );
$this->CreateEvent( 'OnUpdateUser' );
$this->CreateEvent( 'OnCreateGroup' );
$this->CreateEvent( 'OnUpdateGroup');
$this->CreateEvent( 'OnDeleteGroup' );
$this->CreateEvent( 'OnRefreshUser' );

// permissions
$this->CreatePermission('Modify FrontEndUserProps','Modify FrontEndUser Properties');