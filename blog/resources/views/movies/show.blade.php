@extends('layout.app')


@section('content')

<img src="{{$movie->poster}}" alt="">
<h1 class="display-1">{{$movie->title}}</h1>
<p class="lead">{{$movie->summary}}</p>

@endsection