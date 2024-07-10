@extends('layouts.app')

@section('content')
  <div class="welcome d-flex align-items-center justify-content-center">
    <div class="text-center">
      <h1>Vienvenido al super web Super</h1>
      <a class="btn btn-lg btn-dark" href="{{ route('home') }}">Mira lo que ofrecemos</a>
    </div>
  </div>
@endsection
