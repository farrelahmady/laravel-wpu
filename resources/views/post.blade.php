@extends('layouts.main')

@section('container')
    <a href="/blog">
        < Back</a>

            <div class="container mt-3">
                <h2>
                    {{ $post->title }}
                </h2>
                <h5>by <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a
                        href="/categories/{{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a></h5>
                <p>{!! $post->body !!}</p>
            </div>
        @endsection
