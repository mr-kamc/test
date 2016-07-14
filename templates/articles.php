<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
    <style>
        h1 {
            margin: auto;
            text-align: center;
            color: darkgoldenrod;
        }

        article {
            margin: 50px auto;
            width: 90%;
            text-align: center;

        }

        .art {
            margin: auto;
            width: 60%;
            border-left: solid 5px burlywood;
            border-right: solid 5px burlywood;
            background: bisque;
        }

        a {
            color: darkgoldenrod;
            text-underline: none;
        }
    </style>
</head>
<body>

<h1>News. The Lorem Ipsum</h1>

<div class="art">
    <article>
        <?php foreach($data['news'] as $value){ ?>
                <h2><?php echo $value['title']; ?></h2>
                <?php echo $value['text']; ?>
                </br>
                <p>Автор:<?php echo $value['author'] ?></p>
                <a href="/">home</a>
        <?php }?>
    </article>
</div>
</body>
</html>