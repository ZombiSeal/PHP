<?php

if(!empty($_GET["characters"])){
    echo "<textarea cols = '50' rows = '10' readonly>";
    foreach($_GET["characters"] as $el) {
        $md5 = md5($el);
        $crc32 = crc32($el);
        $sha1 = sha1($el);
        echo "Имя персонажа: $el \n";
        echo "md5: $md5 \n";
        echo "crc32: $crc32 \n";
        echo "sha1: $sha1 \n";
        echo "\n";

    }
    echo "</textarea>";
} else {
    echo "<input type='text' name='company' size = '50' value = 'имена не выбраны'/>";
}

?>

<a href="index.html">Назад</a>

