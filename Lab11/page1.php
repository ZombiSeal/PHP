<style>
    p, h2 {
        margin: 0;
    }

    .name-category {
        text-decoration: underline;
    }
</style>
<?php
require_once 'connect-bd.php';


$query = "SELECT  products.name, categories.name_category, products.description, products.price  FROM categories, products WHERE categories.id_category = products.id_category";
$result = mysqli_query($link, $query) or
    die("Ошибка " . mysqli_error($link));

if ($result) :
    $rows = mysqli_num_rows($result);


    for ($i = 0; $i < $rows; ++$i) :
        $row = mysqli_fetch_assoc($result);
?>

        <h2><?php echo $row['name']?></h2>
        <p><?php echo $row['description']?></p>
        <p class="name-category"><?php echo $row['name_category']?></p>
        <p><?php echo "{$row['price']} руб"?></p>
        <br>
        <?php
    endfor;
endif; ?>

<a href="index.php">Вернуться назад</a>

