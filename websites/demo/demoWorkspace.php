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
        Today's Laracasts Lesson: Functions and Filters
    </h2>

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
                "releaseYear" => 1968,
                "purchaseUrl" => "https://www.google.com",
            ],
            [
                "name" => "Project Hail Mary",
                "author" => "Andy Weir",
                "releaseYear" => 2021,
                "purchaseUrl" => "https://www.google.com",
            ],
            [
                "name" => "Pet Sematary",
                "author" => "Stephen King",
                "releaseYear" => 1983,
                "purchaseUrl" => "https://www.google.com",
            ],
            [
                "name" => "The Truth About Keeping Secrets",
                "author" => "Savannah Brown",
                "releaseYear" => 2019,
                "purchaseUrl" => "https://www.google.com",
            ],
            [
                "name" => "To Kill a Mockingbird",
                "author" => "Harper Lee",
                "releaseYear" => 1960,
                "purchaseUrl" => "https://www.google.com",
            ],
            [
                "name" => "The Martian",
                "author" => "Andy Weir",
                "releaseYear" => 2011,
                "purchaseUrl" => "https://www.google.com",
            ]
        ];

    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];
        foreach ($books as $book) {
            if ($book['author'] === $author){
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    }

    ?>

    <ul>
        <?php foreach (filterByAuthor($books, "Andy Weir") as $book) : ?>
            <?php if ($book['author'] === 'Andy Weir') : ?>
                <li>
                    <a href=" <?= $book ['purchaseUrl']; ?>">
                    <?= $book["name"]; ?> (<?= $book["releaseYear"]; ?>) by <?= $book["author"]; ?>
                </a>
            </li>
    <?php endif; ?>
    <?php endforeach; ?>
    </ul>

</body>
</html>
