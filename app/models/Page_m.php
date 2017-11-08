<?php
class Page_m extends Model
{
	function __construct(){
		parent::__construct();
	}
	function get($id){
		return $this->db->select("SELECT * FROM items WHERE id= :id",array('id' => $id));
	}
	function add_view($id,$view){
	    echo $view++;
        $this->db->update('items',array('view'=>$view),'id='.$id);
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
//ajax
    function add_to_favorite($item_id,$user_id){
        $exist_in_favorites=$this->db->select("SELECT * FROM favorites WHERE user_id= :id AND item_id= :item_id",array('id' => $user_id,'item_id'=>$item_id));
        $exist_in_items=$this->db->select("SELECT id FROM items WHERE id= :id",array('id' => $item_id));
        if(empty($exist_in_favorites) && !empty($exist_in_items)){
            $this->db->insert('favorites',array('item_id'=>$item_id,'user_id'=>$user_id));
            echo 'done';
        }
    }
    function add_item_to_factor($factor_id,$item_id,$num){
        $price=$this->db->select("SELECT price FROM items WHERE id= :item_id LIMIT 1",array('item_id'=>$item_id))[0]['price'];
        $data=$this->db->select("SELECT * FROM purchased WHERE factor_id= :factor_id AND item_id= :item_id LIMIT 1",array('factor_id' => $factor_id,'item_id'=>$item_id));
        if(count($data)>0){
            $id=$data[0]['id'];
            $sql="UPDATE purchased SET num = num + 1 WHERE id = $id";
            $result=$this->db->query($sql);
        }else{
            $this->db->insert('purchased',array('item_id'=>$item_id,'factor_id'=>$factor_id,'num'=>$num,'price'=>$price));
        }
    }
}
