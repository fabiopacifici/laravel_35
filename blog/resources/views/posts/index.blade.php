@extends('layout.app')

@section('title', 'News Page')

@section('hero-image')
<div class="hero-image"></div>
@endsection

@section('content')


<div class="posts">
  <section class="container">
    <h2 class="section_title">News</h2>
    <div class="comics_container">
      @foreach($posts as $post)

      <div class="post">
        <img width="600" src="{{ $post->cover }}" alt="">
        {{ $post->title }}
      </div>
      @endforeach
    </div>
  </section>


</div>


@endsection