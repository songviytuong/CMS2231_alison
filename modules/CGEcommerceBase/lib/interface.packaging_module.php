<?php
namespace CGEcommerceBase;

interface packaging_module
{
    public function IsConfigured();
    public function get_packing_list( \cge_address $address, array $cart_items );
}