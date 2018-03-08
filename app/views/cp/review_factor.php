<style>
    .padding-16{
        padding: 16px;
    }
    .w3-input{
        margin-top: 16px;
        text-align: right;
        resize: none;
    }
    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button
    {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type=number]{
        -moz-appearance: textfield;
    }
    .my_label{
        alignment-adjust:middle;
        float: right;
        margin-right:2px;
        font-weight: normal;
    }
    .right{
        float: right;
    }
    .margin-l{
        margin: 5px;
    }
    .margin-m{
        margin: 10px;
    }
    .w3-btn{
        text-align: center;
        text-decoration: none;
    }
    select{
        text-align: right;
    }
    form{
        background-color: white;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){

        send_change("#province");
        $("#province").on("change",not);
        function not(){
            send_change("#city",false,this.value);
        }
        function send_change(sel,pro=true,name=""){
            var send_url='<?= URL ?>ajax/province';
            if(!pro){
                send_url='<?= URL ?>ajax/city/'+name;
            }
            $.ajax({
                url:send_url,
                type:'GET',
                dataType: 'json',
                success: function( json ) {
                    $(sel).empty();
                    $.each(json, function(i, value) {
                        $(sel).append($('<option>').text(i+' '+value).attr('value', i));
                    });
                }
            });
        }
    });
</script>
<br>
<script>
    function query(url){$.get( url);};
</script>

<div class="w3-white container center" >
<div class="w3-row">
<div class="w3-card-2"><!--left images-->
<div class="w3-responsive">


<form method="post" action="">
<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable">
<thead>
<tr class="w3-light-grey">
  <th>محصول</th>
  <th>تعداد</th>
  <th>قیمت واحد </th>
  <th>قیمت کل</th>
  <th> </th>
  <!--<th>تخفیف کل</th>-->
  <!--<th>مبلغ کل</th>-->
</tr>
</thead>

<?php
$factor_price=0;
if(count($data['data'])!=0){
foreach($data['data'] as $item){
    $last_price=$item['price']*$item['num'];//-$item['barging'];
    $factor_price+=$last_price;
	?>
<tr>
  <td><?= $item['item_id'] ?></td>
  <td>
      <select onchange="this.form.submit()" name="sel[<?= $item['id'] ?>]">
      <?php for($i=1;$i<25;$i++){$item['num'] ;?>
      <option <?php if($i==$item['num'])echo 'selected'; ?> ><?= $i ?></option>
      <?php }?>
      </select>
      </td>

  <td><?= $item['price'] ?></td>
  <td><?= $item['price']*$item['num'] ?></td>
  <td><button onclick="query('<?=URL?>cp/remove_from_list/<?=$item['id']?>')">حذف</button></td>
</tr>
<?php
}
}else{
  // echo 'No Item';
}
?>

</table>
</div>

    <p class="w3-yellow w3-container">مبلغ کل: <?= $factor_price ?><br>
    تخفیف: <?= $factor_price*$data['barg']/100 ?><br>
    مبلغ قابل پرداخت: <?= $factor_price-$factor_price*$data['barg']/100 ?></p>
    <div  class="w3-container">
    <?php
    if(count($data['address'])!=0){
        ?>
        <p> لطفا آدرس خود را انخاب نمایید</p>
        <?php
        foreach($data['address'] as $address) {
        ?>
        <input id="address" name="address" type="radio" value="<?=$address['id']?>"><?=$address['name'].'-'.$address['address'].'-'.$address['postal_code']?><br>
        <?php
         }}else{?>
        <p> لطفا آدرس خود را اضافه کنید</p>
        <?php
    }
    ?>
    </div>
<div  class="w3-container w3-padding-16">
<!-- <form action=""> -->
<!-- <p>
ارسال به:
<br> -->
<?php
// $a=$this->model('address')->get(Session::get('id'));
// $i=true;
// foreach ($a as $var) {
//   echo '<input type="radio" name="address" value="'.$var['id'].'" '.(($i)?'checked':'').'> '.$var['name'].'  '.$var['c_phone'].'  '.$var['address'].'</input><br>';
//   $i=false;
// }
// if(count($a)==0){
//   echo '<b>آدرسی یافت نشد.</b>';
// }
?><br>
    <a class="w3-btn w3-blue w3-round" onclick="showaddmoadal()" href="<?=LINK?>">اضافه کردن آدرس</a>
</p>
<input type="submit" name="pay" class="w3-btn w3-green w3-round " value="پرداخت"/>

</div>

</form>

</div>
</div>
</div>


<div class="w3-modal" id="add_address_modal">
    <form class="padding-16" action="<?=URL?>cp/add_address2" method="POST">
        <label class="my_label">نام و نام خانوادگی تحویل گیرنده</label>
        <input required name="name" id="name" class="w3-input w3-round w3-border w3-border-blue" type="text">
        <label class="my_label">تلفن همراه</label>
        <input required name="c-phone" class="w3-input w3-round w3-border w3-border-blue" type="tel">
        <label class="my_label">تلفن ثابت</label>
        <input required name="s-phone" class="w3-input w3-round w3-border w3-border-blue" type="tel">
        <div class="margin-m w3-row">
            <select required name="province" class="margin-l right w3-round w3-border w3-border-blue" id="province"><option>انتخاب کنید</option></select>
            <select required name="city" class="margin-l right w3-round w3-border w3-border-blue" id="city"><option>انتخاب کنید</option></select>
        </div>
        <label class="my_label">آدرس پستی</label>
        <textarea required name="address" class="w3-input w3-round w3-border w3-border-blue"></textarea>
        <label class="my_label">کد پستی</label>
        <input required name="postal-code" class="w3-input w3-round w3-border w3-border-blue" type="number">
        <div class="margin-m">
            <input name="submit" class="w3-btn w3-round w3-blue " type="submit" value="ثبت اطلاعات و بازگشت">
            <a style="text-decoration: none" class="w3-btn w3-red w3-round" href="<?=LINK?>" onclick="hidaddmodal()">انصراف</a>
        </div>
    </form>
    <script>
        function showaddmoadal() {
            document.getElementById("add_address_modal").style.display="block";
        }
        function hidaddmodal() {
            document.getElementById("add_address_modal").style.display="none";
        }
    </script>
</div>