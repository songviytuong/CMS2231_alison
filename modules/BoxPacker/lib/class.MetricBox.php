<?php
namespace BoxPacker;

class MetricBox implements \DVDoug\BoxPacker\Box
{
    private $_ref; // string
    private $_outerWidth; // mm
    private $_outerLength; // mm
    private $_outerDepth; // mm
    private $_innerWidth; // mm
    private $_innerLength; // mm
    private $_innerDepth; // mm
    private $_emptyWeight; // g
    private $_maxWeight; // g

    public function __construct( $box )
    {
        if( $box instanceof Box ) {
            $this->_ref = $box->ref;
            $this->_emptyWeight = \cg_ecomm_utils::convert_weight_to_grams( $box->empty_weight );
            $this->_maxWeight = \cg_ecomm_utils::convert_weight_to_grams( $box->max_weight );
            $this->_outerWidth = \cg_ecomm_utils::convert_length_to_mm( $box->outer_width );
            $this->_outerLength = \cg_ecomm_utils::convert_length_to_mm( $box->outer_length );
            $this->_outerDepth = \cg_ecomm_utils::convert_length_to_mm( $box->outer_depth );
            $this->_innerWidth = \cg_ecomm_utils::convert_length_to_mm( $box->inner_width );
            $this->_innerLength = \cg_ecomm_utils::convert_length_to_mm( $box->inner_length );
            $this->_innerDepth = \cg_ecomm_utils::convert_length_to_mm( $box->inner_depth );
        } elseif( is_array( $box ) && isset($box['outerWidth']) && isset($box['ref']) ) {
            $this->_ref = trim($box['ref']);
            $this->_emptyWeight = \cge_param::get_int($box,'emptyWeight');
            $this->_maxWeight = \cge_param::get_int($box,'maxWeight');
            $this->_outerWidth = \cge_param::get_int($box,'outerWidth');
            $this->_outerLength = \cge_param::get_int($box,'outerLength');
            $this->_outerDepth = \cge_param::get_int($box,'outerDepth');
            $this->_innerWidth = \cge_param::get_int($box,'innerWidth');
            $this->_innerLength = \cge_param::get_int($box,'innerLength');
            $this->_innerDepth = \cge_param::get_int($box,'innerDepth');
            if( !$this->_ref ) throw new \LogicException('1 Invalid array passed to '.__METHOD__);
            if( $this->_maxWeight <= 0 ) throw new \LogicException('2 Invalid array passed to '.__METHOD__);
            if( $this->_emptyWeight < 0 ) throw new \LogicException('3 Invalid array passed to '.__METHOD__);
            if( $this->_innerWidth <= 0 ) throw new \LogicException('4 Invalid array passed to '.__METHOD__);
            if( $this->_innerLength <= 0 ) throw new \LogicException('5 Invalid array passed to '.__METHOD__);
            if( $this->_innerDepth <= 0 ) throw new \LogicException('6 Invalid array passed to '.__METHOD__);
            if( $this->_outerWidth <= $this->_innerWidth ) throw new \LogicException('7 Invalid array passed to '.__METHOD__);
            if( $this->_outerLength <= $this->_innerLength ) throw new \LogicException('8 Invalid array passed to '.__METHOD__);
            if( $this->_outerDepth <= $this->_innerDepth ) throw new \LogicException('9 Invalid array passed to '.__METHOD__);
        } else {
            throw new \LogicException('Invalid data passed to '.__METHOD__);
        }
    }

    public function getReference() { return trim($this->_ref); }
    public function getOuterWidth() { return (int) $this->_outerWidth; }
    public function getOuterLength() { return (int) $this->_outerLength; }
    public function getOuterDepth() { return (int) $this->_outerDepth; }
    public function getEmptyWeight() { return (int) $this->_emptyWeight; }
    public function getInnerWidth() { return (int) $this->_innerWidth; }
    public function getInnerLength() { return (int) $this->_innerLength; }
    public function getInnerDepth() { return (int) $this->_innerDepth; }
    public function getInnerVolume() { return (int) $this->_innerWidth * $this->_innerLength * $this->_innerDepth; }
    public function getMaxWeight() { return (int) $this->_maxWeight; }
}