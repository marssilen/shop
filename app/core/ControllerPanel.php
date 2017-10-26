<?php
class ControllerPanel extends Controller
{
	function __construct(){
		parent::__construct();
		Session::init();
		$logged=Session::get('loggedIn');
		if($logged==false || Session::timeout()){
			Session::destroy();
			header('location: '.URL.'login');
			exit;
		}
	}
	public function view($view,$data=[],$secure=false){
		if($secure){
			$logged=Session::get('role');
			if($logged!='admin'){
				Session::destroy();
				header('location: '.URL.'login');
				exit;
			}
		}
		require_once 'app/views/'.$view.'.php';
	}
}
