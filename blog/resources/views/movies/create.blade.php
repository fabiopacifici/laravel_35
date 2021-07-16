@extends('layout.app')

@section('title', 'Add a Movie')

@section('content')
<div class="container">

  <h1>Add a new Movie</h1>

  <form action="{{ route('movies.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Add a title" aria-describedby="titleHelper">
      <small id="titleHelper" class="text-muted">Add your post title here</small>
    </div>
    <div class="form-group">
      <label for="summary">Content</label>
      <textarea class="form-control" name="summary" id="summary" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="poster">Poster Image URL</label>
      <input type="url" name="poster" id="poster" class="form-control" placeholder="type an url" aria-describedby="coverHelpe">
      <small id="coverHelper" class="text-muted">Type the url for a cover image</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


@endsection