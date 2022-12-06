<?php
//task1 

$str = "ab 7+7 7++7 7+++7 abc 567";
$pattern = "/7\++7/";
$result = preg_match_all($pattern,$str,$found);
echo "Matches: $result<br>";
var_dump($found);

//task2 
echo "<br>";
$password = "abcd asdfafF566 fgfg6 GGhghhg76 ппппрп65Порп";
$passwordPattern = "/(?=.*[0-9])(?=.*[A-Z])\w{8,}/";
$result1 = preg_match_all($passwordPattern,$password,$found1);
echo "Matches: $result1<br>";
var_dump($found1);

//task3
function checkNumberCar($number) {
    $numberPattern = "/^[а-я]{1}\d{3}[а-я]{2}$/u";
    $result = preg_match($numberPattern, $number);
    if ($result == 1) {
        echo "Номер верный <br>";
    } else {
        echo "Номер неверный <br>";
    }
}

checkNumberCar("е654ап");
checkNumberCar("654аап");
checkNumberCar("r543hd");

//task4
function findEmail($txt){
    $emailPattern = "/([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}/m";
    $result = preg_match_all($emailPattern, $txt, $found);
    echo "Matches: $result<br>";
    var_dump($found[0]);
}

$txt = "keda20021002@gmail.com ghfhgg \n dghh25362 keda.2002-da@mail-ru.ru 24152 \n gfdsgh gffgd ytsa";
findEmail($txt);

//task5 
$replacePattern = "/дурак|дурaк|д\sу\sр\sа\sк/iu";
echo preg_replace($replacePattern, "хороший человек",'ты дурак и самый ДуРак, люблю тебя, д у р а к, дурaк' );
?>
