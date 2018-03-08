<?php
class Edit_item extends ControllerPanel
{
	protected $max_file_size=9999999;
	protected $cats=array();
	private function check_id($id){
		if(!isset($id)){
			header("Location: ".URL."cp");
			die();
		}
		if(!is_numeric($id)){
			header("Location: ".URL."cp");
			die();
		}

	}
	public function index($id)
	{
		$this->check_id($id);
		$formModel=$this->model('Edit_item_m');
		$this->cats=$formModel->get_cats();
		if(isset($_POST['insert'])){
		  try {
				  $formModel->change_text($id,$_POST['long_description']);
			} catch (Exception $e) {
				  echo $e->getMessage();
			}
		}
		if(isset($_POST['insert_short'])){
		  try {
				  $formModel->change_short_text($id,$_POST['short_description']);
			} catch (Exception $e) {
				  echo $e->getMessage();
			}
		}
		$data=$formModel->show($id);
		if(!isset($data[0])){
			header("Location: ../cp/");
		}
		$data[0]['image']=$formModel->get_images($id);
		$tags=$this->formModel->get_tags($id);
		$this->view('edit_item/index',['data'=>$data[0],'tags'=>$tags]);
	}

	function add_image($id){
		$this->check_id($id);
		if(isset($_POST['add_image'])){
			$formModel=$this->model('Edit_item_m');
            $imagename=	$this->upload_a_file();
			$formModel->add_image($id,$imagename,$_POST['alt']);
			header("Location: ".URL."edit_item/$id");
		}

	}

	function add_card_image($id){
		$this->check_id($id);
		if(isset($_POST['add_card_image'])){
			$formModel=$this->model('Edit_item_m');
			$imagename=	$this->upload_a_file();
			$formModel->add_card_image($id,$imagename,$_POST['alt']);
			header("Location: ".URL."edit_item/$id");
		}

	}

	function change_category($id){
		$this->check_id($id);
		if(isset($_POST['change_category'])){
			$formModel=$this->model('Edit_item_m');
			$formModel->change_category($id,$_POST['cat']);
			header("Location: ../$id");
		}
	}

	function change_tag($id){
		$this->check_id($id);
		if(isset($_POST['change_tag'])){
			$formModel=$this->model('Edit_item_m');
			$formModel->change_tag($id,$_POST['tag']);
			header("Location: ".URL."edit_item/$id");
		}
	}
	function change_name($id){
		$this->check_id($id);
		if(isset($_POST['change_name'])){
			$formModel=$this->model('Edit_item_m');
			$formModel->change_name($id,$_POST['name']);
			header("Location: ".URL."edit_item/$id");
		}
	}
    function change_size($id){
        $this->check_id($id);
        if(isset($_POST['change_size'])){
            if($_POST['size']=='auto'){
                $width='100%';
                $height='auto';
                $this->formModel->change_size($id,$width,$height);
            }else{
                $width=$_POST['width'].'px';
                $height=$_POST['height'].'px';
                $this->formModel->change_size($id,$width,$height);
            }

           // echo '<pre>';
//            print_r($_POST);
            header("Location: ".URL."edit_item/$id");
        }
    }
    function change_price($id){
        $this->check_id($id);
        if(isset($_POST['change_price'])){
            $formModel=$this->model('Edit_item_m');
            $formModel->change_price($id,$_POST['price']);
            header("Location: ".URL."edit_item/$id");
        }
    }
	function delete_item($id){
		$this->check_id($id);
		$this->formModel->delete_item($id);
        header("Location: ".URL."cp/items/");
	}
	function delete_pic($id,$image_id){
		$this->check_id($id);
		$this->formModel->delete_pic($image_id);
		header("Location: ".URL."edit_item/$id");
	}

	private function upload_a_file(){
		$destination = 'public/upload/';
		$upload = new Upload($destination);
		try {
					$upload->setMaxSize($this->max_file_size);
					$upload->move();
					$result_upload = $upload->getMessages();
					$imagename=$upload->get_imagename();
					return $imagename;
		} catch (Exception $e) {
					echo $e->getMessage();
		}
	}
}
