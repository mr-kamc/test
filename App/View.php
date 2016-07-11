<?php

namespace App;


class View
{
    protected $data=[];
    
    public function __construct()
    {
    }

    public function assign($name,$value)
    {
        $this->data=[$name=>$value];

    }

    public function display($template)
    {
        $data = $this->data;
        include $template;

    }

    public function render($template)
    {
        ob_start();

        $data = $this->data;
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;

    }

}