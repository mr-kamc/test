<?php
include __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$path = __DIR__ . '/db.txt';
$text = reedBook($path);
$i = 1;
?>
<form action="/4learn/gen.php" method="post">
    <input type="text" name="text">
    <input type="submit" value="send">
</form>

<?php if (is_readable($path)): ?>
    <?php
    foreach ($text as $art): ?>
        <p>Запись №<?php echo $i; $i++;?></p>
        <p><?php echo $art;?></p>
    <?php endforeach; ?>
<?php endif; ?>
<hr>
<form enctype="multipart/form-data" action="genFile.php" method="post">
    <input name = "userfile" type="file">
    <input type="submit" value="Send file">
</form>

</body>
</html>