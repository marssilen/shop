<?php
require_once('app/views/head.php'); ?>
<body>
<div id="wrapper">
<?php require_once('app/views/menu.php'); ?>
<br>
<br>
<br>
    <div id="content">
<div id="amazingoffer" class="dk-box mrg-bottom waiting w3-row w3-light-grey center w3-card-2 w3-round"
     style="height: 400px;max-width:1000px;overflow: hidden">
    <div class="">
        <div class="fade_anim slides center w3-twothird w3-white" style="height: 400px;">
            <?php for($i=0;$i<10;$i++){ ?>
            <a id="slide<?=$i?>" class="slideItem link" style="position: relative" title="" href="">
                <div dir="ltr" style="margin-top: 40px">
                    <div class="w3-col s6 w3-center" style="padding: 5px">
                        <div style="font-size: 28px;color: #3c3c3c">تصویر</div>
                        <img class="" src="<?=URL?>public/upload/speaker.jpg">
                    </div>
                    <div class="w3-col s6 w3-center" dir="rtl" style="padding: 15px">
                        <div style="text-align: right;color: red;font-size: 28px">پشنهاد ویژه امروز</div>
                        <div class="w3-row"><span class="w3-col s8 w3-green title">100 تومان</span><span class="w3-col s4 w3-grey" style="font-size: large;text-decoration:line-through;">200</span></div>
                        <p style="text-align: right">
                            مجهز به صفحه نمایش 100 اینچی<br>
                            لنز با وضوح بالا<br>
                            زیبایی بی نظیر
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
                <li class="item"><a onclick="slideto(1)" onmousedown="return false" title="خرید اینترنتی کیسه زباله" class="tabItem" href="javascript:void(0)"><span class="title">کیسه زباله</span><span class="arr"></span></a></li>
                <li class="item"><a onclick="slideto(2)" onmousedown="return false" title="خرید اینترنتی ست چاقوی" class="tabItem current" href="javascript:void(0)"><span class="title">ست چاقوی</span><span class="arr"></span></a></li>
                <li class="item"><a onclick="slideto(3)" onmousedown="return false" title="خرید اینترنتی هدست واقعیت مجازی" class="tabItem" href="javascript:void(0)"><span class="title">هدست واقعیت مجازی</span><span class="arr"></span></a></li>
                <li class="item"><a onclick="slideto(4)" onmousedown="return false" title="خرید اینترنتی تلفن " class="tabItem" href="javascript:void(0)"><span class="title">تلفن </span><span class="arr"></span></a></li>
                <li class="item"><a onclick="slideto(5)" onmousedown="return false" title="خرید اینترنتی آب میوه گیری دستی" class="tabItem" href="javascript:void(0)"><span class="title">آب میوه گیری دستی</span><span class="arr"></span></a></li>
                <li class="item"><a onclick="slideto(6)" onmousedown="return false" title="خرید اینترنتی ماگ " class="tabItem" href="javascript:void(0)"><span class="title">ماگ </span><span class="arr"></span></a></li>
                <li class="item"><a onclick="slideto(7)" onmousedown="return false" title="خرید اینترنتی سرویس خواب نرم بافت" class="tabItem" href="javascript:void(0)"><span class="title">سرویس خواب نرم بافت</span><span class="arr"></span></a></li>
                <li class="item"><a onclick="slideto(8)" onmousedown="return false" title="خرید اینترنتی هدفون " class="tabItem" href="javascript:void(0)"><span class="title">هدفون </span><span class="arr"></span></a></li>
                <li class="item"><a onclick="slideto(9)" onmousedown="return false" title="خرید اینترنتی نیم ست" class="tabItem" href="javascript:void(0)"><span class="title">نیم ست</span><span class="arr"></span></a></li>
                <li class="item"><a onclick="slideto(10)" onmousedown="return false" title="خرید اینترنتی کیف پول چرم" class="tabItem" href="javascript:void(0)"><span class="title">کیف پول چرم</span><span class="arr"></span></a></li>
            </ul>
        </div>
    </div>
</div>
<!--        items-->
        <div style="max-width:1000px;margin: auto;padding: 0px" class="">
            <div class="w3-row w3-margin-top">
                <div class="w3-col s8" style="padding: 5px">
                    <div class="w3-card-2" style="padding: 5px;overflow: hidden">
                        <img class="img" src="<?=URL?>public/upload/twothird.jpg">
                    </div>
                </div>
                <div class="w3-col s4"  style="padding: 5px">
                    <div class="w3-card-2">
                        <img class="img" src="<?=URL?>public/upload/third.jpg">
                    </div>
                </div>
            </div>
            <div class="w3-row w3-margin-top">
                <div class="w3-col s4"  style="padding: 5px">
                    <div class="w3-card-2">
                        <img class="img" src="<?=URL?>public/upload/third.jpg">
                    </div>
                </div>
                <div class="w3-col s4"  style="padding: 5px">
                    <div class="w3-card-2">
                        <img class="img" src="<?=URL?>public/upload/third.jpg">
                    </div>
                </div>
                <div class="w3-col s4"  style="padding: 5px">
                    <div class="w3-card-2">
                        <img class="img" src="<?=URL?>public/upload/third.jpg">
                    </div>
                </div>
            </div>
            <div class="w3-row w3-margin-top">
                <div class="w3-col s4"  style="padding: 5px">
                    <div class="w3-card-2">
                        <img class="img" src="<?=URL?>public/upload/third.jpg">
                    </div>
                </div>
                <div class="w3-col s8" style="padding: 5px">
                    <div class="w3-card-2" style="padding: 5px;overflow: hidden">
                        <img class="img" src="<?=URL?>public/upload/twothird.jpg">
                    </div>
                </div>
            </div>
        </div>
<!--scrollbar-->
<div style="position:relative;margin-top: 15px;margin-bottom: 15px;" dir="ltr">
<h3 class="w3-center">پیشنهاد ما</h3>
    <div id="scroll1" class=".scroll">
        <?php for($i=1;$i<=count($data['offer']);$i++){ ?>
        <div class="section w3-card-2 w3-container" id="section<?=$i?>">
            <img class="img" src="http://localhost/shop/public/team1.jpg">
            <h2>آیتم <?=$i?></h2>
            <p style="width:100%" dir="rtl">
			فروش،نصب و اجرای انواع دوربین های آنالوگ<br>
قابلیت انتقال تصویر رایگان<br>
ضمانت نامه:<br>
یکسال گارانتی و 5 سال خدمات پس از فروش<br>
            </p>
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
        <?php for($i=1;$i<=count($data['mostview']);$i++){ ?>
        <div class="section w3-card-2 w3-container" id="section<?=$i?>">
            <img class="img" src="http://localhost/shop/public/upload/gate.jpg">
            <h2>آیتم <?=$i?></h2>
            <p style="width:100%" dir="rtl">
			فروش،نصب و اجرای انواع دوربین های آنالوگ<br>
قابلیت انتقال تصویر رایگان<br>
ضمانت نامه:<br>
یکسال گارانتی و 5 سال خدمات پس از فروش<br>
            </p>
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

        <div class="section w3-card-2 w3-container w3-hover-shadow" id="section<?=$i?>">
            <a href="#">
            <img class="img" src="<?= URL.'public/upload/'.$item['card_image']?>">
            <p style="width:100%;text-align: center;margin-top: 5px" dir="rtl">
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
