<?php
session_start();
include "header.html";
unset($_SESSION["name"]);
?>

<section class="main">
    <div class="main__wrapper">
        <h1><?php echo $_SESSION["name"];?></h1>
        <h1 style = "margin-bottom: 50px;">Сессия окончена. До встречи!</h1>
        <a href="index.php" class="tasks__btn" style = "margin:0">Вернуться на главную</a>
    </div>
</section>

<?php
include "footer.html";
session_destroy();
?>
