<?php

namespace App;


class Uploader
{
    protected $name;

    //передаем имя поля формы $name, от которой мы ожидаем загрузку
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function isUploaded()
    {
        return is_uploaded_file($_FILES[$this->name]['tmp_name']);

    }

    //переносит файл, загруженный на сервер в наше место
    public function upload($place)
    {
        if ($this->isUploaded()) {
            if (isset($_FILES[$this->name])) {
                if (0 == $_FILES[$this->name]['error']) {
                    $new_name = $place . $_FILES[$this->name]['name'];
                    $tmp_name = $_FILES[$this->name]['tmp_name'];
                    $res = move_uploaded_file($tmp_name, $new_name);
                }
            }
        }

            return $res;
    }

}