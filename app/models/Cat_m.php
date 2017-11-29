<?php
class Cat_m extends Model
{
	function __construct(){
		parent::__construct();
	}
	function counter($cat){
        $result= $this->db->select("SELECT count(items.id) as count FROM items WHERE items.cat=:cat",
            array('cat' => $cat));
        return $result[0]['count'];
    }
	function getCatItems($sql,$page,$rows=10){
//        return $this->db->select($sql);
        return $this->db->pagination($sql, array(),$page,$rows);
    }
    function get_pview($cat,$sql,$numrows,$rows_per_page=10){
        $pages= ceil($numrows/$rows_per_page);
        return create_pview(URL.'cat/'.$cat,$pages,$this->get_cat_name($cat));
    }
    function get_cat_name($cat){
        $result=$this->db->select('SELECT cat from category WHERE id=:id',array('id' => $cat));
        if(isset($result[0]))
        return $result[0]['cat'];
    }
    function count($sql){
        $result=$this->db->select($sql);
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
