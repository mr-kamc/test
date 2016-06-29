<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

$img = $_GET['id'];

$images = [1=>'cat.jpg',2=>'dog.jpg',3=>'monkey.jpg'];


?>

<img src="img/<?php echo $images[$img]; ?>">

</body>
</html>