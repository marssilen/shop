<div class="w3-container w3- w3-card-2" style="min-height: 400px;margin: 15px;padding: 50px;">
<form method="POST" action="">
    <input style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-blue w3-btn w3-round" type="submit" name="insert" value="افزودن"/>
</form>
    <div class="container" style="margin-top: 10px">
        <?php
        $count=0;
        foreach($data['data'] as $card){$count++;?>
            <?php if($count%2==0)echo' <div class="w3-row">'; ?>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?=$card['id']?>">
                <div class="w3-col s12 w3-row" style="padding: 15px;">
                        <div class="w3-col l6">
                            <img class="" src="<?= URL ?>public/upload/<?=$card['image']?>" alt="AMNCO" style="width: 100%">
                        </div>
                        <div class="w3-col l6">
                            <h5 class="w3-center w3-grey" style="margin: 0px;padding: 10px"><input name="title" value="<?=$card['title']?>"></h5>
                            <div style="padding: 10px">
                                <p class="" >
                                    <textarea name="description" style="display: block;width: 100%;min-height: 150px"><?=$card['description']?></textarea>
                                </p>
                            </div>
                            <button class="btn" type="submit" name="change">تغییر</button>
                            <select name="cat">
                                <?php foreach ($data['items'] as $item){ ?>
                                <option <?php if($card['url_cat']==$item['id']) echo 'selected'; ?> value="<?=$item['id']?>"><?= $item['name']?></option>
                                <?php } ?>
                            </select>
                            <button class="btn w3-red" type="submit" name="delete">حذف</button>
                            <?=$card['id']?>
                            <a onclick="document.getElementById('add_card_image_modal').style.display='block';document.getElementById('id').value='<?=$card['id']?>'" class="btn w3-yellow">عکس</a>
                            <label for="show_type">نمایش به صورت کارت</label>
                            <select name="show_type" id="show_type">
                                <option <?php if($card['card']=='0') echo 'selected'; ?> value="0">خیر</option>
                                <option <?php if($card['card']=='1') echo 'selected'; ?> value="1">بلی</option>
                            </select>
                        </div>
                </div>
            </form>
            <?php if($count%2==0)echo'</div>'; ?>
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