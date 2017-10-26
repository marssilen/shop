<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit User</title>
</head>
<body>
<div class="container">
  <h2>Edit Comment</h2>
  <form class="form-horizontal" role="form" method="post" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">id:</label>
      <div class="col-sm-10">          
        <p class="form-control-static"><?= (isset($data['id']))?$data['id']:'' ?></p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">usrname:</label>
      <div class="col-sm-10">          
        <p class="form-control-static"><?= (isset($data['username']))?$data['username']:'' ?></p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">item:</label>
      <div class="col-sm-10">          
        <p class="form-control-static"><?= (isset($data['item']))?$data['item']:'' ?></p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">date:</label>
      <div class="col-sm-10">          
        <p class="form-control-static"><?= (isset($data['date']))?$data['date']:'' ?></p>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">address:</label>
      <div class="col-sm-10">          
        <textarea name="comment" class="form-control" id="pwd" placeholder="Enter address"><?= (isset($data['comment']))?$data['comment']:'' ?></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">verified:</label>
      <div class="col-sm-10">     
      <select name="verified" class="form-control" id="sel1">
        <option <?=(isset($data['verified']) and $data['verified']=='1')?'selected':'' ?> value="1" >true</option>
        <option <?=(isset($data['verified']) and $data['verified']=='0')?'selected':'' ?> value="0" >false</option>
      </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-2">
        <button name="sub" value="submit" type="submit" class="btn btn-default">Submit</button>
      </div>
      <div class="col-sm-offset-2 col-sm-2">
        <button name="sub" value="delete" type="submit" class="btn btn-default">Delete</button>
      </div>
    </div>
  </form>
 
  
</body>
</html>