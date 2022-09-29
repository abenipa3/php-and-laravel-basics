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

        img {
            width: 400px;
        }

        .tooltip {
            position: relative;
            display: inline-block;
        }

        div.tooltip span {
            display: none;
            position: absolute;
            bottom: 50%;
            left: 35%;
            right: 0;
            background: #333;
            color: #fff;
            width: 150px;
            z-index: 30;
            text-align: center;
        }

        div.tooltip:hover span {
            display:block;
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

    <h3>
        Recommended Books
    </h3>

    <?php
        $books = [
            [
                "name" => "Do Androids Dream of Electric Sheep?",
                "author" => "Philip K. Dick",
                "purchaseUrl" => "https://www.google.com"
            ],
            [
                "name" => "Project Hail Mary",
                "author" => "Andy Weir",
                "purchaseUrl" => "https://www.google.com"
            ]
        ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
    <li>
        <a href=" <?= $book ['purchaseUrl']; ?>">
            <?= $book["name"]; ?>
        </a>
    </li>

        <?php endforeach; ?>
    </ul>


    <!--Navigation-->

    <div class="tooltip">
        <img src='https://preview.redd.it/upqea2gk5ph81.jpg?width=640&crop=smart&auto=webp&s=ebb00d2037b5561999232bca4c907c55a286a3e1'>
        <span>i burger</span>
    </div>

    <p>
        View past assignments in the following links:
    </p>

    <?php
        $assignments = [
            [
                "name" => "Home",
                "assignmentUrl" => "/"
            ],
            [
                "name" => "First PHP Tag",
                "assignmentUrl" => "http://localhost:8888/firstPhpTag.php"
            ],
            [
                "name" => "Variables",
                "assignmentUrl" => "http://localhost:8888/variables.php"
            ],
            [
                "name" => "Conditions and Booleans",
                "assignmentUrl" => "http://localhost:8888/conditionsAndBooleans.php"
            ],
            [
                "name" => "Hello World",
                "assignmentUrl" => "http://localhost:8888/helloWorld.php"
            ],
            [
                "name" => "Arrays",
                "assignmentUrl" => "http://localhost:8888/arrays.php"
            ],
            [
                "name" => "Associate Arrays",
                "assignmentUrl" => "http://localhost:8888/associateArrays.php"
            ]
        ];
    ?>
    <ul>
        <?php foreach ($assignments as $assignment) : ?>
            <li>
                <a href=" <?= $assignment ['assignmentUrl']; ?>">
                <?= $assignment["name"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
