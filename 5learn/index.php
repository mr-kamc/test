<?php

include __DIR__ . '/App/GuestBook.php';
include __DIR__ . '/App/Uploader.php';

$path = __DIR__ . '/App/db.txt';
$test = __DIR__ . '/test.txt';
$book = new \App\GuestBook($path);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php ob_start() ?>
<form action="/5learn/gen.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myFile">
    <input type="submit" value="send">
</form>
<?php ob_end_clean() ?>
</body>
</html>