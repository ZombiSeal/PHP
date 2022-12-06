<?php
require_once 'connect-bd.php';

$delCategory = $_POST["delCategory"];
$query = "DELETE FROM categories WHERE name_category = '$delCategory'";
$result = mysqli_query($link, $query);

if ($result == true) {
    header("Location: /Lab11/index.php");
} else {
    echo "Ошибка";
    mysqli_error($link);
    echo "<a href='index.php'>Вернуться на главую</a>";
    exit();
}


?>