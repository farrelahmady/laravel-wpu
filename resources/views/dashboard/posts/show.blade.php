@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="container mt-3">
                    <h2>
                        {{ $post->title }}
                    </h2>

                    <h5>by <a href="/blog?author={{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a>
                        in <a href="/blog?category={{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a></h5>

                    <div id="action" class="mb-2">
                        <a href="/dashboard/posts" class="btn btn-primary">
                            <span data-feather="arrow-left"></span> Back</a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span
                                data-feather="edit"></span> Edit</a>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline-block ">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure want to delete this post?')"><span
                                    data-feather="x-circle"></span> Delete</button>
                        </form>
                    </div>

                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top"
                        alt="{{ $post->title }}">
                    <article class="my-2">
                        {!! $post->body !!}
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
