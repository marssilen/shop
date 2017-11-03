<?php
$title=$data['cat'];
$desc="دسته بندی عکس ".$data['cat'];;
require_once('app/views/head.php'); ?>
<body>
<div id="wrapper">
<?php require_once('app/views/menu.php'); ?>
<?php 
//require_once('app/views/header.php'); 
?>
<div id="content" style="margin-top: 100px">
<div class="w3-row container w3-white w3-card-2" style="padding: 10px;margin-top: 10px;margin-bottom: 10px">
    <div>
        <p>
            <a class="grey" href="">فروشگاه اینترنتی امن ایران</a>
            <a class="grey" href=""><?=$data['cat']?></a>
            <a class="grey" href="">...</a>
        </p>
        <p>
            <span style="font-size: large"><?=$data['cat']?></span>
            <span class="w3-text-gray">(نمایش 1-40 از 400)</span>
        </p>
        <p class="sort">
            مرتب سازی بر اساس:
            <a href="">پربازدید ترین ها</a>
            <a href="">پر فروش ترین ها</a>
            <a href="">جدیدترین ها</a>
            <a href="">ارزانترین ها</a>
            <a href="">گران ترین ها</a>
        </p>
        <hr>
    </div>
    <?php foreach ($data['items'] as $item) {?>
        <div class="w3-col m3 s6" style="padding: 5px">
            <div class="img_c w3-border w3-hover-border-blue">
                <a href="<?=URL?>page/<?=$item['id'].'/'.$item['name']?>">
                <img src="<?= URL ?>public/upload/<?=$item['card_image']?>" alt="AMN IRAN SHOP" style="width: 100%">
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
