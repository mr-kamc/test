<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

$res = file(__DIR__ . '/db.txt');
$res[] = 'Слова народные';
$str = implode("\n", $res);
file_put_contents(__DIR__ . '/db.txt', $str);

?>

</body>
</html>