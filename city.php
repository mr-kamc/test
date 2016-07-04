<?php

$cities = include __DIR__ . '/data.php';

$us = $_POST;

$res = array_intersect($us,$cities);

//определение последнего символа
$last =substr($res['city'],-2);
$first = substr($res['city'],0,2);

if($res){
    echo 'есть город';
} else {
    echo 'нет города';
}

var_dump($res);
var_dump($first);

$fin = [];
foreach($cities as $key=>$cit){
    $result = [];

    $citLow = mb_strtolower(substr($cit,0,2));//города в нижнем регистре

    if($last==$citLow){
        echo $cit;
        break;
    }

}






