<?php
class Home_m extends Model
{
	public $name;

	function __construct(){
		parent::__construct();
		$sql='SELECT * FROM items';
		$result=$this->db->query($sql);

	}

    function get_settings(){
        $data=$this->db->select("SELECT * from settings");
        if(!isset($data[0])){
            $data=array('title'=>'','about'=>'','meta'=>'','keywords'=>'','description'=>'');
			return $data;
        }
        return $data[0];
    }
    function get_all_card(){
        $result=$this->db->select("SELECT * FROM home_page LEFT JOIN category ON home_page.url_cat=category.id WHERE home_page.card=1");
        return $result;
    }
    function get_all_div(){
        $result=$this->db->select("SELECT * FROM home_page LEFT JOIN category ON home_page.url_cat=category.id WHERE home_page.card=0");
        return $result;
    }
    function get_recent(){
        $result=$this->db->select("SELECT * FROM items ORDER BY id DESC LIMIT 10");
        return $result;
    }
    function get_all_home_cat(){
        $result=$this->db->select("SELECT * FROM home_cat ORDER BY id ");
        return $result;
    }
}
