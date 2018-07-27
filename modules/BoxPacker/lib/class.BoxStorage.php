<?php
namespace BoxPacker;

class BoxStorage
{
    private $_mod;
    private $_db;

    public function __construct( \BoxPacker $mod, $db )
    {
        $this->_mod = $mod;
        $this->_db = $db;
    }

    public function get_all()
    {
        $sql = 'SELECT * FROM '.self::box_table_name().' ORDER BY ref';
        $list = $this->_db->GetArray($sql);
        if( !is_array($list) || !count($list) ) return;

        $out = [];
        foreach( $list as $row ) {
            $out[] = new Box( $row );
        }
        return $out;
    }

    public function load_by_id( $id )
    {
        $id = (int) $id;
        if( $id < 1 ) throw new \LogicException('Invalid id passed to '.__METHOD__);

        $sql = 'SELECT * FROM '.self::box_table_name().' WHERE id = ?';
        $row = $this->_db->GetRow( $sql, [ $id ]);
        if( !$row ) return;

        $out = new Box( $row );
        return $out;
    }

    public function validate( Box $box )
    {
        // must have a name
        if( !$box->ref ) throw new \InvalidArgumentException($this->_mod->Lang('err_boxname'));
        if( $box->inner_width <= 0.0 || $box->outer_width < $box->inner_width ) throw new \InvalidArgumentException($this->_mod->Lang('err_boxdimensions'));
        if( $box->inner_length <= 0.0 || $box->outer_length < $box->inner_length ) throw new \InvalidArgumentException($this->_mod->Lang('err_boxdimensions'));
        if( $box->inner_depth <= 0.0 || $box->outer_depth < $box->inner_depth ) throw new \InvalidArgumentException($this->_mod->Lang('err_boxdimensions'));
        if( $box->empty_weight < 0.0 || $box->max_weight < 0.0 ) throw new \InvalidArgumentException($this->_mod->Lang('err_boxweights'));
        if( $box->max_weight < $box->empty_weight ) throw new \InvalidArgumentException($this->_mod->Lang('err_boxweights'));
    }

    public function save( Box $box )
    {
        $this->validate( $box );
        if( !$box->id ) {
            $sql = 'INSERT INTO '.self::box_table_name().' (ref,outer_length,outer_width,outer_depth,empty_weight,inner_width,inner_length,inner_depth,max_weight)
                    VALUES(?,?,?,?,?,?,?,?,?)';
            $this->_db->Execute( $sql,
                                 [$box->ref, $box->outer_length, $box->outer_width, $box->outer_depth, $box->empty_weight,
                                  $box->inner_width, $box->inner_length, $box->inner_depth, $box->max_weight] );
        }
        else {
            $sql = 'UPDATE '.self::box_table_name().' SET ref = ?, outer_width = ?, outer_length = ?, outer_depth = ?, empty_weight = ?,
                    outer_width = ?, outer_length = ?, outer_depth = ?, max_weight = ?';
            $this->_db->Execute( $sql,
                                 [ $box->ref, $box->outer_width, $box->outer_length, $box->outer_depth, $box->empty_weight,
                                   $box->inner_width, $box->inner_length, $box->inner_depth, $box->max_weight] );
        }
    }

    public function delete( $id )
    {
        $id = (int) $id;
        if( $id < 1 ) throw new \LogicException('Invalid id passed to '.__METHOD__);

        $id = 'DELETE FROM '.self::box_table_name().' WHERE id = ?';
        $this->_db->Execute( $sql, [ $id ]);
    }

    public static function box_table_name() { return CMS_DB_PREFIX.'mod_boxpacker'; }
}