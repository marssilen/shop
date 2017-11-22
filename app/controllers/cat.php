<?php
class Cat extends Controller
{
	function index($cat=0,$page=1){
	    if(is_numeric($cat) && is_numeric($page)) {
            $children=array_filter($this->formModel->get_child($cat));
            foreach ($children as $child){
                foreach ($child as $mycat){
                    $items[] = $this->formModel->getCatItems($mycat['id'], $page);
                }
            }

            $cats=$this->formModel->getCat($cat);
            $this->formModel->get_child($cat);
            echo '<pre>';
            print_r(array_filter($items));
            echo '</pre>';
            $this->view('cat/index',
                ['items' => $items,'cats'=>$cats,
                    'pview' => $this->formModel->get_pview($cat, $page),
                    'child'=>$this->formModel->getCats($cat),
                    'cat' => $this->formModel->get_cat_name($cat)]);
        }
	}
	function show($id=0){
        echo '<pre>';
        $children=array_filter($this->formModel->get_child($id));

        print_r(array_reverse($children));
//        die();
//        $this->view('cat/index',
//            ['items' => $children, 'pview' => '', 'cat' => '']);
    }

}
