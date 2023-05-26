<div class="container-fluid footer bg-light py-1" style="margin-top: 90px;">
    <div class="container text-center py-3">
        <div class="row">
            <div class="col-12 mb-4">
                <a href="index.html" class="navbar-brand m-0">
                    <img src="img/icon/icon192.png" alt="Image" />
                </a>
            </div>
            <div class="col-12 mb-4">
                <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-12 mt-2 mb-4">
                @guest
                    <a href="/usuario"><p><i class="fa fa-user"> Ingresar</i></p></a>
                @endguest
                @auth
                    <a href="/logout"><p><i class="fa fa-user">Cerrar sesion</i></p></a>
                @endauth
                <div class="row">
                    <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                        <h5 class="font-weight-bold mb-2">Contacto</h5>
                        <p class="mb-1"><i class="fa fa-map-location-dot"></i> Puebla, Pue., México</p>
                        <p class="mb-0"><i class="fa fa-phone"></i> +52 222 123 4567</p>
                    </div>
                    <div class="col-sm-6 text-center text-sm-left">
                        <h5 class="font-weight-bold mb-2">Horario</h5>
                        <p class="mb-1">Martes a Domingo</p>
                        <p class="mb-0">10Am - 7PM</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <p class="m-0">&copy; J&E 2023. Todos los derecho reservados.</p>
            </div>
        </div>
    </div>
</div>
