<?php
session_start();
include "header.html";

$x = -5;
$y = task3($x);

function task3($x){
    if ($x >= -5 && $x <= 5) {
        $y = $x**2;
    } 

    if ($x < -5) {
        $y = 2 * abs($x) - 1;
    }

    if ($x > 5) {
        $y = 2 * $x;
    }

    return $y;
}
?>

<section class="main">
    <div class="main__wrapper">
        <h1><?php echo $_SESSION["name"];?></h1>
        <p><?php echo "При х = $x y = $y";?></p>
        <a href="index.php" class="tasks__btn" style = "margin:0">Вернуться на главную</a>
    </div>
</section>

<?php
include "footer.html";
?>
