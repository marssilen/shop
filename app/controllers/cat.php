<?php
class Cat extends Controller
{
	function index($cat=0,$page=1){
	    if(is_numeric($cat) && is_numeric($page)) {
            $items = $this->formModel->getCatItems($cat, $page);
            $this->view('cat/index',
                ['items' => $items, 'pview' => $this->formModel->get_pview($cat, $page), 'cat' => $this->formModel->get_cat_name($cat)]);
        }
	}

}
