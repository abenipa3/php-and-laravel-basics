@extends('layout')

@section('content')
<article>

    <h1>
        {{ $post->title }}
    </h1>

    <div>
        <!--- Control the HTML. -->
        {!! $post->body !!}
    </div>

</article>

<a href="/">Go Back</a>
@endsection
