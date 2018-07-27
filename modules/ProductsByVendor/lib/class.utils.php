<?php
namespace ProductsByVendor;

final class utils
{
    private function __construct() {}

    private static function get_products()
    {
        static $_mod;
        if( !$_mod ) $_mod = \cms_utils::get_module(MOD_PRODUCTS);
        return $_mod;
    }

    public static function get_product_storage()
    {
        static $_obj;
        if( ! $_obj ) $_obj = self::get_products()->GetProductStorage();
        return $_obj;
    }

    public static function get_product_category_list()
    {
        $list = \product_utils::get_categories();
        if( !count($list) ) return;

        $out = null;
        foreach( $list as $one ) {
            $out[$one->id] = $one->name;
        }
        return $out;
    }

    public static function get_fieldefs()
    {
        return \product_utils::get_fielddefs(true);
    }

    public static function visible_to_feu()
    {
        $mod = \cms_utils::get_module(MOD_PRODUCTS);
        $gid = (int) $mod->GetPreference('feu_ownergroup');
        if( $gid < 1 ) return FALSE;

        $feu = \cms_utils::get_module(MOD_FRONTENDUSERS);
        if( !$feu ) return FALSE;
        if( !($uid = $feu->LoggedInId()) ) return FALSE;
        if( !$feu->MemberofGroup( $uid, $gid) ) return FALSE;
        return $uid;
    }

    public static function reset_notify_settings()
    {
        $mod = \cms_utils::get_module(MOD_PRODUCTSBYVENDOR);
        $subj = 'New or updated sale of your Products';
        $mod->SetPreference('notify_email_subject',$subj);

        $body = null;
        $fn = $mod->find_module_file('templates/orig_notify_email_body.tpl');
        if( is_file($fn) ) $body = @file_get_contents($fn);
        $mod->SetPreference('notify_email_body_tpl',$body);
    }

    public static function find_layout_template($params,$paramname,$typename)
    {
        $paramname = (string) $paramname;
        $typename = (string) $typename;
        if( !is_array($params) || !($thetemplate = \cge_param::get_string($params,$paramname)) ) {
            $tpl = \CmsLayoutTemplate::load_dflt_by_type($typename);
            if( !is_object($tpl) ) {
                audit('',$this->GetName(),'No default '.$typename.' template found');
                return;
            }
            $thetemplate = $tpl->get_name();
            unset($tpl);
        }
        return $thetemplate;
    }

}