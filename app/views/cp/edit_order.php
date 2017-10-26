
<br>


<div class="w3-white container center" >
<div class="w3-row">
<div class="w3-card-2  w3-round mycontainer">
  <?php if(isset($data['items'])){?>

<div class="w3-responsive">



<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable">
<thead>
<tr class="w3-light-grey">
  <th>محصول</th>
  <th>تعداد</th>
  <th>قیمت واحد </th>
  <th>قیمت کل</th>
  <!--<th>تخفیف کل</th>-->
  <!--<th>مبلغ کل</th>-->
</tr>
</thead>
<?php
$factor_price=0;
foreach($data['items'] as $item){
    $last_price=$item['price']*$item['num'];//-$item['barging'];
    $factor_price+=$last_price;
	?>
<tr>
  <td><a href="<?= URL.'page/'.$item['item_id'] ?>"><?= $item['name'] ?></a></td>
  <td><?=$item['num'] ;?></td>
  <td><?= $item['price'] ?></td>
  <td><?= $item['price']*$item['num'] ?></td>
  <!--<td><?= /*$item['barging']*/NULL ?></td>-->
  <!--<td><?= /*$last_price*/NULL ?></td>-->
</tr>
<?php

}
?>

</table>
    <P class="w3-right w3-margin-16">مبلغ فاکتور:<?= $factor_price ?></P>
    <!-- <pre> -->
    <?php
    // print_r($data);

    convert_to_shamsi($data['factor'][0]['date']);
    ?>
  <!-- </pre> -->
</div>
<address class="w3-yellow w3-round w3-margin-4 mycontainer">
  آیدی فاکتور:<?= $data['factor'][0]['id']?><br>
  شماره فاکتور:<?= $data['factor'][0]['factor_id']?><br>
  نام:<?= $data['factor'][0]['name']?><br>
  آدرس:<?= $data['factor'][0]['address']?><br>
  کد پستی:<?= $data['factor'][0]['postal_code']?><br>
  تلفن منزل:<?= $data['factor'][0]['s_phone']?><br>
  تلفن همراه:<?= $data['factor'][0]['c_phone']?><br>
  تاریخ:<?= $data['factor'][0]['date']?><br>
  مصادف با:<?= convert_to_shamsi($data['factor'][0]['date']) ?><br>
  مبلغ درج شده در فاکتور:<?= $data['factor'][0]['factor_price']?><br>
</address>
<form action="" method="post">
  <select name="status">
  <?php
  foreach ($GLOBALS['sta_array'] as $key => $value) {
   ?>
  <option value="<?=$key?>" <?php if($data['factor'][0]['status']==$key)echo 'selected'?> ><?=$value?></option>
  <?php } ?>
  </select>
  <input type="submit" value="تغییر وضعیت" name="submit"/>
</form>
<?php
}else {
  echo "موردی یافت نشد";
}
?>
</div>
</div>
</div>
<pre>
    <?php print_r($data);?>
</pre>