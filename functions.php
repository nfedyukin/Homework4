<?php

// Функции для фотоальбома


function getImageList($path)
{
    // Получаем в массив список файлов, отбрасываем "." и ".." , выбираем по паттерну только избражения (jpeg|jpg|png)
    $imageList = preg_grep('~\.(jpeg|jpg|png)$~',array_slice(scandir($path), 2));
    return $imageList;
}
