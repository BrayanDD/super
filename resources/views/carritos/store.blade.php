@extends('layouts.app')

@section('content')
  <div class="container">
  @foreach ($products as $products )
      <div class="row">
        <div class="col-md-4">
           
            <img src="#" class="img-fluid" alt="Imagen del producto">
        </div>
        <div class="col-md-4">
            
            <h3>{{ $product->name }}</h3>
        </div>
        <div class="col-md-4">
            
            <p>Precio: $XX.XX</p>
        </div>
        </div>
    </div>
  @endforeach
    

@endsection
