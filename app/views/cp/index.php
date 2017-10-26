<br>
<div class="w3-white container center" >
<div class="w3-row">
<div class="" align="center"><!--left images-->
<a class="btn btn-info w3-margin-16" href="<?= URL ?>cp/add_item">افزودن صفحه</a>
<div ng-app="myApp" ng-controller="myCtrl">
<div class="row w3-margin-16">
<div id='{{x.id}}' class="col-sm-3 col-xs-6 w3-padding-16" ng-repeat="x in names">

    <a href="<?=URL?>item/{{x.id}}"><div class="w3-round  w3-card-2 w3-center mycard w3-white" style="padding:8px" >
<div align="center" class="">&ensp;{{x.name}}</div>
<div class="w3-white" style="padding-bottom:0px;padding-left:10px;padding-right:10px;">
<img src="<?= URL ?>public/upload/{{x.card_image}}" style="width:100%;max-height: 150px;">
<p align="right" class="font" style="padding:0px">

</p>
<a class="btn btn-info" href="<?= URL ?>cp/delete_item/{{x.id}}">حذف</a>
<a class="btn btn-success" href="<?= URL ?>edit_item/{{x.id}}">ویرایش</a>
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
