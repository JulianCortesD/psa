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
                        <li class="nav-item">
                            <a class="nav-link " href="#">
                                <div >Aire, ruido y radiación   <br> electromagnética</div> 
                                <div class="mt-2 ml-2"> <img   src="{{asset("images/header/IconoMenuAireRuidoyREM.svg")}}" alt="home" style="height: 20px"> </div>
                                <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div>Alimentos <br> y bebidas</div>
                                <div class="mt-1 ml-2"> <img   src="{{asset("images/header/IconoMenuAlimentosSanos.svg")}}" alt="home" style="height: 30px"> </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div>Agua y <br> saneamiento</div>
                                <div class="mt-1 ml-2"> <img   src="{{asset("images/header/IconoMenuAguaySaneamiento.svg")}}" alt="home" style="height: 30px"> </div>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <div>Cambio <br> climatico</div>
                                <div class="mt-1 ml-2"> <img   src="{{asset("images/header/IconoMenuCambioClimatico.svg")}}" alt="home" style="height: 30px"> </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div>Espacio y <br> movilidad</div>
                                <div class="mt-1 ml-2"> <img   src="{{asset("images/header/IconoMenuEspacioyMovilidad.svg")}}" alt="home" style="height: 30px"> </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div>Medicamentos y <br> dispositvos médicos</div>
                                <div class="mt-1 ml-2"> <img   src="{{asset("images/header/IconoMenuMedicamentosSeguros.svg")}}" alt="home" style="height: 30px"> </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div>Productos químicos, <br> industria y belleza</div>
                                <div class="mt-1 ml-2"> <img   src="{{asset("images/header/IconoMenuSeguridadQuimica.svg")}}" alt="home" style="height: 30px"> </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div>Zoonosis <br> y vectores</div>
                                <div class="mt-1 ml-2"> <img   src="{{asset("images/header/IconoMenuZoonosisyVectores.svg")}}" alt="home" style="height: 30px"> </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="separator"></div>
</header>
