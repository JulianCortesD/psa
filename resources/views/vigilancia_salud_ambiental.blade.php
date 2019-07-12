@extends('layout')
@section('titulo')
    Conceptos Favorables
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/menu.css")}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/secAmbiente.css")}}" />
@endsection
@section('contenido')
    <div class="wrapper min-ancho">
        <div class="container-fluid">
            <div class="row mb-3">
                
                <div class="col-8">
                    <img src="images/aire/iconoHome.png" width="42" height="38" alt="Ir al home" />
                    <span class="breadcrumb_"> | Vigilancia de la Salud Ambiental </span>
                </div>  
                <div class="col-4">
                    <div class="row">
                        <div class="col-12 date-time-title">
                            <span>Bogotá hoy</span> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 date-time" id="reloj">
                            Fecha y hora
                        </div>
                    </div>                                    
                </div>
            </div>

            <div class="row mb-3">
                    <div class="col-8 ">
                        <div class="row">
                            <div class=" d-inline-block" >
                                <img class="concept-title d-inline-block" src="{{asset("images/header/menu/IconoParticipacionCiudadana.svg")}}" alt="">
                            </div>
                            <div class="d-inline-block titulo-contenido px-5">
                                <label > Vigilancia de la Salud Ambiental </label> 
                            </div>
                        </div>
                    </div>
                    <div class="col-4" >
                        <div class="row">
                            <div class="col-4">
                                <a href="http://www.ambientebogota.gov.co/calidad-del-aire">
                                    <img src="{{asset("images/news/calidadaire.svg")}}" alt="calidad aire" class="img-calidad-aire">
                                </a>                            
                            </div>
                            <div class="col-4">
                                <a href="http://saludata.saludcapital.gov.co/osb/index.php/2019/07/01/protejase-del-sol-lo-que-debe-saber-sobre-la-radiacion-solar/">
                                    <img src="{{asset("images/news/indiceuv.svg")}}" alt="indice uv" class="img-indice-uv">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="http://www.ideam.gov.co/">
                                    <img  src="{{asset("images/news/climaactual.svg")}}" alt="clima actual" class="img-clima-actual">
                                </a>                            
                            </div>
                        </div>  
                    </div>
                </div>
        </div>
    </div>

    <div class="wrapper min-ancho">
        <div class="container-fluid">
            <div >
                <a href="https://twitter.com/AmbienteBogota" class="redes pl-1 pt-2" style="margin-top: 90px">
                    <img  src="{{asset("images/redessociales/Twitter.svg")}}" alt="" style="height: 80%">
                </a>    
                <a href="https://www.facebook.com/AmbienteBogota/" class="redes pl-2 pt-2" style="margin-top: 150px">
                    <img  src="{{asset("images/redessociales/IconoFacebook.svg")}}" alt="" style="height: 95%">
                </a> 
                <a href="https://www.youtube.com/channel/UCjboPXY4C2F3rnqP7k4_9cQ" class="redes pl-1 pt-2" style="margin-top: 210px">
                    <img  src="{{asset("images/redessociales/IconoYouTube.svg")}}" alt="" style="height: 70%">
                </a>             
            </div>
            <div id="carouselExampleIndicators" class="carousel slide carousel-news" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner restaurante 1a del Home.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner ETOZ del Home.jpg")}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner PISA del Home.jpg")}}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/BannerHomeSemanaAmbiental.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner Autorregulacion Home.jpg")}}" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>  
        </div>    
    </div>

    
    
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-10 offset-1">
                    <div class="row">
                        <div class="col-10 offset-1">
                            <p style="text-align: justify;">
                                La vigilancia de salud ambiental, es una de las ramas de la Salud Pública encargada de evaluar y controlar el impacto de 
                                las personas sobre el medio ambiente y el del medio ambiente sobre las personas. Esta viilancia se enmarca en la Vigilancia 
                                en Salud Pública que el Decreto 3518 en su artículo 3 define como la "Función esencial asociada a la responsabilidad
                                estatal y ciudadana de proteción de la salud, consistente en el proceso sistematico y constante de recoleccón, análisis,
                                y evaluación de la práctica en salud publica.
                            </p>
                        </div>
                    </div>                      
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-10 offset-1">
                    <div class="row">
                        <img src="{{asset("images/menu/ejes_centrales.png")}}" alt="ejes">
                    </div> 
                    <div class="row">
                        <div class="col-10 offset-1">
                            <p style="text-align: justify;">
                                En relación a la vigilancia sanitaria, a nivel distrital esta se desarrolla a través de unos ejes centrales que son:
                                <ul>
                                    <li>Establecimiento vigilado y controlado</li>
                                    <li>Actividades educativas</li>
                                    <li>Control de población canina</li>
                                    <li>Control de vectores</li>
                                </ul>
                            </p>
                        </div>
                    </div>                      
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-10 offset-1">
                    <div class="row">
                        <img src="{{asset("images/menu/lineas_accion.png")}}" alt="lineas de accion">
                    </div>                         
                    <div class="row">
                        <div class="col-11 offset-1">
                            <p>Los ejes mencionados se encuentran organizados de acuerdo a la siguientes líneas de acción</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row mt-5">
                                <div class="col-6">
                                    <img class="d-block altura" src="{{asset("images/indicators/LogoAireRuidoREM.png")}}" alt="" >
                                </div>
                                <div class="col-6">
                                    <img class="d-block altura" src="{{asset("images/indicators/LogoEspacioyMovilidad.png")}}" alt="" >
                                </div>
                            </div>
                
                            <div class="row mt-3">
                                <div class="col-6 ml-1">
                                    <img class="d-block altura" src="{{asset("images/indicators/LogoAlimentosSanos.png")}}" alt="" >
                                </div>
                                <div class="col-5">
                                    <img class="d-block altura" src="{{asset("images/indicators/LogoMedicamentosSeguros.png")}}" alt="">
                                </div>
                            </div>
                
                            <div class="row mt-3">
                                <div class="col-6">
                                    <img class="d-block altura" src="{{asset("images/indicators/LogoAguaSaneamiento.png")}}" alt="" >
                                </div>
                                <div class="col-6">
                                    <img class="d-block altura" src="{{asset("images/indicators/LogoSeguridadQuimica.png")}}" alt="" >
                                </div>
                            </div>
                
                            <div class="row mt-3">
                                <div class="col-6">
                                    <img class="d-block  altura" src="{{asset("images/indicators/LogoCambioClimatico.png")}}" alt="" >
                                </div>
                                <div class="col-6">
                                    <img class="d-block altura" src="{{asset("images/indicators/LogoETOZ.png")}}" alt="" >
                                </div>
                            </div>    
                        </div>
                    </div>                      
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-10 offset-1">
                    <div class="row">
                        <img src="{{asset("images/menu/objetivos_vigilancia.png")}}" alt="">
                    </div>                         
                    <div class="row">
                            <div class="col-10 offset-1">
                                <p style="text-align: justify;">
                                    REalizar el seguimiento continuo y sistemático de la salud ambiental, de acuerdo con procesos
                                    estalecidos para la notificación, resolución, recolección, procesamiento y análisis de los datos
                                    ambientales y de eventos de salud relacionados con las siguientes líneas de acción: Alimentos 
                                    sanos y seguros, Seguridad química, Agua potable y saneamiento básico, Eventos transmisibles
                                    de orien zoologico, Medicamentos seguros, y calidad del aire y la salud, con el fin
                                    de generar información oportuna, válida y confiable para orientar medidad de prevención, 
                                    vigilancia y contrl a nivel territorial.                                    
                                </p>
                            </div>
                    </div>                   
                </div>
            </div>
            
        </div>        
    </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
