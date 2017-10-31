<br>
<div class="w3-white container center" >
<div class="w3-row">
<div class="" align="center"><!--left images-->
<a class="btn btn-info w3-margin-16" href="<?= URL ?>cp/add_item">افزودن صفحه</a>

<div class="row w3-margin-16">
    <?php foreach ($data['data'] as $card){?>
<div id='<?=$card['id']?>' class="col-sm-3 col-xs-6 w3-padding-16">

<div class="w3-round w3-card-2 w3-center w3-white" style="padding:8px" >
<div align="center" class="">&ensp;<?=$card['name']?></div>
<div class="w3-white" style="padding-bottom:0px;padding-left:10px;padding-right:10px;">
<img src="<?= URL ?>public/<?php if($card['card_image']!=''){echo 'upload/'.$card['card_image'];}else{echo "image.png";}?>" style="width:100%;height: 150px;">
<p align="right" class="font" style="padding:0px">

</p>
<a class="btn btn-info" href="<?= URL ?>cp/delete_item/<?=$card['id'] ?>">حذف</a>
<a class="btn btn-success" href="<?= URL ?>edit_item/<?=$card['id'] ?>">ویرایش</a>
</div>
</div>
</div>
    <?php }?>
</div>

<div align="center">
<?= $data['pview'] ?>
</div>
</div>
</div>
</div>
