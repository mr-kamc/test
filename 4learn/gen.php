<?php

include __DIR__ . '/functions.php';

$path = __DIR__ . '/db.txt';

$text = reedBook($path);

if (isset($_POST) && ('' !== $_POST['text'])) {
    $text[] = $_POST['text'];

    $strText = implode("\n",$text);

    file_put_contents($path, $strText);

}
header('Location:/');