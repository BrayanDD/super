@extends('layouts.app')

@section('content')
  <div class="container">
    @if (Auth::user()->rol === 'admin')
      <a href="{{ route('seccion.create') }}">
        <button class="btn btn-primary mb-3"> + Añadir sección </button>
      </a>
    @endif
    <div class="row justify-content-center">
      @foreach ($seccions as $seccion)
        <div class="card m-2" style="width: 18rem;">
          <a href="{{ route('seccion.show', ['seccion' => $seccion->id]) }}">
            <div class="card-body">
              <h5 class="card-title">{{ $seccion->name }}</h5>

            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection
