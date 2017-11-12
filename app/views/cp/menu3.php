<div class="w3-container w3- w3-card-2" style="min-height: 400px;margin: 15px;padding: 50px;">
<form method="POST" action="">
    <input style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-blue w3-btn w3-round" type="submit" name="submit" value="افزودن"/>
</form>
   
 
<table class="table table-striped">
    <thead>
      <tr>
        <th>لیست منو</th>
      </tr>
    </thead>
    <tbody>
       
    <?php foreach($data as $menu){?>
      <tr>
    <form method="POST" action="">
        <td><input type="hidden" name="id" value="<?= $menu['id'] ?>"/><label><?= $menu['id'] ?></label></td>
        <td> <input name="menu" placeholder="menu" value="<?= $menu['menu'] ?>"/></td>
        <td> <input name="parent" placeholder="parent" value="<?= $menu['parent'] ?>"/></td>
        <td>  <input name="href" placeholder="href" value="<?= $menu['href'] ?>"/></td>
        <td>  <input style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-blue w3-btn w3-round" type="submit" name="submit" value="تغییر"/></td>
    </form>
    <td><form method="POST" action=""><input type="hidden" name="id" value="<?= $menu['id'] ?>"/>
            <input style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-blue w3-btn w3-round" type="submit" name="submit" value="حذف"/></form></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>