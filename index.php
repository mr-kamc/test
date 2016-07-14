<?php

require __DIR__ . '/App/Db.php';

include __DIR__ . '/config.php';

$data = new \App\Db();
var_dump($data->query('SELECT * FROM news'));
