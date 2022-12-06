<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="task1.php" method="get">
        <p>Выберите персонажей:</p>
        <select name="characters[]" size="7" multiple>
            <option>Золушка</option>
            <option>Винни-пух</option>
            <option>Стич</option>
            <option>Белоснежка</option>
            <option>Ральф</option>
            <option>Немо</option>
            <option>Леопольд</option>
        </select>

        <input type="submit" value="Посмотреть">
    </form>

    <section class="test">
        <h1>ТЕСТ</h1>
        <form action="test.php" class="test__form" method="post">
            <div class="test__form__contacts">
                <p>Ваше имя</p>
                <input type="text" name="userName" value=<?php echo"{$_SESSION['userName']}";?>>
                <p>Ваш email</p>
                <input type="email" name="userEmail">

                <p>Ваш телефон</p>
                <input type="text" name="userPhone">
                <!-- <p>Ваше имя</p>
                <input type="text" name="userName" pattern="^[А-Яа-яё]+\s[А-Яа-яё]+\s[А-Яа-яё]+$" >

                <p>Ваш email</p>
                <input type="email" name="userEmail"
                    pattern="^([a-zA-Z0-9_-]+\.)*[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\.[a-zA-Z]{2,6}$"
                    >

                <p>Ваш телефон</p>
                <input type="tel" name="userPhone" pattern="^(\+375|80)(29|44|33|17)(\d{7})$" > -->
            </div>

            <div class="test__forms__quastions">
                <p>Вопрос 1</p>
                <input type="text" name="answer1">

                <p>Вопрос 2</p>
                <input type="checkbox" name="answer2[]" value="1">1
                <input type="checkbox" name="answer2[]" value="2">2
                <input type="checkbox" name="answer2[]" value="3">3
                <input type="checkbox" name="answer2[]" value="4">4
               
                <p> Вопрос 3</p>
                <input type="radio" name="answer3" value="1">1
                <input type="radio" name="answer3" value="2">2

                <p>Вопрос 4</p>
                <textarea name="answer4" cols="30" rows="5"></textarea>

                <p>Вопрос 5</p>
                <select name="answer5" size="1">
                    <option value="1">Ответ1</option>
                    <option value="2">Ответ2</option>
                    <option value="3">Ответ3</option>
                    <option value="4">Ответ4</option>
                    <option value="5">Ответ5</option>
                </select>

                <p>Вопрос 6</p>
                <select name="answer6[]" size="5" multiple>
                    <option value="1">Ответ1</option>
                    <option value="2">Ответ2</option>
                    <option value="3">Ответ3</option>
                    <option value="4">Ответ4</option>
                    <option value="5">Ответ5</option>
                </select>
            </div>
            <input type="submit" value="Посмотреть" src="test.php">
        </form>
    </section>
</body>

</html>