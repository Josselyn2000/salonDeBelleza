<div class="container-fluid bg-primary py-3 d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    @guest
                        <a class="text-white px-3" href="/usuario">
                            <i class="fa fa-user"></i> Ingresar
                        </a>
                    @endguest
                    
                    @auth
                        <a class="text-white px-3">Bienvenido(a), {{auth()->user()->name ?? auth()->user()->username}}</a><br>
                        <a class="text-white px-3" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                        <a class="text-white px-3" href="/logout">| Cerrar sesión</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>