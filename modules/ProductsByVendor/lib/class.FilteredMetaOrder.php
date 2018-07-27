<?php
namespace ProductsByVendor;

class FilteredMetaOrder extends MetaOrder
{
    private $_uid;

    public function get_uid()
    {
        return $this->_uid;
    }

    public function __construct( MetaOrder $in, $uid )
    {
        $uid = (int) $uid;
        if( $uid < 1 ) throw new \LogicException('Invalid uid passed to '.__METHOD__);
        $this->_uid = $uid;

        $out = null;
        $tr = $in->get_transactions();
        foreach( $tr as $one ) {
            if( $one->uid != $this->_uid ) continue;
            $out[] = $one;
        }
        parent::__construct( $out );
    }
}