<?php
$title=$data['data']['name'];
require_once('app/views/head.php');
?>
<body>
<?php require_once('app/views/menu.php'); ?>

<div class="container w3-row w3-card-2" style="margin-top: 75px;margin-bottom:50px;padding: 50px">
<!--    <div id="match1" class="w3-col m4 s12 pad">-->
<!--        <img id="imgmatch" style="width:100%" src="--><?php // URL.'public/upload/'.$data['data']['card_image']?><!--"/>-->
<!--    </div>-->
<!--    w3-col m8 s12-->
<!--    <div id="match2" class="pad" style="padding: 14px">-->
<!--    </div>-->
<!--    ////////////////////////-->
    <div class="w3-col m8 s12" style="position: relative">
        <div id="zoom_div" class="w3-card-2" style="position: absolute;display: none">
            <div style="position: relative;width: 100%;height: 100%;overflow: hidden" dir="ltr">
                <img id="zoom_image" style="position: absolute;left: 0px;top:0px;" src="<?= URL.'public/upload/'.$data['data']['card_image']?>">
            </div>
        </div>
        <p class="w3-margin-32 w3-round-medium w3-light-grey w3-container">
        <h3 class="w3-round w3-light-grey w3-center" style="padding: 5px"><?php if (!empty($data['data']['name'])){?><?= $data['data']['name']?><?php } ?></h3>
        </p>
        <div class="w3-margin-32 w3-container w3-padding-16" id="columnTwo">
            <p>
                <?= $data['data']['long_description'] ?>
            </p>
            <div>
                <?php foreach ($data['tags'] as $tag){?>
                    <a href="<?=URL.'tag/&tag='.$tag['tag']?>"><span class="tag"><?= $tag['tag']?></span></a>
                <?php } ?>
            </div>
            <form id="form" method="post" enctype="multipart/form-data">
                <p class="price1">
                    قیمت  :
                    <?php if(Session::get('role')=='couser'){?>
                        <?= $data['data']['old_price'] ?>
                        <br><del><?= $data['data']['price'] ?></del>
                    <?php }else{?>
                        <?= $data['data']['price'] ?>
                    <?php } ?>
                </p>
                <input type="hidden" name="id" value="<?= $data['data']['id'] ?>"/><?= $data['data']['id'] ?>

            </form>
            <button id="buy_btn" class="w3-btn w3-green" type="submit" name="submit" >افزودن به سبد خرید</button>
        </div>
    </div>
    <div class="w3-col s12 m4 w3-center" >
        <div style="" class=" w3-margin-32 w3-padding-16" id="columnOne">
            <p style="text-align: left">
                <a href="javascript:void(0)" id="fav_btn"><i class="w3-xlarge fa fa-heart-o"></i></a>
            </p>
            <div class="w3-center"><img id="card_image" style="width: 100%" src="<?= URL.'public/upload/'.$data['data']['card_image']?>"/></div>
            <div class=" w3-padding-8" style="margin-top:20px">
                <?php
                $images=$data['data']['image'];
                foreach ($images as $image) {?>
                    <img onclick="show_modal('<?= URL.'public/upload/'.$image['image']?>')" src="<?= URL.'public/upload/'.$image['image_thumb']?>" class="w3-hover-opacity" width="50" height="50" />
                <?php } ?>
            </div>
        </div>

    </div>
</div>
<?php
require_once ('app/views/footer.php');
?>
<script>
//    var imgheight=$("#imgmatch").height();
//    var m1height=$("#match2").innerHeight();
//    if(imgheight>m1height) {
//        $("#match2").innerHeight(imgheight);
//    }else{
//        $("#match1").innerHeight(m1height);
//    }
</script>
</body>
</html>
