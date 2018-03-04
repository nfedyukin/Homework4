<?php

class GuestBook
{
    protected $file_path;
    protected $comments;

    public function __construct()
    {
        $this->file_path =  __DIR__ . '/../data/comments.txt';

        $this->comments = file($this->file_path, FILE_IGNORE_NEW_LINES);

    }

    //Возвращает массив комментариев
    public function getData() :array
    {
        return $this->comments;
    }

    //Добавляет комментарий к массиву
    public function append($text)
    {
        $this->comments[] = $text;
        return $this;
    }

    //Сохраняет массив в файл
    public function save()
    {
        file_put_contents($this->file_path, implode(PHP_EOL, $this->comments));
        return $this;
    }

}