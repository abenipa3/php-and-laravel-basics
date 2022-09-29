<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework: First PHP Tag</title>
    <style>
        body {
            display:grid;
            place-items:center;
            /* height: 100vh; */
            margin:0;
            font-family: sans-serif;
        }

        img {
            width: 500px;
        }
    </style>
</head>
<body>
    <h1>
        <?php
        echo "Hello World";
        ?>
    </h1>
    <p>
    <?php
    echo "Laracast is pretty cool.";
    ?>
    </p>
    <p>
    <?php
    echo "I'm going to take a nap now. Bye!<br>";
    echo "<center><img src='https://64.media.tumblr.com/e94f30d90d00cb32a34c74190771e3ea/be155eb700bcb5a9-37/s1280x1920/01c1a5a37040561affca420f51fc11291971088d.jpg'></center>";
    ?>
    </p>

</body>
</html>
