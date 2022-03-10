@extends('layouts.main')

@section('container')
   <a href="/blog">< Back</a>

   <div class="container mt-3">
      <h2>
         {{ $post["title"] }}
      </h2>
      <h5>{{ $post["author"] }}</h5>
      <p>{{ $post["body"] }}</p>
   </div>
@endsection