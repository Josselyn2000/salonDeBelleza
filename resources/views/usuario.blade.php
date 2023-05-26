
@extends('layouts.app')
@section('title','Ingresar')
@section ('content')
<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <img src="img/icon/fav32.png" alt="Image"/>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <a href="/" class="navbar-brand mx-5 d-none d-lg-block">
                <img src="img/icon/icon192.png" alt="Image" />
                </a>
                <div class="navbar-nav ml-auto py-0">
                    <a href="/" class="nav-item nav-link">Inicio</a>
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

<!--LOGIN Start -->
<div class="container-fluid py-5">
  <div class="box container py-5">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="section-title position-relative mb-5">Ingresar</h1>
      </div>
    </div>
    <div class="container__login" id="container__login">
      <div class="form-container__login sign-up-container__login">
        <form class="form__login" action="/register" method="POST">
          @csrf
          @include('partials.message')
          <h1>Crear cuenta</h1>
          <!--<div class="social-container__login">
            <a href="#" class="a-primary"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="a-primary"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="a-primary"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>o utiliza tu correo electrónico</span>-->
          <input required class="input__login form-control" type="text" name="name" placeholder="Nombre(s)*">
          <input required class="input__login form-control" type="text" name="apellidoP" placeholder="Apellido paterno*">
          <input required class="input__login form-control" type="text" name="apellidoM" placeholder="Apellido materno*">
          <input required class="input__login form-control" type="text" name="direccion" placeholder="Dirección*">
          <input required class="input__login form-control" type="text" name="cp" placeholder="Código Postal*">
          <input required class="input__login form-control" type="email" name="email" placeholder="Email*">
          <input required class="input__login form-control" type="tel" name="numCel" placeholder="Número Celular*">
          <input class="input__login form-control" type="tel" name="numLocal" placeholder="Número local">
          <input required class="input__login form-control" type="text" name="username" placeholder="Username*">
          <input required class="input__login form-control" type="password" name="password" placeholder="Contraseña*">
          <input required class="input__login form-control" type="password" name="password_confirmation" placeholder="Confirmar contraseña*">
          <input required class="btn btn-primary" type="submit" value="Registrarse">
        </form>
      </div>
      <div class="form-container__login sign-in-container__login">
        <form class="form__login" action="/login" method="POST">
          <h1>Ingresa</h1>
          <!--<div class="social-container__login">
            <a href="#" class="a-secondary"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="a-secondary"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="a-secondary"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>o utiliza tu correo eléctronico</span>-->
          @csrf
          @include('partials.message')
          <input class="input__login form-control form-control-secondary" type="text" name="username" placeholder="Email or usuario">
          <input class="input__login form-control form-control-secondary" type="password" name="password" placeholder="Password">
          <a class="a-secondary mb-3" href="#">Olvidaste tu contrseña?</a>
          <input class="btn btn-secondary" type="submit" value="Ingresar">
        </form>
      </div>
      <div class="overlay-container__login">
        <div class="overlay__login">
          <div class="overlay-panel__login overlay-left__login">
            <h1>¿Tienes una cuenta?</h1>
            <p>Ingresa ahora mismo</p>
            <button class="btn btn__login text-white ghost" id="signIn">Ingresar</button>
          </div>
          <div class="overlay-panel__login overlay-right__login">
            <h1>¿No tienes una cuenta?</h1>
            <p>Registrate y conocenos</p>
            <button class="btn btn__login text-white ghost" id="signUp">Registrarse</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--LOGIN End-->
<!--JS login-->
<script>
  const signUpButton = document.getElementById("signUp");
  const signInButton = document.getElementById("signIn");
  const container__login = document.getElementById("container__login");

  signUpButton.addEventListener("click", () => {
    container__login.classList.add("right-panel-active");
  });

  signInButton.addEventListener("click", () => {
    container__login.classList.remove("right-panel-active");
  });
</script>
@endsection