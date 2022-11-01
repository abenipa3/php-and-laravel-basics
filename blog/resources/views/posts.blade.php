@extends ('layout')

@section('content')
    <!-- @ symbol: Blade directive -->
    @foreach ($posts as $post)
    {{-- @dd($loop) --}}
    <article class="{{ $loop->even ? 'mb-6' : ''}}">

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
@endsection
