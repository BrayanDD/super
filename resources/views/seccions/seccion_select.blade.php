@extends('layouts.app')

@section('content')
  <div class="container">
    @if (Auth::user()->rol === 'admin')
      <a href="{{ route('product.create', $seccion->id) }}">
        <button class="btn btn-primary mb-3"> + Añadir Product </button>
      </a>
    @endif
    <h2>{{ $seccion->name }} </h2>
    <div class="row">
      @foreach ($products as $product)
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="{{ route('product.show', ['product' => $product->id]) }}">
              <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p>{{ number_format($product->price, 0, ',', '.') }} $</p>
                <button type="button" class="btn btn-primary">Ver detalles</button>
                <form class="mt-2" action="{{ route('carrito.store') }}" method="POST">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $product->id }}">
                  <button type="submit" class="btn btn-primary">Añadir</button>
                </form>
              </div>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
