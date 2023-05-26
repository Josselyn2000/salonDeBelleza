@extends('layouts.app')
@section('title','Contacto')
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
                    @auth
                        <a href="/home" class="nav-item nav-link">Inicio</a>
                    @endauth
                    @guest
                        <a href="/" class="nav-item nav-link">Inicio</a>
                    @endguest
                    <a href="/about" class="nav-item nav-link">Nosotros</a>
                    <a href="/product" class="nav-item nav-link">Productos</a>
                    <a href="/service" class="nav-item nav-link">Servicios</a>
                    <a href="/gallery" class="nav-item nav-link">Galeria</a>
                    <a href="/contact" class="nav-item nav-link active">Contacto</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
<!-- Header Start -->
<div class="jumbotron-fluid page-header header-about">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Cóntactanos</h1>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="bg-light">
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 mb-5">
                    <div class="card-deck">
                        <div class="card card-primary">
                            <div class="card-body">
                                <h5 class="card-title text-center">ACERCA DE NOSOTROS</h5>
                                <p class="card-text">
                                    Nuestro equipo esta siempre dispuestos a brindarle un buen
                                    servicio y atenderlos con la mejor calidad
                                    <i class="color-secondary fa fa-crown"></i>
                                </p>
                            </div>
                        </div>
                        <div class="card card-secondary">
                            <div class="card-body">
                                <h5 class="card-title text-center">CONTACTOS</h5>
                                <div class="card-text">
                                    <a href="#"><i class="fa fa-phone fa-shake fa-sm"></i>(222) 532-1460</a>
                                    <br>
                                    <a href="#"><i class="fa-brands fa-whatsapp fa-sm"></i>(222) 4561460</a>
                                    <br>
                                    <a href="#"><i class="fa fa-envelope fa-sm"></i>SalonJ&E@correo.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary">
                            <div class="card-body">
                                <h5 class="card-title text-center">DIRECCIÓN</h5>
                                <p class="card-text">Puebla, Pue., México</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<!--MAPA-->
    <div class="container-fluid py-5 mt-md-5">
        <div class="container py-5 box">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="section-title position-relative text-center mb-5">Ubicanos en el mapa!</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15085.79760314492!2d-98.19944649096858!3d19.043968933228715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1684212234659!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
<!--MAPA End-->

@auth
    <!-- Contact form Start -->
    <div class="container-fluid py-5 mt-md-3">
        <div class="container py-5 box">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Déjanos un mensaje</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form rounded p-5">
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif
                            <form name="contact" id="contact" method="post" action="{{url('contact-form')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-sm-6 control-group">
                                        <input required type="text" class="card-secondary form-control p-4" id="nameContact" name="nameContact" placeholder="Nombre*" data-validation-required-message="Porfavor de ingresar su nombre"/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="col-sm-6 control-group">
                                        <input type="email" class="card-secondary form-control p-4" id="emailContact" name="emailContact" placeholder="Correo electrónico*" required="required" data-validation-required-message="Porfavor de ingresar correo electrónico"/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                <input type="text" class="card-secondary form-control p-4" id="subject" name="subject" placeholder="Asunto*" required="required" data-validation-required-message="Porfavor de ingresar asunto"/>
                                <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="card-secondary form-control p-4" rows="6" id="message" name="message" placeholder="Mensaje*" required="required" data-validation-required-message="Porfavor especifique su asunto"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-secondary btn-block py-3 px-5" type="submit" id="sendMessageButton">
                                        Enviar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact form End -->
@endauth

@endsection