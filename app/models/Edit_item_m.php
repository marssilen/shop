<?php
class Edit_item_m extends Model
{

	function __construct(){
		parent::__construct();
	}
	function get_tags($id){
	    $result=$this->db->select('select * from tag where itemid=:id',array('id'=>$id));
	    return $result;
    }
	function change_text($id,$long_description){
		$sql="UPDATE `items` SET
		`long_description` = '$long_description' WHERE `items`.`id` = $id";
		$result=$this->db->query($sql);
		return $result->rowCount();
	}
	function change_text_s($id,$short_description){
		$sql="UPDATE `items` SET
		`short_description` = '$short_description' WHERE `items`.`id` = $id";
		$result=$this->db->query($sql);
		return $result->rowCount();
	}
	function change_name($id,$name){
		$sql="UPDATE `items` SET
		`name` = '$name' WHERE `items`.`id` = $id";
		$result=$this->db->query($sql);
		return $result->rowCount();
	}
	function change_size($id,$width,$height){
        return $this->db->update('items',array('width'=>$width,'height'=>$height),"id=$id");
    }
	function show($id){
		return $this->db->select('select * from items where id=:id',array('id'=>$id));
	}
	function get_images($id){
		return $this->db->select('select * from image where item_id=:item_id',array('item_id'=>$id));
	}
	function get_cats(){
		$sql="SELECT * FROM category ";
		$result=$this->db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		return $result->fetchAll();
	}
	function add_image($id,$new_image,$alt){
		if(empty($new_image)){
			return 0;
		}else{
			$this->db->insert('image',array('item_id'=>$id,'image'=>$new_image,'image_thumb'=>$new_image,'alt'=>$alt));
		}

	}


	function delete_pic($id){
			$this->db->delete('image',"id=$id");
	}
	function add_card_image($id,$new_image,$alt){
		if(empty($new_image)){
			return 0;
		}else{
            $this->db->insert('image',array('image'=>$new_image,'image_thumb'=>$new_image,'alt'=>$alt));
            $this->db->update('items',array('card_image'=>$new_image),"id=$id");
		}

	}
	function change_category($id,$cat){
		if(empty($cat)){
			return 0;
		}else{
			$sql="UPDATE items SET cat='$cat' WHERE id=$id";
			$result=$this->db->query($sql);
			return $result->rowCount();
		}

	}
	function change_tag($id,$tag_str){
		if(empty($tag_str)){
			return 0;
		}else{
		    $this->db->delete('tag',"itemid=$id",100);
			$tags=explode(',',$tag_str);
			$tags=array_filter($tags);
			foreach($tags as $tag){
				if($tag!=null){
					$this->db->insert('tag',array('tag'=>$tag,'itemid'=>$id));
					$this->db->update('items',array('tag_str'=>$tag_str),"id=$id");
				}
			}
		}

	}
	function change_price($id,$price){

		  $sql="UPDATE items SET price='$price' WHERE id=$id";
		  $result=$this->db->query($sql);
		  return $result->rowCount();


	}
	function delete_item($id){
	    return $this->db->delete('items',"id=$id");
	}

}
