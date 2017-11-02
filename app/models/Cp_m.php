<?php
class Cp_m extends Model
{

function __construct(){
parent::__construct();
}
function get_file($name){
    return $this->db->select('select * from image WHERE image=:name',array('name'=>$name));
}
function change_file($id,$name,$alt,$oldfilename){
    rename('public/upload/'.$oldfilename,'public/upload/'.$name);
    $this->db->update('image',array('image'=>$name,'alt'=>$alt),"id=$id");
    return $name;
}
    function add_image($new_image,$alt){
        if(empty($new_image)){
            return 0;
        }else{
            $this->db->insert('image',array('image'=>$new_image,'image_thumb'=>$new_image,'alt'=>$alt));
        }
    }
function count($table){
$result=$this->db->select("SELECT count(*) as count FROM $table");
return $result[0]['count'];
}
    function home_get_all_card(){
        $result=$this->db->select("SELECT home_page.id,home_page.card,home_page.description,home_page.image,home_page.title,
home_page.url_cat, category.cat FROM home_page LEFT JOIN category ON home_page.url_cat=category.id WHERE home_page.card=1 ORDER BY id DESC ");
        return $result;
    }
    function get_cats(){
        $result=$this->db->select("SELECT * FROM category");
        return $result;
    }
    function get_all_home_cat(){
        $result=$this->db->select("SELECT * FROM home_cat ORDER BY id ");
        return $result;
    }
    function home_cat_change($id,$url){
        $this->db->update("home_cat",array("url"=>$url),"id=".$id,false);
    }
    function change_home_item(){
        $this->db->update("home_page",array("title"=>$_POST['title'],
            "description"=>$_POST['description'],
            'url_cat'=>$_POST['cat'],'card'=>$_POST['show_type']),"id=".$_POST['id'],false);
    }
    function home_pic($id,$image){
        $this->db->update("home_page",array("image"=>$image),"id=".$id);
    }
    function home_cat_pic($id,$image){
        $this->db->update("home_cat",array("image"=>$image),"id=".$id);
    }
    function delete_home($id){
        $this->db->delete('home_page',"id=$id");
    }
    function insert_home(){
        $this->db->insert("home_page",array('title'=>''));
    }
function get_settings(){
    $data=$this->db->select("SELECT * from settings");
    if(!isset($data[0])){
        $this->db->insert("settings",array("title"=>"title","logo"=>"#","about"=>"about","keywords"=>"keywords","description"=>"description"));
    }
    $data=$this->db->select("SELECT * from settings");
    return $data[0];
}
function change_settings($title,$about,$logo,$keywords,$description){
    $this->db->update("settings",array("title"=>$title,"logo"=>$logo,"about"=>$about,"keywords"=>$keywords,"description"=>$description),"id=1");
}
function get_all($page,$rows_per_page){
	$result=$this->db->pagination("SELECT id, name,card_image FROM items ORDER BY id DESC",array(),$page,$rows_per_page);
	return $result;
}
function get_pview($table,$page,$rows_per_page){
	$numrows=$this->count($table);
	$pages= ceil($numrows/$rows_per_page);
	return create_pview(URL.$page,$pages);
}
function add_new(){
$this->db->insert('items',array('id'=>''));
$result=$this->db->select("SELECT id FROM items ORDER BY id DESC LIMIT 1");
return $result[0]['id'];
}
function add_address($user_id,$post){
// print_r($post);
$this->db->insert('address',array(
'name'=>$post['name'],
'c_phone'=>$post['c-phone'],
's_phone'=>$post['s-phone'],
'province'=>$post['province'],
'city'=>$post['city'],
'address'=>$post['address'],
'postal_code'=>$post['postal-code'],
'user_id'=>$user_id
));

}
function get_address(){
$user_id= Session::get('id');
return $this->db->select('select id,name,c_phone,s_phone,postal_code from address where user_id=:user_id and disable=0',array('user_id'=>$user_id));
}
function remove_address($id){
	$user_id= Session::get('id');
	$this->db->update("address",array('disable'=>1),'user_id='.$user_id.' AND id='.$id,false);
}
function get_address_detail($id){
$user_id=Session::get('id');
if(isset($this->db->select('select * from address where id=:id and user_id=:user_id and disable=0',array('id'=>$id,'user_id'=>$user_id))[0]))
return $this->db->select('select * from address where id=:id and user_id=:user_id and disable=0',array('id'=>$id,'user_id'=>$user_id))[0];
header('location:'.URL);
die();
}
function get_all_id(){
$result=$this->db->select("SELECT id FROM items ");
return $result;
}
function get_last_id(){
$result=$this->db->select("SELECT id FROM items ORDER BY id DESC LIMIT 1");
return $result;
}

function search_item($search){//,$id,$limit
$id_name_and_tag=$this->db->select("SELECT id, name,card_image FROM items WHERE (name LIKE :search OR tag LIKE :search2 OR id=:id)"// AND id<=$id ORDER BY id DESC LIMIT $limit
,array('search' => '%' . $search . '%','search2' => '{%' . $search . '%}','id'=>$search));
return $id_name_and_tag;
}

function get_my_orders(){
$result=$this->db->select("SELECT id,status,factor_id,date,factor_price FROM factors where user_id=:user_id and status>0",array('user_id'=>Session::get('id')));
return $result;
}
function show_factor($factor_id){
	$sql="SELECT purchased.id,purchased.item_id,purchased.num,purchased.price,items.name
	FROM purchased LEFT JOIN items ON items.id=purchased.item_id where factor_id=$factor_id";
	$result=$this->db->query($sql);
	$result->setFetchMode(PDO::FETCH_ASSOC);
	return $result->fetchAll();
}
function show_factor_main($factor_id){
	$sql="SELECT * FROM factors LEFT JOIN address ON factors.address=address.id where factors.id=$factor_id";
	$result=$this->db->query($sql);
	$result->setFetchMode(PDO::FETCH_ASSOC);
	return $result->fetchAll();
}
function show_f($factor_id){
	$sql="SELECT factors.*,
	address.name as aname,
	address.s_phone,
	address.c_phone,
	address.postal_code,
	address.address as faddress,
	purchased.id,purchased.item_id,purchased.num,purchased.price,
	items.name
	FROM factors inner join address on address.id=factors.address,
	purchased INNER JOIN items ON items.id=purchased.item_id
	where purchased.factor_id=$factor_id and factors.id=$factor_id";

	// $sql="SELECT x.factors, y.purchased FROM (SELECT * from factors) as x, (SELECT * FROM purchased) as y";
	$result=$this->db->query($sql);
	$result->setFetchMode(PDO::FETCH_ASSOC);
	return $result->fetchAll();
}
function get_menu(){
$result=$this->db->select("SELECT * FROM menu ");//,array('pa'=>0)
return $result;
}
function add_menu(){
$this->db->insert('menu',array('parent'=>'0'));
}
function change_menu($post){
$this->db->update("menu",array('menu'=>$post['menu'],'href'=>$post['href'],'parent'=>$post['parent']),'id='.$post['id']);
}
function remove_menu($id){
return $this->db->delete('menu',"id=$id");
}
function change_item_numbers($id,$num,$factor_id){
$result=$this->db->update("purchased",array('num'=>$num),'id='.$id.' AND factor_id='.$factor_id);
return $result;
}


function set_final_factor($factor_id,$address){
$sql="SELECT num,price FROM purchased where factor_id=$factor_id";
$result=$this->db->query($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
$whole_price=0;
foreach ($result as $item){
$whole_price+=$item['price']*$item['num'];
}
$timestamp = date('Y-m-d H:i:s');
$result=$this->db->update("factors",array('factor_price'=>$whole_price,'status'=>1,'date'=>$timestamp,'address'=>$address),'id='.$factor_id);
return $whole_price;
}

function delete_item($id){
return $this->db->delete('items',"id=$id");
}
function remove_from_list($id){
	return $this->db->delete('purchased',"id=$id");
}
function add_cat(){
$sql="INSERT INTO `category` (`cat`)
VALUES ('');";
$result=$this->db->query($sql);
$sql='SELECT id FROM category ORDER BY id DESC LIMIT 1';
$result=$this->db->query($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
$id=$result->fetch();
return $id['id'];
}
function add_cat2($pa,$cat){
$sql="INSERT INTO `category` (`id`, `cat`, `pa_cat`) VALUES (NULL, '$cat', '$pa');";
$result=$this->db->query($sql);
$id=$result->fetch();
return $id['id'];
}
function delete_cat($id){
$sql="DELETE FROM category WHERE id=$id";
$result=$this->db->query($sql);
return $result;
}
function edit_cat($id,$cat,$pa){
$sql="UPDATE `category` SET
`cat` = '$cat', pa_cat='$pa' WHERE `category`.`id` = $id";
$result=$this->db->query($sql);
return $result->rowCount();
}
function show_cat($id){
$sql="SELECT * FROM category where id=$id";
$result=$this->db->query($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
return $result->fetch();
}
function get_all_items(){
$sql='SELECT * FROM items';
$result=$this->db->query($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
return $result->fetchAll();
}
protected $arr=array();
protected $stream='';
function find_cat_children($id){
$sql='SELECT * FROM category WHERE pa_cat='.$id;
$result=$this->db->query($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
$r=$result->fetchAll();
$this->stream.='<ul>';
//echo '<ul>';
foreach($r as $row){
$this->arr[]=$row;

$this->stream.='<li pa="'.$row['pa_cat'].'" li_id="'.$row['id'].'">';
//echo '<li pa="'.$row['pa_cat'].'" li_id="'.$row['id'].'">';
$this->stream.='<a type="button" style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-blue w3-btn w3-round" href="edit_cat/'.$row['id'].'">'.$row['cat'].'</a>'.'<a style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-red w3-btn w3-round" href="delete_cat/'.$row['id'].'"> حذف</a> <a href="" style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-green w3-btn w3-round" data-toggle="modal" data-target="#myModal" pa="'.$row['id'].'">+</a>';
//echo $row['cat'].' <a href="" class="add_list_a" data-toggle="modal" data-target="#myModal" pa="'.$row['id'].'">+</a>';
$this->find_cat_children($row['id']);

$this->stream.='</li>';
//echo '</li>';
}
$this->stream.='</ul>';
//echo '</ul>';
}
function ss($id){
$this->find_cat_children($id);
return $this->stream;
}
function get_orders($page=1){
$result=$this->db->pagination("SELECT * FROM factors where status>0",array(),$page,30);
return $result;
}
function get_comment($id){
$result=$this->db->select("SELECT * FROM comments WHERE id=:ids",array('ids'=>$id));
return $result;
}
function edit_comment($id,$options){
$result=$this->db->update("comments",$options,'id='.$id);
return $result;
}
function delete_comment($id){
return $this->db->delete('comments',"id=$id");
}
function get_users($page=1,$pagelimit){
$result=$this->db->pagination("SELECT id, username, email, role FROM userlist",array(),$page,$pagelimit);
return $result;
}
function edit_user($id,$options){
$result=$this->db->update("userlist",$options,'id='.$id);
return $result;
}
function get_user($id){
$result=$this->db->select("SELECT * FROM userlist WHERE id=:ids",array('ids'=>$id));
return $result;
}
function set_status($post,$factor_id){
	$this->db->update("factors",array("status"=>$post['status']),'id='.$factor_id);
}
function get_profile($id){
$result=$this->db->select("SELECT * FROM profile WHERE user_id=:ids",array('ids'=>$id));
//print_r($result);
return $result;
}
function get_my_favorites(){
$result=$this->db->select("SELECT items.name,favorites.item_id FROM favorites INNER JOIN items ON items.id=favorites.item_id WHERE user_id=:ids",array('ids'=>Session::get('id')));
return $result;
}
function get_my_comments(){
$result=$this->db->select("SELECT * FROM comments WHERE user_id=:ids",array('ids'=>Session::get('id')));
return $result;
}
function get_comments($verified){
$result=$this->db->select("SELECT * FROM comments WHERE verified=:verified"
,array('verified' =>$verified));
return $result;
}
}
