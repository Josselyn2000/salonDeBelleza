@extends('layouts.app')
@section('title','Productos')
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
                    <a href="/product" class="nav-item nav-link active">Productos</a>
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
        <h1 class="text-white display-3 mt-lg-5">Conoce nuestros productos</h1>
      </div>
    </div>
    <!-- Header End -->
<!-- Products Start -->
    <div class="box container-fluid py-5">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h1 class="section-title position-relative text-center mb-5">
              ¡Los mejores precios del mercado!
            </h1>
          </div>
        </div>
        <!--Productos -->
        @auth
        <div class="container">
            <div class="row">
                <main id="items" class="col-sm-8 row"></main>               
                <!-- Carrito -->
                <aside class="col-sm-4">              
                    <h2>Carrito</h2>
                    <ul id="carrito" class="list-group"></ul>
                    <hr>                 
                    <p class="text-right">Total: <span id="total"></span>&dollar;</p>
                    <button id="boton-vaciar" class="btn btn-danger">Vaciar</button>
                </aside>
                
            </div>
        </div>
        @endauth
        @guest
        <div class="container">
            <div class="row">
                <!-- Elementos generados a partir del JSON -->
                <main id="items" class="col-sm-8 row"></main>
                
                <!-- Carrito -->
                <aside class="col-sm-4">
                
                    <h5>Puedes añadir productos y ver el precio.</h5>
                    <!-- Elementos del carrito -->
                    <ul id="carrito" class="list-group"></ul>
                    <hr>
                    <!-- Precio total -->
                    <p class="text-right">Total: <span id="total"></span>&dollar;</p>
                    <p id="boton-vaciar"></p>
                    <a href="/login"><p class="btn btn-danger">¿Deseas adquirir estos productos?</p></a>
                </aside>
            </div>
        </div>
        @endguest
    <!--END Productos-->
      </div>
    </div>
<!-- Products End -->
<script>

