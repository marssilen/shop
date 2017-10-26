<?php
class Tag_m extends Model
{
	function __construct(){
		parent::__construct();
	}
	function get($id){
		return $this->db->select("SELECT * FROM items WHERE id= :id",array('id' => $id));
	}
	function getTagItems($tag){
        return $this->db->select("SELECT items.id,items.name,items.long_description,items.card_image FROM tag JOIN items ON tag.itemid=items.id WHERE tag.tag=:tag",array('tag' => $tag));
    }
    function getTagPages($tag){
        return $this->db->select("SELECT page.id,page.title,page.content FROM tag JOIN page ON tag.pageid=page.id WHERE tag.tag=:tag",array('tag' => $tag));
    }
    function get_pview($tag,$page,$rows_per_page=10){
        $numrows=$this->count($tag);
        $pages= ceil($numrows/$rows_per_page);
        return create_pview(URL.'tag',$pages);
    }
    function count($tag){
        $result=$this->db->select("SELECT count(items.id) as count FROM tag JOIN items ON tag.itemid=items.id WHERE tag.tag=:tag",array('tag' => $tag));
        return $result[0]['count'];
    }
}
