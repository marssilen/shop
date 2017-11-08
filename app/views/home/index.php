<?php
require_once('app/views/head.php'); ?>
<body>
<div id="wrapper">
<?php require_once('app/views/menu.php'); ?>
    <div id="content">
<div id="amazingoffer" class="dk-box mrg-bottom waiting w3-row w3-light-grey center w3-card-2 w3-round"
     style="height: 400px;max-width:1000px;overflow: hidden">
    <div class="">
        <div class="fade_anim slides center w3-twothird w3-white" style="height: 400px;">
            <?php foreach ($data['slider'] as $slide){?>
                <a id="slide<?=$slide['id']?>" class="slideItem link" style="position: relative" title="" href="<?=$slide['url']?>">
                    <div dir="ltr" style="margin-top: 40px">
                        <div class="w3-col s6 w3-center" style="padding: 5px">
                            <div style="font-size: 28px;color: #3c3c3c"><?=$slide['title']?></div>
                            <img class="" src="<?=URL?>public/upload/speaker.jpg">
                        </div>
                        <div class="w3-col s6 w3-center" dir="rtl" style="padding: 15px">
                            <div style="text-align: right;color: red;font-size: 28px">پشنهاد ویژه امروز</div>
                            <div class="w3-row"><span class="w3-col s8 w3-green title"><?=$slide['price']?> تومان</span><span class="w3-col s4 w3-grey" style="font-size: large;text-decoration:line-through;"><?=$slide['old-price']?></span></div>
                            <p style="text-align: right"><?=$slide['decs']?>
                            </p>
                        </div>
                    </div>
                    <!--                <div data-seconds-left="38674.317" class="timer"><span class="timer__holder timer__holder--hours"><span>1</span><span>0</span></span><span class="timer__spacer">:</span><span class="timer__holder timer__holder--minutes"><span>3</span><span>3</span></span><span class="timer__spacer">:</span><span class="timer__holder timer__holder--seconds"><span>1</span><span>1</span></span>-->
                    <!--                </div>-->
                </a>
            <?php } ?>
        </div>
        <div class="w3-third">
            <ul class="" style="padding: 0px;margin: 0px">
                <?php $i=0;foreach ($data['slider'] as $slide){$i++?>
                    <li class="item"><a onclick="slideto(<?=$i?>)" onmousedown="return false" title="<?=$slide['title']?>خرید اینترنتی " class="tabItem" href="javascript:void(0)"><span class="title"><?=$slide['title']?></span><span class="arr"></span></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<!--        items-->
        <div style="max-width:1000px;margin: auto;padding: 0px" class="">
            <div class="w3-row w3-margin-top">
                <div class="w3-col s8" style="padding: 5px">
                    <div class="w3-card-2" style="padding: 5px;overflow: hidden">
                        <a href="<?=URL.'cat/'.$data['cat_items'][0]['url']?>">
                        <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][0]['image']?>">
                        </a>
                    </div>
                </div>
                <div class="w3-col s4"  style="padding: 5px">
                    <div class="w3-card-2">
                        <a href="<?=URL.'cat/'.$data['cat_items'][1]['url']?>">
                        <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][1]['image']?>">
                        </a>
                    </div>
                </div>
            </div>
            <div class="w3-row w3-margin-top">
                <div class="w3-col s4"  style="padding: 5px">
                    <div class="w3-card-2">
                        <a href="<?=URL.'cat/'.$data['cat_items'][2]['url']?>">
                        <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][2]['image']?>">
                        </a>
                    </div>
                </div>
                <div class="w3-col s4"  style="padding: 5px">
                    <div class="w3-card-2">
                        <a href="<?=URL.'cat/'.$data['cat_items'][3]['url']?>">
                        <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][3]['image']?>">
                        </a>
                    </div>
                </div>
                <div class="w3-col s4"  style="padding: 5px">
                    <div class="w3-card-2">
                        <a href="<?=URL.'cat/'.$data['cat_items'][4]['url']?>">
                        <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][4]['image']?>">
                        </a>
                    </div>
                </div>
            </div>
            <div class="w3-row w3-margin-top">
                <div class="w3-col s4"  style="padding: 5px">
                    <div class="w3-card-2">
                        <a href="<?=URL.'cat/'.$data['cat_items'][5]['url']?>">
                        <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][5]['image']?>">
                        </a>
                    </div>
                </div>
                <div class="w3-col s8" style="padding: 5px">
                    <div class="w3-card-2" style="padding: 5px;overflow: hidden">
                        <a href="<?=URL.'cat/'.$data['cat_items'][6]['url']?>">
                        <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][6]['image']?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>
