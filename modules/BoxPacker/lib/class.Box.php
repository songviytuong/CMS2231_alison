<?php
namespace BoxPacker;

class Box
{
    private $_data = [ 'id'=>null, 'ref'=>null, 'outer_width'=>null, 'outer_length'=>null, 'outer_depth'=>null, 'empty_weight'=>null,
                       'inner_width'=>null, 'inner_length'=>null, 'inner_depth'=>null, 'max_weight'=>null ];

    public function __construct( array $data = null )
    {
        if( !is_null($data) ) {
            foreach( $data as $key => $val ) {
                $this->setValue( $key, $val );
            }
        }
    }

    public function __get($key)
    {
        switch( $key ) {
        case 'id':
            if( $this->_data[$key] ) return (int) $this->_data[$key];
            break;

        case 'ref':
            return trim($this->_data[$key]);
        case 'outer_width':
        case 'outer_length':
        case 'outer_depth':
        case 'empty_weight':
        case 'inner_width':
        case 'inner_length':
        case 'inner_depth':
        case 'max_weight':
            return (float) $this->_data[$key];
        default:
            throw new \LogicException("$key is not a gettable member of ".__CLASS__);
        }
    }

    public function __set($key, $val)
    {
        throw new \LogicException("$key is not a settable member of ".__CLASS__);
    }

    protected function setValue( $key, $val )
    {
        switch( $key ) {
        case 'name':
            $key = 'ref';
        case 'ref':
            $this->_data[$key] = trim($val);
            break;
        case 'id':
        case 'outer_width':
        case 'outer_length':
        case 'outer_depth':
        case 'empty_weight':
        case 'inner_width':
        case 'inner_length':
        case 'inner_depth':
        case 'max_weight':
            $this->_data[$key] = max(0.0,(float)$val);
            break;
        }
    }
} // end of class