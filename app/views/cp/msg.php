<?php
require_once('app/views/head.php'); ?>
<body>
<div id="wrapper">
<?php require_once('app/views/menu.php'); ?>
    <div id="content">
        <div style="max-width:1000px;margin: auto;" class="w3-card-2 w3-container w3-round">
            <p class="w3-center">
              فایل با موفقیت آپلود شد
                <br>
                آدرس فایل:<br>
                <?php if(isset($data['data'])){echo $data['data'];}?>
                <br>
                <a href="<?=URL?>cp/files">برگشت</a>
            </p>
        </div>
    </div>

</div>
</body>
</html>
