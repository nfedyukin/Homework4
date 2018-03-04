<?php

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
                return is_uploaded_file($_FILES[$this->field_name]['tmp_name']);
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