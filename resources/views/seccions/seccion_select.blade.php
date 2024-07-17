@extends('layouts.app')

@section('content')
  <div class="container">
    @if (Auth::user()->rol === 'admin')
      <a href="{{ route('product.create', $seccion->id) }}">
        <button class="btn btn-primary mb-3"> + Añadir Product </button>
      </a>
    @endif
    <h2>{{ $seccion->name }} </h2>
    <div class="row justify-content-center">
      @foreach ($products as $product)
        <div class="card m-2" style="width: 18rem;">
          <a href="{{ route('product.show', ['product' => $product->id]) }}">
          <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p>{{ number_format($product->price, 0, ',', '.') }} $</p>
            <button type="button" class="btn btn-primary">Ver
              detalles</button>
          </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>

 
@endsection
