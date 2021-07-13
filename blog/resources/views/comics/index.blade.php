@extends('layout.app')

@section('title', 'Comics Page')

@section('hero-image')
<div class="hero-image"></div>
@endsection

@section('content')


<div class="comics">
  <section class="container">
    <h2 class="section_title">Comics Page</h2>
    <div class="comics_container">
      @foreach($comics as $index => $comic)
      <div class="comic">

        <a href="{{ route('comic', ['id' => $index]) }}">
          <img src="{{ $comic['thumb'] }}" alt="">
          {{ $comic['series'] }}
        </a>
      </div>
      @endforeach
    </div>
  </section>


</div>


@endsection