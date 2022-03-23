@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>

    @foreach ($categories as $category)
        <h2>
            <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
        </h2>
    @endforeach
@endsection
