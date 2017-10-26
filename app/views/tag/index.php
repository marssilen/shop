<?php require_once('app/views/head.php'); ?>
<body>
<?php require_once('app/views/menu.php'); ?>
<?php 
//require_once('app/views/header.php'); 
?>
<div class="w3-row container" style="margin-top: 150px">
    <?php foreach ($data['items'] as $item) {?>
        <div class="w3-col m3 s6" style="padding: 5px">
            <a href="<?=URL?>page/<?=$item['id'].'/'.urlencode($item['name'])?>">
            <div class="img_c w3-card-2 w3-hover-shadow w3-round">
                <img src="<?= URL ?>public/upload/<?=$item['card_image']?>" alt="<?=$item['name']?>" style="width: 100%">
                <p class="w3-center" style="margin-top: 10px;">
                    &ensp;<?=$item['name']?>
                </p>
            </div>
            </a>
        </div>
    <?php } ?>

</div>
<div class="w3-white w3-padding-16">
<div class="container w3-center">
  <?=$data['pview']?>
</div>
</div>
<?php
require_once ('app/views/footer.php');
?>
</body>
</html>
