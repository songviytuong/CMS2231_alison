<?php
namespace CGEcommerceBase;

class shipping_estimate
{
    protected $_description; // string
    protected $_price; // float
    protected $_delivery; // timestamp or null

    public function __construct( $description, $price, $delivery = null )
    {
        $this->_description = trim($description);
        $this->_price = (float) $price;
        if( $delivery ) $this->_delivery = strtotime( $delivery );
    }

    public function __get( $key )
    {
        switch( $key ) {
        case 'description':
            return $this->_description;

        case 'price':
            return $this->_price;

        case 'date':
        case 'delivery':
            return $this->_delivery;
        }
    }

    public function __set( $key, $val ) {
        throw new \LogicException("$key is not a settable member of ".__CLASS__);
    }
}