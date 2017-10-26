<?php
class Home extends Controller
{
	public function index($pageno=1)
	{
		$this->is_login= $this->is_login();
        $settings=$this->formModel->get_settings();
        $cards=$this->formModel->get_all_card();
        $div=$this->formModel->get_all_div();
        $this->view('home/index',['settings'=>$settings,'cards'=>$cards,'div'=>$div]);
	}
}
