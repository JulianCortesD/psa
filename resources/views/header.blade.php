<header>
    <div class="header ">
        <div class="container-fluid">
            <div class="row align-items-start justify-content-between">
                <div class="col-3">
                        <img src="{{asset("images/header/LogoAlcaldia.svg")}}" alt="Alcaldía Bogotá" style="height: 30px;">
                    {{-- <div class="css-shapes-preview">
                        <div class="interno">
                            Alcaldía de Bogotá
                        </div> 
                    </div>   --}}  
                </div>
                <div class="col-8 ">
                    <div class="row justify-content-end">
                        <div class="search ">
                            <input type="search" name="busqueda" class="inputsearch">
                            {{-- <span class="icon"><i class="fa fa-search"></i></span> --}}
                            <span class="icon"><img src="{{asset("images/header/LupaBuscador.svg")}}" alt=""></span>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-8">
                    <h1 class="title-text">Salud Ambiental de Bogotá</h1>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-2">
                    <div class=" access-tool">
                        <img  class="left-option"src="{{asset("images/header/IconoOjoAccesibilidad.svg")}}" alt="Alcaldía Bogotá">
                        <br>
                        <img class="left-option" src="{{asset("images/header/IconoAccesibilidadOido.svg")}}" alt="Alcaldía Bogotá" >
                    </div> 
                </div>
                <div class="col-9">
                    <div class="row row justify-content-end">
                        <div class="col-3 col-lg-2 menu-header">
                            <div class="row">
                                <div class="d-inline-block">
                                    <img  class="right-bottom-menu" src="{{asset("images/header/menu/IconoPoliticaDistrital.svg")}}" alt=""  >
                                </div>
                                <div class="d-inline menu-header-interno">
                                    <label>Política Distrital de <br> Salud Ambiental</label> 
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-lg-2 menu-header">
                            <div class="row">
                                <div class="d-inline-block ">
                                    <img  class="right-bottom-menu" src="{{asset("images/header/menu/IconoParticipacionCiudadana.svg")}}" alt=""  >
                                </div>
                                <div class="d-inline menu-header-interno">
                                    <label>Participación <br> Ciudadana</label> 
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-lg-2 menu-header">
                            <div class="row">
                                <div class="d-inline-block">
                                    <img  class="right-bottom-menu" src="{{asset("images/header/menu/IconoVigilanciaSaludAmbiental.svg")}}" alt=""  >
                                </div>
                                <div class="d-inline menu-header-interno">
                                    <label>Vigilancia de la <br> Salud Ambiental</label> 
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <img  class="right-bottom-menu" src="{{asset("images/header/participacion_ciudadana.svg")}}" alt="" >
                    <img  class="right-bottom-menu" src="{{asset("images/header/vigilancia_salud_ambiental.svg")}}" alt="" > --}}
                </div>
            </div>
        </div>
    </div>

    <div class=" container-fluid menu-nav">
            <nav class="navbar navbar-expand-lg navbar-dark  py-0 menu-down-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="{{asset("home")}}">
                        <img src="{{asset("images/header/IconoHomeMenu.svg")}}" alt="home" style="height: 30px">
                    </a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset("images/header/IconoMenuAireRuidoyREM.svg")}}" alt="home" style="height: 15px; margin-top: 10px; margin-right: 5px;">
                                <div >Aire, ruido y radiación <br> electromagnética</div> 
                                {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Calidad del aire</a>
                                <a class="dropdown-item" href="#">Espacios libres de humo</a>
                                <a class="dropdown-item" href="#">Ruido</a>
                                <a class="dropdown-item" href="#">Radiación electromagnética</a>
                                <a class="dropdown-item" href="#">Indicadores</a>
                                <a class="dropdown-item" href="#">Normatividad</a>
                                <a class="dropdown-item" href="#">Mapas</a>
                                <a class="dropdown-item" href="#">Documentos e investiaciones</a>
                                <a class="dropdown-item" href="#">Gestión de la salud ambiental</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset("images/header/IconoMenuAlimentosSanos.svg")}}" alt="Alimentos Sanos" style="height: 28px;  margin-right: 5px;">
                                <div>Alimentos <br> y bebidas</div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Alertas</a>
                                <a class="dropdown-item" href="#">Restaurantes 1A</a>
                                <a class="dropdown-item" href="#">Expendio de carnes y cárnicos comestibles</a>
                                <a class="dropdown-item" href="#">Vehículos transportadoes</a>
                                <a class="dropdown-item" href="#">Establecimientos con concepto favorable</a>
                                <a class="dropdown-item" href="#">Indicadores</a>
                                <a class="dropdown-item" href="#">Normatividad</a>
                                <a class="dropdown-item" href="#">Mapas</a>
                                <a class="dropdown-item" href="#">Documentos e investiaciones</a>
                                <a class="dropdown-item" href="#">Gestión de la salud ambiental</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset("images/header/IconoMenuAguaySaneamiento.svg")}}" alt="Agua y Saneamiento" style="height: 28px;  margin-right: 5px;">
                                <div>Agua y <br> saneamiento</div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Carro tanques</a>
                                <a class="dropdown-item" href="#">Hogares para persona mayor</a>
                                <a class="dropdown-item" href="#">Establecimientos con concepto favorable</a>
                                <a class="dropdown-item" href="#">Indicadores</a>
                                <a class="dropdown-item" href="#">Normatividad</a>
                                <a class="dropdown-item" href="#">Mapas</a>
                                <a class="dropdown-item" href="#">Documentos e investiaciones</a>
                                <a class="dropdown-item" href="#">Gestión de la salud ambiental</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset("images/header/IconoMenuCambioClimatico.svg")}}" alt="Cambio climatico" style="height: 28px;  margin-right: 5px;">
                                <div>Cambio <br> climatico</div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Indice de radicaón UV</a>
                                <a class="dropdown-item" href="#">Indice de vulnerabilidad</a>
                                <a class="dropdown-item" href="#">Indicadores</a>
                                <a class="dropdown-item" href="#">Normatividad</a>
                                <a class="dropdown-item" href="#">Mapas</a>
                                <a class="dropdown-item" href="#">Documentos e investiaciones</a>
                                <a class="dropdown-item" href="#">Gestión de la salud ambiental</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset("images/header/IconoMenuEspacioyMovilidad.svg")}}" alt="Espacio y movilidad" style="height: 28px;  margin-right: 5px;">
                                <div>Espacio y <br> movilidad</div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Indicadores</a>
                                <a class="dropdown-item" href="#">Normatividad</a>
                                <a class="dropdown-item" href="#">Mapas</a>
                                <a class="dropdown-item" href="#">Documentos e investiaciones</a>
                                <a class="dropdown-item" href="#">Gestión de la salud ambiental</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset("images/header/IconoMenuMedicamentosSeguros.svg")}}" alt="Medicamentos" style="height: 28px;  margin-right: 5px;">
                                <div>Medicamentos y <br> dispositvos médicos</div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Requisitos para apertura y funcionamiento establecimientos</a>
                                <a class="dropdown-item" href="#">Alertas sanitarias</a>
                                <a class="dropdown-item" href="#">Establecimiento con concepto favorable</a>
                                <a class="dropdown-item" href="#">Indicadores</a>
                                <a class="dropdown-item" href="#">Normatividad</a>
                                <a class="dropdown-item" href="#">Mapas</a>
                                <a class="dropdown-item" href="#">Documentos e investiaciones</a>
                                <a class="dropdown-item" href="#">Gestión de la salud ambiental</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img  src="{{asset("images/header/IconoMenuSeguridadQuimica.svg")}}" alt="Productos Químicos" style="height: 28px;  margin-right: 5px;">
                                <div>Productos químicos, <br> industria y belleza</div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Sector belleza y estética</a>
                                <a class="dropdown-item" href="#">Proyecto PISAs</a>
                                <a class="dropdown-item" href="#">Establecimiento con concepto favorable</a>
                                <a class="dropdown-item" href="#">Indicadores</a>
                                <a class="dropdown-item" href="#">Normatividad</a>
                                <a class="dropdown-item" href="#">Mapas</a>
                                <a class="dropdown-item" href="#">Documentos e investiaciones</a>
                                <a class="dropdown-item" href="#">Gestión de la salud ambiental</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img  src="{{asset("images/header/IconoMenuZoonosisyVectores.svg")}}" alt="Zoonosis" style="height: 28px;  margin-right: 5px;">
                                <div>Zoonosis <br> y vectores</div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Clínicas y consultorios veterinarios</a>
                                <a class="dropdown-item" href="#">Vacunación antirrábica canina y felina</a>
                                <a class="dropdown-item" href="#">Control de roedores e insectos</a>
                                <a class="dropdown-item" href="#">Establecimiento con concepto favorable</a>
                                <a class="dropdown-item" href="#">Indicadores</a>
                                <a class="dropdown-item" href="#">Normatividad</a>
                                <a class="dropdown-item" href="#">Mapas</a>
                                <a class="dropdown-item" href="#">Documentos e investiaciones</a>
                                <a class="dropdown-item" href="#">Gestión de la salud ambiental</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="separator"></div>
</header>
