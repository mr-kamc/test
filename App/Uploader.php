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

    }

    public function upload()
    {

    }

}