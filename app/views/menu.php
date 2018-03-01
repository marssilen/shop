<?php
$menu_list=$this->model('Menu_m')->get_menu();
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
<div class="w3-bar w3-white w3-card-2">
<div class="container" id="myNavbar">
    <a href="<?=URL?>" class="w3-bar-item w3-button w3-wide"><img src="<?=URL?>public/logo.jpg" height="30"></a>
    <div style="position: relative" class="w3-margin-top">
        <?php if(!$this->is_login){ ?>
            <div class="w3-right" style="display: block">
                <a href="javascript:void(0)" style="padding: 10px" onclick="document.getElementById('loginbox').style.display='block';">وارد شوید</a>
                <a href="<?=URL?>signup/"> ثبت نام</a>
            </div>
        <?php }else{ ?>
        <a href="<?=URL?>cp/factor_review" class="basket w3-green w3-round w3-border-green" style="position: relative;text-decoration: none;line-height: 35px;margin-right:15px"><i id="basket"></i>سبد خرید <span id="basketItems" class="badge"><?=$this->model('Menu_m')->count_items_in_basket()?></span></a>
        <?php } ?>
        <form style="display: inline-block;margin-right: 25px" class="top_center" action="<?=URL?>search/" method="get">
            <input name="q" placeholder="جستجو" class="w3-border w3-white w3-border-gray w3-round" style="padding-right: 10px;position: ;width: 100%;margin: 0px;left: 0px;height: 36px">
            <button id="btnSearch"></button>
        </form>
    </div>
    <div class="w3-right w3-hide-small">
	<?php if(!$this->is_login){ ?>
        <?php }else{
            $m=$this->model('Page_m');
            $fid=$m->get_factor(Session::get('id'));
            ?>
			<a href="<?= URL ?>cp/items/" class="w3-right w3-bar-item w3-button"> مدیریت کاربری</a>
			<a href="<?= URL ?>cp/logout/" class="w3-right w3-bar-item w3-button"> خروج</a>
        <?php } ?>
	  <?php foreach($menu_list as $menu){ ?>
        <?php if($menu['parent']=='0'){ ?>
		<a href="<?=$menu['href']?>" class="w3-right w3-bar-item w3-button" onmouseover="document.getElementById('menu_<?=$menu['id']?>').style.display='block'" onmouseleave="document.getElementById('menu_<?=$menu['id']?>').style.display='none'"><?= $menu['menu'] ?></a>
        <?php } ?>
      <?php } ?>
    </div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<div class="container" style="position: relative">

    <?php foreach($menu_list as $menu){
         if($menu['parent']=='0'){ ?>
            <div id="menu_<?=$menu['id']?>" onmouseover="document.getElementById('menu_<?=$menu['id']?>').style.display='block'"
                 onmouseleave="document.getElementById('menu_<?=$menu['id']?>').style.display='none'" class="w3-card-2 w3-white"
                 style="display:none; z-index: 15;position: absolute;width: 100%;border-bottom-left-radius:4px;border-bottom-right-radius:4px;background: url(<?=URL?>public/upload/<?=$menu['back']?>) 0px 0px/100% 100%;">
                <div class="w3-col m3 w3-right"><?php for($i=0;$i<count($menu_list);$i+=4){$list=$menu_list[$i];?>
                        <?php if($list['parent']==$menu['id']){ ?><ul><h6 class="w3-text-blue">
                            <a href="<?=$list['href']?>"><?=$list['menu']?></a></h6><?php foreach($menu_list as $item){?>
                                <?php if($item['parent']==$list['id']){ ?><li><a href="<?=$item['href']?>"><?= $item['menu'] ?></a></li><?php }} ?>
                            </ul><?php }} ?>
                </div>
            <div class="w3-col m3 w3-right"><?php for($i=1;$i<count($menu_list);$i+=4){$list=$menu_list[$i];?>
                    <?php if($list['parent']==$menu['id']){ ?><ul><h6 class="w3-text-blue">
                        <a href="<?=$list['href']?>"><?=$list['menu']?></a></h6><?php foreach($menu_list as $item){?>
                            <?php if($item['parent']==$list['id']){ ?><li><a href="<?=$item['href']?>"><?= $item['menu'] ?></a></li><?php }} ?>
                        </ul><?php }} ?>
            </div>
            <div class="w3-col m3 w3-right"><?php for($i=2;$i<count($menu_list);$i+=4){$list=$menu_list[$i];?>
                    <?php if($list['parent']==$menu['id']){ ?><ul><h6 class="w3-text-blue">
                        <a href="<?=$list['href']?>"><?=$list['menu']?></a></h6><?php foreach($menu_list as $item){?>
                            <?php if($item['parent']==$list['id']){ ?><li><a href="<?=$item['href']?>"><?= $item['menu'] ?></a></li><?php }} ?>
                        </ul><?php }} ?>
            </div>
            <div class="w3-col m3 w3-right"><?php for($i=3;$i<count($menu_list);$i+=4){$list=$menu_list[$i];?>
                    <?php if($list['parent']==$menu['id']){ ?><ul><h6 class="w3-text-blue">
                        <a href="<?=$list['href']?>"><?=$list['menu']?></a></h6><?php foreach($menu_list as $item){?>
                            <?php if($item['parent']==$list['id']){ ?><li><a href="<?=$item['href']?>"><?= $item['menu'] ?></a></li><?php }} ?>
                        </ul><?php }} ?>
            </div>
            </div>
             <?php } ?>

    <?php } ?>
</div>
<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-right w3-hide-medium w3-hide-large" style="z-index: 50;display:none;overflow-y:scroll;margin-bottom: 100px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16"> &times;</a>
        <?php if(!$this->is_login){ ?>
			<a href="<?= URL ?>login" onclick="w3_close()" class="w3-bar-item w3-button w3-right-align">وارد شوید</a>
        <?php }else{
            $m=$this->model('Page_m');
            $fid=$m->get_factor(Session::get('id'));
            ?>
			<a href="<?= URL ?>cp/items/" onclick="w3_close()" class="w3-bar-item w3-button"> مدیریت کاربری</a>
			<a href="<?= URL ?>cp/logout/" onclick="w3_close()" class="w3-bar-item w3-button"> خروج</a>
        <?php }
        echo menu($menu_list,0);
        ?>
    <a class="w3-bar-item w3-button"> &ensp;</a>
  <script>
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}
function w3_close() {
    mySidebar.style.display = "none";
}
  </script>
</nav>
<br>