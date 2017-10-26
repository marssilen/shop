<?php
class Model
{
	function __construct(){
		$this->db=new Database();
	}
	function get_factor($user_id=0){
		$user_id= Session::get('id');
		$data=$this->db->select("SELECT * FROM factors WHERE user_id= :user_id AND status= :status LIMIT 1",array('user_id' => $user_id,'status'=>'0'));
		if(count($data)==0){
			$this->db->insert('factors',array('user_id'=>$user_id,'status'=>'0'));
			$data=$this->db->select("SELECT * FROM factors WHERE user_id= :user_id AND status= :status LIMIT 1",array('user_id' => $user_id,'status'=>'0'));
		}
		if(isset($data[0]['id'])){
		Session::set('factor_id',$data[0]['id']);
		return $data[0]['id'];}
	}
	function check_user($table,$id,$sta){
		$user_id= Session::get('id');
		$data=$this->db->select("SELECT * FROM $table WHERE $sta= :$sta AND user_id= :user_id LIMIT 1",array($sta => $$sta,'user_id' => $user_id));
		if(count($data)!=0){
			return true;
		}
		return false;
	}
}
