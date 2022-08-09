@extends('layouts.main')
@section('container')

<article class="mb-5">
    <h2>{{ $post->title }}</h2>

    {!! $post->body !!}

    <a href="/posts">Back To Posts</a>
</article>

@endsection
