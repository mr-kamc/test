<?php

//каталог для перемещения файлов
$uploadDir = __DIR__ . '/files/';
$uploadFile = $uploadDir.basename($_FILES['userfile']['name']);

//проверяем тип загруженного файла
if('image/jpeg' == $_FILES['userfile']['type']||'image/png' == $_FILES['userfile']['type']) {
//копируем
    if (copy($_FILES['userfile']['tmp_name'], $uploadFile)) {
        echo 'файл загружен';
    } else {
        echo 'ошибка';
    }
} else {
    echo 'выберите файл \'jpeg\' или \'png\'';
}