<?php
session_start();
include "header.html";
$a = 4;
$b = 9;

task2($a, $b);
function task2(&$num1, &$num2){
    $num1++;
    $num2 -= 3;
}

?>

<section class="main">
    <div class="main__wrapper">
        <h1><?php echo $_SESSION["name"];?></h1>
        <p><?php echo "a = $a, b = $b";?></p>
        <a href="index.php" class="tasks__btn" style = "margin:0">Вернуться на главную</a>
    </div>
</section>

<?php
include "footer.html";
?>
