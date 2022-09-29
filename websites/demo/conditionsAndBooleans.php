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
<h2>Navigation</h2>

<?php
        $navigation = [
            [
                "name" => "Home",
                "navigationUrl" => "/"
            ],
            [
                "name" => "First PHP Tag",
                "navigationUrl" => "http://localhost:8888/firstPhpTag.php"
            ],
            [
                "name" => "Variables",
                "navigationUrl" => "http://localhost:8888/variables.php"
            ],
            [
                "name" => "Conditions and Booleans",
                "assignmentUrl" => "http://localhost:8888/conditionsAndBooleans.php"
            ],
            [
                "name" => "Hello World",
                "navigationUrl" => "http://localhost:8888/helloWorld.php"
            ],
            [
                "name" => "Associate Arrays",
                "navigationUrl" => "http://localhost:8888/associateArrays.php"
            ]
        ];
    ?>
    <ul>
        <?php foreach ($navigation as $navigation) : ?>
            <li>
                <a href=" <?= $navigation ['navigationUrl']; ?>">
                <?= $navigation["name"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
