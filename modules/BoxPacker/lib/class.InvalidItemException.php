<?php
namespace BoxPacker;

class InvalidItemException extends \RuntimeException
{
    private $_item;

    public function __construct( $reason, \cg_ecomm_cartitem $item )
    {
        $this->_item = $item;
        parent::__construct( $reason );
    }

    public function getItem()
    {
        return $this->_item;
    }
}