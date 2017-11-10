<?php
class Signup_m extends Model
{
    function __construct(){
    parent::__construct();
    }
    function userInsert($username,$pass,$email,$phone){
//        if(space){
//            return false;
//        }
        return $this->db->insert('user',array('username'=>$username,'password'=>$pass,'email'=>$email,'phone'=>$phone));
    }
}
