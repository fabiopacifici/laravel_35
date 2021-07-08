@extends('layout.app')

@section('title', 'Home Page la Molisana')

@section('content')


<section class="container">
    @foreach($pastas as $type => $pasta_array)
    <h2>{{$type}}</h2>
    <div class="pastas">
        @foreach ( $pasta_array as $pasta )
        <div class="card">
            <img src="{{$pasta['src']}}" alt="">
            <div class="pasta_details">
                <h3>{{ $pasta['titolo'] }}</h3>
            </div>
        </div>
    @endforeach
    </div>
    
    @endforeach

</section>


@endsection