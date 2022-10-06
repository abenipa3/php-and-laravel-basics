<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
<h1><?= $business['name'] ?></h1>
<ul>
    <?php foreach ($business['categories'] as $category) : ?>
    <li><?= $category; ?></li>
    <?php endforeach ?>
</ul>

<!--Return Home-->

<a href="http://localhost:8888" style="text-decoration: none">← back</a>

</body>
</html>
