<?php

require __DIR__ . '/func.php';

$x = (int)$_POST['x'];
$y = (int)$_POST['y'];

$res = calculate($x,$y,$_POST['op']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>calculator</h1>
<form action="/index.php" method="post">
    <input type="number" name="x">
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input type="number" name="y">
    <input type="submit" value="=">
</form>

<?php echo $res; ?>


<a href="gallery.php">галлерея</a>


</body>
</html>