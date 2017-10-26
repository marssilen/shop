<?php
class Signup extends Controller
{
	protected $formModel;
	function __construct(){
		$this->formModel=$this->model('Signup_m');
		Session::init();
		/*$logged=Session::get('loggedIn');
		if($logged==false){
			Session::destroy();
			header('location: ../login');
			exit;
		}*/
	}
	public function index($name='')
	{
		if(isset($_POST['submit'])){
                     if($_POST['username']!=NULL and $_POST['pass']!=NULL)
                        if($_POST['pass']==$_POST['retype']){
			$this->formModel->userInsert($_POST['username'],sha1($_POST['pass']),$_POST['email'],$_POST['phone']);
                        echo 'Activation link was sent to '.htmlentities($_POST['email']);

                        }else{
                            echo 'passwords do not match';
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
