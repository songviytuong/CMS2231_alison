<?php
namespace ProductsByVendor;

// this is a meta class... (derived from a transaction and user info... there is no storage for this object)
class UnpaidVendorMeta
{
    private $_data = [ 'uid'=>null, 'email'=>null, 'username'=>null, 'unpaid'=>null, 'mindate'=>null, 'maxdate'=>null, 'numorders'=>null ];

    public function __construct( array $params = null )
    {
        foreach( $params as $key => $val ) {
            $this->setValue( $key, $val );
        }
    }

    public function __get( $key )
    {
        switch( $key ) {
        case 'mindate':
        case 'maxdate':
        case 'numorders':
        case 'member_since':
        case 'uid':
        case 'inactive':
            return (int) $this->_data[$key];

        case 'username':
        case 'email':
            return trim($this->_data[$key]);

        case 'unpaid':
            return (float) $this->_data[$key];

        default:
            throw new \LogicException("$key is not a gettable member of ".__CLASS__);
        }
    }

    public function __set( $key, $val )
    {
        throw new \LogicException("$key is not a settable member of ".__CLASS__);
    }

    protected function setValue( $key, $val )
    {
        switch( $key ) {
        case 'mindate':
        case 'maxdate':
        case 'numorders':
        case 'member_since':
        case 'uid':
        case 'inactive':
            $this->_data[$key] = (int) $val;
            break;

        case 'username':
        case 'email':
            $this->_data[$key] = trim($val);
            break;

        case 'unpaid':
            $this->_data[$key] = (float) $val;
            break;

        default:
            throw new \LogicException("$key is not a gettable member of ".__CLASS__);
        }
    }
}