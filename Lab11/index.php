<?php
require_once 'connect-bd.php';

    $query = "SELECT name_category FROM categories";
    $result = mysqli_query($link, $query) or
        die("Ошибка " . mysqli_error($link));
    
    if ($result) {
        $rows = mysqli_num_rows($result);
    
        echo "<ol>";
        for ($i = 0; $i < $rows; ++$i) {
    
            $row = mysqli_fetch_row($result);
            for ($j = 0; $j < 1; ++$j) {
                echo "<li> {$row[$j]} </li>";
            }
        }
        echo "</ol>";
    }

?>

<h2>Изменение БД</h2>
<form action="add.php" method="POST">
    <p>Добавить категорию</p>
    <input type="text" name="addCategory" class="add" value="">
    <input type="submit" value="Добавить">
</form>

<form action="delete.php" method="POST">
    <p>Удалить категорию</p>
    <input type="text" name="delCategory" class="delete" value="">
    <input type="submit" value="Удалить">
</form>

<form action="edit.php" method="POST">
    <p>Изменить категорию</p>
    <input type="text" name="editCategoryFrom" class="delete" value="">
    <input type="text" name="editCategoryTo" class="delete" value="">
    <input type="submit" value="Изменить">
</form>

<a href="page1.php" class="second-page">Следующая страница</a>