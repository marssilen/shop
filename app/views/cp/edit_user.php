<div class="w3-container w3- w3-card-2" style="min-height: 400px;margin: 15px;padding: 50px;">
  <form class="form-horizontal" role="form" method="post" action="" dir="rtl" style="direction: rtl" align="right">
  <div class="form-group" dir="rtl" style="direction: rtl" align="right">
      <label class="control-label col-sm-2" for="pwd">نام کاربری</label>
      <div class="col-sm-10">
        <p class="form-control-static"><?= (isset($data['username']))?$data['username']:'' ?></p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">ایمیل</label>
      <div class="col-sm-10">
        <input name="email" type="email" class="form-control" placeholder="Enter email" value="<?= (isset($data['email']))?$data['email']:'' ?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">تلفن</label>
      <div class="col-sm-10">
        <input name="tel" type="tel" class="form-control" id="pwd" placeholder="" value="<?= (isset($data['phone']))?$data['phone']:'' ?>">
      </div>
    </div>
      <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">درصد تخفیف</label>
          <div class="col-sm-10">
              <input name="barperc" type="number" class="form-control" id="barperc" placeholder="درصد تخفیف کاربر" value="<?= (isset($data['barperc']))?$data['barperc']:'' ?>">
          </div>
      </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">نقش کاربری</label>
      <div class="col-sm-10">
      <select name="role" class="form-control" id="sel1">
          <option <?=(isset($data['role']) and $data['role']=='admin')?'selected':'' ?> >ادمین</option>
          <option <?=(isset($data['role']) and $data['role']=='standard')?'selected':'' ?> >همکار</option>
          <option <?=(isset($data['role']) and $data['role']=='standard')?'selected':'' ?> >کاربر ساده</option>
      </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">بلوکه</label>
      <div class="col-sm-10">
      <select name="block" class="form-control" id="sel1">
        <option <?=(isset($data['block']) and $data['block']=='1')?'selected':'' ?> value="1" >true</option>
        <option <?=(isset($data['block']) and $data['block']=='0')?'selected':'' ?> value="0" >false</option>
      </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button name="sub" value="submit" type="submit" class="btn btn-default">تغییر</button>
      </div>
    </div>
  </form>
    <form class="form-horizontal" role="form" method="post" action="">
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">رمز جدید</label>
            <div class="col-sm-10">
                <input type="password" style="display:none;">
                <input id="password" name="password" type="password" class="form-control" placeholder="رمز جدید را وارد نمایید" value="" autocomplete="off">
            </div>
        </div>
        <button name="reset_pass" value="reset_pass" type="submit" class="btn btn-default">تغییر</button>
    </form>
</div>