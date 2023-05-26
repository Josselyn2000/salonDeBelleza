@extends('layouts.user')
@section('title','Inicio')
@section ('content')
<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
            <a href="/home" class="navbar-brand d-block d-lg-none">
                <img src="img/icon/fav32.png" alt="Image"/>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <a href="/home" class="navbar-brand mx-5 d-none d-lg-block">
                <img src="img/icon/icon192.png" alt="Image" />
                </a>
                <div class="navbar-nav ml-auto py-0">
                    <a href="/home" class="nav-item nav-link active">Inicio</a>
                    <a href="/about" class="nav-item nav-link">Nosotros</a>
                    <a href="/product" class="nav-item nav-link">Productos</a>
                    <a href="/service" class="nav-item nav-link">Servicios</a>
                    <a href="/gallery" class="nav-item nav-link">Galeria</a>
                    <a href="/contact" class="nav-item nav-link">Contacto</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
  <!-- Carousel Start -->
  <div class="container-fluid p-0">
      <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="img/carousel/carousel-1.jpg" alt="Image" />
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
              <div class="p-3" style="max-width: 900px;">
                <h4 class="text-white text-uppercase mb-md-3">Bienvenidos</h4>
                <h1 class="display-3 text-white mb-md-4">Salón de belleza J&E</h1>
                <a href="" class="btn btn-secondary py-md-3 px-md-5 mt-2">Leer Más</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="img/carousel/carousel-2.jpg" alt="Image" />
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
              <div class="p-3" style="max-width: 900px;">
                <h4 class="text-white text-uppercase mb-md-3">Bienvenidos</h4>
                <h1 class="display-3 text-white mb-md-4">Estamos para consentirte</h1>
                <a href="" class="btn btn-secondary py-md-3 px-md-5 mt-2">Leer Más</a>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
          <div class="btn px-0" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n1"></span>
          </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
          <div class="btn px-0" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n1"></span>
          </div>
        </a>
      </div>
    </div>
    <!-- Carousel End -->

    <div class="bg-white container-fluid py-5 mt-lg-5">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h1 class="section-title position-relative text-center mb-5">
              ¡GRACIAS POR TU PREFERENCIA!<br />
              <i class="fa-solid fa-crown" style="color: #f195b2;"></i>
            </h1>
          </div>
        </div>
      </div>
    </div>
   @endsection

