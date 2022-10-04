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
        Favorite Movies
    </h3>

    <?php
        $movies = [
            [
                "name" => "War of the Worlds",
                "releaseYear" => 2005,
            ],
            [
                "name" => "The Crow",
                "releaseYear" => 1994,
            ],
            [
                "name" => "The Mist",
                "releaseYear" => 2007,
            ],
            [
                "name" => "Knives Out",
                "releaseYear" => 2019,
            ],
            [
                "name" => "The Lord of the Rings: The Fellowship of the Ring",
                "releaseYear" => 2001,
            ],
            [
                "name" => "The Lord of the Rings: The Two Towers",
                "releaseYear" => 2002,
            ],
            [
                "name" => "The Lord of the Rings: The Return of the King",
                "releaseYear" => 2003,
            ],
        ];

    function filterByReleased($movies)
    {
        $filteredMovies = [];

        foreach ($movies as $movie) {
            if ($movie['releaseYear'] >= 2000) {
                $filteredMovies[] = $movie;
            }
        }

        return $filteredMovies;
    }

    ?>

    <ul>
        <?php foreach (filterByReleased($movies) as $movie) : ?>
                <li>
                    <?= $movie["name"]; ?>
                </a>
            </li>
    <?php endforeach; ?>
    </ul>

    <p>
        <?php
        echo "Assignment (Completed): Create an array of your favorites movies, including their respective release dates. Then, write a function that filters your list of movies down to only those that were released in the year 2000 or higher. Display the results in an unordered list."
        ?>
    </p>

    <!--Return Home-->

    <a href="http://localhost:8888" style="text-decoration: none">← back</a>


</body>
</html>
