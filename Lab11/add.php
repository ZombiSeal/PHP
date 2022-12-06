<?php
require_once 'connect-bd.php';

$addCategory = $_POST["addCategory"];
$query = "INSERT INTO categories (name_category) VALUES ('$addCategory')";
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

