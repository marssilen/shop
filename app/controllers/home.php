<?php
class Home extends Controller
{
	public function index($pageno=1)
	{
		$this->is_login= $this->is_login();
        $settings=$this->formModel->get_settings();
        $cards=$this->formModel->get_all_card();
        $div=$this->formModel->get_all_div();
        $recent=$this->formModel->get_recent();
        $cat_items=$this->formModel->get_all_home_cat();
        $most_view=$this->formModel->get_most_view();
        $slider=$this->formModel->get_slider();
        $this->view('home/index',
            ['settings'=>$settings,'offer'=>$cards,'mostview'=>$most_view,'new'=>$recent,'cat_items'=>$cat_items,'slider'=>$slider]);
	}
}
