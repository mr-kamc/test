<?php

namespace App;


class Article
{
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getNews()
    {
        echo $this->text;
    }

}