document.addEventListener("DOMContentLoaded", () => {
    const baseDeDatos = [
      {
        id: 1,
        nombre: "Producto 1",
        precio: 1,
        imagen: "img/producto.jpg"
      },
      {
        id: 2,
        nombre: "Producto 2",
        precio: 1.2,
        imagen: "img/producto.jpg"
      },
      {
        id: 3,
        nombre: "Producto 3",
        precio: 2.1,
        imagen: "img/producto.jpg"
      }
    ];
  
    let carrito = [];
    const divisa = "$";
    const DOMitems = document.querySelector("#items");
    const DOMcarrito = document.querySelector("#carrito");
    const DOMtotal = document.querySelector("#total");
    const DOMbotonVaciar = document.querySelector("#boton-vaciar");
    const miLocalStorage = window.localStorage;
  
    // Funciones
    function renderizarProductos() {
      baseDeDatos.forEach((info) => {
        // Estructura
        const miNodo = document.createElement("div");
        miNodo.classList.add("card", "col-sm-11", "mr-3", "mb-3");
        // Body
        const miNodoCardBody = document.createElement("div");
        miNodoCardBody.classList.add("card-body");
        // Titulo
        const miNodoTitle = document.createElement("h5");
        miNodoTitle.classList.add("card-title");
        miNodoTitle.textContent = info.nombre;
        // Imagen
        const miNodoImagen = document.createElement("img");
        miNodoImagen.classList.add("img-fluid", "mx-auto", "d-block");
        miNodoImagen.setAttribute("src", info.imagen);
        // Precio
        const miNodoPrecio = document.createElement("p");
        miNodoPrecio.classList.add("card-text");
        miNodoPrecio.textContent = `${info.precio}${divisa}`;
        // Boton
        const miNodoBoton = document.createElement("button");
        miNodoBoton.classList.add("btn", "btn-sm", "btn-primary");
        miNodoBoton.textContent = "Añadir al carrito";
        miNodoBoton.setAttribute("marcador", info.id);
        miNodoBoton.addEventListener("click", anyadirProductoAlCarrito);
        // Insertamos
        miNodoCardBody.appendChild(miNodoImagen);
        miNodoCardBody.appendChild(miNodoTitle);
        miNodoCardBody.appendChild(miNodoPrecio);
        miNodoCardBody.appendChild(miNodoBoton);
        miNodo.appendChild(miNodoCardBody);
        DOMitems.appendChild(miNodo);
      });
    }
  
    /**
     * Evento para añadir un producto al carrito de la compra
     */
    function anyadirProductoAlCarrito(evento) {
      // Anyadimos el Nodo a nuestro carrito
      carrito.push(evento.target.getAttribute("marcador"));
      // Actualizamos el carrito
      renderizarCarrito();
      // Actualizamos el LocalStorage
      guardarCarritoEnLocalStorage();
    }
  
    /**
     * Dibuja todos los productos guardados en el carrito
     */
    function renderizarCarrito() {
      // Vaciamos todo el html
      DOMcarrito.textContent = "";
      // Quitamos los duplicados
      const carritoSinDuplicados = [...new Set(carrito)];
      // Generamos los Nodos a partir de carrito
      carritoSinDuplicados.forEach((item) => {
        // Obtenemos el item que necesitamos de la variable base de datos
        const miItem = baseDeDatos.filter((itemBaseDatos) => {
          // ¿Coincide las id? Solo puede existir un caso
          return itemBaseDatos.id === parseInt(item);
        });
        // Cuenta el número de veces que se repite el producto
        const numeroUnidadesItem = carrito.reduce((total, itemId) => {
          // ¿Coincide las id? Incremento el contador, en caso contrario no mantengo
          return itemId === item ? (total += 1) : total;
        }, 0);
        // Creamos el nodo del item del carrito
        const miNodo = document.createElement("li");
        miNodo.classList.add("list-group-item", "text-right", "mx-2");
        miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0].nombre} = ${miItem[0].precio}${divisa}`;
        // Boton de borrar
        const miBoton = document.createElement("button");
        miBoton.classList.add("btn", "btn-outline-danger", "btn-sm");
        miBoton.textContent = "X";
        miBoton.style.marginLeft = "0.5rem";
        miBoton.dataset.item = item;
        miBoton.addEventListener("click", borrarItemCarrito);
        // Mezclamos nodos
        miNodo.appendChild(miBoton);
        DOMcarrito.appendChild(miNodo);
      });
      // Renderizamos el precio total en el HTML
      DOMtotal.textContent = calcularTotal();
    }
  
    /**
     * Evento para borrar un elemento del carrito
     */
    function borrarItemCarrito(evento) {
      // Obtenemos el producto ID que hay en el boton pulsado
      const id = evento.target.dataset.item;
      // Borramos todos los productos
      carrito = carrito.filter((carritoId) => {
        return carritoId !== id;
      });
      // volvemos a renderizar
      renderizarCarrito();
      // Actualizamos el LocalStorage
      guardarCarritoEnLocalStorage();
    }
  
    /**
     * Calcula el precio total teniendo en cuenta los productos repetidos
     */
    function calcularTotal() {
      // Recorremos el array del carrito
      return carrito
        .reduce((total, item) => {
          // De cada elemento obtenemos su precio
          const miItem = baseDeDatos.filter((itemBaseDatos) => {
            return itemBaseDatos.id === parseInt(item);
          });
          // Los sumamos al total
          return total + miItem[0].precio;
        }, 0)
        .toFixed(2);
    }
  
    /**
     * Varia el carrito y vuelve a dibujarlo
     */
    function vaciarCarrito() {
      // Limpiamos los productos guardados
      carrito = [];
      // Renderizamos los cambios
      renderizarCarrito();
      // Borra LocalStorage
      localStorage.clear();
    }
  
    function guardarCarritoEnLocalStorage() {
      miLocalStorage.setItem("carrito", JSON.stringify(carrito));
    }
  
    function cargarCarritoDeLocalStorage() {
      // ¿Existe un carrito previo guardado en LocalStorage?
      if (miLocalStorage.getItem("carrito") !== null) {
        // Carga la información
        carrito = JSON.parse(miLocalStorage.getItem("carrito"));
      }
    }
  
    // Eventos
    DOMbotonVaciar.addEventListener("click", vaciarCarrito);
  
    // Inicio
    cargarCarritoDeLocalStorage();
    renderizarProductos();
    renderizarCarrito();
  });
</script>
@endsection