<?php

$cities = include __DIR__ . '/data.php';

$us = $_POST;

$res = array_intersect($us,$cities);

//определение последнего символа строки
$last = substr($res['city'],-2);

if($res){
    echo 'есть город';
} else {
    echo 'нет города';
}

var_dump($res);
var_dump($last);
