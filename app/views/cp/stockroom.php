<div class="w3-white container center" >
    <div class="w3-row">
        <div class="" align="center"><!--left images-->
            <button  class="btn btn-info w3-margin-16">کالا های غیر موجود</button>
            <button  class="btn btn-info w3-margin-16">همه ی کالاها</button>
            <div ng-app="myApp" ng-controller="myCtrl">
                <div class="row w3-margin-top">
                    <table class="w3-table w3-bordered" dir="ltr">
                        <tr>
                            <th>نام</th>
                            <th>تعداد</th>
                            <th>&ensp;</th>
                        </tr>
                        <tr id='{{x}}'  ng-repeat="x in names">
                            <td>{{x}}</td>
                            <td><input type="number"  value="<?=URL?>public/upload/{{x}}"/></td>
                            <td><a class="btn btn-info" href="<?= URL ?>cp/delete_file/&name={{x}}">تغییر</a></td>
                        </tr>
                    </table>
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
            <p>آپلود</p>
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