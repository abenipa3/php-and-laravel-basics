<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<header>
    @yield('banner')
</header>
<body>
    {{-- yield means any content from the views, it will be yielded (or slotted) between the body tags. --}}
    @yield('content')
</body>
</html>
