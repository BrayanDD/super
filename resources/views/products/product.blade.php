@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
     
        <h2>{{ $product->name }}</h2>
        <p>${{ number_format($product->price, 0, ',', '.') }} </p>
    </div>
    <form class="mt-2" action="{{ route('carrito.store') }}" method="POST">
      @csrf
      <input type="hidden" name="product_id" value="{{ $product->id }}">
     
      <button type="submit" class="btn btn-primary">Añadir</button>
    </form>
  </div>
@endsection
