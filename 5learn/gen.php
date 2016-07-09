<?php

include __DIR__ . '/App/Uploader.php';

$place = __DIR__ . '/App/files/';

$upload = new \App\Uploader('myFile');

$upload->upload($place);

echo header('Location:/index.php');