@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
     
        <h2>{{ $product->name }}</h2>
        <p>{{ number_format($product->price, 0, ',', '.') }} $</p>
    </div>
  </div>
@endsection
