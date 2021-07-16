@extends('layout.app')

@section('title', 'Add a post')

@section('content')
<div class="container">

  <h1>Add a new post</h1>

  <form action="" method="post">
    <!-- NON FUNZIONA -->
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Add a title" aria-describedby="titleHelper">
      <small id="titleHelper" class="text-muted">Add your post title here</small>
    </div>
    <div class="form-group">
      <label for="body">Content</label>
      <textarea class="form-control" name="body" id="body" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="cover">Cover Image URL</label>
      <input type="url" name="cover" id="cover" class="form-control" placeholder="type an url" aria-describedby="coverHelpe">
      <small id="coverHelper" class="text-muted">Type the url for a cover image</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


@endsection