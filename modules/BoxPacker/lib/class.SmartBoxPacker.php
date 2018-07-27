<?php
namespace BoxPacker;

class SmartBoxPacker
{
    protected $profile;

    public function __construct( $metric_profile )
    {
        $this->profile = $metric_profile;
        foreach( $this->profile->boxes as $box ) {
            if( !$box instanceof MetricBox ) throw new \LogicException('Invalid box list in metric profile for '.__METHOD__);
        }
    }

    protected function remove_item( ItemList $in_list, MetricItem $removeme )
    {
        $out = new ItemList;
        foreach( $in_list as $one ) {
            if( $one->getDescription() != $removeme->getDescription() ) $out->insert( $one );
        }
        return $out;
    }

    protected function create_custom_box( MetricItem $item )
    {
        $width = $item->getWidth();
        $length = $item->getLength();
        $depth = $item->getDepth();
        $weight = $item->getWeight();

        $thickness = $this->profile->oversize_wrapper['thickness'];
        $parm = [];
        $parms['ref'] = $item->getDescription();
        $parms['emptyWeight'] = $this->profile->oversize_wrapper['weight'];
        $parms['maxWeight'] = $weight + $this->profile->oversize_wrapper['weight'];
        $parms['innerWidth'] = $width + $thickness * 2;
        $parms['innerLength'] = $length + $thickness * 2;
        $parms['innerDepth'] = $width + $thickness * 2;
        $parms['outerWidth'] = $parms['innerWidth'] + $thickness * 2;
        $parms['outerLength'] = $parms['innerLength'] + $thickness * 2;
        $parms['outerDepth'] = $parms['innerDepth'] + $thickness * 2;
        $mbox = new MetricBox( $parms );
        $list = new ItemList;
        $list->insert( $item );
        $packedBox = new \DVDoug\BoxPacker\PackedBox( $mbox, $list, 0, 0, 0, 0, $parms['innerWidth'], $parms['innerLength'], $parms['innerDepth'] );
        return $packedBox;
    }

    public function pack( ItemList $metric_items )
    {
        // validate and add the items and boxes.
        $the_packer = new \DVDoug\BoxPacker\Packer;
        foreach( $this->profile->boxes as $box ) {
            $the_packer->addBox( $box );
        }

        $manual_items = [];
        $boxlist = null;
        $iteration = 0;
        do {
            try {
                $iteration++;
                $the_packer->setItems( $metric_items );
                $boxlist = $the_packer->pack();
                break; // it worked, can stop removing items.
            }
            catch( \DVDoug\BoxPacker\ItemTooLargeException $e ) {
                $item = $e->getItem();
                if( $this->profile->oversize_handler == 'error' ) {
                    throw $e;
                }
                // gotta remove this item from the list
                $metric_items = $this->remove_item( $metric_items, $item );
                if( $this->profile->oversize_handler == 'usedflt' ) $manual_items[] = $item;
            }
        } while( $iteration < count($metric_items) );
        // process manual items
        if( count($manual_items) ) {
            foreach( $manual_items as $one_item ) {
                $box = $this->create_custom_box( $one_item );
                $boxlist->insert($box);
            }
        }
        // todo: postprocess boxes
        return $boxlist;
    }
}