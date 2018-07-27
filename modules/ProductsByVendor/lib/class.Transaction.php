<?php
namespace ProductsByVendor;

class Transaction
{
    const TYPE_SALE = 'sale';
    const TYPE_PAYOUT = 'payout';

    private $_data = ['id'=>null, 'type'=>null, 'created'=>null, 'payout_id'=>null, 'summary'=>null, 'uid'=>null,
                      'order_id'=>null, 'product_id'=>null, 'qty'=>null, 'unit_price'=>null, 'amount'=>null ];

    public function __construct(array $in = null)
    {
        if( !is_null($in) ) $this->fill_from_array($in);
    }

    public function __get( $key )
    {
        switch( $key ) {
        case 'id':
        case 'created':
        case 'payout_id':
        case 'uid':
        case 'order_id':
        case 'product_id':
        case 'qty':
            return (int) $this->_data[$key];

        case 'amount':
        case 'unit_price':
            return (float) $this->_data[$key];

        case 'summary':
        case 'type':
            return trim($this->_data[$key]);

        default:
            throw new \LogicException("$key is not a gettable member of ".__CLASS__);
        }
    }

    public function __set( $key, $val )
    {
        throw new \LogicException("$key is not a settable member of ".__CLASS__);
    }

    protected function fill_from_array( array $in )
    {
        foreach( array_keys($this->_data) as $key ) {
            if( !isset($in[$key]) ) continue;
            $val = $in[$key];
            switch( $key ) {
            case 'id':
            case 'created':
            case 'payout_id':
            case 'uid':
            case 'order_id':
            case 'product_id':
            case 'qty':
                $this->_data[$key] = (int) $val;
                break;

            case 'amount':
            case 'unit_price':
                $this->_data[$key] = (float) $val;
                break;

            case 'summary':
            case 'type':
                $this->_data[$key] = trim($val);
            }
        }
    }

    public function from_array( array $in )
    {
        $this->_fill_from_array( $in );
        if( $this->id < 1 ) throw new \LogicException('When filling a '.__CLASS__.' from an array, an id must be provided');
        if( $this->created < 1 || $this->uid < 1 || $this->order_id < 1 || $this->product_id < 1 || $this->amount < 0.001 || !$this->type ) {
            throw new \LogicException('Invalid '.__CLASS__.' generated from '.__METHOD__);
        }
    }
}