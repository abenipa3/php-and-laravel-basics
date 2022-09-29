<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display:grid;
            place-items:center;
            /* height: 100vh; */
            margin:0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <h1>
        Laracasts Lessons: Demo Workspace
    </h1>

    <p>
        This is page is currently a workspace for current lessons via Laracasts.
    </p>
    <p>
        View past assignments in the following links:
    </p>

    <ul>
        <li>
            Test
        </li>
    </ul>

    <h3>
        Recommended Books
    </h3>


<ul>
    <?php foreach ($books as $book) : ?>
    <li>
        <a href=" <?= $book ['purchaseUrl']; ?>">
            <?= $book["name"]; ?>
        </a>
    </li>

        <?php endforeach; ?>
</ul>

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
