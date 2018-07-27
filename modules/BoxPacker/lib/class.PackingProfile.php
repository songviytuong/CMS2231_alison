<?php
namespace BoxPacker;

class PackingProfile
{
    private $_oversize_handler;
    private $_oversize_wrapper;
    private $_noweight_handler;
    private $_noweight_dflt;
    private $_nodimensions_handler;
    private $_nodimensions_dflt;
    private $_boxes;

    public function __construct( \BoxPacker $mod, BoxStorage $storage )
    {
        $this->_oversize_handler = $mod->GetPreference('oversize_handler');
        $this->_oversize_wrapper =  unserialize($mod->GetPreference('oversize_wrapper'));
        $this->_noweight_handler = $mod->GetPreference('noweight_handler');
        $this->_noweight_dflt = $mod->GetPreference('noweight_dflt');
        $this->_nodimensions_handler = $mod->GetPreference('nodimensions_handler');
        $this->_nodimensions_dflt = unserialize($mod->GetPreference('nodimensions_dflt'));
        $this->_boxes = $storage->get_all();
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