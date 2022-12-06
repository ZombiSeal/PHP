<?php
session_start();
include 'header.html';
$arr = [14, 30, 103];


function task1($arr) {

    echo "Исходный массив: ";
    print_r($arr);
    echo "<br>";

    $sum = 0;
    $sumArr = [];

    foreach($arr as $el) {
        $tmp = $el;

        while ($tmp) {
        $num = $tmp % 10;
        $tmp = ($tmp - $num) / 10;
        $sum += $num;
        }

        array_push($sumArr, $sum);
        echo "Сумма цифер числа $el  равна $sum<br>";

        $sum = 0;
    }

    echo "Отсортированный массив: ";
    sort($sumArr);
    print_r($sumArr);

}
?>

<section class="main">
    <div class="main__wrapper">
        <h1><?php echo $_SESSION["name"];?></h1>
        <p><?php task1($arr); ?></p>
        <a href="index.php" class="tasks__btn" style = "margin:0">Вернуться на главную</a>
    </div>
</section>

<?php
include 'footer.html';
?>
