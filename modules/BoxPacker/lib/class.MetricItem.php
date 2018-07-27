<?php
namespace BoxPacker;

class MetricItem implements \DVDoug\BoxPacker\Item
{
    private $_sku;
    private $_ref; // string
    private $_width; // mm
    private $_length; // mm
    private $_depth; // mm
    private $_weight; // g
    private $_value; // in currency units.

    public function __construct( $sku, $ref, array $dimensions = null, $weight, $value )
    {
        $this->_sku = $sku;
        $this->_ref = trim($ref);
        if( $dimensions ) {
            $this->_width = \cg_ecomm_utils::convert_length_to_mm( $dimensions[0] );
            $this->_length = \cg_ecomm_utils::convert_length_to_mm( $dimensions[1] );
            $this->_depth = \cg_ecomm_utils::convert_length_to_mm( $dimensions[2] );
        }
        $this->_weight = \cg_ecomm_utils::convert_weight_to_grams( $weight );
        $this->_value = (float) $value;
    }

    public function getSKU() { return $this->_sku; }
    public function getDescription() { return $this->_ref; }
    public function getWidth() { return $this->_width; }
    public function getLength() { return $this->_length; }
    public function getDepth() { return $this->_depth; }
    public function getWeight() { return $this->_weight; }
    public function getVolume() { return $this->_width * $this->_length * $this->_depth; }
    public function getValue() { return $this->_value; }
    public function getKeepFlat() { return false; }
}