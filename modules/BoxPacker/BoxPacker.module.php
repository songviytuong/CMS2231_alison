<?php

\cms_utils::get_module('CGEcommerceBase');

final class BoxPacker extends CGExtensions implements \CGEcommerceBase\packaging_module
{
    protected $box_storage;
    protected $utils;

    public function GetVersion() { return '1.0'; }
    public function GetFriendlyName() { return $this->Lang('friendlyname'); }
    public function GetAdminDescription() { return $this->Lang('admindescription'); }
    public function IsPluginModule() { return TRUE; }
    public function HasAdmin() { return TRUE; }
    public function GetAuthor() { return 'Robert Campbell'; }
    public function GetAuthorEmail() { return 'calguy1000@gmail.com'; }
    public function LazyLoadAdmin() { return TRUE; }
    public function LazyLoadFrontend() { return TRUE; }
    public function MinimumCMSVersion() { return '2.1.5'; }
    public function GetDependencies() { return [ 'CGExtensions'=>'1.55.3', 'FrontEndUsers'=>'2.4', 'CGEcommerceBase'=>'1.7' ]; }
    public function VisibleToAdminUser() { return $this->CheckPermission('Modify Site Preferences');  }
    public function GetAdminSection() { return 'ecommerce'; }
    public function HandlersEvents() { return TRUE; }

    public function SetParameters()
    {
        $this->box_storage = new \BoxPacker\BoxStorage( $this, $this->GetDb() );
        $this->utils = new \BoxPacker\Utils( $this, $this->box_storage );
    }

    public function IsConfigured()
    {
        $profile = $this->utils->get_packing_profile();
        if( !$profile->oversize_handler || !$profile->noweight_handler || !$profile->nodimensions_handler ) return;
        if( !count($profile->boxes) ) return;
        return TRUE;
    }

    public function get_packing_list( \cge_address $address, array $cart_items )
    {
        if( !$this->IsConfigured() ) return;

        require_once(__DIR__.'/vendor/autoload.php');

        try {
            $profile = $this->utils->get_packing_profile();
            $packer = new \BoxPacker\UserUnitPacker( $profile );
            $packed_boxes = $packer->pack( $cart_items );
            $packing_list = $packer->create_packing_list( $address, $packed_boxes );
            return $packing_list;
        }
        catch( \BoxPacker\InvalidItemException $e ) {
            throw new \RuntimeException( $this->Lang('err_'.$e->GetMessage()) );
        }
    }

} // end of class
