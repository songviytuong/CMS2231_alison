<?php
namespace BoxPacker;

class Utils
{
    private $_mod;
    private $_storage;

    public function __construct( \BoxPacker $mod, BoxStorage $storage )
    {
        $this->_mod = $mod;
        $this->_storage = $storage;
    }

    public function get_packing_profile()
    {
        return new PackingProfile( $this->_mod, $this->_storage );
    }
}
