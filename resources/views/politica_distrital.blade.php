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
                    <span class="breadcrumb_"> | Política Distrital de Salud Ambiental </span>
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
                                <label > Política Distritral de Salud Ambiental </label> 
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
                        <h1 class="titulo-seccion">Quienes somos</h1>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-1">
                            <p style="text-align: justify;">
                                El Portal de Salud Ambiental de Bogotá D.C., es un centro de refrencia a nivel distrital para el abordaje intersecional y el 
                                análisis integral de los determinantes socio ambientales del proceso salud enfermedad en la ciudad. Tiene como propósito
                                integrar, promover y apoyar esfuerzos distritales de carácter técnico, político y social tendientes a la conservación del ambiente
                                como estrategia de mejoramiento de las condiciones de salud y la calidad de vida de los bogotanos. 
                            </p>
                        </div>
                    </div>                      
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-10 offset-1">
                    <div class="row">
                        <img src="{{asset("images/menu/objetivos.png")}}" alt="calidad aire">
                    </div>                         
                    <div class="row">
                        <div class="col-6 offset-1">
                            <h4 class="subtitulo-seccion">Objetivo General</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-1">
                            <p style="text-align: justify;">
                                Incidir positivamente sobre las condiciones sanitarias y socio-ambientales que determinan la calidad de vida y salud de los y las habitantes del Distrito Capital.
                            </p>
                            <a href="">Ver más</a>
                        </div>
                    </div>                      
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-10 offset-1">
                    <div class="row">
                        <img src="{{asset("images/menu/conozcala.png")}}" alt="calidad aire">
                    </div>                         
                    <div class="row">
                        <div class="col-6 offset-1">
                            <h4 class="subtitulo-seccion">Política Distrital de Salud Ambiental de Bogotá</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-1">
                            <p style="text-align: justify;">
                                La Política Distrital de Salud Ambiental para Bogotá 2011- 2023 adoptada mediante el Decreto 596 de 2011, permite orientar la gestión distrital para el mejoramiento de la Salud Ambiental en la ciudad, mediante fortalecimiento institucional y territorial, trabajo articulado de la administración y construcción de espacios de coordinación participativa por medio de líneas de intervención, contribuyendo a la construcción de una ciudad habitable, sostenible, integral, incluyente, participativa y saludable, aportando a una buena calidad de vida y salud para toda su población.
                            </p>
                        </div>
                    </div>                      
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-10 offset-1">
                    <div class="row">
                        <img src="{{asset("images/menu/principios.png")}}" alt="">
                    </div>                         
                    <div class="row">
                        <div class="col-3 offset-1">
                            <div>
                                Autonomía <br>
                                Incidencia <br>
                                Sostenibilidad
                            </div>                            
                        </div>
                        <div class="col-3 offset-1">
                            <div>
                                Autonomía <br>
                                Incidencia <br>
                                Sostenibilidad
                            </div>                            
                        </div>
                        <div class="col-3 ">
                            <div>
                                Accesibilidad <br>
                                Participación <br>
                            </div>                            
                        </div>
                        <div class="col-3 offset-1">
                            <div>
                                Objetividad <br>
                                Transectorialidad <br>
                            </div>                            
                        </div>
                    </div>                   
                </div>
            </div>
            <div class="row">
                <hr class="lineaAire mt80" style="width: 100%;">
            </div>

            <div class="row">
                <div class="col-12 logos colorAire bold140p">
                    <div class="col-3 offset-1 centrado">
                        <p>Estrategias</p>
                        <img src="images/menu/estrategias.png" width="85" height="63" alt="estrategias">
                    </div>
                    <div class="col-3 centrado">
                        <p>Indicadores</p>
                        <img src="images/aire/IMG_AGUA_INDICADORES.jpg" width="85" height="63" alt="indicadores aire">
                    </div>
                    <div class="col-5  centrado">
                        <p>Documentos e investigaciones</p>
                        <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Aire docs">
                    </div>
                </div>
            </div>           
            
        </div>        
    </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
