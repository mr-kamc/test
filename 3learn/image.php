<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

$img = include __DIR__ . '/data.php';
$num = $_GET['file'];

?>

<img src="img/<?php echo $img[$num]; ?>">

</body>
</html>