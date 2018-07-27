<?php
namespace BoxPacker;

class BoxList extends \DVDoug\BoxPacker\BoxList
{
    public function insert( MetricBox $box )
    {
        // just for type checkins.
        parent::insert( $box );
    }
}