<?php
class Page extends Controller
{
	public function index($id='')
	{
		$data=$this->formModel->get($id);
		if(isset($data[0])){
            $this->formModel->add_view($data[0]['id'],$data[0]['view']);
			$data[0]['image']=$this->formModel->get_images($id);
            $tags=$this->formModel->get_tags($id);
			$this->view('page/index',['data'=>$data[0],'tags'=>$tags]);
		}else {
			header('location:'.URL);
		}
	}
    public function sf(){
        if($this->is_login){
            $name=$_POST['id'];
            $factor_id=$this->formModel->get_factor();
            $factor_id=Session::get('factor_id');
            $num=1;
            $this->formModel->add_item_to_factor($factor_id,$name,$num);
            $tedad=$this->formModel->count_items_in_basket($factor_id);
            echo '{ "st": "added to basket" ,"tedad":"'.$tedad.'"}';
        }else {
            echo '{ "st": "please login" }';
        }
    }
    public function add_to_favorite() {
        if($this->is_login){
            $user_id= Session::get('id');
            $item_id=$_POST['id'];
            $this->formModel->add_to_favorite($item_id,$user_id);
            echo '{ "st": "added to favorites" }';
        }else{
            echo '{ "st": "please login" }';
        }
    }
}
