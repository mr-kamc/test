<?php

include __DIR__ . '/App/GuestBook.php';

$path = __DIR__ . '/App/db.txt';
$test = __DIR__ . '/test.txt';
$book = new \App\GuestBook($path);

$book->save($test);