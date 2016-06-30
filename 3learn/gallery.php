<?php
$images = include __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php foreach($images as $num=>$img){ ?>
    <a href="image.php?file=<?php echo $num; ?>"><img src="/img/<?php echo $img; ?>"></a></br>
<?php } ?>


</body>
</html>