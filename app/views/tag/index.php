<?php require_once('app/views/head.php'); ?>
<body>
<div id="wrapper">
<?php require_once('app/views/menu.php'); ?>
<?php 
//require_once('app/views/header.php'); 
?>
    <div id="content">
<div class="w3-row container" style="margin-top: 150px">
    <?php foreach ($data['items'] as $item) {?>
        <div class="w3-col m12" style="padding: 5px">
            <a href="<?=URL?>page/<?=$item['id'].'/'.urlencode($item['name'])?>">
            <div class="img_c w3-card-2 w3-hover-shadow w3-round">
                <h2 class="w3-center h1" style="margin-top: 10px;">
                    &ensp;<?=$item['name']?>
                </h2>
                <p class="w3-center w3-row" style="margin-top: 10px;">
                    <div class="w3-col s11" style="padding: 5px">
                    &ensp;<?=$item['long_description']?>
                    </div>
                <div class="w3-col s1" style="padding: 5px">
                    <img src="<?= URL ?>public/upload/<?=$item['card_image']?>" alt="<?=$item['name']?>" style="width: 100%">
                </div>
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
    </div>
<?php
require_once ('app/views/footer.php');
?>
</div>
</body>
</html>
