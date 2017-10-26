<?php
Class Session{
	public static function init(){
		ini_set('session.cookie_lifetime',60*60*24);//24 hours
		ini_set('session.cookie_httponly',1);
		ini_set('session.use_only_cookies',1);
		@session_start();
	}
	public static function set($key,$value){
		$_SESSION[$key]=$value;
	}
	public static function get($key){
		if(isset($_SESSION[$key]))
		return $_SESSION[$key];
	}
	public static function destroy(){
		$_SESSION=array();

		if(isset($_COOKIE[session_name()])){
			setcookie(session_name(),'',time()-86400,'/');
		}
		session_destroy();
	}
	public static function timeout(){
		$now=time();
		$timelimit=24*60*60;
		if($now > Session::get('start')+$timelimit){
			Session::destroy();
			return true;
		}else{
			Session::set('start',time());
		}
		return false;
	}
}
