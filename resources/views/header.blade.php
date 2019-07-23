<header>
    <div class="header ">
        <div class="container-fluid">
            <div class="row align-items-start justify-content-between">
                <div class="col-3">
                        <img src="{{asset("images/header/LogoAlcaldia.svg")}}" alt="Alcaldía Bogotá" style="height: 30px;">
                </div>
                <div class="col-7 ">
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
                </div>
                <div class="col-9">
                    <div class="row row justify-content-end">
                        <div class="col-3 col-lg-2 menu-header">
                            <div class="row">
                                <!-- <a href="{{asset("politica_distrital_salud_ambiental")}}" style="color: #019EE2;"> -->
                                    <div class="d-inline-block">
                                        <img  class="right-bottom-menu" src="{{asset("images/header/menu/IconoPoliticaDistrital.svg")}}" alt=""  >
                                    </div>
                                    <div class="d-inline menu-header-interno">
                                        <a href="{{asset("politica_distrital_salud_ambiental")}}" style="color: #019EE2;">Política Distrital de <br> Salud Ambiental</a> 
                                    </div>
                               <!--  </a> -->
                            </div>
                        </div>
                        <div class="col-3 col-lg-2 menu-header" style="color: #019EE2;" >
                            <div class="row">
                                <!-- <a href="{{asset("politica_distrital_salud_ambiental")}}" style="color: #019EE2;"> -->
                                    <div class="d-inline-block ">
                                        <img  class="right-bottom-menu" src="{{asset("images/header/menu/IconoParticipacionCiudadana.svg")}}" alt=""  >
                                    </div>
                                    <div class="d-inline menu-header-interno">
                                        <a href="{{asset("participacion_ciudadana")}}" style="color: #019EE2;">Participación <br> Ciudadana</ > 
                                    </div>
                                <!-- </a> -->
                            </div>
                        </div>
                        <div class="col-3 col-lg-2 menu-header">
                            <div class="row">
                                <!-- <a href="{{asset("politica_distrital_salud_ambiental")}}" style="color: #019EE2;"> -->
                                    <div class="d-inline-block">
                                        <img  class="right-bottom-menu" src="{{asset("images/header/menu/IconoVigilanciaSaludAmbiental.svg")}}" alt=""  >
                                    </div>
                                    <div class="d-inline menu-header-interno">
                                        <a href="{{asset("vigilancia_salud_ambiental")}}" style="color: #019EE2;">Vigilancia de la <br> Salud Ambiental</a> 
                                    </div>
                                <!-- </a>  -->   
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
            <nav class="navbar navbar-expand-sm navbar-dark  py-0 menu-down-header">
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
                                <a class="dropdown-item titulo-tecnico" href="{{asset("aire_ruido_rem")}}"> <em>Aire, ruido y REM</em> </a>
                                <a class="dropdown-item"  href="{{asset("aire_ruido_rem")}}">Calidad del aire</a>
                                <a class="dropdown-item" href="{{asset("aire_calidad_tabaco")}}">Espacios libres de humo</a>
                                <a class="dropdown-item" href="{{asset("aire_calidad_ruido")}}">Ruido</a>
                                <a class="dropdown-item" href="{{asset("aire_calidad_radiacion")}}">Radiación electromagnética</a>
                                <a class="dropdown-item" href="{{asset("aire_indicadores")}}">Indicadores</a>
                                <a class="dropdown-item" href="{{asset("aire_normatividad")}}">Normatividad</a>
                                <a class="dropdown-item" href="{{asset("aire_mapas")}}">Mapas</a>
                                <a class="dropdown-item" href="{{asset("aire_documentos")}}">Documentos e investigaciones</a>
                               {{--  <a class="dropdown-item" href="#">Gestión de la salud ambiental</a> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset("images/header/IconoMenuAlimentosSanos.svg")}}" alt="Alimentos Sanos" style="height: 28px;  margin-right: 5px;">
                                <div>Alimentos <br> y bebidas</div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item titulo-tecnico"  href="{{asset("alimentos_sanos")}}"> <em>Alimentos sanos y seguros</em> </a>
                                <a class="dropdown-item" href="https://app.invima.gov.co/alertas/alertas-alimentos-bebidas">Alertas</a>
                                <a class="dropdown-item" href="http://autorregulacion.saludcapital.gov.co/buenpropietario#estrategiasexcelencia">Restaurantes 1A</a>
                                <li class="dropdown-item dropdown-submenu">
                                    <a >Expendio de carnes y cárnicos comestibles</a>
                                    <ul class="dropdown-menu">
                                        <a href="http://autorregulacion.saludcapital.gov.co/carnicerias">
                                            <li class="dropdown-item">
                                                Inscripción Sanitaria
                                            </li>
                                        </a>
                                        <a href="http://appb.saludcapital.gov.co/SivigilaDC/Login.aspx">
                                            <li class="dropdown-item">
                                             Autorización sanitaria
                                            </li>
                                        </a>
                                    </ul>
                                </li>
                                <li class="dropdown-item dropdown-submenu">
                                    <a>Vehículos transportadores</a>
                                    <ul class="dropdown-menu">
                                        <a href="http://appb.saludcapital.gov.co/sivigiladc/VehiculosTranspCarne/frmSubMenuVehiculos.aspx?opcion=New&amp;n=&amp;Origen=Login">
                                            <li class="dropdown-item">
                                                Cárnicos
                                             </li>   
                                        </a>
                                        <a href="http://appb.saludcapital.gov.co/sivigiladc/ExpendioDeCarne/frmSubMenuExpCarnes.aspx?opcion=New&amp;n=&amp;Origen=Login">
                                            <li class="dropdown-item">
                                                Alimentos
                                            </li>
                                        </a>                                        
                                    </ul>
                                </li>
                                <!-- <a class="dropdown-item" href="http://autorregulacion.saludcapital.gov.co">Establecimientos con concepto favorable</a> -->
                                <a class="dropdown-item" href="{{asset("alimentos_sanos_indicadores")}}">Indicadores</a>
                                <a class="dropdown-item" href="{{asset("alimentos_sanos_normatividad")}}">Normatividad</a>
                                <!-- <a class="dropdown-item" href="#">Mapas</a> -->
                                {{-- <a class="dropdown-item" href="#">Documentos e investigaciones</a> --}}
                                {{-- <a class="dropdown-item" href="#">Gestión de la salud ambiental</a> --}}
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset("images/header/IconoMenuAguaySaneamiento.svg")}}" alt="Agua y Saneamiento" style="height: 28px;  margin-right: 5px;">
                                <div>Agua y <br> saneamiento</div>
                            </a>
                            <ul class="dropdown-menu" >
                                <a class="dropdown-item titulo-tecnico" href="{{asset("agua_saneamiento_basico")}}"> <em>Calidad del agua y Sanemaiento Básico</em> </a>
                                <li class="dropdown-item dropdown-submenu">
                                    <a>Carro tanques</a>
                                    <ul class="dropdown-menu dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <a href="https://drive.google.com/open?id=1viKWkuMqYlujwWnJLNfSfXw_ARKD9THh">
                                            <li class="dropdown-item">
                                                Lista de vehículos
                                            </li>
                                        </a>
                                        <a href="https://drive.google.com/open?id=1fy8BouY9rKpWETj07mpzjTrtf293_GB_">
                                            <li class="dropdown-item">
                                             Lista de coches fúnebres
                                            </li>
                                        </a>                                        
                                    </ul>
                                </li> 
                                <a class="dropdown-item" href="{{asset("agua_saneamiento_adulto_mayor")}}">Hogares para persona mayor</a>
                                <a class="dropdown-item" href="{{asset("agua_saneamiento_conceptos_favorable")}}">Establecimientos con concepto favorable</a>
                                <a class="dropdown-item" href="{{asset("agua_saneamiento_indicadores")}}">Indicadores</a>
                                <a class="dropdown-item" href="{{asset("agua_saneamiento_normatividad")}}">Normatividad</a>
                                <a class="dropdown-item" href="{{asset("agua_saneamiento_mapas")}}">Mapas</a>
                                <a class="dropdown-item"  href="{{asset("agua_saneamiento_documentos")}}">Documentos e investigaciones</a>
                                {{-- <a class="dropdown-item" href="#">Gestión de la salud ambienblel</a> --}}
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset("images/header/IconoMenuCambioClimatico.svg")}}" alt="Cambio climatico" style="height: 28px;  margin-right: 5px;">
                                <div>Cambio <br> climatico</div>
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item titulo-tecnico"  href="{{asset("cambio_climatico")}}"><em>Cambio Climático</em> </a>
                                <a class="dropdown-item" href="http://saludata.saludcapital.gov.co/osb/index.php/2019/07/01/protejase-del-sol-lo-que-debe-saber-sobre-la-radiacion-solar/">Índice de radicaón UV</a>
                                <a class="dropdown-item" href="https://drive.google.com/open?id=1qQLcL0pdxRg6FWcKoUIH7WPqhE5Ndog-">Índice de vulnerabilidad</a>
                                <a class="dropdown-item" href="{{asset("cambio_climatico_indicadores")}}">Indicadores</a>
                                <a class="dropdown-item" href="{{asset("cambio_climatico_normatividad")}}">Normatividad</a>
                                <a class="dropdown-item" href="{{asset("cambio_climatico_mapas")}}">Mapas</a>
                                <a class="dropdown-item" href="{{asset("cambio_climatico_documentos")}}">Documentos e investigaciones</a>
                                {{-- <a class="dropdown-item" href="#">Gestión de la salud ambiental</a> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset("images/header/IconoMenuEspacioyMovilidad.svg")}}" alt="Espacio y movilidad" style="height: 28px;  margin-right: 5px;">
                                <div>Espacio y <br> movilidad</div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item titulo-tecnico" href="{{asset("espacio_movilidad")}}"> <em>Hábitat, Espacio público y movilidad</em> </a>
                                <a class="dropdown-item" href="{{asset("espacio_movilidad_indicadores")}}">Indicadores</a>
                                <a class="dropdown-item" href="{{asset("espacio_movilidad_normatividad")}}">Normatividad</a>
                                <a class="dropdown-item" href="{{asset("espacio_movilidad_radiacion")}}">Radiación Electromagnética</a>
                                {{-- <a class="dropdown-item" href="#">Mapas</a>--}}
                                <!-- <a class="dropdown-item" href="#">Documentos e investigaciones</a> -->
                                {{-- <a class="dropdown-item" href="#">Gestión de la salud ambiental</a> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset("images/header/IconoMenuMedicamentosSeguros.svg")}}" alt="Medicamentos" style="height: 28px;  margin-right: 5px;">
                                <div>Medicamentos y <br> dispositivos médicos</div>
                            </a>
                            <ul class="dropdown-menu" >
                                <a class="dropdown-item titulo-tecnico" href="{{asset("medicamentos")}}"> <em>Medicamentos Seguros</em> </a>
                                    
                                    <li class="dropdown-item dropdown-submenu">
                                        <a>Requisitos para apertura a establecimientos</a>
                                        <ul class="dropdown-menu">
                                            <a href="https://drive.google.com/open?id=1faz_S5p47G9Zw2TAk77Ji1J-guHejqtC ">
                                                <li class="dropdown-item">
                                                    Droguerías
                                                </li>
                                            </a>
                                            <a href="https://drive.google.com/open?id=1L2Csy9dL4dsAVqe1WY-TI9SksRcgJ8F4">
                                                <li class="dropdown-item">
                                                    Ópticas
                                                </li>
                                            </a>
                                        </ul>
                                    </li>
                                    <a class="dropdown-item" href="#">Alertas sanitarias</a>
                                    <a class="dropdown-item"  href="{{asset("medicamentos_favorables")}}">Establecimiento con concepto favorable</a>
                                   <!--  <a class="dropdown-item" href="#">Indicadores</a> -->
                                    <a class="dropdown-item" href="{{asset("medicamentos_normatividad")}}">Normatividad</a>
                                    {{-- <a class="dropdown-item" href="#">Mapas</a> --}}
                                    <!-- <a class="dropdown-item" href="#">Documentos e investigaciones</a> -->
                                    {{--  <a class="dropdown-item" href="#">Gestión de la salud ambiental</a> --}}
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img  src="{{asset("images/header/IconoMenuSeguridadQuimica.svg")}}" alt="Productos Químicos" style="height: 28px;  margin-right: 5px;">
                                <div>Productos químicos, <br> industria y belleza</div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item titulo-tecnico"  href="{{asset("quimicos")}}"><em>Seguridad Química</em> </a>
                                <a class="dropdown-item" href="http://www.saludcapital.gov.co/SectorBelleza/Paginas/Inicio.aspx">Sector belleza y estética</a>
                                <a class="dropdown-item" href="http://appb.saludcapital.gov.co/microsivigiladc/ServiciosComuni5.aspx">Proyecto PISA</a>
                                <a class="dropdown-item" href="{{asset("conceptos")}}">Establecimiento con concepto favorable</a>
                                <a class="dropdown-item" href="{{asset("quimicos_indicadores")}}">Indicadores</a>
                                <a class="dropdown-item" href="{{asset("quimicos_normatividad")}}">Normatividad</a>
                                {{-- <a class="dropdown-item" href="#">Mapas</a> --}}
                                <!-- <a class="dropdown-item"href="{{asset("quimicos_documentos")}}">Documentos e investigaciones</a> -->
                                {{-- <a class="dropdown-item" href="#">Gestión de la salud ambiental</a> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img  src="{{asset("images/header/IconoMenuZoonosisyVectores.svg")}}" alt="Zoonosis" style="height: 28px;  margin-right: 5px;">
                                <div>Zoonosis <br> y vectores</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-izq" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item titulo-tecnico" href="{{asset("etoz")}}"><em>Eventos Transmisibles de Origen <br> Zoonótico ETOZ</em> </a>
                                <a class="dropdown-item" href="#">Clínicas y consultorios veterinarios</a>
                                <a class="dropdown-item" href="#">Vacunación antirrábica canina y felina</a>
                                <a class="dropdown-item" href="#">Control de roedores e insectos</a>
                                <!-- <a class="dropdown-item" href="#">Establecimiento con concepto favorable</a> -->
                                <a class="dropdown-item" href="#">Indicadores</a>
                                <a class="dropdown-item" href="#">Normatividad</a>
                                <a class="dropdown-item" href="#">Mapas</a>
                                <a class="dropdown-item" href="#">Documentos e investigaciones</a>
                                {{-- <a class="dropdown-item" href="#">Gestión de la salud ambiental</a> --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="separator"></div>
</header>
