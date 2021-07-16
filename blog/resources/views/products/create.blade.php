@extends('layout.app')

@section('content')

<div class="container">

  @include('partials.errors')


  <form action="{{route('products.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Add a product name" aria-describedby="nameHelper" max="100" value="{{old('name')}}" required>
      <small id="nameHelper" class="text-muted">Type a name for this product</small>
    </div>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" step="0.01" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Add a product price" aria-describedby="priceHelper" max="100" value="{{old('price')}}" required>
      <small id=" priceHelper" class="text-muted">Type a price for this product</small>
    </div>
    @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label for="qty">Quantity</label>
      <input type="number" name="qty" id="qty" class="form-control @error('qty') is-invalid @enderror" placeholder="Add a quantity for this product" aria-describedby="qtyHelper" value="{{old('qty')}}" required>
      <small id=" qtyHelper" class="text-muted">Type the quantities for the current product</small>
    </div>
    @error('qty')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label for="descripton">Descripton</label>
      <textarea class="form-control @error('descripton') is-invalid @enderror" name="descripton" id="descripton" rows="3">{{ old('descripton') }}</textarea>
    </div>
    @error('descripton')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label for="image">Image</label>
      <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror" placeholder="Type the path " aria-describedby="imageHelper" value="{{old('image')}}" required>
      <small id="imageHelper" class="text-muted">Type a path fo the product image</small>
    </div>
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary btn-block">Submit</button>

  </form>

</div>
@endsection