@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="/blog">
                    < Back</a>
                        <div class="container mt-3">
                            <h2>
                                {{ $post->title }}
                            </h2>
                            <h5>by <a href="/blog?author={{ $post->author->username }}"
                                    class="text-decoration-none">{{ $post->author->name }}</a>
                                in <a href="/blog?category={{ $post->category->slug }}"
                                    class="text-decoration-none">{{ $post->category->name }}</a></h5>
                            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                                class="card-img-top" alt="{{ $post->title }}">
                            <article class="my-2">
                                {!! $post->body !!}
                            </article>
                        </div>
            </div>
        </div>
    </div>
@endsection
