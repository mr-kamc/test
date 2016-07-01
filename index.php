<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$cities = include __DIR__ . '/data.php';
foreach ($cities as $city) {
    echo $city . ', ';
}
?>
</body>
</html>