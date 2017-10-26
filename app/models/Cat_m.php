<?php
class Cat_m extends Model
{
	function __construct(){
		parent::__construct();
	}
	function getCatItems($cat,$page,$rows=10){
        return $this->db->pagination("SELECT items.id,items.name,items.long_description,items.card_image FROM items WHERE items.cat=:cat",
            array('cat' => $cat),$page,$rows
            );
    }
    function get_pview($cat,$page,$rows_per_page=10){
        $numrows=$this->count($cat);
        $pages= ceil($numrows/$rows_per_page);
        return create_pview(URL.'cat/'.$cat,$pages,$this->get_cat_name($cat));
    }
    function get_cat_name($cat){
        $result=$this->db->select('SELECT cat from category WHERE id=:id',array('id' => $cat));
        if(isset($result[0]))
        return $result[0]['cat'];
    }
    function count($cat){
        $result=$this->db->select("SELECT count(items.id) as count FROM items WHERE items.cat=:cat",array('cat' => $cat));
        return $result[0]['count'];
    }
}
