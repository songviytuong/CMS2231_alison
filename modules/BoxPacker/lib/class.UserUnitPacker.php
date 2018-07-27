<?php
namespace BoxPacker;
use \DVDoug\BoxPacker\PackedBoxList;

class UserUnitPacker extends SmartBoxPacker
{
    private $_user_profile;

    public function __construct( PackingProfile $profile )
    {
        $this->_user_profile = $profile;
        $metric_profile = new MetricPackingProfile( $profile );
        parent::__construct( $metric_profile );
    }

    protected function convert_items( array $items )
    {
        // convert cg_ecomm_cartitems to MetricItems... also expands quantity
        // ref is based on the item summary,  and the index.
        if( !count($items) ) throw new \LogicException('Invalid items array passed to '.__CLASS__);

        $out = new ItemList;
        for( $idx = 0, $nitems = count($items); $idx < $nitems; $idx++ ) {
            $item = $items[$idx];
            // handle items with no weight
            if( $item->get_unit_weight() <= 0.0 ) {
                switch( $this->_user_profile->noweight_handler ) {
                case 'error':
                    throw new InvalidItemException( 'noweight', $item );
                case 'ignore':
                    // ignore this item.
                    continue 2;
                case 'useflt':
                    $item->set_unit_weight( $this->_user_profile->noweight_dflt );
                    break;
                }
            }
            if( !$item->get_dimensions() ) {
                //debug_display($this->_user_profile);
                //die('todo: item has no dimensions');
                switch( $this->_user_profile->nodimensions_handler ) {
                case 'error':
                    throw new InvalidItemException( 'nodimensions', $item );
                case 'ignore':
                    die('ignore');
                    // ignore this item
                    continue 2;
                case 'usedflt':
                    $item->set_dimensions( $this->_user_profile->nodimensions_dflt['width'], $this->_user_profile->nodimensions_dflt['length'],
                                           $this->_user_profile->nodimensions_dflt['depth'] );
                }
            }
            for( $i = 0, $n = $item->get_quantity(); $i < $n; $i++ ) {
                $skuref = $item->get_source().'/'.$item->get_sku();
                $prefix = $skuref.': ';
                $suffix = sprintf(" (%d of %d)",$i+1,$n);
                $ref = $prefix.$item->get_summary().$suffix;
                $new_item = new MetricItem( $skuref, $ref, $item->get_dimensions(), $item->get_unit_weight(), $item->get_unit_price() );
                $out->insert( $new_item );
            }
        }
        return $out;
    }

    public function pack( array $items )
    {
        // we just pass the address along for now.
        if( !count($items) ) throw new \LogicException('No items passed to '.__METHOD__);
        $metric_items = $this->convert_items( $items );
        return parent::pack( $metric_items );
    }

    public function create_packing_list( \cge_address $address, PackedBoxList $in_list )
    {
        if( !count($in_list) ) return;

        $packing_list = new \CGEcommerceBase\packing_list( $address );
        foreach( $in_list as $packed_box ) {
            $mbox = $packed_box->getBox();
            $parms = [ 'name'=> $mbox->getReference() ];
            $parms['length'] = $mbox->getOuterLength();
            $parms['width'] = $mbox->getOuterWidth();
            $parms['depth'] = $mbox->getOuterDepth();
            $parms['total_weight'] = $mbox->getEmptyWeight(); // weight will be added as we add items.

            $packing_box = new \CGEcommerceBase\packing_box( $parms );
            $items = $packed_box->getItems();
            foreach( $items as $item ) {
                $parms = ['sku' => $item->getSKU(), 'description'=>$item->getDescription(),
                          'weight' => $item->getWeight(), 'value'=>$item->getValue() ];
                $packing_item = new \CGEcommerceBase\packing_item( $parms );
                $packing_box->add_item( $packing_item );
            }
            $packing_list->add_box( $packing_box );
        }
        return $packing_list;
    }
} // end of class