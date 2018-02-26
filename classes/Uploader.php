<?php

/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 25.02.2018
 * Time: 22:49
 */
class Uploader
{
    protected $field_name;

    public function __construct($field_name)
    {
        $this->field_name = $field_name;
    }


    public function isUploaded()
    {
        if (isset($_FILES[$this->field_name])){
            if(0 == $_FILES[$this->field_name]['error']){
                return true;
            }
        }
        return false;
    }

    public function upload($img_folder)
    {
        move_uploaded_file(
            $_FILES[$this->field_name]['tmp_name'],
            $img_folder .$_FILES['image']['name']
        );
    }

}