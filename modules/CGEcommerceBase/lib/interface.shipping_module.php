<?php
namespace CGEcommerceBase;

interface shipping_module
{
    public function IsConfigured();
    public function calculate_shipping( packing_list $list );
}
