@extends('layouts.app')
@section('title','Nosotros')
@section ('content')
<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
            <a href="/" class="navbar-brand d-block d-lg-none">
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
                    <a href="/service" class="nav-item nav-link active">Servicios</a>
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
        <h1 class="text-white display-3 mt-lg-5">Nuestros servicios</h1>
      </div>
    </div>
    <!-- Header End -->

    <!-- Services Hair Start -->
    <div class="box container-fluid py-5">
      <div class="container py-5 box">
        <div class="row">
          <div class="col-lg-8">
            <h1 class="section-title position-relative mb-5">
              Servicios para el cabello
            </h1>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="owl-carousel service-carousel">
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/hair/alaciado.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Alaciado permanente
                  </h5>
                  <p>
                    Método profesional de estilizado que modifica la estructura
                    capilar volviéndola totalmente lacia.<br />
                    Duración: |Costo:
                  </p>

                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/hair/corte.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Corte de cabello
                  </h5>
                  <p>
                    Técnicas que pueden modificar su longitud y su forma,
                    realizadas con herramientas específicas como: tijeras,
                    navajas, maquinillas, entre otros, cuya finalidad es
                    proporcionar al cabello diferentes formas que se adapten a
                    la fisonomía del cliente.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/hair/decoloracion.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Decoloración
                  </h5>
                  <p>
                    Consiste en la disminución de color del cabello por medio de
                    un proceso químico que trabaja los pigmentos, es generada
                    con productos químicos alcalinos que dan lugar a que
                    cualquier cabello se aclare.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/hair/peinado.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Peinados
                  </h5>
                  <p>
                    Contamos con una amplia variedad de peinados.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/hair/rizos.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Rizos permanente
                  </h5>
                  <p>
                    Es una técnica en la que, con el uso de calor y productos
                    químicos, la estructura de tu cabello se une formando
                    rizos.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/hair/tinte.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Tinte
                  </h5>
                  <p>
                    Nosotros te asesoramos para saber cual es el mejor color
                    para teñirte el cabello.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/hair/tratamiento.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Tratamiento
                  </h5>
                  <p>
                    Se realizan con el fin de tratar una alteración, prevenirla
                    y/o mantener el cuero cabelludo y el cabello en buen estado.
                    Para ello se combinan adecuadamente la aparatología, los
                    cosméticos y los masajes.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Services Hair End -->
    <!-- Services Nails Start -->
    <div class="box container-fluid py-5">
      <div class="container py-5 box">
        <div class="row">
          <div class="col-lg-8">
            <h1 class="section-title position-relative mb-5">
              Servicios para las uñas
            </h1>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="owl-carousel service-carousel">
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/nail/acrilica.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Uñas acrilicas
                  </h5>
                  <p>
                    La técnica de uñas acrílicas se realizan mezclando polvo
                    acrílico con líquido acrílico. Esta técnica consiste en
                    añadir unas extensiones a las uñas naturales para después
                    decorarlas al gusto de cada uno.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/nail/gelish.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Uñas gelish
                  </h5>
                  <p>
                    Se aplica como esmalte, pero funciona como gel dando como
                    resultado una excelente durabilidad, no se descarapela, no
                    se raya y no pierde su brillo original.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/nail/polygel.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Uñas polygel
                  </h5>
                  <p>
                    Es una fórmula de construcción de uñas que combina lo mejor
                    de los sistemas de construcción de uñas acrílicos y lo mejor
                    de los sistemas de gel con un resultado innovador y
                    revolucionario. <br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/nail/sencillo.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Uñas sencillas
                  </h5>
                  <p>
                    Solo se aplica el esmalte de un solo tono o un diseño
                    sencillo<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/nail/manicure.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    MAnicure
                  </h5>
                  <p>
                    Se cortan o liman los bordes de las uñas, los excesos de
                    cutículas y hasta se retira la banda epidérmica transversal
                    del pliegue proximal con tijeras, tornos y removedores de
                    cutícula; al finalizar, se realizan masajes a las manos y se
                    aplican recubrimientos artificiales con diversos
                    químicos.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/nail/pedicure.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Pedicure
                  </h5>
                  <p>
                    Se trata de una experiencia relajante centrada en el cuidado
                    de los pies, que se basa en la combinación de salud,
                    estética y relajación. <br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/nail/retirar.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Retirar uñas postizas
                  </h5>
                  <p>
                    Te proporcionamos la mejor manera de retirar las uñas
                    acrilicas, polygel, entre otros, cuidando tus uñas
                    naturales.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Services Nails End -->
    <!-- Others Services Start -->
    <div class="box container-fluid py-5">
      <div class="container py-5 box">
        <div class="row">
          <div class="col-lg-8">
            <h1 class="section-title position-relative mb-5">
              Otros servicios
            </h1>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="owl-carousel service-carousel">
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/other/cejas.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Depilación de cejas
                  </h5>
                  <p>
                    Se eliminan los pelos desde la raíz sin agredir o manchar la
                    piel. Utilizamos el método tradicional y uno de los más
                    utilizados hoy en día.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/other/facial.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Tratamiento facial
                  </h5>
                  <p>
                    es un tratamiento que ayuda a limpiar los poros de la piel,
                    exfoliar las células muertas, hidratar y humectar la piel
                    con un régimen personalizado.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/other/maquillaje.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Maquillaje
                  </h5>
                  <p>
                    El servicio de maquillaje incluye todos los productos de
                    maquillaje, además de ampolla flash, pre-bases fijadoras,
                    posibilidad de aplicación de la base con aerógrafo y
                    pestañas postizas al gusto.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
              <div class="service-item">
                <div class="service-img mx-auto">
                  <img
                    class="w-100 h-100 bg-light p-1"
                    src="img/other/pestañas.jpg"
                    style="object-fit: cover;"
                  />
                </div>
                <div
                  class="position-relative text-center bg-light rounded p-4 pb-5"
                  style="margin-top: -75px;"
                >
                  <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">
                    Extensión de pestañas
                  </h5>
                  <p>
                    Te brindamos un servicio de pestañas hechas con fibras
                    sintéticas, seda o polyester, con la finalidad es dar un
                    aspecto 100% natural.<br />
                    Duración: |Costo:
                  </p>
                  @auth
                    <a
                      href=""
                      class="border-bottom border-secondary text-decoration-none text-secondary"
                      >Añadir al carrito</a
                    >
                  @endauth
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Others Services End -->

    <div class="bg-white container-fluid py-5 mt-lg-5">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h1 class="section-title position-relative text-center mb-5">
              ¡CONOCENOS!<br />
              <i class="fa-solid fa-crown" style="color: #f195b2;"></i>
            </h1>
          </div>
        </div>
      </div>
    </div>

@endsection