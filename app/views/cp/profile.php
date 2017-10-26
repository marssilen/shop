<?php
print_r($data);
?>
<table class="table table-striped">
    <thead>
      <tr>
        <th>name</th>
        <th>national_code</th>
        <th>phone</th>
        <th>cell_phone</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($data as $item){?>
      <tr>
        <td><?= $item['name'] ?></td>
        <td><?= $item['national_code'] ?></td>
        <td><?= $item['phone'] ?></td>
        <td><?= $item['cell_phone'] ?></td>
      </tr>
      
      <?php } ?>
    </tbody>
  </table>