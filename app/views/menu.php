<?php
$menu_list=$this->model('Menu_m')->get_menu();
$sub_menu=array();
?>
<div class="w3-top">
<div class="w3-bar w3-white w3-card-2" id="myNavbar">
    <div class="w3-right w3-panel" style="display: block">
    <?php if(!$this->is_login){ ?>
        <a href="<?= URL ?>login" style="padding: 10px">وارد شوید</a>
        <a href="<?= URL ?>signup/"> ثبت نام</a>
    <?php }else{
        $m=$this->model('Page_m');
        $fid=$m->get_factor(Session::get('id'));
        ?>
        <a href="<?= URL ?>cp/" style="padding: 10px"> مدیریت کاربری</a>
        <a href="<?= URL ?>cp/logout/"> خروج</a>
    <?php } ?>
    </div>
    <div class="center w3-margin-top container w3-yellow w3-center">
        <form>
            <button class="w3-btn w3-green">shoping<i class="w3-badge w3-blue">12</i> </button>
            <input class="w3-border w3-border-blue" style="display: inline-block;width: 80%;margin: 0px">
            <button class="w3-rest btn btn-success" style="display: inline-block;margin: 0px">search</button>
        </form>
    </div>
    <a href="<?=URL?>" class="w3-bar-item w3-button w3-wide"><img src="<?=URL?>public/logo.jpg" height="30"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
	  <?php foreach($menu_list as $menu){ ?>
        <?php if($menu['parent']=='0'){
              $sub_menu[]=$this->model('Menu_m')->get_menu($menu['id']);
            ?>
		<a href="<?=$menu['href']?>" class="w3-bar-item w3-button"><?= $menu['menu'] ?></a>
        <?php } ?>
    <?php } ?>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
    <?php
    foreach($sub_menu as $menu){
    ?>
    <div class="w3-brown w3-panel w3-hide">
        <div style="display: inline-block">
        <ul>
            <?php
            foreach($menu as $item){
            ?>
            <li><a href="<?=$item['href']?>"><?=$item['menu']?></a></li>
            <?php } ?>
        </ul>
        </div>
    </div>
    <?php } ?>
</div>
<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-right w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16"> &times;</a>
  <?php foreach($menu_list as $menu){ ?>
        <?php if($menu['parent']=='0'){ ?>
		<a href="<?=$menu['href']?>" onclick="w3_close()" class="w3-bar-item w3-button"><?= $menu['menu'] ?></a>
        <?php } ?>
    <?php } ?>
        <?php if(!$this->is_login){ ?>
			<a href="<?= URL ?>login" onclick="w3_close()" class="w3-bar-item w3-button">وارد شوید</a>
        <?php }else{
            $m=$this->model('Page_m');
            $fid=$m->get_factor(Session::get('id'));
            ?>
			<a href="<?= URL ?>cp/items/" onclick="w3_close()" class="w3-bar-item w3-button"> مدیریت کاربری</a>
			<a href="<?= URL ?>cp/logout/" onclick="w3_close()" class="w3-bar-item w3-button"> خروج</a>
        <?php } ?>
  <script>
  
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
  </script>
</nav>
<div style="margin-bottom: 100px">
&ensp;
</div>