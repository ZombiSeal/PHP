<?php
session_start();
include "header.html";

$arr = [1, 3, 5, 7, 9, 13];
$avg = task4($arr);

function task4($arr) {
    $sum = array_sum($arr);
    $count = count($arr);
    $avg = round($sum / $count, 2);

    return $avg;
}
?>

<section class="main">
    <div class="main__wrapper">
        <h1><?php echo $_SESSION["name"];?></h1>
        <p><?php echo "Среднее арифметическое массива: $avg";?></p>
        <a href="index.php" class="tasks__btn" style = "margin:0">Вернуться на главную</a>
    </div>
</section>

<?php
include "footer.html";
?>
