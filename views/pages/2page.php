<?php
session_start();
require_once '../templates/header.php';
require_once '../templates/head.php';
?>
<body>
<?php
require_once '../templates/navbar.php';
?>
<?php var_dump($_SESSION['user']['full_name']);?>
<div class="container">
    <form  id="form">
        <h1>Получить 2 последних комментария</h1>
        <!--<h6 class="msg none"></h6>-->
        <button class="btn btn-success" name="submit" id="submit" type="submit">Получить</button>
    </form>
</div>
<hr>
<div id="response"></div>
<?php
require_once '../templates/footer.php';
?>
<script src="../../controllers/js/2messages.js"></script>
</body>
</html>