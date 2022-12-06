<?php
require_once 'connect-bd.php';

$editCategoryFrom = $_POST["editCategoryFrom"];
$editCategoryTo = $_POST["editCategoryTo"];

$query = "UPDATE categories SET name_category = '$editCategoryTo' WHERE name_category = '$editCategoryFrom'";
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