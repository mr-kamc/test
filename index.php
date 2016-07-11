<?php

require __DIR__ . '/App/GuestBook.php';

$gb = new \App\GuestBook(__DIR__ . '/db.txt');
$data = $gb->getAll();

include __DIR__ . '/templates/articles.php';
