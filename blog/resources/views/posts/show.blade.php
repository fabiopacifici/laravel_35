@extends('layout.app')

@section('title', 'News Page')

@section('content')
<div class="container">

  <div class="post">
    <h1>{{ $post->title }}</h1>
    <img width="600" src="{{ $post->cover }}" alt="">
    <p>{{$post->body}}</p>
  </div>

</div>
@endsection