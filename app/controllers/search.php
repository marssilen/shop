<?php
class Search extends Controller
{
	function index($cat=0,$page=1){
	    $q='';
	    if(isset($_GET['q'])){
	        $q=$_GET['q'];
        }
	    if(is_numeric($cat) && is_numeric($page)) {
	        $items=array();
            $string="SELECT id,name,card_image,view,price FROM items WHERE name LIKE '%$q%' OR cat LIKE '%$q%'";
            $count_str="SELECT count(id) as count FROM items  WHERE name LIKE '%$q%' OR cat LIKE '%$q%'";
            if(isset($_GET['sort'])){
                switch($_GET['sort']) {
                    case 1:
                        $string .= ' ORDER BY view';
                        break;
                    case 2:
                        $string .= ' ORDER BY view';
                        break;
                    case 3:
                        $string .= ' ORDER BY id DESC';
                        break;
                    case 4:
                        $string .= ' ORDER BY price';
                        break;
                    case 5:
                        $string .= ' ORDER BY price DESC';
//                        die();
                        break;
                }
            }
            $items = $this->formModel->getCatItems($string, $page);
//            build select sentence
//            count
            $cats=$this->formModel->getCat($cat);
            $count=$this->formModel->count($count_str);
            $this->view('search/index',
                [
                    'items' => $items,'cats'=>$cats,
                    'pview' => $this->formModel->get_pview($cat, $count_str,$count),
                    'count'=>$count,'page'=>$page,
                    'child'=>$this->formModel->getCats($cat),
                    'cat' => $this->formModel->get_cat_name($cat),
                    'q'=>$q
                ]
            );
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
