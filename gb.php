<?php
require_once __DIR__ . '/class/GuestBook.php';

$file_comments = __DIR__ . '/data/comments.txt';



//Если $_POST['comment'] не null
if(isset($_POST['comment'])){
    //Создаем экземпляр класса GuestBook
    $gb = new GuestBook($file_comments);

//Метод GetData() ввозвращает массив комментариев
    $comments = $gb->getData();

    // ... метод append() добавляет новый коментарий к массиву (свойство экземпляра класса)
    // и метод save сохраняет массив в файл. Такой вызов методов "по цепочке" возможен,
    //т.к. метод append() возвращает объект экземпляра класса (return $this).
    $gb->append($_POST['comment'])->save();

    header('Location: /Homework4/task1.php');
    //$comments = $gb->GetData();
}