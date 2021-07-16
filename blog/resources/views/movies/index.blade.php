@extends('layout.app')

@section('title', 'Movies Page')

@section('hero-image')
<div class="hero-image"></div>
@endsection

@section('content')

<a class="btn btn-primary fixed-bottom" href="{{ route('movies.create') }}" role="button">Create</a>

<table class="table container">
  <thead>
    <tr>
      <th>ID</th>
      <th>Poster</th>
      <th>Title</th>
      <th>Summary</th>
      <th>Actions</th>

    </tr>
  </thead>
  <tbody>
    @foreach($movies as $movie)
    <tr>
      <td scope="row">{{$movie->id}}</td>
      <td><img width="100" src="{{$movie->poster}}" alt=""></td>
      <td>{{$movie->title}}</td>
      <td>{{$movie->summary}}</td>
      <td>
        <a href="{{ route('movies.show', $movie->id)}}">View</a>
        <a href="{{route('movies.edit', $movie->id)}}">Edit</a>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#movie-{{$movie->id}}">
          Delete
        </button>

        <!-- Modal -->
        <div class="modal fade" id="movie-{{$movie->id}}" tabindex="-1" role="dialog" aria-labelledby="movie-{{$movie->title}}" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Delete Movie {{$movie->title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                You are going to remove the movie forever!
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                <form action="{{route('movies.destroy', $movie->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Confirm</button>

                </form>

              </div>
            </div>
          </div>
        </div>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>



@endsection