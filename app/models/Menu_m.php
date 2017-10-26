<?php
class Menu_m extends Model{
  function __construct(){
		parent::__construct();
	}
  function get_menu($parent=0){
  //return $this->db->select("SELECT id,menu,href FROM menu WHERE parent= :parent",array('parent' => $parent));
  	return $this->db->select("SELECT * FROM menu");
  }
}
