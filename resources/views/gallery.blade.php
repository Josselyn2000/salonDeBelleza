@extends('layouts.app')
@section('title','Galeria')
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
                    <a href="/gallery" class="nav-item nav-link active">Galeria</a>
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
        <h1 class="text-white display-3 mt-lg-5">Cóntactanos</h1>
    </div>
</div>
<!-- Header End -->

<!-- Portfolio Start -->
<div class="box container-fluid py-5 px-0">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h1 class="section-title position-relative text-center mb-5">
              Transfórmate y resalta tu belleza natural
            </h1>
          </div>
        </div>
        <div class="row m-0 portfolio-container">
          <div class="col-lg-4 col-md-6 p-0">
            <div class="position-relative overflow-hidden">
              <!--Modal Servico de cabello-->
              <div class="text-center mb-0 ml-2">
                <div class="portfolio-item">
                  <div class="overflow-hidden mr-2">
                    <img
                      class="img-fluid w-100"
                      src="img/hair/cabello.jpg"
                      alt=""
                    />
                    <a
                      class="portfolio-btn"
                      href="#"
                      data-toggle="modal"
                      data-target="#largeModal"
                    >
                      <i class="text-primary" style="font-size: 40px;"
                        >Tratamiento de Cabello</i
                      >
                    </a>
                  </div>
                </div>
                <!-- modal -->
                <div
                  class="modal fade"
                  id="largeModal"
                  tabindex="-1"
                  role="dialog"
                  aria-labelledby="basicModal"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Tratamientos de cabello</h5>
                        <button
                          type="button"
                          class="btn btn-modal-primary"
                          data-dismiss="modal"
                        >
                          x
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- carousel -->
                        <div
                          id="carouselCabello"
                          class="carousel slide"
                          data-ride="carousel"
                        >
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img
                                class="img-size"
                                src="img/hair/alaciado.jpg"
                                alt="Cabello1"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/hair/corte.jpg"
                                alt="Cabello2"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/hair/decoloracion.jpg"
                                alt="Cabello3"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/hair/peinado.jpg"
                                alt="Cabello4"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/hair/rizos.jpg"
                                alt="Cabello5"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/hair/tinte.jpg"
                                alt="Cabello6"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/hair/tratamiento.jpg"
                                alt="Cabello7"
                              />
                            </div>
                          </div>
                          <a
                            class="carousel-control-prev"
                            href="#carouselCabello"
                            role="button"
                            data-slide="prev"
                          >
                            <span
                              class="carousel-control-prev-icon"
                              aria-hidden="true"
                            ></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a
                            class="carousel-control-next"
                            href="#carouselCabello"
                            role="button"
                            data-slide="next"
                          >
                            <span
                              class="carousel-control-next-icon"
                              aria-hidden="true"
                            ></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 p-0">
            <div class="position-relative overflow-hidden">
              <!--Modal Servico de unias-->
              <div class="text-center mb-0 ml-2">
                <div class="portfolio-item">
                  <div class="overflow-hidden mr-2">
                    <img
                      class="img-fluid w-100"
                      src="img/nail/uñas.jpg"
                      alt=""
                    />
                    <a
                      class="portfolio-btn"
                      href="#"
                      data-toggle="modal"
                      data-target="#largeModal2"
                    >
                      <i class="text-primary" style="font-size: 40px;"
                        >Tratamiento de uñas</i
                      >
                    </a>
                  </div>
                </div>
                <!-- modal -->
                <div
                  class="modal fade"
                  id="largeModal2"
                  tabindex="-1"
                  role="dialog"
                  aria-labelledby="basicModal"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Tratamientos de uñas</h5>
                        <button
                          type="button"
                          class="btn btn-modal-primary"
                          data-dismiss="modal"
                        >
                          x
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- carousel -->
                        <div
                          id="carouseluñas"
                          class="carousel slide"
                          data-ride="carousel"
                        >
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img
                                class="img-size"
                                src="img/nail/acrilica.jpg"
                                alt="uñas1"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/nail/gelish.jpg"
                                alt="uñas2"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/nail/manicure.jpg"
                                alt="uñas3"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/nail/pedicure.jpg"
                                alt="uñas4"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/nail/polygel.jpg"
                                alt="uñas5"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/nail/retirar.jpg"
                                alt="uñas6"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/nail/sencillo.jpg"
                                alt="uñas7"
                              />
                            </div>
                          </div>
                          <a
                            class="carousel-control-prev"
                            href="#carouseluñas"
                            role="button"
                            data-slide="prev"
                          >
                            <span
                              class="carousel-control-prev-icon"
                              aria-hidden="true"
                            ></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a
                            class="carousel-control-next"
                            href="#carouseluñas"
                            role="button"
                            data-slide="next"
                          >
                            <span
                              class="carousel-control-next-icon"
                              aria-hidden="true"
                            ></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 p-0">
            <div class="position-relative overflow-hidden">
              <!--Modal otros servicios-->
              <div class="text-center mb-0 ml-2">
                <div class="portfolio-item">
                  <div class="overflow-hidden mr-2">
                    <img
                      class="img-fluid w-100"
                      src="img/other/maquillaje.jpg"
                      alt=""
                    />
                    <a
                      class="portfolio-btn"
                      href="#"
                      data-toggle="modal"
                      data-target="#largeModal3"
                    >
                      <i class="text-primary" style="font-size: 40px;"
                        >Otros servicios</i
                      >
                    </a>
                  </div>
                </div>
                <!-- modal -->
                <div
                  class="modal fade"
                  id="largeModal3"
                  tabindex="-1"
                  role="dialog"
                  aria-labelledby="basicModal"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Otros tratamientos</h5>
                        <button
                          type="button"
                          class="btn btn-modal-primary"
                          data-dismiss="modal"
                        >
                          x
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- carousel -->
                        <div
                          id="carouselOtros"
                          class="carousel slide"
                          data-ride="carousel"
                        >
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img
                                class="img-size"
                                src="img/other/cejas.jpg"
                                alt="Otros1"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/other/facial.jpg"
                                alt="Otros2"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/other/makeup.jpg"
                                alt="Otros3"
                              />
                            </div>
                            <div class="carousel-item">
                              <img
                                class="img-size"
                                src="img/other/pestañas.jpg"
                                alt="Otros4"
                              />
                            </div>
                          </div>
                          <a
                            class="carousel-control-prev"
                            href="#carouselOtros"
                            role="button"
                            data-slide="prev"
                          >
                            <span
                              class="carousel-control-prev-icon"
                              aria-hidden="true"
                            ></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a
                            class="carousel-control-next"
                            href="#carouselOtros"
                            role="button"
                            data-slide="next"
                          >
                            <span
                              class="carousel-control-next-icon"
                              aria-hidden="true"
                            ></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio End -->
@endsection