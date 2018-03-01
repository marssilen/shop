<div class="w3-white container center" >
<div class="w3-row">
<div class="w3-card-2 w3-round-large"><!--left images-->
<div class="w3-responsive w3-padding">

        <label class="my_label">نام و نام خانوادگی تحویل گیرنده</label>
        <p required name="name" id="name" class="w3-input w3-round w3-border w3-border-blue" type="text"><?= display($data['name']) ?></p>
        <label class="my_label">تلفن همراه</label>
        <p required name="c-phone" class="w3-input w3-round w3-border w3-border-blue" type="tel"><?= display($data['s_phone']) ?></p>
        <label class="my_label">تلفن ثابت</label>
        <p required name="s-phone" class="w3-input w3-round w3-border w3-border-blue" type="tel"><?= display($data['c_phone']) ?></p>
        <label class="my_label">آدرس پستی</label>
        <p required name="address" class="w3-input w3-round w3-border w3-border-blue"><?= display($data['address']) ?></p>
        <label class="my_label">کد پستی</label>
        <p required name="postal-code" class="w3-input w3-round w3-border w3-border-blue" type="number"><?= display($data['postal_code']) ?></p>


</div>

</div>
</div>
</div>
