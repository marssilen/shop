<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <title>ناحیه کاربری</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?= display(URL) ?>public/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= display(URL) ?>public/css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= display(URL) ?>public/css/mycss.css">
<link rel="stylesheet" href="<?= display(URL) ?>public/font/font.css">
<!-- jQuery library -->
<script src="<?= display(URL) ?>public/bootstrap-3.3.6-dist/js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="<?= display(URL) ?>public/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="<?= display(URL) ?>public/js/myscript.js"></script>
<!-- AngularJS -->
<script src="<?= display(URL) ?>public/js/angular.min.js"></script>
<style>
body{
    text-align: right;
    direction: rtl;
}
a:link, a:visited{
	text-decoration:none;
}
ul li{
	list-style-type: none;
}
li ul li{
	margin-left:-1em;
}

.bg-dark {
    background-color: #494949;
	color:#BFB8B8;
}
.top-align{
	padding:10px 50px 10px 50px;
}


</style>
</head>
<body>
  <?php require_once('app/views/menu.php'); ?>
 <script>
$(function(){
$('.mother').click(function(e) {
    $(this).siblings('ul').toggle();
	$(this).children('span').toggleClass('glyphicon-chevron-right glyphicon-chevron-down');
});
});

</script>
<div class="container-fluid text-primary" style="margin-top:50px">
<div class="row">
  <div class="col-xs-12 col-sm-2" align="center">
  <!-- <h6><span class="glyphicon glyphicon-wrench"> </span></h6> -->
  <hr>
  <div id="navigation" align="left" dir="ltr">
        <ul>
        <?php if(Session::get('role')=='admin'){?>
            <li>
                <a class="mother" href="<?= LINK ?>">میز کار <span class="glyphicon glyphicon-chevron-down"></span></a>
                <ul id="sectionOneLinks">
                    <li><a href="<?= display(URL) ?>cp/home_page/"><span class="glyphicon glyphicon-th"></span> صفحه ی اصلی</a></li>
                    <li><a href="<?= display(URL) ?>cp/items/"><span class="glyphicon glyphicon-th"></span> محصولات</a></li>
                  <li><a href="<?= display(URL) ?>cp/show_cat"><span class="glyphicon glyphicon-list"></span> دسته بندی ها</a></li>
                  <li><a href="<?= display(URL) ?>cp/files/"><span class="glyphicon glyphicon-picture"></span> فایل ها</a></li>
                  <li><a href="<?= display(URL) ?>cp/menu"><span class="glyphicon glyphicon-menu-hamburger"></span> منو ها </a></li>
				  <li><a href="<?= display(URL) ?>cp/purchased"><span class="glyphicon glyphicon-shopping-cart"></span> سفارشات</a></li>
                  <li><a href="<?= display(URL) ?>cp/settings"><span class="glyphicon glyphicon-cog"></span> تنظیمات </a></li>
                  <li><a href="<?= display(URL) ?>cp/"><span class="glyphicon glyphicon-cog"></span>انبار داری</a></li>
                </ul>
            </li>
            <li>
                <a class="mother" href="#">کاربران <span class="glyphicon glyphicon-chevron-down"></span></a>
                <ul id="sectionTwoLinks">
                  <li><a href="<?= display(URL) ?>cp/get_users/"><span class="glyphicon glyphicon-user"></span> لیست کاربران</a></li>
                </ul>
            </li>
            <?php } ?>
			<li>
                <a class="mother" href="#">گزارش <span class="glyphicon glyphicon-chevron-down"></span></a>
                <ul id="sectionThreeLinks" ><!--style="display: none;"-->
                    <li><a href="<?= display(URL) ?>cp/factor_review">سبد خرید</a></li>
                  <li><a href="<?= display(URL) ?>cp/my_orders">سفارشات من</a></li>
                  <li><a href="<?= display(URL) ?>cp/my_favorites">لیست مورد علاقه</a></li>
                  <li><a href="<?= display(URL) ?>cp/track">رهگیری سفارشات</a></li>

<!--                    -->
<!--                  <li><a href="--><?//= display(URL) ?><!--cp/my_comments">نظرات من</a></li>-->
<!--                  <li><a href="--><?//= display(URL) ?><!--cp/#">پیام پشتیبانی</a></li>-->
<!--                  <li><a href="--><?//= display(URL) ?><!--cp/profile">پروفایل من</a></li>-->
<!--                  <li><a href="--><?//= display(URL) ?><!--cp/address">آدرس های من</a></li>-->
                </ul>
            </li>
        </ul>
    </div>




  </div>
  <div class="col-xs-12 col-sm-10">
      <?php
      require_once 'app/views/'.$this->page.'.php';
      ?>
  </div>

</div>
</div>



</body>
</html>