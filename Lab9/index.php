<?php
if(session_id() === ""){
    session_start();
}
$_SESSION["name"] = "Кедич Анна Денисовна";
// include_once 'header.html';
require 'header.html';
?>

<section class="main">
    <div class="main__wrapper">
        <h1><?php echo $_SESSION["name"];?></h1>
        <div class="tasks">
            <div class="tasks__block">
                <a href="task1.php" class="tasks__btn">Задание 1</a>
                <a href="task2.php" class="tasks__btn">Задание 2</a>
            </div>
            <div class="tasks__block">
                <a href="task3.php"class="tasks__btn">Задание 3</a>
                <a href="task4.php" class="tasks__btn">Задание 4</a>
            </div>
            <div class="tasks__block">
                <a href="closeSession.php"class="tasks__btn">Удалить сессию</a>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'footer.html';
?>