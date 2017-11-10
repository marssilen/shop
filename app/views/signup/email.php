<?php
require_once('app/views/head.php'); ?>
<body>
<div id="wrapper">
<?php require_once('app/views/menu.php'); ?>
    <div id="content">
        <div style="max-width:1000px;margin: auto;" class="w3-card-2 w3-container w3-round">
            <p class="w3-center">
لینک فعال سازی به ایمیل شما ارسال شد.
                <br>
                <a href="<?=URL?>">بازگشت</a>
            </p>
        </div>
    </div>
<?php
require_once ('app/views/footer.php');
?>
<script type="text/javascript">
    $(function() {

    });
</script>
</div>
</body>
</html>
