<?php
session_start();
require_once '../views/templates/header.php';
require_once '../views/templates/head.php';
?>
<body>
<?php
require_once '../views/templates/navbar.php';
?>
<div class="container">
    <form method="POST" id="form">
        <h1>Обратная связь</h1>
        <div class="form-group">
            <input type="text" name="full_name" id="full_name" placeholder="Введите ФИО"
                   class="form-control">
        </div><br>
        <div class="form-group">
            <input type="text" name="message" placeholder="Message" id="message" class="form-control" required>
        </div><br>
        <h6 class="msg none"></h6>
        <button class="btn btn-success" name="submit" id="submit" type="submit">Отправить</button>
    </form>
</div>
<?php
require_once '../views/templates/footer.php';
?>
<script src="../controllers/js/main.js"></script>
</body>
</html>