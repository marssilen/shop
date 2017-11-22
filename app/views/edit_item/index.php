<?php
//$images=explode(',',$data['data']['image']);
$images=  $data['data']['image'];
?>
<?php require_once('app/views/head.php'); ?>
<body>
  <?php require_once('app/views/header.php'); ?>
  <?php require_once('app/views/menu.php'); ?>
<script src="<?= URL ?>public/js/ckeditor/ckeditor.js"></script>
<div style="margin-top: 80px;margin-right:5px;padding: 0px">
  <div class="w3-card" style="display: inline-block;padding: 5px;">
<a href="<?= 'delete_item/'.$data['data']['id'].'/'.urlencode($data['data']['name']) ?>"><button class="w3-padding-2 w3-btn w3-red w3-round w3-border">حذف</button></a>
<a href="<?=URL.'page/'.$data['data']['id']; ?>"><button class="w3-padding-2 w3-btn w3-blue w3-round w3-border">نمایش</button></a>
</div>
</div>
<br>


<div class="w3-white container center" >
  <?php require_once('app/views/msgbox.php'); ?>
<div class="w3-row">
<div class="w3-col s8" style="padding:15px">
<div class="w3-card-2 w3-round" style="padding: 15px"><!--left images-->
<div>
<button style="margin:5px" onclick="document.getElementById('add_image_modal').style.display='block'" class="w3-btn w3-white w3-round w3-border">+</button>
</div>

<?php
foreach($images as $image){
	if(!empty($image))
	{
?>
<div class=" w3-col m3 s6" style="padding:5px" >
<div>
<div >
<a href="<?php echo 'delete_pic/'.$image['item_id'].'/'.$image['id']; ?>">
    <button class="w3-small">X</button></a>
</div>
<a href="<?= URL.'public/upload/'.$image['image']; ?>">
<img src="<?=URL.'public/upload/'.$image['image']; ?>" style="width:100%">
</a>
</div>
</div>
<?php
	}
}
 ?>
<div style="clear:both"></div>
</div>
<br>
<div class="w3-card-2  w3-round"><!--left-->


<form method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->max_file_size; ?>">
<textarea name="long_description" id="editor1" rows="500" style="height: 800px"><?php echo $data['data']['long_description'] ?></textarea><br>
 <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
</script>
<div style="margin:5px">
<button type="submit" name="insert" class="w3-btn w3-green w3-round w3-right" >ثبت</button>
</div>
<br><br>

</form>





</div>
<br>

</div><!--end left container-->

<div class="w3-col s4" style="padding:15px">
<div class="w3-card-2  w3-round">

<img alt="Insert an image" src="<?php if(!empty($data['data']['card_image']))echo URL.'public/upload/'.$data['data']['card_image'];else  echo '../img/default.jpg'?>" style="width:100%">
<div class="">
<center>
<button onclick="document.getElementById('add_card_image_modal').style.display='block'" class="w3-btn w3-green round_b" style="display:block;width:100%">تغییر</button>
</center>
</div>

</div>
<br>

<div class="w3-card-2  w3-round" >
<form method="post" enctype="multipart/form-data" action="change_name/<?php echo $data['data']['id'] ?>">
<div class="w3-padding">
<label class="w3-label w3-text-blue"><b>نام</b></label>
<input class="w3-input w3-border w3-round" type="text" name="name"  value="<?php echo $data['data']['name'] ?>">
</div>
<button type="submit" name="change_name" style="margin-top:15px;" class="w3-btn w3-green w3-input round_b" >تغییر</button>
</form>

