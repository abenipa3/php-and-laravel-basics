<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <!-- @ symbol: Blade directive -->
    @foreach ($posts as $post)
    {{-- @dd($loop) --}}
    <articles class="{{ $loop->even ? 'mb-6' : ''}}">

        <h1>
            <a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
            </a>
        </h1>

        <div>
            {{ $post->excerpt }}
        </div>
    </article>
    @endforeach
</body>
</html>
