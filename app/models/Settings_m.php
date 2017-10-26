<?php
class Settings_m extends Model
{
	function __construct(){
        parent::__construct();
	}
	function get(){
        $data=$this->db->select("SELECT * from settings");
        if(!isset($data[0])){
            $data=array('title'=>'','about'=>'','meta'=>'','keywords'=>'','description'=>'');
            return $data;
        }
        return $data[0];
    }
}
