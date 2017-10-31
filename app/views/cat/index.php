<?php
$title=$data['cat'];
$desc="دسته بندی عکس "+$data['cat'];;
require_once('app/views/head.php'); ?>
<body>
<div id="wrapper">
<?php require_once('app/views/menu.php'); ?>
<?php 
//require_once('app/views/header.php'); 
?>
<div id="content">
<!--  -->
<div class="w3-white w3-padding-16" dir="rtl">
<div class="container w3-row">
  <div class="w3-col m6">
  </div>
  <div class="w3-col m6">
  </div>
</div>
</div>
<!--  -->
<div class="container w3-row" style="padding: 50px">
<div class="w3-col m3 s12 pad">
        <div class="w3-card-2 w3-round">
            <img src="<?= URL ?>public/profile.png" alt="profile" style="width: 100%">
        </div>
 </div>
    <div class="w3-col m1 s12 pad w3-light-grey">
    </div>
<div class="w3-col m8 s12 pad w3-light-grey" style="padding: 14px">
    <p>
    <?=$settings['about']?>
    </p>
</div>

</div>
<div class="w3-row container" style="margin-top: 10px">
    <?php foreach ($data['items'] as $item) {?>
        <div class="w3-col m3 s6" style="padding: 5px">
            <div class="img_c w3-card-2 w3-hover-shadow w3-round">
                <a href="<?=URL?>item/<?=$item['id'].'/'.$item['name']?>">
                <img src="<?= URL ?>public/upload/<?=$item['card_image']?>" alt="MIM PHOTOGRAPHY" style="width: 100%">
                </a>
                <p class="w3-center" style="margin-top: 10px;">
                    &ensp;<?=$item['name']?>
                </p>
            </div>
        </div>
    <?php } ?>

</div>
<div class="w3-white w3-padding-16">
<div class="container w3-center">
  <?=$data['pview']?>
</div>
</div>
</div>
<?php
require_once ('app/views/footer.php');
?>
</div>
</body>
</html>
