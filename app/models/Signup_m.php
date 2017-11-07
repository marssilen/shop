<?php
class Signup_m extends Model
{
    function __construct(){
    parent::__construct();
    }
    function get_comments($verified){
        $result=$this->db->select("SELECT * FROM comments WHERE verified=:verified"
        ,array('verified' =>$verified));
        return $result;
    }
}
