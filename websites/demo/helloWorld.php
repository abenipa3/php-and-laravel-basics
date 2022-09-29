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

<h1>
    <?= "Hello World" ?>
</h1>

<?php
    echo "<center><img src='https://i.kym-cdn.com/photos/images/newsfeed/002/205/307/1f7.jpg'></center>";
    ?>

<p>
    <?php
    echo "Assignment (Completed): Use a PHP short echo tag to display the string, \"Hello World\" on the page."
    ?>
    </p>

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
                "navigationUrl" => "http://localhost:8888/conditionsAndBooleans.php"
            ],
            [
                "name" => "Hello World",
                "navigationUrl" => "http://localhost:8888/helloWorld.php"
            ],
            [
                "name" => "Arrays",
                "navigationUrl" => "http://localhost:8888/arrays.php"
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
