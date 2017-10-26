<form action="" method="post" class="w3-padding-16"><label for="search">search by code</label><input type="text" id="search" name="search"></form>

<a class="btn btn-default" href="<?= URL ?>cp/comments/0">taid nashode</a>
<a class="btn btn-default" href="<?= URL ?>cp/comments/1">taid shode</a>
 <table class="table table-striped">
    <thead>
      <tr>
        <th>user</th>
        <th>item</th>
        <th>verified</th>
        <th>date</th>
        <th>view</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($data as $comment){?>
      <tr>
      	<td><a href="<?= URL.'cp/edit_user/'.$comment['user_id'] ?>">user</a></td>
        <td><a href="<?= URL.'cp/edit_item/'.$comment['item_id'] ?>"><?= $comment['item_id'] ?></a></td>
        
        <td><?= $comment['verified'] ?></td>
        <td><?= $comment['date'] ?></td>
        <td><a href="<?= URL.'cp/edit_comment/'.$comment['id'] ?>">view<a></td>
      </tr>
      
      <?php } ?>
    </tbody>
  </table>