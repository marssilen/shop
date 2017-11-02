<div class="w3-container w3- w3-card-2" style="min-height: 400px;margin: 15px;padding: 50px;">
<!--   slide show -->
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
<!--    <div>-->
<!--        <pre dir="ltr" style="text-align: left">-->
<!--            --><?php
////            print_r($data['cat_items']);
//            ?>
<!--        </pre>-->
<!--    </div>-->
    <div style="max-width:1000px;margin: auto;padding: 0px" class="">
        <div class="w3-row w3-margin-top">
            <div class="w3-col s8" style="padding: 5px">
                <div class="w3-card-2" style="padding: 5px;overflow: hidden">
                    <form method="post" enctype="multipart/form-data" action="">
                        <input type="hidden" value="1" name="id">
                    <input name="image" type="file" id="image_upload" style="margin-top: 10px;margin-bottom: 10px" >
                        <button type="submit" name="cat_pic" class="btn btn-primary">تغییر عکس</button>
                    </form>
                        <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][0]['image']?>">
                    <form method="post">
                    <button class="btn" type="submit" name="change_cat">تغییر</button>
                        <input type="hidden" value="1" name="id">
                        <select name="cat">
                            <?php foreach ($data['cats'] as $cat){ ?>
                                <option <?php if($data['cat_items'][0]['url']==$cat['id']) echo 'selected'; ?> value="<?=$cat['id']?>"><?= $cat['cat']?></option>
                            <?php } ?>
                        </select>
                    </form>

                </div>
            </div>
            <div class="w3-col s4"  style="padding: 5px;overflow: hidden">
                <div class="w3-card-2">
                    <form method="post" enctype="multipart/form-data" action=""><input type="hidden" value="2" name="id">
                    <input name="image" type="file" id="image_upload" style="margin-top: 10px;margin-bottom: 10px" >
                        <button type="submit" name="cat_pic" class="btn btn-primary">تغییر عکس</button>
                        <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][1]['image']?>">
                    </form>
                    <form method="post">
                        <button class="btn" type="submit" name="change_cat">تغییر</button>
                        <input type="hidden" value="2" name="id">
                        <select name="cat">
                            <?php foreach ($data['cats'] as $cat){ ?>
                                <option <?php if($data['cat_items'][1]['url']==$cat['id']) echo 'selected'; ?> value="<?=$cat['id']?>"><?= $cat['cat']?></option>
                            <?php } ?>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="w3-row w3-margin-top">
            <div class="w3-col s4"  style="padding: 5px;overflow: hidden">
                <div class="w3-card-2">
                    <form method="post" enctype="multipart/form-data" action=""><input type="hidden" value="3" name="id">
                    <input name="image" type="file" id="image_upload" style="margin-top: 10px;margin-bottom: 10px" >
                        <button type="submit" name="cat_pic" class="btn btn-primary">تغییر عکس</button>
                        <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][2]['image']?>">
                    </form>
                    <form method="post">
                        <button class="btn" type="submit" name="change_cat">تغییر</button>
                        <input type="hidden" value="3" name="id">
                        <select name="cat">
                            <?php foreach ($data['cats'] as $cat){ ?>
                                <option <?php if($data['cat_items'][2]['url']==$cat['id']) echo 'selected'; ?> value="<?=$cat['id']?>"><?= $cat['cat']?></option>
                            <?php } ?>
                        </select>
                    </form>
                </div>
            </div>
            <div class="w3-col s4"  style="padding: 5px;overflow: hidden">
                <div class="w3-card-2">
                    <form method="post" enctype="multipart/form-data" action=""><input type="hidden" value="4" name="id">
                    <input name="image" type="file" id="image_upload" style="margin-top: 10px;margin-bottom: 10px" >
                        <button type="submit" name="cat_pic" class="btn btn-primary">تغییر عکس</button>
                        <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][3]['image']?>">
                    </form>
                    <form method="post">
                        <button class="btn" type="submit" name="change_cat">تغییر</button>
                        <input type="hidden" value="4" name="id">
                        <select name="cat">
                            <?php foreach ($data['cats'] as $cat){ ?>
                                <option <?php if($data['cat_items'][3]['url']==$cat['id']) echo 'selected'; ?> value="<?=$cat['id']?>"><?= $cat['cat']?></option>
                            <?php } ?>
                        </select>
                    </form>
                </div>
            </div>
            <div class="w3-col s4"  style="padding: 5px;overflow: hidden">
                <div class="w3-card-2">
                    <form method="post" enctype="multipart/form-data" action=""><input type="hidden" value="5" name="id">
                    <input name="image" type="file" id="image_upload" style="margin-top: 10px;margin-bottom: 10px" >
                        <button type="submit" name="cat_pic" class="btn btn-primary">تغییر عکس</button>
                        <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][4]['image']?>">
                    </form>
                    <form method="post">
                        <button class="btn" type="submit" name="change_cat">تغییر</button>
                        <input type="hidden" value="5" name="id">
                        <select name="cat">
                            <?php foreach ($data['cats'] as $cat){ ?>
                                <option <?php if($data['cat_items'][4]['url']==$cat['id']) echo 'selected'; ?> value="<?=$cat['id']?>"><?= $cat['cat']?></option>
                            <?php } ?>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="w3-row w3-margin-top">
            <div class="w3-col s4"  style="padding: 5px;overflow: hidden">
                <div class="w3-card-2">
                    <form method="post" enctype="multipart/form-data" action=""><input type="hidden" value="6" name="id">
                        <input name="image" type="file" id="image_upload" style="margin-top: 10px;margin-bottom: 10px" >
                        <button type="submit" name="cat_pic" class="btn btn-primary">تغییر عکس</button>
                    <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][5]['image']?>">
                    </form>
                    <form method="post">
                        <button class="btn" type="submit" name="change_cat">تغییر</button>
                        <input type="hidden" value="6" name="id">
                        <select name="cat">
                            <?php foreach ($data['cats'] as $cat){ ?>
                                <option <?php if($data['cat_items'][5]['url']==$cat['id']) echo 'selected'; ?> value="<?=$cat['id']?>"><?= $cat['cat']?></option>
                            <?php } ?>
                        </select>
                    </form>
                </div>
            </div>
            <div class="w3-col s8" style="padding: 5px;overflow: hidden">
                <div class="w3-card-2" style="padding: 5px;overflow: hidden">
                    <form method="post" enctype="multipart/form-data" action=""><input type="hidden" value="7" name="id">
                        <input name="image" type="file" id="image_upload" style="margin-top: 10px;margin-bottom: 10px" >
                        <button type="submit" name="cat_pic" class="btn btn-primary">تغییر عکس</button>
                    <img class="img" src="<?=URL?>public/upload/<?=$data['cat_items'][6]['image']?>">
                    </form>
                    <form method="post">
                        <button class="btn" type="submit" name="change_cat">تغییر</button>
                        <input type="hidden" value="7" name="id">
                        <select name="cat">
                            <?php foreach ($data['cats'] as $cat){ ?>
                                <option <?php if($data['cat_items'][6]['url']==$cat['id']) echo 'selected'; ?> value="<?=$cat['id']?>"><?= $cat['cat']?></option>
                            <?php } ?>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--   offer scroll -->
    <div class="w3-round w3-light-gray">
        <div style="position:relative;margin-top: 15px;margin-bottom: 15px;" dir="ltr">
            <h3 class="w3-center">پیشنهاد ما</h3>
            <form method="POST" action="" class="w3-margin-right">
                <input style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-blue w3-btn w3-round" type="submit" name="insert" value="افزودن"/>
            </form>
            <div id="scroll2" class=".scroll">
                <?php
                $i=0;
                foreach($data['data'] as $card){$i++; ?>

                    <div class="section w3-card-2 w3-white" id="section<?=$i?>">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?=$card['id']?>">
                            <input type="hidden" name="show_type" value="1">
                        <img class="img" style="width: 100%" src="<?= URL ?>public/upload/<?=$card['image']?>">
                        <div class="w3-container" style="margin-bottom: 5px">
                        <p dir="rtl">
                            <input name="title" value="<?=$card['title']?>" class="w3-input" placeholder="نام">
                            <input name="description" value="<?=$card['description']?>" class="w3-input" placeholder="قیمت">
                        </p>
                            <select name="cat" style="width: 100%;clear: both;display: block;margin-bottom: 10px;text-align:right;direction: rtl">
                                <?php foreach ($data['items'] as $item){ ?>
                                    <option <?php if($card['url_cat']==$item['id']) echo 'selected'; ?> value="<?=$item['id']?>"><?= $item['name']?></option>
                                <?php } ?>
                            </select>
                            <button class="btn w3-red" type="submit" name="delete">حذف</button>
                            <a onclick="document.getElementById('add_card_image_modal').style.display='block';document.getElementById('id').value='<?=$card['id']?>'" class="btn w3-yellow">عکس</a>
                            <button class="btn" type="submit" name="change">تغییر</button>
                        </div>
                        </form>
                    </div>

                <?php } ?>
            </div>
            <button class="scrollbtn2 sc" style="right:0px;" href="next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
            </button>
            <button class="scrollbtn2 sc" style="left:0px;" href="back"><i class="fa fa-chevron-left" aria-hidden="true"></i>
            </button >
        </div>
    </div>
    <div class="container" style="margin-top: 10px">
        <?php
        foreach($data['data'] as $card){?>
            <form action="" method="post">
                            <button class="btn" type="submit" name="change">تغییر</button>
                            <select name="cat">
                                <?php foreach ($data['items'] as $item){ ?>
                                <option <?php if($card['url_cat']==$item['id']) echo 'selected'; ?> value="<?=$item['id']?>"><?= $item['name']?></option>
                                <?php } ?>
                            </select>
                            <button class="btn w3-red" type="submit" name="delete">حذف</button>
                            <a onclick="document.getElementById('add_card_image_modal').style.display='block';document.getElementById('id').value='<?=$card['id']?>'" class="btn w3-yellow">عکس</a>
<!--                            <select name="show_type" id="show_type">-->
<!--                                <option --><?php //if($card['card']=='0') echo 'selected'; ?><!-- value="0">خیر</option>-->
<!--                                <option --><?php //if($card['card']=='1') echo 'selected'; ?><!-- value="1">بلی</option>-->
<!--                            </select>-->
            </form>

            <?php
        }
        ?>
    </div>
</div>

<div id="add_card_image_modal" class="w3-modal">
    <div class="w3-modal-content w3-container w3-round">
        <header class="w3-white">
      <span onclick="document.getElementById('add_card_image_modal').style.display='none'"
            class="w3-closebtn">&times;</span>
        </header>
        <div class="w3-center">
            <p>آپلود تصویر</p>
        </div>
        <div class="w3-container" style="padding: 50px">
            <form method="post" enctype="multipart/form-data" action="">
                <input name="image" type="file" id="image_upload" style="margin-top: 10px;margin-bottom: 10px" >
                <input name="id" type="hidden" id="id" value="">
                <button type="submit" name="pic" class="btn btn-primary">ارسال</button>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        var current2=1;
        var max2=<?=count($data['data'])?>;
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

    });
</script>