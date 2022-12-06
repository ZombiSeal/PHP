<?php
// session_start();
// $_SESSION["message"] = true;
function validator()
{
    $patternName = "/^[А-Яа-яё]+\s[А-Яа-яё]+\s[А-Яа-яё]+$/u";
    $patternEmail = "/^([a-zA-Z0-9_-]+\.)*[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\.[a-zA-Z]{2,6}$/";
    $patternPhone = "/^(\+375|80)(29|44|33|17)(\d{7})$/";
    $flag = true;


    if (isset($_POST["userName"])) {
        if (!empty($_POST["userName"])) {
            if (preg_match($patternName, $_POST["userName"]) == 1) {
                $_SESSION["userName"] = $_POST["userName"];
                echo $_SESSION["userName"], "<br>";
                $flag = true;
            } else {
                echo "Поле 'ФИО' заполнено неверно<br>";
                $flag = false;
            }
        } else {
            echo "Поле 'ФИО' не заполнено<br>";
            $flag = false;
        }
    }


    if (isset($_POST["userEmail"])) {
        if (!empty($_POST["userEmail"])) {
            if (preg_match($patternEmail, $_POST["userEmail"]) == 0) {
                echo "Поле 'Ваш email' заполнено неверно<br>";
                $flag = false;
            }
        } else {
            echo "Поле 'Ваш email' не заполнено<br>";
            $flag = false;
        }
    }

    if (isset($_POST["userPhone"])) {
        if (!empty($_POST["userPhone"])) {
            if (preg_match($patternPhone, $_POST["userPhone"]) == 0) {
                echo "Поле 'Ваш телефон' заполнено неверно<br>";
                $flag = false;
            }
        } else {
            echo "Поле 'Ваш телефон' не заполнено<br>";
            $flag = false;
        }
    }

    return $flag;
}

$flag = validator();

$rightAnswers = ["привет", ["2", "3"], "2", "как дела", "5", ["1", "2"]];
$userAnswers = [strtolower($_POST["answer1"]), $_POST["answer2"], $_POST["answer3"], strtolower($_POST["answer4"]), $_POST["answer5"], $_POST["answer6"]];
$count = 0;

if ($flag == true) :
    foreach ($rightAnswers as $key => $el) {
        if ($el == $userAnswers[$key]) {
            $count++;
        }
    }
    echo $count;
?>

    <p>Вопрос 1</p>
    <p>
        <?php echo "$rightAnswers[0]" ?>
    </p>
    <p>Ваш ответ:<span <?php if ($userAnswers[0] == $rightAnswers[0]) : ?> style="color: green" <?php else : ?> style="color: red" <?php endif; ?>><?php echo "$userAnswers[0]" ?>
        </span></p>

    <p>Вопрос 2</p>
    <p>Ваш ответ:
        <?php foreach ($userAnswers[1] as $key => $el) {
            if ($el == $rightAnswers[1][$key]) {
                echo "<span style = 'color: green;'> $el </span>";
            } else {
                echo "<span style = 'color: red;'> $el </span>";
            }
        } ?>
    </p>


<?php
endif;
?>
<?php

?>

<a href="index.php">BACK</a>