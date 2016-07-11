<?php

namespace App;


class GuestBookRecord
{
    protected $message;
    public function __construct($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        //return $this->message;
        echo $this->message;
    }

}