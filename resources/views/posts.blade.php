@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <h2>
            {{ $post->title }}
        </h2>
        <h6>by <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a
                href="/categories/{{ $post->category->slug }}"
                class="text-decoration-none">{{ $post->category->name }}</a></h6>
        <p>{{ $post->excerpt }}<a href="/blog/{{ $post->slug }}" class="text-decoration-none">..Read More</a></p>
    @endforeach
@endsection
