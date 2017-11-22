<?php
$menu_list=$this->model('Menu_m')->get_menu();
$sub_menu=array();
?>
<div id="loginbox" class="w3-modal w3-animate-opacity" style="display: none">
    <div class="w3-modal-content w3-round w3-container" style="opacity: 0.9">
        <form action="<?=URL?>login/run/" method="post">
            <input class="w3-input" name="username" placeholder="نام کاربری">
            <input class="w3-input" name="password" placeholder="رمز عبور">
            <div class="w3-margin-top w3-margin-bottom">
                <input type="submit" value="وارد شوید" class="w3-round w3-white w3-border w3-hover-gray w3-padding-8">
                <button onclick="document.getElementById('loginbox').style.display='none';return false;" class="w3-round w3-white w3-border w3-hover-gray w3-padding-8">انصراف</button>
            </div>
        </form>
    </div>
</div>
<div id="msg" class="w3-modal w3-animate-opacity" style="display: none">
    <div class="w3-modal-content w3-round w3-container w3-panel w3-teal w3-display-container" style="opacity: 0.9">
  <span onclick="this.parentElement.parentElement.style.display='none'" class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <h3 class="w3-center">پیام</h3>
            <p class="w3-center" id="message">اضافه شد</p>

    </div>
</div>
<div class="w3-top">
<div class="w3-bar w3-white w3-card-2" id="myNavbar">
    <div style="position: relative" class="w3-margin-top">
    <div class="w3-right" style="display: block">
    <?php if(!$this->is_login){ ?>
        <a href="<?= LINK ?>" style="padding: 10px" onclick="document.getElementById('loginbox').style.display='block';">وارد شوید</a>
        <a href="<?= URL ?>signup/"> ثبت نام</a>
    <?php }else{
        $m=$this->model('Page_m');
        $fid=$m->get_factor(Session::get('id'));
        ?>
        <a href="<?= URL ?>cp/" style="padding: 10px"> مدیریت کاربری</a>
        <a href="<?= URL ?>cp/logout/"> خروج</a>
        <a href="<?=URL?>cp/factor_review" class="basket w3-green w3-round w3-border-green" style="position: relative;text-decoration: none;line-height: 35px;margin-right:15px"><i id="basket"></i>سبد خرید <span id="basketItems" class="badge"><?=$this->model('Menu_m')->count_items_in_basket()?></span></a>
    <?php } ?>
    </div>
        <a href="<?=URL?>" class="" style="position: absolute;left: 10px;top: 0px"><img src="<?=URL?>public/logo.jpg" height="36"></a>
        <form style="display: inline-block;margin-right: 25px" class="top_center">
<!--     w3-margin-top position: relative      -->
            <input placeholder="جستجو" class="w3-border w3-white w3-border-gray w3-round" style="padding-right: 10px;position: ;width: 100%;margin: 0px;left: 0px;height: 36px">
            <button id="btnSearch"></button>
        </form>
    </div>

    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small w3-margin-top w3-light-gray" style="display: block;width: 100%">
	  <?php foreach($menu_list as $menu){ ?>
        <?php if($menu['parent']=='0'){
              $sub_menu[]=array('id'=>$menu['id'],'ar'=>$this->model('Menu_m')->get_menu($menu['id']));
            ?>
		<a id="<?=$menu['id']?>"  href="<?=$menu['href']?>" class="mnubtn w3-bar-item w3-button w3-right"><?= $menu['menu'] ?></a>
        <?php } ?>
    <?php } ?>
    </div>

    <a href="javascript:void(0)" class="w3-bar-item w3-red w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
    <?php
    foreach($sub_menu as $menu){
    ?>
    <div id="sub<?=$menu['id']?>" class="w3-dark-gray subpanel">
        <div style="display: inline-block;padding: 15px">
            <img src="<?=URL?>public/speaker.jpg" width="150" height="150" style="vertical-align: top">
        <ul style="display: inline-block">
            <?php
            foreach($menu['ar'] as $item){
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
			<a href="<?= URL ?>login" onclick="document.getElementById('loginbox').style.display='block';return false;" class="w3-bar-item w3-button">وارد شوید</a>
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