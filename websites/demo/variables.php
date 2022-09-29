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
        $greeting = "What's up,";
        $noun = "World";
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
        echo "Assignment: Create a variable for noun called \"World\". Then play around with changing the variable values to generate different sentences."
        ?>
    </p>

</body>
</html>
