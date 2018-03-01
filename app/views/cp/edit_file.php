<div class="w3-container w3- w3-card-2 w3-row" style="min-height: 400px;margin: 15px;padding: 50px;">
    <div class="w3-col s12" style="margin-top: 10px">
<form method="POST" action="">
    <input name="name" class="w3-input" value="<?=$data?>" placeholder="filename">
    <input style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-blue w3-btn w3-round" type="submit" name="submit" value="تغییر نام"/>
    <br>
    <a href="<?=URL?>cp/files">برگشت</a>
</form>
        <p style="direction: ltr" class="w3-center">  <br>
            آدرس فایل<br>
            <a style="text-align: left;direction: ltr" href="<?=URL.'public/upload/'.$data?>"><?=URL.'public/upload/'.$data?></a></p>
    </div>
</div>