</div>
<br>
    <div class="w3-card-2  w3-round">
    <form method="post" action="change_size/<?= $data['data']['id'] ?>">
        <label for="auto_size">auto</label> <input id="auto_size" type="radio" name="size" value="auto" checked>
        <label for="static_size">static</label> <input id="static_size" type="radio" name="size" value="static" <?php if($data['data']['width']!='100%')echo'checked';?>>
        <br>
        width:<input name="width" id="img_width" type="number" class="w3-input" style="padding: 5px;width: 100px" placeholder="عرض" required value="<?= str_replace("px","",$data['data']['width']) ?>">
        height:<input name="height" id="img_height" type="number" class="w3-input" style="padding5px;width:100px" placeholder="ارتفاع" required value="<?= str_replace("px","",$data['data']['height']) ?>"><br>
        <button type="submit" name="change_size" style="margin-top:15px;" class="w3-btn w3-green w3-input round_b" >تغییر</button>
        <script>
            $(document).ready(function () {
                $("#auto_size").change(function () {
                    $("#img_height").attr("disabled", true);
                    $("#img_width").attr("disabled", true);
                });
                $("#static_size").change(function () {
                    $("#img_height").attr("disabled", false);
                    $("#img_width").attr("disabled", false);
                });
                var is_auto=document.getElementById("auto_size");
                if(is_auto.checked) {
                    $("#img_height").attr("disabled", true);
                    $("#img_width").attr("disabled", true);
                }
            });

        </script>
    </form>
    </div>
<div class="w3-card-2  w3-round" style="margin-top: 10px">
  <div class="w3-container w3-padding">
<label class="w3-label w3-text-blue"><b>دسته بندی</b></label>
<form method="post" enctype="multipart/form-data" action="change_category/<?php echo $data['data']['id'] ?>">
<select name="cat" class="w3-select w3-border">
<?php
foreach($this->cats as $option){
	$selected=($data['data']['cat']==$option['id'])?'selected':'';
	echo '<option value='.$option['id'].' '.$selected.'>'.$option['cat'].'</option>';
	$option['cat'];
}
?>
</select>
</div>
<button type="submit" name="change_category" style="margin-top:15px;" class="w3-btn w3-green w3-input round_b" >تغییر</button>
</form>

</div>

<br>

    <div class="w3-card-2 w3-round">
        <form method="post" enctype="multipart/form-data" action="change_price/<?php echo $data['data']['id'] ?>">
            <div class="w3-container w3-padding-16">
                <label class="w3-label w3-text-blue"><b>قیمت</b></label>
                <input class="w3-input w3-border w3-round" type="text" name="price"  value="<?php echo $data['data']['price'] ?>">
            </div>
            <button type="submit" name="change_price" style="margin-top:15px;" class="w3-btn w3-green w3-input round_b" >تغییر قیمت</button>

        </form>
    </div>
    <br>
<div class="w3-card-2 w3-round" style="margin-top:10px"><!--tag-->
<div class="w3-container">
<label class="w3-label w3-text-blue"><b>
تگ
</b></label>
</div>
<form method="post" enctype="multipart/form-data" action="change_tag/<?php echo $data['data']['id'] ?>">
<div class="w3-container">
<input class="w3-input w3-border w3-round" type="text" name="tag" class="input" value="<?=$data['data']['tag_str']?>"/>
    <p>
        <?php
        foreach ($data['tags'] as $tag){
            echo $tag['tag'].'<br>';
        }
        ?>
    </p>
</div>
<button type="submit" name="change_tag" style="margin-top:15px;" class="w3-btn w3-green w3-input round_b" >تغییر</button>
</form>
</div><!--end tag-->

</div><!--end right container-->

</div>



<br>



</div>


<div id="add_image_modal" class="w3-modal">
  <div class="w3-modal-content w3-container w3-round">
    <header class="w3-white">
      <span onclick="document.getElementById('add_image_modal').style.display='none';"
      class="w3-closebtn" style="cursor:pointer">&times;</span>
    </header>
      <div class="w3-center">
      <p>آپلود تصویر</p>
      </div>
    <div class="w3-container" style="padding: 50px">
        <form method="post" enctype="multipart/form-data" action="add_image/<?=$data['data']['id']?>">
        <input class="w3-input" placeholder="توضیح" name="alt">
        <input name="image" type="file" id="image_upload" style="margin-top: 10px;margin-bottom: 10px" >
        <button type="submit" name="add_image" class="btn btn-primary">ارسال</button>
        </form>
    </div>
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
        <form method="post" enctype="multipart/form-data" action="add_card_image/<?=$data['data']['id']?>">
        <input class="w3-input" placeholder="توضیح" name="alt">
        <input name="image" type="file" id="image_upload" style="margin-top: 10px;margin-bottom: 10px" >
        <button type="submit" name="add_card_image" class="btn btn-primary">ارسال</button>
        </form>
    </div>
  </div>
  </div>

</body>
</html>
