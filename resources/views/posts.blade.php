@extends('layouts.main')

@section('container')
    <h1 class="mb-4">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->title }}">
            <div class="card-body text-center">
                <h1 class="card-title">{{ $posts[0]->title }}</h1>
                <h6>by <a href="/authors/{{ $posts[0]->author->username }}"
                        class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                        href="/categories/{{ $posts[0]->category->slug }}"
                        class="text-decoration-none">{{ $posts[0]->category->name }}</a></h6>
                <p class="card-text">{{ $posts[0]->excerpt }}...</p>
                <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
                <p class="card-text"><small class="text-muted">Last updated
                        {{ $posts[0]->updated_at->diffForHumans() }}</small></p>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="position-absolute bg-dark p-3 bg-black bg-opacity-50">
                            <a href="/categories/{{ $post->category->slug }}"
                                class="text-decoration-none text-white">{{ $post->category->name }}</a>
                        </div>
                        <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top"
                            alt="{{ $post->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <h6>by <a href="/authors/{{ $post->author->username }}"
                                    class="text-decoration-none">{{ $post->author->name }}</a><small
                                    class="text-muted ms-2">Last updated
                                    {{ $post->updated_at->diffForHumans() }}</small></h6>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/blog/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- @foreach ($posts->skip(1) as $post)
        <article class="mt-5 mx-3">
            <h2>
                {{ $post->title }}
            </h2>
            <h6>by <a href="/authors/{{ $post->author->username }}"
                    class="text-decoration-none">{{ $post->author->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a></h6>
            <p>{{ $post->excerpt }}<a href="/blog/{{ $post->slug }}" class="text-decoration-none">..Read More</a></p>
            <hr>
        </article>
    @endforeach --}}
@endsection
