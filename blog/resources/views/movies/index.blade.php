@extends('layout.app')

@section('title', 'Movies Page')

@section('hero-image')
<div class="hero-image"></div>
@endsection

@section('content')


<div class="movies">
  <section class="container">
    <h2 class="section_title">Movies Page</h2>
    <div class="comics_container">
      @foreach($movies as $movie)
      <div class="movie">
        <img src="{{ $movie->poster }}" alt="">
        {{ $movie->title }}

      </div>
      @endforeach
    </div>
  </section>


</div>


@endsection