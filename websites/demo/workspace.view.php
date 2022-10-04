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
    Demo Workspace
</h1>
<h2>
    Today's Laracasts Lesson: Lambda Functions
</h2>

<p>
    This is page is currently a workspace for current lessons via Laracasts.
</p>

<h3>
    Recommended Books
</h3>

<ul>
    <?php foreach ($filteredBooks as $book) : ?>
        <li>
            <a href=" <?= $book ['purchaseUrl']; ?>">
                <?= $book["name"]; ?> (<?= $book["releaseYear"]; ?>) by <?= $book["author"]; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<!--Return Home-->

<a href="http://localhost:8888" style="text-decoration: none">← back</a>

</body>
</html>
