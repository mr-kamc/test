<?php

namespace App;


class News
{
    public function findAllSort()
    {
        $db = new Db();
        return $db->query('SELECT * FROM news ORDER BY id DESC');


    }
    public function findById($id)
    {
        $db = new Db();
        return $db->query('SELECT * FROM news WHERE id='.$id);
    }

}