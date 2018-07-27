<?php
namespace BoxPacker;

class MetricPackingProfile
{
    const HANDLER_IGNORE = 'ignore';
    const HANDLER_ERROR = 'error';
    const HANDLER_USEFLT = 'usedflt';

    private $_oversize_handler;
    private $_oversize_wrapper;
    private $_noweight_handler;
    private $_noweight_dflt;
    private $_nodimensions_handler;
    private $_nodimensions_dflt;
    private $_boxes;

    public function __construct( PackingProfile $in )
    {
        // convert the profile from whatever display units to mm and grams.
        $this->_oversize_handler = $in->oversize_handler;
        $this->_oversize_wrapper['thickness'] = \cg_ecomm_utils::convert_length_to_mm( $in->oversize_wrapper['thickness'] );
        $this->_oversize_wrapper['weight'] = \cg_ecomm_utils::convert_weight_to_grams( $in->oversize_wrapper['weight'] );
        $this->_noweight_handler = $in->noweight_handler;
        $this->_noweight_dflt = \cg_ecomm_utils::convert_weight_to_grams( $in->noweight_dflt );
        $this->_nodimensions_handler = $in->nodimensions_handler;
        $this->_nodimensions_dflt['width'] = \cg_ecomm_utils::convert_length_to_mm( $in->nodimensions_dflt['width'] );
        $this->_nodimensions_dflt['length'] = \cg_ecomm_utils::convert_length_to_mm( $in->nodimensions_dflt['length'] );
        $this->_nodimensions_dflt['depth'] = \cg_ecomm_utils::convert_length_to_mm( $in->nodimensions_dflt['depth'] );
        $boxlist = [];
        foreach( $in->boxes as $box ) {
            $boxlist[] = new MetricBox( $box );
        }
        $this->_boxes = $boxlist;
    }

    public function __get( $key )
    {
        switch( $key ) {
        case 'oversize_handler':
        case 'oversize_wrapper':
        case 'noweight_handler':
        case 'noweight_dflt':
        case 'nodimensions_handler':
        case 'nodimensions_dflt':
        case 'boxes':
            $key = '_'.$key;
            return $this->$key;
        default:
            throw new \LogicException("$key is not a gettable member of ".__CLASS__);
        }
    }

    public function __set( $key, $val )
    {
        throw new \LogicException("$key is not a settable member of ".__CLASS__);
    }

}