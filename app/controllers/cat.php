<?php
class Cat extends Controller
{
	function index($cat=0,$page=1){
	    if(is_numeric($cat) && is_numeric($page)) {
	        $items=array();
	        $m=$this->formModel->get_child($cat);
//            echo '<pre>';
//            print_r($m);
//            echo '</pre>';
            $string='SELECT id,name,card_image FROM items WHERE cat='.$cat;
            $count_str='SELECT count(id) as count FROM items WHERE cat='.$cat;
            $children=array_filter($m);
            foreach ($children as $child){
                foreach ($child as $mycat){
                    $string.=' OR cat='.$mycat['id'];
                    $count_str.=' OR cat='.$mycat['id'];
                }
            }
            $items = $this->formModel->getCatItems($string, $page);
//            build select sentence
//            count
            $cats=$this->formModel->getCat($cat);
            $count=$this->formModel->count($count_str);
            $this->view('cat/index',
                ['items' => $items,'cats'=>$cats,
                    'pview' => $this->formModel->get_pview($cat, $count_str,$count),
                    'count'=>$count,'page'=>$page,
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
