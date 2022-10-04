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

    <!--Return Home-->

    <a href="http://localhost:8888" style="text-decoration: none">← back</a>



</body>
</html>
