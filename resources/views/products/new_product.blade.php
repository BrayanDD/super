@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Añadir Producto en {{ $seccion->name }}</h2>
    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        <input type="hidden" name="seccion_id" readonly value="{{ $seccion->id }}">

        <div class="mb-3 row">
            <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="mb-3 row">
            <label for="price" class="col-md-4 col-form-label text-md-end">Precio</label>
            <div class="col-md-6">
                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Añadir
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
