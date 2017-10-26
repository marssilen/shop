<?php
class Page_m extends Model
{

	function __construct(){
		parent::__construct();
	}
	function get($id){
		return $this->db->select("SELECT * FROM items WHERE id= :id",array('id' => $id));
	}
    function get_tags($id){
        $result=$this->db->select('select * from tag where itemid=:id',array('id'=>$id));
        return $result;
    }
function count_items_in_basket($factor_id){
		// $data=$this->db->select("SELECT count(*) as count FROM purchased WHERE factor_id= :factor_id",array('factor_id' => $factor_id));
		$data=$this->db->select("SELECT num FROM purchased WHERE factor_id= :factor_id",array('factor_id' => $factor_id));
		$count=0;
		foreach ($data as $row => $num) {
			$count+=$num['num'];
		}
		return $count;
}
function get_images($id){
	return $this->db->select('select * from image where item_id=:item_id',array('item_id'=>$id));
}
}
