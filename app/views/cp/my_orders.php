
<br>


<div class="w3-white container center" >
<div class="w3-row">
<div class="w3-card-2"><!--left images-->
<div class="w3-responsive">



<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable">
<thead>
<tr class="w3-light-grey">
  <th>محموله</th>
  <th>کد</th>
  <th>تاریخ</th>
  <th>مبلغ کل</th>
  <th>وضعیت</th>
  <th>جزئیات</th>
</tr>
</thead>
<?php
foreach($data as $item){
	?>

<tr>

  <td> <a href="factor_show/<?= $item['id'] ?>"><?= $item['id'] ?></a></td>
  <td><?= $item['factor_id'] ?></td>
  <td><?= $item['date'] ?></td>
  <td><?= $item['factor_price'] ?></td>
  <td><?= $GLOBALS['sta_array'][$item['status']] ?></td>
  <td><a href="factor_show/<?= $item['id'] ?>">مشاهده</a></td>

</tr>
<?php

}
?>
</table>
</div>

</div>
</div>
</div>
