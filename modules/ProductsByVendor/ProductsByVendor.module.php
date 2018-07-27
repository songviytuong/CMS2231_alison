<?php

final class ProductsByVendor extends CGExtensions
{
    protected $transactionStorage = null;
    protected $priceAdjuster = null;

    public function GetVersion() { return '1.0'; }
    public function GetFriendlyName() { return $this->Lang('friendlyname'); }
    public function GetAdminDescription() { return $this->Lang('admindescription'); }
    public function IsPluginModule() { return TRUE; }
    public function HasAdmin() { return TRUE; }
    public function GetAuthor() { return 'Robert Campbell'; }
    public function GetAuthorEmail() { return 'calguy1000@gmail.com'; }
    public function LazyLoadAdmin() { return FALSE; }
    public function LazyLoadFrontend() { return FALSE; }
    public function MinimumCMSVersion() { return '2.1.5'; }
    public function GetDependencies() { return ['CGExtensions'=>'1.54.3', 'FrontEndUsers'=>'2.4', 'Products'=>'2.26']; }
    public function VisibleToAdminUser() { return $this->CheckPermission('Modify Site Preferences');  }
    public function InitializeAdmin() { $this->internal_Initialize(); }
    public function GetAdminSection() { return 'ecommerce'; }
    public function HandlersEvents() { return TRUE; }

    public function InitializeFrontend()
    {
        $this->internal_Initialize();
        $this->RegisterModulePlugin();
        $this->SetParameterType('mptpl',CLEAN_STRING);
        $this->SetParameterType('matpl',CLEAN_STRING);
        $this->SetParameterType('eptpl',CLEAN_STRING);
        $this->SetParameterType(CLEAN_REGEXP.'/pbv_.*/',CLEAN_STRING);
        $this->SetParameterType(CLEAN_REGEXP.'/pbvx_.*/',CLEAN_NONE);
    }

    protected function internal_Initialize()
    {
        $this->transactionStorage = new \ProductsByVendor\TransactionStorage( $this->GetDb() );

        $products = \cms_utils::get_module('Products');
        $this->priceAdjuster = new \ProductsByVendor\PriceAdjuster( $this );
        $products->set_price_adjuster( $this->priceAdjuster );
    }

    /**
     * @ignore
     */
    public function HasCapability($capability,$params = array())
    {
        if( $capability == 'tasks' ) return TRUE;
        return FALSE;
    }

    /**
     * @ignore
     */
    public function get_tasks()
    {
        $out = [ new \ProductsByVendor\email_notify_task($this, $this->transactionStorage) ];
        return $out;
    }

    /**
     * @ignore
     */
    public static function tpl_type_lang_cb($str)
    {
        $mod = \cms_utils::get_module('ProductsByVendor');
        $str = str_replace(' ','_',$str);
        if( is_object($mod) ) return $mod->Lang('tpltype_'.$str);
    }

    /**
     * @ignore
     */
    public static function tpl_type_reset_cb(CmsLayoutTemplateType $type)
    {
        $mod = \cms_utils::get_module('ProductsByVendor');
        if( $type->get_originator() != $mod->GetName() ) throw new CmsLogicException('Cannot reset contents for this template type');

        $fn = null;
        switch( $type->get_name() ) {
        case 'Edit Product':
            $fn = 'orig_editproduct.tpl';
            break;
        case 'My Products':
            $fn = 'orig_myproducts.tpl';
            break;
        case 'My Activity':
            $fn = 'orig_myactivity.tpl';
            break;
        }

        if( !$fn ) return;
        $fn = $mod->find_module_file('templates/'.$fn);
        if( is_file($fn) ) return @file_get_contents($fn);
    }

} // end of class
