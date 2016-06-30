<?php

require __DIR__ . '/func.php';

if (isset($_POST['x'])) {
    $x = (int)$_POST['x'];
} else {
    $x = null;
}
if (isset($_POST['y'])) {
    $y = (int)$_POST['y'];
} else {
    $y = null;
}
if (isset($_POST['op'])) {
    $op = $_POST['op'];
}

$res = calculate($x, $y, $_POST['op']);

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
    <input type="number" name="x" value="<?php echo $x; ?>">
    <select name="op">
        <option value="+" <?php if ('+' == $op) { ?> selected<?php } ?>>+</option>
        <option value="-" <?php if ('-' == $op) { ?> selected<?php } ?>>-</option>
        <option value="/" <?php if ('/' == $op) { ?> selected<?php } ?>>/</option>
        <option value="*" <?php if ('*' == $op) { ?> selected<?php } ?>>*</option>
    </select>
    <input type="number" name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=">
</form>

<?php echo $res; ?>


<a href="gallery.php">галлерея</a>


</body>
</html>