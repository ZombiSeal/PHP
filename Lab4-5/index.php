<?php
//task1 

$str = "aaa bbaabbb ccaac ss AAss";
echo strripos($str, "aa");

//task2
echo "<br>";
$str1  = "1a2b3c4b5d6e7f8g9h0";
$arr = ["a", "b","c","d","e","f","g", "h"];
echo str_replace($arr, "", $str1);

//task3
echo "<br>";
$main_str = "asdfertyuplkjvasd";
echo "$main_str <br>";
$n = rand(1, strlen($main_str)/2);
$first_str = substr($main_str, 0, $n);
echo "n = $n <br> $first_str <br>";
$last_str = substr($main_str, -$n);
echo "$last_str <br>";

if (strcmp($first_str, $last_str) == 0) {
    echo "строки равны";
} else {
    echo "строки не равны";
}

//task4
echo "<br>";
$str4 = "Zolotaya osen ukrasila zemlyu";
echo "$str4<br>";
list($word1, $word2, $word3, $word4) = explode(" ", $str4);
$word1 = strtoupper($word1);
$word2 = strtoupper($word2);
$word4 = strtoupper($word4);
$str5 = "$word4 $word3 $word1 $word2" ;
echo $str5;


//task5
echo "<br>";
$mainstr5 = "qweAsbcjutfhdgrsgbcngf";
$len =strlen($mainstr5);
echo "Длина: $len";
echo "<br>";
$x = round(strlen($mainstr5)/5) * 3;
echo "$x <br>";
$firststr = substr($mainstr5, 0, $x);
$secondstr = substr($mainstr5, -($len - $x));
echo "$firststr <br>";
echo "$secondstr<br>";

$firststr[0] = chr(ord($firststr[0]) + round($x/2)); 
$firststr[$x - 1] = chr(ord($firststr[$x-1]) + round($x/2)); 
$firststr[round($x/2)] = chr(ord($firststr[round($x/2)]) + round($x/2)); 

if(strpos($firststr, "As") !== false) {
    $firststr = str_replace("As", "xT", $firststr);
}

$secondstr = strtolower($secondstr);
$secondstr[0] = strtoupper($secondstr[0]);
$secondstr[strlen($secondstr) - 2] = strtoupper($secondstr[strlen($secondstr) - 2]);


echo "$firststr <br>";
echo "$secondstr";


//task6
$k = 1;
$t = 1;
$k1 = 1;
$d = 1;
$q = 1;

$y = $k * pow(($t**2 * $k1)/$d * $q**2,1/3);
?>