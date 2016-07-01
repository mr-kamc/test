<?php

$cities = include __DIR__ . '/data.php';

$us = $_POST;

$res = array_intersect($us,$cities);

//определение последнего символа
$last = substr($res['city'],-2);

if($res){
    echo 'есть город';
} else {
    echo 'нет города';
}

var_dump($res);
var_dump($last);
foreach($cities as $cit){
    $fin = [];
    $las = substr($cit,0,2);
    if($las == 'А'){
        $fin[] = $cit;
        echo $cit;
    }
var_dump($fin);
}

