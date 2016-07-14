<?php

namespace App;

require __DIR__ . '/Article.php';


class News
{
    protected $file;

    //в file передается путь до файла
    public function __construct($file)
    {
        $this->file = $file;
    }

    public function getAll()
    {
        $data = file($this->file);
        $ret = [];
        foreach($data as $line){
            $ret[] = new Article($line);
        }
        return $ret;
    }

    public function getOneId($id)
    {
        $data = file($this->file);
        return $data[$id];
    }

}