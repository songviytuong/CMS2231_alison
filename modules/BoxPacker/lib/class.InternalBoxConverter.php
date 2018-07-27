<?php
namespace BoxPacker;

class InternalBoxConverter
{
    public function convert_boxes( array $boxes )
    {
        $out = null;
        foreach( $boxes as $box ) {
            if( ! $box instanceof Box ) throw new \LogicException("invalid boxes array passed to ".__METHOD__);

            $out[] = new MetricBox( $box );
        }
        return $out;
    }

    public function convert_items( array $items )
    {
        $out = null;
        foreach( $items as $item ) {
            if( ! $box instanceof \cg_ecomm_cartitem ) throw new \LogicException("invalid boxes array passed to ".__METHOD__);

            $out[] = new MetricItem( $item );
        }
        return $out;
    }
}