<!--scrollbar-->
<div style="position:relative;margin-top: 15px;margin-bottom: 15px;" dir="ltr">
<h3 class="w3-center">پیشنهاد ما</h3>
    <div id="scroll1" class=".scroll">
        <?php $i=0;foreach($data['offer'] as $offer){$i++; ?>
            <div class="section w3-card-2 w3-hover-shadow" id="section<?=$i?>">
            <a href="<?=URL.'page/'.$offer['url_cat'].'/'.urlencode($offer['title'])?>">
            <img class="img" src="<?=URL.'public/upload/'.$offer['image']?>">
                <p style="width:100%;text-align: center;margin-top: 5px" dir="rtl" class="w3-container">
                    <?=$offer['title']?><br>
                    <span class="w3-text-green"><?=$offer['description']?> تومان</span>
                </p>
            </a>
        </div>
        <?php } ?>
    </div>
    <button class="scrollbtn1 sc" style="right:0px;" href="next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
    </button>
    <button class="scrollbtn1 sc" style="left:0px;" href="back"><i class="fa fa-chevron-left" aria-hidden="true"></i>
    </button >
</div>
<!--scrollbar more fans-->
<div style="position:relative;margin-top: 15px;margin-bottom: 15px;" dir="ltr">
<h3 class="w3-center">پر بازدید ها</h3>
    <div id="scroll2" class=".scroll">
        <?php $i=0;foreach($data['mostview'] as $mcard){$i++ ?>
                <div class="section w3-card-2 w3-hover-shadow" id="section<?=$i?>">
                <a href="<?=URL.'page/'.$mcard['id'].'/'.urlencode($mcard['name'])?>">
                    <img class="img" src="<?= URL.'public/upload/'.$mcard['card_image']?>">
                    <p style="width:100%;text-align: center;margin-top: 5px" dir="rtl" class="w3-container">
                        <?=$mcard['name']?><br>
                        <span class="w3-text-green"><?=$mcard['price']?> تومان</span>
                    </p>
                </a>
            </div>
        <?php } ?>
    </div>
    <button class="scrollbtn2 sc" style="right:0px;" href="next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
    </button>
    <button class="scrollbtn2 sc" style="left:0px;" href="back"><i class="fa fa-chevron-left" aria-hidden="true"></i>
    </button >
</div>
<!--scrollbar newest-->
<div style="position:relative;margin-top: 15px;margin-bottom: 15px;" dir="ltr">
<h3 class="w3-center">جدیدترین ها</h3>
    <div id="scroll3" class=".scroll">
        <?php $i=0;
        foreach($data['new'] as $item){$i++ ?>

        <div class="section w3-card-2 w3-hover-shadow" id="section<?=$i?>">
            <a href="<?=URL.'page/'.$item['id'].'/'.urlencode($item['name'])?>">
            <img class="img" src="<?= URL.'public/upload/'.$item['card_image']?>">
                <p style="width:100%;text-align: center;margin-top: 5px" dir="rtl" class="w3-container">
			<?=$item['name']?><br>
                <span class="w3-text-green"><?=$item['price']?> تومان</span>
            </p>
            </a>
        </div>

        <?php } ?>
    </div>
    <button class="scrollbtn3 sc" style="right:0px;" href="next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
    </button>
    <button class="scrollbtn3 sc" style="left:0px;" href="back"><i class="fa fa-chevron-left" aria-hidden="true"></i>
    </button >
</div>
    </div>
<?php
require_once ('app/views/footer.php');
?>
<script type="text/javascript">
    $(function() {
        var current1=1;
        var current2=1;
        var current3=1;
        var max1=<?=count($data['offer'])?>;
        var max2=<?=count($data['mostview'])?>;
        var max3=<?=count($data['new'])?>;
        $('.scrollbtn1').bind('click',function(event){
            var $anchor = $(this).attr('href');
            if($anchor=='next'){
                current1++;
            }else{
                current1--;
            }
            if(current1>max1){
                current1=max1;
            }
            if(current1<1){
                current1=1;
            }
//            alert(current);
            var sc=$("#scroll1>#section"+current1).position().left+$('#scroll1').scrollLeft();
            $('html, #scroll1').stop().animate({
                scrollLeft: sc
            }, 800);
            event.preventDefault();
        });
        $('.scrollbtn2').bind('click',function(event){
            var $anchor = $(this).attr('href');
            if($anchor=='next'){
                current2++;
            }else{
                current2--;
            }
            if(current2>max2){
                current2=max2;
            }
            if(current2<1){
                current2=1;
            }
//            alert(current);
            var sc=$("#scroll2>#section"+current2).position().left+$('#scroll2').scrollLeft();
            $('html, #scroll2').stop().animate({
                scrollLeft: sc
            }, 800);
            event.preventDefault();
        });
        $('.scrollbtn3').bind('click',function(event){
            var $anchor = $(this).attr('href');
            if($anchor=='next'){
                current3++;
            }else{
                current3--;
            }
            if(current3>max3){
                current3=max3;
            }
            if(current3<1){
                current3=1;
            }
//            alert(current);
            var sc=$("#scroll3>#section"+current3).position().left+$('#scroll3').scrollLeft();
            $('html, #scroll3').stop().animate({
                scrollLeft: sc
            }, 800);
            event.preventDefault();
        });
    });
</script>
</div>
</body>
</html>
