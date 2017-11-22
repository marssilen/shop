<?php
class Cat_m extends Model
{
	function __construct(){
		parent::__construct();
	}
	function getCatItems($cat,$page,$rows=10){
        return $this->db->pagination("SELECT items.id,items.name,items.card_image FROM items WHERE items.cat=:cat",
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
    function get_child($id){
        $result=$this->db->select('select id,cat from category WHERE pa_cat=:parent',array('parent'=>$id));

        foreach ($result as $ch){
            $this->get_child($ch['id']);
        }
        $this->cat_child[]=$result;
        return $this->cat_child;
    }
    function getCat($id){
        if($id==0)return;
        $result=$this->db->select('select id,cat,pa_cat from category WHERE id=:id',array('id'=>$id));
        foreach ($result as $ch){
            $this->getCat($ch['pa_cat']);
        }
        $this->cat_pa[]=$result;
        return $this->cat_pa;
    }
    function getCats($id){
        $result=$this->db->select('select id,cat from category WHERE pa_cat=:parent',array('parent'=>$id));
        return $result;
    }
}
