<?php
namespace BoxPacker;

class ItemList extends \DVDoug\BoxPacker\ItemList
{
    public function insert( MetricItem $item )
    {
        // just for type checkins.
        parent::insert( $item );
    }
}