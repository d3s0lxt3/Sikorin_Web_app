<!DOCTYPE html>
<html lang="ru">
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>Тут должен был быть какой-то текст, но я ничего интересного не придумал.</h2>
            </div>
            <div class="col-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">
                    Привет, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
            <div class="col-12">

            </div>
        </div>
    </div>    
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('./db.php');

$link = mysqli_connect('db', 'user', 'Test123', 'first_db');

mysqli_close($link);
}
?>
