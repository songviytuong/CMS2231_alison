<?php
namespace ProductsByVendor;

class PriceAdjuster extends \Products\PriceAdjuster
{
    private $_markup_factor;

    public function __construct( \ProductsByVendor $mod )
    {
        $pref_val = (float) $mod->GetPreference('markup_percent');
        if( $pref_val >= 1.0 ) {
            $this->_markup_factor = $pref_val;
        } else {
            $this->_markup_factor = 1.0 + $pref_val;
        }
    }

    public function get_adjusted_price(\Products\Product $product, $in_price )
    {
        $out_price = (float) $in_price * $this->_markup_factor;
        return $out_price;
    }

    public function unadjust_price( \Products\Product $product, $in_price )
    {
        $out_price = (float) $in_price / $this->_markup_factor;
        return $out_price;
    }
}
