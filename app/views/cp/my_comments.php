 <table class="table table-striped">
    <thead>
      <tr>
        <th>item</th>
        <th>date</th>
        <th>view</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($data as $comment){?>
      <tr>
        <td><a href="<?= URL.'cp/edit_item/'.$comment['item_id'] ?>"><?= $comment['item_id'] ?></a></td>
        <td><?= $comment['date'] ?></td>
        <td><?= $comment['comment'] ?></td>
      </tr>
      
      <?php } ?>
    </tbody>
  </table>