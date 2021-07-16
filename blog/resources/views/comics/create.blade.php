@extends('layout.app')

@section('content')




<div class="container">
  <h1>Add a new Comic</h1>

  <form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <!-- title, description, cover, series, price -->

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="add a title"
        aria-describedby="titleHelper">
      <small id="titleHelper" class="text-muted">Type a title max 100 characters</small>
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" name="description" id="description" rows="5"></textarea>
    </div>

    <div class="form-group">
      <label for="cover">Cover Image</label>
      <input type="text" name="cover" id="cover" class="form-control" placeholder="add a cover"
        aria-describedby="coverHelper">
      <small id="coverHelper" class="text-muted">Type the path of a cover image</small>
    </div>
    <div class="form-group">
      <label for="series">Series</label>
      <input type="text" name="series" id="series" class="form-control" placeholder="add a series"
        aria-describedby="seriesHelper">
      <small id="seriesHelper" class="text-muted">Type a series max 100 characters</small>
    </div>
    <div class="form-group">
      <label for="price">price</label>
      <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="add a price"
        aria-describedby="priceHelper">
      <small id="priceHelper" class="text-muted">Type a price </small>
    </div>

    <button class="btn btn-primary btn-block" type="submit">Submit</button>

  </form>

</div>


@endsection