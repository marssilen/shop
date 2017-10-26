<div class="w3-container w3- w3-card-2 w3-row" style="min-height: 400px;margin: 15px;padding: 50px;">
    <div class="w3-col s12" dir="ltr" style="text-align: center">
    <img src="<?=URL.'/public/upload/'.$data['image']?>" alt="image">
    </div>
    <div class="w3-col s12" style="margin-top: 10px">
<form method="POST" action="">
    <input name="alt" value="<?=$data['alt']?>" placeholder="alt">
    <input name="name" value="<?=$data['image'];?>" placeholder="filename">
    <input type="hidden" name="id" value="<?=$data['id']?>">
    <input style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-blue w3-btn w3-round" type="submit" name="submit" value="تغییر"/>
</form>
    </div>
</div>