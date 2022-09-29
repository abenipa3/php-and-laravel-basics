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
        Top Performing Users
    </h1>

    <?php
        $users = [
            "tacocat",
            "hobbits2isengard",
            "buckybarnes",
            "AReallyCoolUsername"
        ];
    ?>

    <ol>
        <?php foreach ($users as $user): ?>
            <li><?= $user ?></li>
        <?php endforeach; ?>
    </ol>


    <p>
    <?php
    echo "<center><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZsopef1dI5sLRvRMRZdr8NivjkZeshcLX7sCzs3jxlq0tcu-R'></center>";
    ?>
    </p>

    <p>
        <?php
        echo "Assignment (Completed): Create an array of any three usernames - perhaps for a \"Top Performing Users\" section of your website. <br> Then, create a loop that displays each username within a list item."
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
