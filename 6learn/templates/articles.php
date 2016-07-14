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
        <?php echo $data['news']; ?>
    </article>
</div>
</body>
</html>