<?php

require __DIR__ . '/App/Db.php';
require __DIR__ . '/App/News.php';
require __DIR__ . '/App/View.php';

include __DIR__ . '/config.php';

$news = new \App\News();

$view = new \App\View();


if (isset($_GET['id'])){
    $res = $news->findById($_GET['id']);
    $view->assign('news',$res);
    $view->display(__DIR__ . '/templates/articles.php');
} else {
    $res = $news->findAllSort();
    $view->assign('news',$res);
    $view->display(__DIR__ . '/templates/news.php');
}


