<?php

require_once __DIR__ . '/class/GuestBook.php';

//$file_comments = __DIR__ . '/data/comments.txt';

//Создаем экземпляр класса GuestBook
$gb = new GuestBook();

//Метод GetData() ввозвращает массив комментариев
$comments = $gb->getData();


?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/Homework4/style.css" rel="stylesheet">
    <title>Задание 2</title>
</head>
<body>
<h1>Задание №1</h1>
<h2>Гостевая книга</h2>

<?php
//Если массив не пустой
if (!empty($comments)){
    //... перебираем его, и генерируем блоки с комментариями
    foreach ($comments as $comment){
        ?>
        <blockquote><article style="border: solid 2px #DBCECE" ">
                <?php echo $comment; ?>
            </article></blockquote>
        <?php
    }
}
?>

<div style="width: 500px">
    <form style="border: 1px solid black" method="post"  action="/Homework4/gb.php">
        <textarea style="width: 80%; margin: 15px 15px 15px 15px" name="comment"  rows="5"></textarea><br>
        <button type="submit" style="margin: 0px 15px 15px 15px">Добавить коментарий</button><br>
    </form>
</div>
<br><br>
<a href="/Homework4/index.html">Назад</a>


</body>
</html>
