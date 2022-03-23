@extends('layouts.main')

@section('container')
    <h1>{{ $title }} Category</h1>
    @foreach ($posts as $post)
        <h2>
            <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p>{{ $post->excerpt }}</p>
    @endforeach
@endsection
