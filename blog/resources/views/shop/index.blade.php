@extends('layout.app')


@section('content')


<div class="jumbotron">
  <h1 class="display-3">Shop</h1>
  <p class="lead">Welcome to DC shop</p>
</div>
<div class="container">
  <div class="row">
    @foreach($products as $product)
    <div class="col-md-4">
      <div class="card product">
        <img class="card-img-top" src="{{$product->image}}" alt="{{ $product->name }}">
        <div class="card-body">
          <h4 class="card-title">{{$product->name}}</h4>
          <p class="card-text">{{ $product->descripton}}</p>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>

@endsection