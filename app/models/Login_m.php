<?php
class Login_m extends Model
{
	function __construct(){
		parent::__construct();
	}
	public function user_exists($username){
		$sth=$this->db->select("SELECT id FROM userlist WHERE username= :username",
			array('username' => $username));
			$count=count($sth);
		if($count>0){
			return TRUE;
		}
		return FALSE;
	}
	public function userInsert($username,$password){
		$username=strtolower($username);
		$this->db->insert('userlist',array('username'=>strtolower($username),'password'=>sha1($password)));
	}
	public function signin($username,$password){
//			  echo hash('sha256',$timestamp);
//        echo $username.' '.$password;
				$sth=$this->db->select("SELECT * FROM userlist WHERE username= :username AND password= :password",
					array('username' => $username,'password' => sha1($password)));

					$count=count($sth);
				if($count>0){
					if($sth[0]['block']){
						echo 'blocked';
						return false;
						die();
					}
					Session::init();
					Session::set('loggedIn',true);
					Session::set('id',$sth[0]['id']);
					Session::set('username',$sth[0]['username']);
					Session::set('role',$sth[0]['role']);
					Session::set('start',time());
					return true;
					// header('location: '.URL.'cp/');
                                        //ok let's change this file
					//header('location: run');
				}else{
					return FALSE;
				}


	}

}
// if(!$sth[0]['active']){
// echo 'active your mail from '.$sth[0]['email'];
// $message = "Please click on link below to active your account 1\r\n".$sth[0]['ac_url'];
// $message = wordwrap($message, 70, "\r\n");
// mail($sth[0]['email'], 'Active your account', $message);
// return false;
// die();
// }
//we will use sessions as a sign in tool
