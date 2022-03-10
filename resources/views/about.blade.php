@extends('layouts.main')

@section('container')
   <h1>{{ $title }} Page</h1>

   <h3>{{ $name }}</h3>
   <h4>{{ $email }}</h4>

   <img src="img/{{ $image }}" alt="{{ $name }}" width="100">
@endsection