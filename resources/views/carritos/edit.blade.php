@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $product->name }}</h2>
    <form method="POST" action="{{ route('carrito.update',$carrito->id) }}">
        @csrf
        @method('PUT')
       

       

        <div class="mb-3 row">
            <label for="price" class="col-md-4 col-form-label text-md-end">Precio</label>
            <div class="col-md-6">
                <p>{{ $product->price }}</p>
        </div>
        <div class="mb-3 row">
            <label for="price" class="col-md-4 col-form-label text-md-end">Precio</label>
            <div class="col-md-6">
            <input type="number" name="quantity"  value="{{ $carrito->quantity}}">
               
        </div>
        

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Actualizar
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
