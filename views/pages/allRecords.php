<?php
require_once '../templates/header.php';
require_once '../templates/head.php';
?>
<body>
<?php
require_once '../templates/navbar.php';
?>
<div class="container">
    <form  id="form" name="form">
        <h1>Получить сообщения по ФИО</h1>
        <div class="form-group">
            <input type="text" name="full_name" id="full_name" placeholder="Введите ФИО"
                   class="form-control">
        </div><br>
        <h6 class="msg none" id="msg"></h6>
        <button class="btn btn-success" name="ourForm_btn" id="submit" type="submit">Показать</button>
    </form>
</div>
<hr>
<div id="response"></div>
<?php
require_once '../templates/footer.php';
?>
<script src="../../controllers/js/JS/requestJS.js"></script>
</body>
</html>