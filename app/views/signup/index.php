<?php
require_once('app/views/head.php'); ?>
<body>
<div id="wrapper">
<?php require_once('app/views/menu.php'); ?>
    <div id="content">
        <div style="max-width:1000px;margin: auto;" class="w3-card-2 w3-container w3-round">
            <form method="post">
                <input class="w3-input" name="uname" placeholder="username">
                <input class="w3-input" name="email" placeholder="email" type="email">
                <input class="w3-input" name="phone" placeholder="phone" type="tel">
                <input class="w3-input" name="pass1" placeholder="password" type="password">
                <input class="w3-input" name="pass2" placeholder="confirm password" type="password">
                <button class="w3-input w3-hover-blue-gray" type="submit" name="submit">signup</button>
            </form>
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
