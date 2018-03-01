<form action="" method="post" class="w3-padding-16 w3-center center" style="" dir="ltr"><input type="text" id="search" name="search" placeholder="Search by code"></form>

<div class="w3-white container center" >
<div class="w3-row">
<div class="w3-card-2"><!--left images-->
<div class="w3-responsive">
<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable">
<thead>
<tr class="w3-light-grey">
    <th>factor</th>
    <th>user</th>
    <th>status</th>
    <th>مشاهده</th>
  </tr>
</thead>
<?php
foreach($data as $item){
	?>
<tr>
  <td><?= $item['id'] ?></td>
  <td><?= $item['user_id'] ?></td>
  <td>
  <?=$GLOBALS['sta_array'][$item['status']]?>
  </td>
<!--  <td>--><?//= $item['factor_id'] ?><!--</td>-->
  <td><a href="<?= URL.'cp/edit_order/'.$item['id'] ?>">مشاهده<a></td>
</tr>
</tr>
<?php
}
?>
</table>
</div>

</div>
</div>
</div>
