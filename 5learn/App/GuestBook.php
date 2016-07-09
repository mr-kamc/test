<?php

namespace App;


class GuestBook
{
    protected $lines;

    public function __construct($path)
    {
        $this->lines = file($path);
    }

    //получает данные из файла
    public function getData()
    {
        return $this->lines;
    }

    //добавляет массив в файл
    public function append($text, $path)
    {
        $textOld = $this->lines;
        if (isset($text) && ('' !== $text)) {
            $textOld[] = $text;

            $strText = implode("\n", $textOld);

            file_put_contents($path, $strText);
        }
    }

    //сохраняет массив в файл
    public function save($file)
    {
        $str = $this->getData();
        $res = implode("\n", $str);
        file_put_contents($file, $res);
    }

}