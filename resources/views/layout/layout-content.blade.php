
<!-- page content  nav -->
<div id="page-content-wrapper" class="w-100 bg-light-blue layout-content">

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            {{-- <a id="menu-toggle" class="navbar-brand" href="#"><i class="fa-solid fa-sliders"></i></a> --}}
            <a id="menu-toggle" class="navbar-brand" href="#"><i class="fa-solid fa-bars"></i></i></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Perfil</a>
                            <a class="dropdown-item" href="#">Suscripciones</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Cerrar Sección</a>
                    </li>
                </ul>

            </div>
        </div>
        <!-- fin container -->

    </nav>
    <!--  fin nav -->


    <section class="section-wraper-content">
        @yield('content')
    </section>


</div>
<!-- fin  page content -->