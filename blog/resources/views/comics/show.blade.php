@extends('layout.app')

@section('title', 'Comic Page')

@section('css')
<link rel="stylesheet" href="{{asset('css/comic.css')}}">
@endsection

@section('content')
<div class="comic">
  <img src="{{$comic->cover}}" alt="">
  <h2> {{ $comic->title }}</h2>
  <p>{{ $comic->description }}</p>
  <p>$ {{$comic->price}}</p>
  <p>Series: {{ $comic->series }}</p>
</div>

<form action="{{route('comics.destroy', $comic->id)}}" method="post">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger">Delete</button>
</form>

@endsection