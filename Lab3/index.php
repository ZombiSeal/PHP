<?php
$num1 = 54;
$num2 = 20;
$str1 = "z9";
$str2 = "fgh";

echo "---АРИФМЕТИЧЕСКИЕ ОПЕРАЦИИ---<br>";
$plus = $num1 + $num2;
$minus = $num1 - $num2;
$multiply = $num1 * $num2;
$divide = $num1 / $num2;
$remains = $num1 % $num2;

echo "сложение = $plus; вычитание = $minus; умножение = $multiply; деление = $divide; остаток от деления = $remains<br>";

echo "<br>---ИНКРЕМЕНТ И ДЕКРЕМЕНТ---<br>";
$numInc = $num1++;
$numInc1 = ++$num2;
echo "ЧИСЛО<br>";
echo "постфиксный инкремент: num1 = $num1, numInc = $numInc; префексный инкремени: num2 = $num2, numInc1 = $numInc1<br>";

$numDec = $num1--;
$numDec1 = --$num2;
echo "постфиксный декремент: num1 = $num1, numDec = $numDec; префексный декремент: num2 = $num2, numDec1 = $numDec1<br>";

echo "СТРОКА<br>";
$strInc = $str1++;
$strInc1 = ++$str2;
echo "постфиксный инкремент: str1 = $str1, strInc = $strInc; префексный инкремени: str2 = $str2, strInc1 = $strInc1<br>";

$strDec = $str1--;
$strDec1 = --$str2;
echo "постфиксный инкремент: str1 = $str1, strDec = $strDec; префексный инкремени: str2 = $str2, strDec1 = $strDec1<br>";

echo "<br>---ПРИСВАИВАНИЕ---<br>";
$nullValue = null;
$val = $nullValue ?? 1; // если  у nullValue нет значения, то выводится 1

$num = 5;
$num += 6;
$float = 5.84 - 92.1;
$float /= 4;
$bool = true;
$bool *= false;
$str = "try";
$str .= "hi";
echo "$val, $num, $float, $bool, $str<br>";

echo "<br>---КОНКАТЕНАЦИЯ---<br>";
$strConcat = "Hello " . "Word";
$strConcat .= "!!!";
echo "$strConcat<br>";

echo "<br>---ПОБИТОВЫЕ ОПЕРАЦИИ---<br>";
$a = 13&3;
echo "13&3 = $a<br>";
$a = 13|3;
echo "13|3 = $a<br>";
$a = 13^3;
echo "13^3 = $a<br>";
$a = ~13;
echo "~13 = $a<br>";
$a = 13<<3;
echo "13<<3 = $a<br>";
$a = 13>>3;
echo "13>>3 = $a<br>";

echo "<br>---ОПЕРАЦИИ СРАВНЕНИЯ---<br>";
if (15 == "15"){
    echo "15 == '15': true<br>";
} else {
    echo "15 == '15': false<br>";

}

if (15 === "15"){
    echo "15 === '15': true<br>";
} else {
    echo "15 === '15': false<br>";

}


if (15 != 15.0){
    echo "15 != 15.0: true<br>";
} else {
    echo "15 != 15.0: false<br>";

}

if (15 !== 15.0){
    echo "15 !== 15.0: true<br>";
} else {
    echo "15 !== 15.0: false<br>";

}


if (15 <> 1){
    echo "15 <> 1: true<br>";
} else {
    echo "15 <> 1: false<br>";

}

if (15 < 1){
    echo "15 < 1: true<br>";
} else {
    echo "15 < 1: false<br>";

}

if (15 <= 15.0){
    echo "15 <= 15.0: true<br>";
} else {
    echo "15 <= 15.0: false<br>";

}

$x=13 <=> 13;
echo("15 <=> 13: $x<br>"); //если первая переменная > второй, возвращается 1; если вторая < второго, возвращается -1; если он равны, возвращается 0

$a = array("cat", "dog");
$b = array(1 => "dog", 0 => "cat");

if ($a == $b) echo "сработало == <br>"; // bool(true)
if ($a === $b) echo "сработало === <br>"; // bool(false)

$a = array("cat", "dog", "fish");
$b = array(1 => "dog", 0 => "cat", 5 =>"pig");

var_dump($a + $b);

echo "<br>---ЛОГИЧЕСКИЕ ОПЕРАЦИИ---<br>";
$a = 13;
$b = 10;

if ($a > 0 and $a < $b) {
    echo "And: true <br>";
} else {
    echo "And: false <br>";
}

if ($a > 0 && $a < $b) {
    echo "&&: true <br>";
} else {
    echo "&&: false <br>";
}

if ($a > 0 or  $a < $b) {
    echo "Or: true <br>";
} else {
    echo "Or: false <br>";
}

if ($a > 0 || $a < $b) {
    echo "||: true <br>";
} else {
    echo "||: false <br>";
}

if ($a > 0 xor $a > $b) {
    echo "Xor: true <br>";
} else {
    echo "Xor: false <br>";
}

$c = false;
if (!$c == true) {
    echo "false";
} else {
    echo "true";
}

?>