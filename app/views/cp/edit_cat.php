<div class="w3-container w3- w3-card-2" style="min-height: 400px;margin: 15px;padding: 50px;">
<form method="POST" action="">
<label for="cat"><?php echo $data['id']; ?></label>
<input name="cat" value="<?php echo $data['cat']; ?>">
<input name="pa" value="<?php echo $data['pa_cat']; ?>">
<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
<button style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-green w3-btn w3-round" type="submit" name="cat_change">تغییر</button>
</form>
    <a type="button" style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-blue w3-btn w3-round" href="<?=URL?>cp/show_cat">بازگشت</a>
</div>