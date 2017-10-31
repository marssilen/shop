<?php
require_once('app/views/head.php'); ?>
<body>
<?php require_once('app/views/menu.php'); ?>
<br>
<br>
<br>
<div id="amazingoffer" class="dk-box mrg-bottom waiting w3-row w3-light-grey center w3-card-2 w3-round"
     style="height: 450px;max-width:1000px;overflow: hidden">
    <div class="amazingoffer__wrapper">
        <div class="fade_anim slides center w3-twothird w3-white" style="height: 450px;">
            <?php for($i=0;$i<10;$i++){ ?>
            <a id="slide<?=$i?>" class="slideItem" title=" هدست واقعيت مجازي وي آر اسپيس مدل CARDBOARD" href="/Product/DKP-303450/هدست-واقعيت-مجازي-وي-آر-اسپيس-مدل-CARDBOARD">
                <div class="w3-col s6">
                    <span class="w3-center">
                            <span class="title">هدست واقعیت مجازی وی آر اسپیس مدل CARDBOARD</span>
                            <span>
                                <img src="https://file.digi-kala.com/digikala/image/webstore/product/p_303450/220/vrspace-cardboard-virtual-reality-headset-159715.jpg">
                            </span>
                    </span>
                </div>
                <div class="w3-col s6">
                    <span class="price-sec">
                        <span class="price-label"> پیشنهاد شگفت انگیز امروز </span>
                        <span class="price-old  ">35</span>
                        <span class="price-final">
                            <span class="right">9.9</span>
                            <span class="currency left">هزار تومان</span>
                        </span>
                    </span>
                    <br>
                    <span class="info">
                        <span>سازگاری با سیستم عامل‌های اندروید و IOS </span>
                        <span>پشتیبانی از انواع تلفن‌های همراه تا سایز 6 اینچ </span>
                        <span>دارای لنز 34 میلی متری </span><span></span>
                    </span>
                    <span class="info-timerLabel">فرصت باقی مانده تا این پیشنهاد</span>
                </div>
                <div data-seconds-left="38674.317" class="timer"><span class="timer__holder timer__holder--hours"><span>1</span><span>0</span></span><span class="timer__spacer">:</span><span class="timer__holder timer__holder--minutes"><span>3</span><span>3</span></span><span class="timer__spacer">:</span><span class="timer__holder timer__holder--seconds"><span>1</span><span>1</span></span>
                </div>
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
<!--scrollbar-->
<div style="position:relative;margin-top: 15px;margin-bottom: 15px;" dir="ltr">
<h3 class="w3-center">پیشنهاد ما</h3>
    <div id="my" class=".scroll">
        <?php for($i=1;$i<=10;$i++){ ?>
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
    <button class="scrollbtn" style="right:0px;" href="next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
    </button>
    <button class="scrollbtn" style="left:0px;" href="back"><i class="fa fa-chevron-left" aria-hidden="true"></i>
    </button >
</div>
<!--scrollbar more fans-->
<div style="position:relative;margin-top: 15px;margin-bottom: 15px;" dir="ltr">
<h3 class="w3-center">پر بازدید ها</h3>
    <div id="my" class=".scroll">
        <?php for($i=1;$i<=10;$i++){ ?>
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
    <button class="scrollbtn" style="right:0px;" href="next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
    </button>
    <button class="scrollbtn" style="left:0px;" href="back"><i class="fa fa-chevron-left" aria-hidden="true"></i>
    </button >
</div>
<!--scrollbar newest-->
<div style="position:relative;margin-top: 15px;margin-bottom: 15px;" dir="ltr">
<h3 class="w3-center">جدیدترین ها</h3>
    <div id="my" class=".scroll">
        <?php for($i=1;$i<=10;$i++){ ?>
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
    <button class="scrollbtn" style="right:0px;" href="next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
    </button>
    <button class="scrollbtn" style="left:0px;" href="back"><i class="fa fa-chevron-left" aria-hidden="true"></i>
    </button >
</div>


<!-- Promo Section - "We know design" -->
<?php foreach($data['div'] as $div){?>
<div class="w3-container w3-dark-grey" style="padding:128px 0px">
    <div class="w3-row-padding">
        <div class="w3-col m6">
            <h3><?=$div['title']?></h3>
            <p><?=nl2br($div['description'])?></p>
            <p><a href="<?=URL?>page/<?=$div['url_cat'].'/'.urlencode($div['title'])?>" class="w3-button w3-black">ادامه</a></p>
        </div>
        <div class="w3-col m6">
            <img class="w3-image" src="<?= URL ?>public/upload/<?=$div['image']?>" alt="AMNCO" width="100%">
        </div>
    </div>
</div>
<?php }?>
<?php
require_once ('app/views/footer.php');
?>
<script type="text/javascript">
    $(function() {
        var current=1;
        var max=10;
        $('ul.nav a').bind('click',function(event){
            var $anchor = $(this);
            var sc=$($anchor.attr('href')).position().left+$('#my').scrollLeft();
            var $anchor = $(this);
            $('html, #my').stop().animate({
                scrollLeft: sc
            }, 1000);
            event.preventDefault();
        });
        $('.scrollbtn').bind('click',function(event){
            var $anchor = $(this).attr('href');
//            alert($anchor);
            if($anchor=='next'){
                current++;
            }else{
                current--;
            }
            if(current>max){
                current=max;
            }
            if(current<1){
                current=1;
            }
//            alert(current);
            var sc=$("#section"+current).position().left+$('#my').scrollLeft();
            $('html, #my').stop().animate({
                scrollLeft: sc
            }, 1000);
            event.preventDefault();
        });
    });
</script>
</body>
</html>
