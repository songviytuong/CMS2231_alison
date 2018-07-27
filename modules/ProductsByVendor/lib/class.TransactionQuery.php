<?php
namespace ProductsByVendor;

class TransactionQuery extends \CGExtensions\query\query
{
    private $_data = ['uid'=>null, 'limit'=>100, 'offset'=>0 ];

    public function __construct($params = array())
    {
        if( !count($params) ) return;
        foreach( $params as $key => $val ) {
            try {
                $this->OffsetSet($key,$val);
            }
            catch( \Exception $e ) {
                // nothing here.
            }
        }
    }

    public function OffsetGet( $key )
    {
        switch( $key ) {
        case 'uid':
        case 'limit':
        case 'offset':
            return (int) $this->_data[$key];

        default:
            throw new \LogicException("$key is not a gettable member of ".__CLASS__);
        }
    }

    public function OffsetSet( $key, $val )
    {
        switch( $key ) {
        case 'uid':
            $val = (int) $val;
            if( $val < 1 ) throw new \LogicException('invalid uid value passed to '.__METHOD__);
            $this->_data[$key] = $val;
            break;

        case 'limit':
            $val = (int) $val;
            $this->_data[$key] = max(1,min(10000,$val));
            break;

        case 'offset':
            $val = (int) $val;
            $this->_data[$key] = max(0,$val);
            break;

        default:
            throw new \LogicException("$key is not a settable member of ".__CLASS__);
        }
    }

    public function OffsetExists( $key )
    {
        return in_array( $key, ['uid','limit','offset']);
    }

    public function &execute()
    {
        $obj = new TransactionResultset( $this );
        return $obj;
    }
} // end of class