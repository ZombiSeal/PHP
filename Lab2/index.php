<?php
$x = false;

echo "---BOOL---</br>";
var_dump ((bool) "false");
var_dump ((bool) 0);
var_dump ((bool) 0.99);
var_dump ((bool) 13);
var_dump ((bool) -1);
var_dump ((bool) array());
var_dump ((bool) array(92));
var_dump ((bool) "");
var_dump ((bool) "log");
?>

<?php 
$number = 7384;
$number_negative = -463;
$number8 = 0745;
$number16 = 0x5B;

echo "</br>---INTEGER---</br>";
$large_number = 10000000000147483648;
var_dump($large_number);
$large_number_operation = 147483648 + 10000000000000000000;
var_dump($large_number_operation);

echo "</br>---INTEGER_ROUND---</br>";
var_dump (30/9);
var_dump((int) (30/9));
var_dump(round(30/7));

var_dump((int)(0.5 + 0.6) * 10);

echo intval(true);
?>

<?php 
echo "</br>---FLOAT---</br>";
$float1 = 3.98;
$float2 = 2.6e8;

var_dump (floor((0.6 + 0.7) * 10));
?>

<?php
echo "</br>---STRING---</br>";
$str = "Hi";
$str1 = "$str Text </br>";
$str2 = '$str I\'m TXT1\n';

echo $str1, $str2;
$str3 = <<<TEXT
HEREDOC $str
Syntacsis
TEXT;
echo $str3;
?>

<?php
echo "<br>---ARRAY---<br>";

$arr[1] = 5;
$arr[2] = 2;
$arr[3] = 19;
echo $arr[2];

echo "<br>";

$arr1[] = "hi";
$arr1[] = "my";
$arr1[] = "dear";
$arr1[] = "friend";
echo $arr1[3];
echo "<br>";

$arr2["one"] = 1;
$arr2["two"] = 2;
$arr2["three"] = 3;
echo $arr2["two"];
echo "<br>";

$arr3[0][0]="dog";
$arr3[0][1]="cat";
$arr3[1][0]="hourse";
$arr3[1][1]="mouse";
echo $arr3[0][1];
echo "<br>";

$arr4["dog"] = array("name"=>"Gav", "age"=>"5");
$arr4["cat"] = array("name"=>"Bob", "age"=>"12");
echo $arr4["cat"]["name"];
echo "<br>";
echo $arr4["cat"]["age"];


$arr5 = array(
    array("dog","cat"),
    array("hourse"),
    array("mouse","bear"),
    );
echo $arr5[2][1];
echo "<br>";
?>