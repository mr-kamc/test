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
        $this->data[$name] = $value;

    }

    public function display($template)
    {
        /*
        $data = $this->data;
        include $template;
*/
        echo $this->render($template);
    }

    public function render($template)
    {
        /*ob_start();

        $data = $this->data;
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
        */
        ob_start();
        foreach($this->data as $var => $value) {
            $$var = $value;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;

    }

}