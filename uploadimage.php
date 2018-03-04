<?php
require_once __DIR__ . '/class/Uploader.php';

$img_folder = __DIR__ . '/img/';

$uploader = new Uploader('image');


if ($uploader->isUploaded()){
    $uploader->upload($img_folder);
}
header('Location: /Homework4/task2.php');