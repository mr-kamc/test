<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        article{
            margin-bottom: 15px;
            padding: 10px;
            border: 1px dotted green;
        }
    </style>
</head>
<body>
<?php
foreach($data as $line) {?>
    <article><?php echo $line->getMessage(); ?></article>
<?php } ?>

</body>
</html>