<?php
/*
require __DIR__ . '/App/GuestBook.php';

$gb = new \App\GuestBook(__DIR__ . '/db.txt');
$data = $gb->getAll();

include __DIR__ . '/templates/articles.php';
*/

require __DIR__ . '/App/GuestBook.php';
require __DIR__ . '/App/View.php';

$gb = new \App\GuestBook(__DIR__ . '/db.txt');
$data = $gb->getAll();
$books = new \App\View();
$books->assign('art',$data);
//$books->display(__DIR__ . '/templates/articles.php');
echo $books->render(__DIR__ . '/templates/articles.php');