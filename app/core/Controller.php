<?php
class Controller
{
	protected $formModel;
    public $settings;
	protected $is_login;
	function __construct(){
	    $settings_m=$this->model('Settings_m');
        $this->settings=$settings_m->get();
		$this->formModel=$this->model(get_class($this).'_m');
		$this->is_login= $this->is_login();
	}
	public function model ($model){
		require_once 'app/models/'.$model.'.php';
		return new $model();
	}
	public function view($view,$data=[]){
		require_once 'app/views/'.$view.'.php';
	}
	protected function is_login(){
		Session::init();
		$logged=Session::get('loggedIn');
		if($logged==false || Session::timeout()){
			return false;
		}
		return true;
	}
}
