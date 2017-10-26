<?php
$menu_list=$this->model('Menu_m')->get_menu();
?>
<div class="w3-top">
<div class="w3-bar w3-white w3-card-2" id="myNavbar">
    <a href="<?=URL?>" class="w3-bar-item w3-button w3-wide"><img src="<?=URL?>public/logo.jpg" height="30"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
	  <?php foreach($menu_list as $menu){ ?>
        <?php if($menu['parent']=='0'){ ?>
		<a href="<?=$menu['href']?>" class="w3-bar-item w3-button"><?= $menu['menu'] ?></a>
        <?php } ?>
    <?php } ?>
        <?php if(!$this->is_login){ ?>
			<a href="<?= URL ?>login" class="w3-bar-item w3-button">وارد شوید</a>
        <?php }else{
            $m=$this->model('Page_m');
            $fid=$m->get_factor(Session::get('id'));
            ?>
			<a href="<?= URL ?>cp/" class="w3-bar-item w3-button"> مدیریت کاربری</a>
			<a href="<?= URL ?>cp/logout/" class="w3-bar-item w3-button"> خروج</a>
        <?php } ?>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
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
  
