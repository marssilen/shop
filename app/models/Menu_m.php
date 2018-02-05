<?php
class Menu_m extends Model{
  function __construct(){
		parent::__construct();
	}
  function get_menu($parent=0){
  //return $this->db->select("SELECT id,menu,href FROM menu WHERE parent= :parent",array('parent' => $parent));
  	return $this->db->select("SELECT * FROM menu ORDER BY parent");
  }
    function count_items_in_basket(){
        $factor_id=Session::get('factor_id');
        // $data=$this->db->select("SELECT count(*) as count FROM purchased WHERE factor_id= :factor_id",array('factor_id' => $factor_id));
        $data=$this->db->select("SELECT num FROM purchased WHERE factor_id= :factor_id",array('factor_id' => $factor_id));
        $count=0;
        foreach ($data as $row => $num) {
            $count+=$num['num'];
        }
        return $count;
    }
}
