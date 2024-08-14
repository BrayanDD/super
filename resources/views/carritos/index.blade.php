@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       @foreach ($products as $product)
          @php
              $carritoItem = $carrito->where('product_id', $product->id)->first();
          @endphp
          <div class="col-md-4">
              <div class="card mb-4">
                  <img src="#" class="card-img-top" alt="#">
                  <div class="card-body">
                      <h5 class="card-title">{{ $product->name }}</h5>
                      <p class="card-text">
                          Precio unitario: ${{ number_format($product->price, 0) }}<br>
                          Cantidad: {{ $carritoItem->quantity }}<br>
                          Subtotal: ${{ number_format($product->price * $carritoItem->quantity, 0) }}
                      </p>
                      <a href="{{ route('carritos.edit', $carritoItem->id) }}" class="btn btn-primary">Editar</a>
                      <form action="{{ route('carritos.destroy', $carritoItem->id) }}" method="POST" style="display:inline-block;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Eliminar</button>
                      </form>
                  </div>
              </div>
          </div>
      @endforeach
    </div>
    <div class="container">
      <div class="flex">
        <button class="btn btn-primary mr-2">Pagar</button>
        <p>Total: ${{ number_format($total, 0) }}</p>
      </div>
    </div>
</div>
@endsection
