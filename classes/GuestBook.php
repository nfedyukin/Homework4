<?php

class GuestBook
{
    protected $file_path;
    protected $comments;

    public function __construct( $file_path)
    {
        $this->file_patrh = $file_path;

        if($this->check_file()){
            $this->comments = file($file_path);
        } else {
            $this->comments = ['Ошибка!'];
        }
    }

    //Возвращает массив комментариев
    public function GetData()
    {
        return $this->comments;
    }

    //Добавляет комментарий к массиву
    public function append($text)
    {
        array_push($this->comments, PHP_EOL . str_replace(PHP_EOL, ' ',$text));
        return $this;
    }

    //Сохраняет массив в файл
    public function save()
    {
        file_put_contents($this->file_patrh, $this->comments);
        return $this;
    }

    //Проверка файла
    private function check_file()
    {
        return true;
    }

}