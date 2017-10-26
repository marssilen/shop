 <table class="table table-striped">
    <thead>
      <tr>
        <th>لیست علاقه مندی هام</th>
      </tr>
    </thead>
    <tbody>
        <?php 
//        print_r($data);
        ?>
    <?php foreach($data as $favorite){?>
      <tr>
        <td><a href="<?= URL.'page/'.$favorite['item_id'] ?>"><?= $favorite['name'] ?></a></td>
      </tr>
      
      <?php } ?>
    </tbody>
  </table>