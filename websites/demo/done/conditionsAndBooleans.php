<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><strikethrough>Homework:</strikethrough> Conditions and Booleans Practice</title>
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
<?php

$name = "Animal Farm";
$read = true;

if ($read == true) {
    $message = "You have read $name";
} else {
    $message = "You have NOT read $name";
}

?>

<h1>
<?php echo $message; ?>
</h1>

<?php
    echo "<center><img src='https://yt3.ggpht.com/zTJOeZeehQj6PnQawt-Hncy2Ogcl2nKr0L4bEhvRSvemJjYoDeta7z9Ay-d4T7JKKPX_bj6GIw=s900-c-k-c0x00ffffff-no-rj'></center>";
?>

    <p>
        <?php
        echo "Side Note: This was just practice. The assignment for this lesson is <a href=\"http://localhost:8888/helloWorld.php\">Hello World</a>."
        ?>
    </p>

    <!--Return Home-->

    <a href="http://localhost:8888" style="text-decoration: none">← back</a>


</body>
</html>
