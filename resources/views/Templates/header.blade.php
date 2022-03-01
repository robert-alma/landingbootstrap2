<!-- INICIO / CABECERA -->
<header class="container-fluid bg-light">
    <div class="container ">
        <div class="d-flex justify-content-between align-items-center">
            <div class="col-4 d-flex">
                logo
            </div>
            <div class="col-4 d-flex justify-content-center">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item d-flex justify-content-center">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item d-flex justify-content-center">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item d-flex justify-content-center dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item d-flex justify-content-center">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-4 d-flex align-items-center">
                <div class="col-8 ">
                    <p class=" col d-flex justify-content-end mb-1">Bienvenido, master</p>
                    <div class="dropdown d-flex justify-content-end ">
                        <button class="btn btn-primary rounded-pill dropdown-toggle p-0" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="lista-desplegable">Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center m-3">
                    <figure class="w-50 figure col d-flex justify-content-center align-items-center m-0">
                        <img src="{{ asset('img/perfil14_orig.png') }}" class="figure-img img-fluid rounded m-0"
                            alt="...">
                    </figure>
                </div>
                <div class="col-2 d-flex justify-content-start align-items-center">
                    <span style="font-size: 48px">
                        <i class="fas fa-door-open"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- FIN / CABECERA -->
