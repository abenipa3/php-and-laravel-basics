<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework: Variables</title>
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
        $greeting = "Howdy";
        $noun = "Everybody";
        // Single quotes reads variable as a string.
        // Double quotes reads the variables as a variable.
        echo "$greeting $noun ✨"
        ?>
    </h1>
    <?php
    echo "<center><img src='https://i.kym-cdn.com/entries/icons/original/000/034/388/tempsnip4.png'></center>";
    ?>

    <p>
        <?php
        echo "Assignment (Completed): Create a variable for noun called \"World\". <br> Then play around with changing the variable values to generate different sentences."
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
