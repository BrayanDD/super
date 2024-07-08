@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <!-- Sección 1 -->
      <section class="row justify-content-center">
        <div class="col-md-8">
          <h2>Productos populares</h2>
          <!-- Carrusel de Bootstrap -->
          <div id="carouselExampleIndicators" class="carousel slide"
            data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <!-- Primer ítem del carrusel -->
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-6">
                    <img src="https://via.placeholder.com/400x400"
                      class="d-block w-100" alt="Producto 1">
                  </div>
                  <div class="col-md-6">
                    <h3>Nombre del Producto 1</h3>
                    <p>Precio: $100</p>
                    <button class="btn btn-primary">Más detalles</button>
                  </div>
                </div>
              </div>
              <!-- Segundo ítem del carrusel -->
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-6">
                    <img src="https://via.placeholder.com/400x400"
                      class="d-block w-100" alt="Producto 2">
                  </div>
                  <div class="col-md-6">
                    <h3>Nombre del Producto 2"></h3>
                    <p>Precio: $200</p>
                    <button class="btn btn-primary">Más detalles</button>
                  </div>
                </div>
              </div>
              <!-- Tercer ítem del carrusel -->
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-6">
                    <img src="https://via.placeholder.com/400x400"
                      class="d-block w-100" alt="Producto 3">
                  </div>
                  <div class="col-md-6">
                    <h3>Nombre del Producto 3"></h3>
                    <p>Precio: $300</p>
                    <button class="btn btn-primary">Más detalles</button>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button"
              data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button"
              data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Siguiente</span>
            </button>
          </div>
        </div>
      </section>

      <!-- Sección 2 -->
      <section class="row justify-content-center mt-4">
        <div class="col-md-8">
          <h2>Productos destacados</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </section>
    </div>
  </div>
@endsection
