<?php
/*
require __DIR__ . '/App/GuestBook.php';

$gb = new \App\GuestBook(__DIR__ . '/db.txt');
$data = $gb->getAll();

include __DIR__ . '/templates/articles.php';
*/
/*
require __DIR__ . '/App/GuestBook.php';
require __DIR__ . '/App/View.php';

$gb = new \App\GuestBook(__DIR__ . '/db.txt');
$data = $gb->getAll();
$books = new \App\View();
$books->assign('art',$data);
echo $books->render(__DIR__ . '/templates/articles.php');
*/

require __DIR__ . '/App/News.php';
require  __DIR__ . '/App/View.php';

$news = new \App\News(__DIR__ . '/db.txt');

$view = new \App\View();


if(isset($_GET['id'])){
    $data = $news->getOneId($_GET['id']);
    $view->assign('news',$data);
    echo $view->render(__DIR__ . '/templates/articles.php');
}
else {
    $data = $news->getAll();
    $view->assign('news',$data);
    echo $view->render(__DIR__ . '/templates/news.php');
}



