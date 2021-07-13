@extends('layout.app')

@section('title', 'Comic Page')

@section('css')
<link rel="stylesheet" href="{{asset('css/comic.css')}}">
@endsection

@section('content')
<h1>Comics Page</h1>



<div class="comic">
  <img src="{{$comic['thumb']}}" alt="">
  {{ $comic['title'] }}
  <p>{{ $comic['description'] }}</p>

  <div class="artists">


    @if($comic['artists'])
    Artists:
    @forelse($comic['artists'] as $artist)
    <a href="#">{{$artist}}</a>
    @empty
    <a href="#">no artists to show</a>
    @endforelse
    @endif

  </div>
</div>


@endsection