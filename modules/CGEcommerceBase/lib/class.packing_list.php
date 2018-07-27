<?php
namespace CGEcommerceBase;

class packing_list
{
    private $_address;
    private $_boxes = [];

    public function __construct( \cge_address $address, array $items = null )
    {
        $this->_address = $address;
        if( !is_null($items) ) {
            // assume one box.
            $box = new packing_box;
            foreach( $items as $one ) {
                if( ! $one instanceof cg_ecomm_cartitem ) throw new \LogicException('Invalid data passed to '.__METHOD__);
                $ref = md5(serialize($one));
                $box->add_item( $ref, $one );
            }
            $this->_boxes[] = $box;
        }
    }

    public function get_destination()
    {
        return $this->_address;
    }

    public function get_boxes()
    {
        return $this->_boxes;
    }

    public function add_box(packing_box $box)
    {
        if( !count($box->get_items()) ) throw new \LogicException('Cannot add an empty box to a packing list');
        $this->_boxes[] = $box;
    }
}

class packing_box
{
    private $_name;
    private $_length_mm;
    private $_width_mm;
    private $_depth_mm;
    private $_total_weight_gg;
    private $_total_value;
    private $_items = [];

    public function __construct( array $params )
    {
        foreach( $params as $key => $val )  {
            switch( $key ) {
            case 'name':
                $this->_name = trim($val);
                break;
            case 'length':
                $this->_length_mm = ceil((float)$val);
                break;
            case 'width':
                $this->_width_mm = ceil((float)$val);
                break;
            case 'depth':
                $this->_depth_mm = ceil((float)$val);
                break;
            case 'total_weight':
                $this->_total_weight_gg = ceil((float)$val);
                break;
            case 'total_value':
                $this->_total_value = (float) $val;
                break;
            }
        }
        if( !$this->name || $this->length <= 0 || $this->width <= 0 || $this->depth <= 0 )  {
            throw new \LogicException('Invalid parameters provided to construct a packing_box');
        }
    }

    public function add_item( packing_item $item ) {
        $this->_items[] = $item;
        $this->_total_weight_gg += $item->weight;
        $this->_total_value += $item->value;
    }

    public function get_items()
    {
        return array_values($this->_items);
    }

    public function __get($key)
    {
        switch( $key ) {
        case 'name':
            return trim($this->_name);
        case 'width':
            return (int) $this->_width_mm;
        case 'length':
            return (int) $this->_length_mm;
        case 'depth':
            return (int) $this->_depth_mm;
        case 'total_weight':
            return (int) $this->_total_weight_gg;
        case 'total_value':
            return (float) $this->_total_value;
        case 'item_count':
            return count($this->_items);
        default:
            throw new \LogicException("$key is not a gettable member of ".__CLASS__);
        }
    }

    public function __set($key,$val)
    {
        throw new \LogicException("$key is not a settable member of ".__CLASS__);
    }
} // end of class

class packing_item
{
    private $_sku;
    private $_description;
    private $_weight; // in grams
    private $_value; // in cg_ecomm currency units.

    public function __construct( array $parms )
    {
        foreach( $parms as $key => $val ) {
            switch( $key ) {
            case 'sku':
                $this->_sku = trim($val);
                break;
            case 'description':
                $this->_description = trim($val);
                break;
            case 'weight':
                $this->_weight = (int) $val;
                break;
            case 'value':
                $this->_value = (float) $val;
                break;
            }
        }
    }

    public function __get($key)
    {
        switch( $key ) {
        case 'sku':
            return trim($this->_sku);
        case 'description':
            return trim($this->_description);
        case 'weight':
            return (int) $this->_weight;
        case 'value':
            return (float) $this->_value;
        default:
            throw new \LogicException("$key is not a gettable member of ".__CLASS__);
        }
    }

    public function __set($key,$val)
    {
        throw new \LogicException("$key is not a settable member of ".__CLASS__);
    }

}  // end of class
