@extends('layout.admin')


@section('content')
<div class="container">
  <h1>Admin Product Page</h1>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>PRICE</th>
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td scope="row">{{$product->id}}</td>
        <td><img width="100" src="{{$product->image}}" alt="{{$product->name}}"></td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td> <a href="{{route('products.show', $product->id)}}">VIEW</a> |EDIT|DELETE</td>

      </tr>
      @endforeach
    </tbody>
  </table>

</div>




@endsection