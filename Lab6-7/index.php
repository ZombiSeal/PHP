<?php
//task1: перемешать все элементы в случайном порядке
$arr = array(1, 2, 3, 5, 6);
shuffle($arr);
print_r($arr);

//task2: удалить элемент со значением 3, целочисленные ключи должны быть нормализованы
$x = array(1, 2, 3, 4, 5);

echo "<br>";
unset($x[2]);
sort($x);
print_r($x);

// for ($i = 0; $i < count($x) + 1; $i++) {
//     if ($x[$i] == 3) {
//         unset($x[$i]);
//     }
// }

// task3: Отсортировать по убыванию(по значению и ключу)
$arr1 = array("Алиса" => "27", "Наталья" => "41", "Кристиан" => "30", "Антон" => "18");
arsort($arr1);
krsort($arr1);

echo "<br>";
print_r($arr1);

//task4: Получить самый большой ключ
$x1 = array(10 => 1, 50 => 6, 80 => 8, 100 => 10, 12 => 16, 101 => 78);
krsort($x1);
$keys = array_keys($x1);
$max = $keys[0];

// $max = array_key_first($x1);

echo "<br>";
echo $max;

//task5: Создать массив типа [[1, 2, 3], [4, 5, 6], [7, 8, 9]]
$arr5 = array(range(1, 3), range(4, 6), range(7, 9));
echo "<br>";
print_r($arr5);
?>