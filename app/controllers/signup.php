<?php
class Signup extends Controller
{
//	protected $formModel;
//	function __construct(){
////		$this->formModel=$this->model('Signup_m');
////		Session::init();
//		/*$logged=Session::get('loggedIn');
//		if($logged==false){
//			Session::destroy();
//			header('location: ../login');
//			exit;
//		}*/
//	}
	public function index()
	{
		if(isset($_POST['submit'])){
                     if($_POST['uname']!=NULL and $_POST['pass1']!=NULL)
                        if($_POST['pass1']==$_POST['pass2']){
            			if($this->formModel->userInsert(strtolower($_POST['uname']),sha1($_POST['pass1']),$_POST['email'],$_POST['phone'])){
                            $this->view('signup/welcome');
                        }else{
                            $this->view('signup/username');
                        }
//                            $this->view('signup/email');
                        }else{
                            $this->view('signup/password');
                        }
                }
		$this->view('signup/index',$_POST);
	}
        public function active_email($key=''){
		echo 'active <br> ';
		if($this->formModel->active_mail($key)){
			echo 'welcome your account has been activated';
                        //header('location: '.URL.'../login');
		}
	}
}
