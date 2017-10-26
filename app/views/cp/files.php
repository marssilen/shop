<br>
<div class="w3-white container center" >
<div class="w3-row">
<div class="" align="center"><!--left images-->
    <button onclick="document.getElementById('add_card_image_modal').style.display='block'" class="btn btn-info w3-margin-16">افزودن عکس</button>
<div ng-app="myApp" ng-controller="myCtrl">
<div class="row w3-margin-16">
<div id='{{x}}' class="col-sm-3 col-xs-6 w3-padding-16" ng-repeat="x in names">

    <a href="<?=URL?>item/{{x}}"><div class="w3-round  w3-card-2 w3-center mycard w3-white" style="padding:8px" >
<div align="center" class="">{{x}}</div>
<div class="w3-white" style="padding-bottom:0px;padding-left:10px;padding-right:10px">
<img src="<?= URL ?>public/upload/{{x}}" style="width: 150px;height: 150px">
<p align="right" class="font" style="padding:0px">

</p>
<a class="btn btn-info" href="<?= URL ?>cp/delete_file/{{x}}">حذف</a>
<a class="btn btn-success" href="<?= URL ?>cp/edit_file/{{x}}">ویرایش</a>
</div>
</div>
    </a>
</div>
</div>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.names = <?php echo json_encode($data['data']); ?>;
});
</script>
<div align="center">
<?= $data['pview'] ?>
</div>
</div>
</div>
</div>

<div id="add_card_image_modal" class="w3-modal">
    <div class="w3-modal-content w3-container w3-round">
        <header class="w3-white">
      <span onclick="document.getElementById('add_card_image_modal').style.display='none'"
            class="w3-closebtn">&times;</span>
        </header>
        <div class="w3-center">
            <p>آپلود تصویر</p>
        </div>
        <div class="w3-container" style="padding: 50px">
            <form method="post" enctype="multipart/form-data" action="">
                <input class="w3-input" placeholder="توضیح" name="alt">
                <input name="image" type="file" id="image_upload" style="margin-top: 10px;margin-bottom: 10px" >
                <button type="submit" name="add_card_image" class="btn btn-primary">ارسال</button>
            </form>
        </div>
    </div>
</div>