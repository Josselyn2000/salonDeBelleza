
@extends('layouts.app')

@section('title','Nosotros')
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
                      <a href="/about" class="nav-item nav-link active">Nosotros</a>
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
  <!-- Header Start -->
  <div class="jumbotron-fluid page-header header-about">
    <div class="container text-center py-5">
      <h1 class="text-white display-3 mt-lg-5">¿Quiénes somos?</h1>
    </div>
  </div>
  <!-- Header End -->

  <!-- About Start -->
  <div class="bg-light container-fluid">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <h1 class="section-title position-relative text-center mb-5">Salón de belleza J&E</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 py-5">
          <h4 class="font-weight-bold mb-3">¿Quiénes Somos?</h4>
          <h5 class="text-muted mb-3">Somos Expertos en Belleza</h5>
          <p>Nuestros tratamientos, equipos estéticos y productos, cuentan con
            certificaciones de alta calidad, avalados con estudios clínicos.
            <br>
            Somos una empresa que cuenta con un selecto grupo de
            profesionales, altamente capacitados, para ofrecerles el mejor
            servicio. Un lugar mágico donde obtienes la atención, asesoría y
            calidad que garantizan nuestros expertos en corte y color,
            manicura y pedicura, maquillaje, peinados y tratamientos de belleza.
          </p>
          <br><br>
          <h4>¿Le gustaría conocer a nuestros profesionales?</h4>
          <a href="#team" class="btn btn-primary mt-2">Leer Más</a>
        </div>
        <div class="col-lg-4" style="min-height: 400px;">
          <div class="position-relative h-100 rounded overflow-hidden">
            <img class="position-absolute w-100 h-100" src="img/nosotros.jpg" style="object-fit: cover;"/>
          </div>
        </div>
        <div class="col-lg-4 py-5">
          <h4 class="font-weight-bold mb-3">Misión</h4>
          <p>Contribuir al bienestar de nuestros clientes al ofrecerles
            servicios confiables y seguros de belleza en un ambiente
            profesional y de cálido trato humano.
          </p>
          <h4 class="font-weight-bold mb-3">Visión</h4>
          <p>Ser centro referencial y líder como centro de belleza,
            comprometidos con el buen servicio y ser reconocida por nuestros valores.
          </p>
          <h4>Nustros valores</h4>
          <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Confiabilidad</h5>
          <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Respeto</h5>
          <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Integridad</h5>
          <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Calidad</h5>
          <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Responsabilidad</h5>
          <br>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- History Start -->
  <div class="container-fluid py-5">
    <div class="box container py-5">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="section-title position-relative mb-5">Nuestra historia</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4" style="min-height: 400px;">
          <div class="position-relative h-100 rounded overflow-hidden">
            <img class="position-absolute w-100 h-100" src="img/nosotros.jpg" style="object-fit: cover;"/>
          </div>
        </div>
        <div class="col-lg-8">
          <br><br><br>
          <p>Tras varios cursos de perfeccionamiento la fundadora decide
            convertirse en gerente de su propio salón de belleza, compuesto
            actualmente, por un equipo de varias personas.<br>
            Tras su creación,no se ha dejado de innovar en Peluquería y
            Estética, acordes siempre con las tendencias del momento. Como
            especialidad, cabe destacar su gran demanda por parte de futur@s
            novi@s, para los servicios de peluquería y maquillaje para ese
            gran día.<br><br>
            Su asistencia a diferentes ferias comerciales del sector nupcial
            en México, la han convertido también en una de las empresas más
            demandadas.
          </p><br >
          <h4 class="font-weight-bold mb-3">Te llevarás una experiencia inolvidable</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- History End -->

  <!-- Team Start -->
  <div class="bg-light container-fluid py-5">
    <div id="team" class="container py-5">
      <div class="row">
        <div class="col-lg-11">
          <h1 class="section-title position-relative mb-2">Nuestros profesionales</h1>
          <h5 class="position-relative mb-5">Nuestro equipo de profesionales son altamente calificados que inspira confianza y seriedad.</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="owl-carousel team-carousel">
            <!--Persona 1-->
            <div class="team-item">
              <div class="team-img mx-auto">
                <img class="rounded-circle w-100 h-100" src="../img/profile1.jpg" style="object-fit: cover;"/>
              </div>
              <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Persona 1</h3>
                <h6 class="text-uppercase text-muted mb-4">Fundadora</h6>
                <div class="d-flex justify-content-center pt-1">
                  <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
            <!--Persona 2-->
            <div class="team-item">
              <div class="team-img mx-auto">
                <img class="rounded-circle w-100 h-100" src="img/profile.jpg" style="object-fit: cover;"/>
              </div>
              <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Persona 2</h3>
                <h6 class="text-uppercase text-muted mb-4">Peluquera</h6>
                <div class="d-flex justify-content-center pt-1">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
            <!--Persona 3-->
            <div class="team-item">
                <div class="team-img mx-auto">
                  <img class="rounded-circle w-100 h-100" src="img/profile.jpg" style="object-fit: cover;"/>
                </div>
                <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                  <h3 class="font-weight-bold mt-5 mb-3 pt-5">Persona 3</h3>
                  <h6 class="text-uppercase text-muted mb-4">Peluquera</h6>
                  <div class="d-flex justify-content-center pt-1">
                    <a
                      class="btn btn-outline-secondary btn-social mr-2"
                      href="#"
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a
                      class="btn btn-outline-secondary btn-social mr-2"
                      href="#"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a
                      class="btn btn-outline-secondary btn-social mr-2"
                      href="#"
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                  </div>
                </div>
            </div>
            <!--Persona 4-->
            <div class="team-item">
                <div class="team-img mx-auto">
                  <img
                    class="rounded-circle w-100 h-100"
                    src="img/profile.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded px-4 py-5"
                  style="margin-top: -100px;"
                >
                  <h3 class="font-weight-bold mt-5 mb-3 pt-5">Persona 4</h3>
                  <h6 class="text-uppercase text-muted mb-4">Maniquirista</h6>
                  <div class="d-flex justify-content-center pt-1">
                    <a
                      class="btn btn-outline-secondary btn-social mr-2"
                      href="#"
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a
                      class="btn btn-outline-secondary btn-social mr-2"
                      href="#"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a
                      class="btn btn-outline-secondary btn-social mr-2"
                      href="#"
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                  </div>
                </div>
            </div>
            <!--Persona 5-->
            <div class="team-item">
                <div class="team-img mx-auto">
                  <img
                    class="rounded-circle w-100 h-100"
                    src="img/profile.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded px-4 py-5"
                  style="margin-top: -100px;"
                >
                  <h3 class="font-weight-bold mt-5 mb-3 pt-5">Persona 5</h3>
                  <h6 class="text-uppercase text-muted mb-4">
                    Especialista en depilación
                  </h6>
                  <div class="d-flex justify-content-center pt-1">
                    <a
                      class="btn btn-outline-secondary btn-social mr-2"
                      href="#"
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a
                      class="btn btn-outline-secondary btn-social mr-2"
                      href="#"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a
                      class="btn btn-outline-secondary btn-social mr-2"
                      href="#"
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                  </div>
                </div>
            </div>
            <!--Persona 6-->
            <div class="team-item">
                <div class="team-img mx-auto">
                  <img
                    class="rounded-circle w-100 h-100"
                    src="img/profile.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded px-4 py-5"
                  style="margin-top: -100px;"
                >
                  <h3 class="font-weight-bold mt-5 mb-3 pt-5">Persona 6</h3>
                  <h6 class="text-uppercase text-muted mb-4">Maquillista</h6>
                  <div class="d-flex justify-content-center pt-1">
                    <a
                      class="btn btn-outline-secondary btn-social mr-2"
                      href="#"
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a
                      class="btn btn-outline-secondary btn-social mr-2"
                      href="#"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a
                      class="btn btn-outline-secondary btn-social mr-2"
                      href="#"
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->
@endsection