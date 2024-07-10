@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Añadir producto</div>

          <div class="card-body">
            <form method="POST" action="{{ route('seccion.store') }}">
              @csrf

              <div class="mb-3 row">
                <label for="name"
                  class="col-md-4 col-form-label text-md-end">Nombre</label>
                <div class="col-md-6">
                  <input id="name" type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required
                    autocomplete="name" autofocus>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="mb-3 row">
                <label for="seccion"
                  class="col-md-4 col-form-label text-md-end">Sección</label>
                <div class="col-md-6">
                  <select class="form-select" id="seccion" name="seccion">
                    @foreach ($seccions as $seccion)
                      <option>{{ $seccion->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="mb-3 row">
                <label for="price"
                  class="col-md-4 col-form-label text-md-end">Precio</label>
                <div class="col-md-6">
                  <input id="price" type="number"
                    class="form-control @error('price') is-invalid @enderror"
                    name="price" value="{{ old('price') }}" required
                    autocomplete="price" autofocus>
                  @error('price')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="mb-3 row">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Añadir
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
