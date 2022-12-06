<?php
//task1
echo"<b>Задание 1</b><br>";

$arr = array(
        array("title" => "one", "description" => "1", "price" => 11),
        array("title" => "two", "description" => "2", "price" => 22),
        array("title" => "three", "description" => "3", "price" => 33),
        array("title" => "four", "description" => "4", "price" => 44),
        // array("title" => "fife", "description" => "5", "price" => 55),
        // array("title" => "six", "description" => "6", "price" => 66),
        // array("title" => "seven", "description" => "7", "price" => 77),
        // array("title" => "eight", "description" => "8", "price" => 88),
        // array("title" => "nine", "description" => "9", "price" => 99),
        // array("title" => "ten", "description" => "10", "price" => 1010)
);

foreach($arr as $value) {
    if ($value['price'] <= 30) {
        echo "<div style = 'color: red;'>";

    } else {
        echo "<div style = 'color: green;'>";
    }
        echo "<h1>{$value['title']}</h1>";
        echo "<p>{$value['description']}</p>";
        if ($value['price'] <= 30) {
            echo "<a href = '#' style = 'color: red;'>{$value['price']}</a>";
    
        } else {
            echo "<a href = '#' style = 'color: green;'>{$value['price']}</a>";
        }
    echo "</div>";

}

//task2
echo"<br><b>Задание 2</b><br>";

for ($i = 100; $i < 999; $i++) {
    if (($i % 10 != intdiv($i, 100))
        && ($i % 10 != intdiv($i % 100, 10))
        && (intdiv($i, 100) != intdiv($i % 100, 10))){

        echo "$i ";
    }
}

echo"<br>";

//task3
echo"<br><b>Задание 3</b><br>";

$arr3 = array(
    array(3, 34),
    array(3, 40)
);

$sumN = 0;
$sumM = 0;


foreach($arr3 as $item) {

    $sumM += $item[0];
    $sumN += $item[1];
}

echo "$sumM<br>";
echo "$sumN<br>";


//task4
echo"<br><b>Задание 4</b><br>";
$arr4 = array(1, 0, 2, 4, 3, 5, 3, 1, 2);
$arr4 = array_chunk($arr4,3);
$arrB = array();

foreach ($arr4 as $item) {
    $avg = array_sum($item)/count($item);
    array_push($arrB, $avg);
}

print_r($arrB);
echo "<br>";

//task5 
echo"<br><b>Задание 5</b><br>";

$sumA = 0;
$sumB = 0;
$sumC = 0;

$x = 30;
$n = 5;

for ($i = 0; $i < $n; $i++) {
    $sumA += sin($x)**$n;
    $sumB += sin($x**$n);
    $sumC += sin($x**$n)**$n;
}

echo "sumA = $sumA, sumB = $sumB, sumC = $sumC<br>";

//task6
echo"<br><b>Задание 6</b><br>";

$arr6 = array(
    array(1, 2, 1),
    array(2, 2, 2),
    array(3, 1, 3)
);

$p = 0;
$q = 2;

list($arr6[$p], $arr6[$q]) = array($arr6[$q], $arr6[$p]);

foreach($arr6 as $value) {
    foreach($value as $val) {
        echo "$val ";
    }
    echo "<br>";
}
print_r($arr6);
echo "<br>";

//task7
echo"<br><b>Задание 7</b><br>";

$vectorX = array(1, 3, 5, 7, 9);
$vectorY = array(2, 4, 6, 8, 10);
$vectorZ = array();

for ($i = 0; $i < count($vectorX); $i++) {
    array_push($vectorZ, $vectorX[$i]);
    array_push($vectorZ, $vectorY[$i]);
}

    

print_r($vectorZ);
echo "<br>";

//task8
echo"<br><b>Задание 8</b><br>";

$arr8 = array(1, 2, 3, 4, -1, -3, 5, 6);
$count = 0;
$sum = 0;
$mult = 1;


foreach($arr8 as $value) {
    if($value > 0) {
        $count++;
        $sum += $value;
        $mult *= $value;
    }
}

if ($count == 0) {
    echo "Нет положительных элементов";
}

$avg = $sum/$count;
$geomAvg = $mult**(1/$count);
echo "Среднее арифметическое: $avg<br> Среднее геометрическое: $geomAvg<br>";

//task9
echo"<br><b>Задание 9</b><br>";

$arr9 = array(4, -3, -5, 6, 8, -3, -1);

for ($i = 0; $i < count($arr9); $i++) {
    if ($arr9[$i] > 0) {
        $arr9[$i] /= 2;
    } else {
        $arr9[$i] = $i;
    }
}

print_r($arr9);
echo "<br>";

//task10
echo"<br><b>Задание 10</b><br>";

$arr10 = array(
    array(1, 2, 1),
    array(3, 1, 10),
    array(2, 10, 1)
);

$sumUp = 0;
$sumDown = 0;

for ($i = 0; $i < count($arr10); $i++) {
    for($j = 0; $j < count($arr10); $j++) {

        if ($i < $j) {
            $sumUp += $arr10[$i][$j];
        } else if ($i > $j) {
            $sumDown += $arr10[$i][$j];
        }
    }
}

echo "Сумма выше: $sumUp, сумму ниже: $sumDown";
?>


