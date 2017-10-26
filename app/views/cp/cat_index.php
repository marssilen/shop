
<br>


<div class="w3-white container center" >
<div class="w3-row">
<div class="w3-card-2"><!--left images-->

<a href="add_cat">Add new</a>

<div class="w3-responsive">



<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable">
<thead>
<tr class="w3-light-grey">
  <th>id</th>
  <th>Name</th>
  <th>Edit</th>
  <th>Delete</th>
</tr>
</thead>
<?php 
foreach($data as $item){
	?>
<tr>
  <td><?php echo $item['id']; ?></td>
  <td><?php echo $item['cat']; ?></td>
  <td><a href="edit_cat/<?php echo $item['id']; ?>">Edit</a></td>
  <td><a href="delete_cat/<?php echo $item['id']; ?>">Delete</a></td>
</tr>
<?php
	
}
?>
</table>
</div>

</div>
</div>
</div>
