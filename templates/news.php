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
    <?php foreach ($data['news'] as $prop=>$article) { ?>
        <article>
            <?php echo $article->getNews() ?>
            </br>
            <a href="/6learn/index.phpdex.php?id=<?php echo $prop; ?>">open article</a>
        </article>
    <?php } ?>
    <article>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum.
    </article>
</div>
</body>
</html>