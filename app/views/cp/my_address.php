
<br>


<div class="w3-white container center" >
<div class="w3-row">
<div class="w3-card-2"><!--left images-->
<div class="w3-responsive">


<a href="<?= URL ?>cp/add_address" class="w3-btn w3-blue">+ آدرس جدید</a>
<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable">
<thead>
<tr class="w3-light-grey">
  <th>id</th>
  <th>name</th>
  <th>phone</th>
  <th>home</th>
  <th>postal_code</th>
  <th>detail</th>
  <th>delete</th>
</tr>
</thead>
<?php
foreach($data as $item){
	?>

<tr>

  <td> <a href="factor_show/<?= $item['id'] ?>"><?= $item['id'] ?></a></td>
  <td><?= $item['name'] ?></td>
  <td><?= $item['s_phone'] ?></td>
  <td><?= $item['c_phone'] ?></td>
  <td><?= $item['postal_code'] ?></td>
  <td><a href="address_detail/<?= $item['id'] ?>">show</a></td>
  <td><a href="address_remove/<?= $item['id'] ?>">remove</a></td>
</tr>
<?php

}
?>
</table>
</div>

</div>
</div>
</div>
