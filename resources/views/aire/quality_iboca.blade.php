@extends('layout')
@section('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/indicator.css")}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/secAmbiente.css")}}" />
@endsection
@section('contenido')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-8">
                    <img src="images/aire/iconoHome.png" width="42" height="38" alt="Ir al home" />
                    <span class="breadcrumb_">  | Aire, ruido y radiación electromagnética | </span>
                    <span class="breadcrumb_ aire"> IBOCA</span>
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
            <div class="row">
                <div class="col-8 mr-2 fluid-left">
                    <div width="300px">
                        <img src="images/aire/LogoAireRuidoREM.png" alt="símbolo sección aire" />
                    </div>
                </div>
                <div class="col-4" style="margin-left: 7px;">
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
            
            <div class="row">
                <div >
                    <a href="https://twitter.com/AmbienteBogota" class="redes pl-1 pt-2" style="margin-top: 90px; margin-left:0px;">
                        <img  src="{{asset("images/redessociales/Twitter.svg")}}" alt="" style="height: 80%">
                    </a>    
                    <a href="https://www.facebook.com/AmbienteBogota/" class="redes pl-2 pt-2" style="margin-top: 150px; margin-left:0px;">
                        <img  src="{{asset("images/redessociales/IconoFacebook.svg")}}" alt="" style="height: 95%">
                    </a> 
                    <a href="https://www.youtube.com/channel/UCjboPXY4C2F3rnqP7k4_9cQ" class="redes pl-1 pt-2" style="margin-top: 210px; margin-left:0px;">
                        <img  src="{{asset("images/redessociales/IconoYouTube.svg")}}" alt="" style="height: 70%">
                    </a>             
            </div> 
                <div height="355">
                    <img src="images/aire/BannerEstAire.png" width="100%" alt="Slider aire" />
                </div>
            </div>

            <div class="row">
                <div class="contenidoSecAmb centradoDiv">
                        <!-- Texto inicial con fonto azul-->
                    
                        <div></div>
                        <h3 class="centrado colorAire mt40">Índice Bogotano del Calidad de Aire (IBOCA)</h3>
                        <p align="justify">El índice bogotano de calidad del aire, fue adoptado de manera conjunta entre la Secretaria Distrital de Ambiente y
                            la Secretaria Distrital de Salud mediante la Resolución 2410 de 2015, en la cual se define al IBOCA como un indicador
                            multipropósito adimensional, calculado a partir de las concentraciones de contaminantes atmosféricos en un momento
                            y lugar de la ciudad, que comunica simultáneamente y de forma sencilla, oportuna y clara el riesgo ambiental por
                            contaminación atmosférica, el estado de la calidad del aire de Bogotá, las afectaciones y recomendaciones en salud
                            y las medidas voluntarias para que la ciudadanía contribuya a mantener o mejorar la calidad del aire de la ciudad.
                            También funciona como un indicador de riesgo ambiental por contaminación atmosférica en el marco del Sistema Distrital
                            de Alertas del Sistema Distrital de Gestión del Riesgo y Cambio Climático - SATAB Aire. </p>
                    
                        <h3 class="centrado colorAire mt40">Pronóstico de calidad del aire</h3>
                        <p align="justify">A través del Sistema Integrado de Modelación de Calidad de Aire de Bogotá (SIMCAB) la Secretaría Distrital de Ambiente
                            puede estimar el destino y distribución de la concentración de los contaminantes atmosféricos inventariados en la
                            ciudad, complementando la tarea de monitoreo desarrollada por la Red de Monitoreo de Calidad del Aire de Bogotá (RMCAB).
                            Esta herramienta permite estimar el estado de la calidad de aire para las siguientes 48 horas, teniendo en cuenta
                            el pronóstico de variables meteorológicas y comportamientos típicos de emisiones en la ciudad para los días pronosticados.
                            Pronóstico IBOCA.</p>
                        <p class="verMas colorAgua">
                            <a href="{{asset("aire_ruido_rem")}}">Volver</a>
                        </p>
                    
                </div>
            </div>  
            
            <div class="row">
                <hr class="lineaAire mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAire bold140p">
                <div class="centrado colorAire">
                    <p class="colorAire">Documentos e investigaciones</p>
                    <a href="{{asset("aire_documentos")}}">
                        <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Agua docs" />
                    </a>
                    
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Mapas</p>
                    <a href="{{asset("aire_mapas")}}">
                        <img src="images/aire/aireMAPA.png" width="85" height="63" alt="Agua mapa" />
                    </a>                    
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Normatividad</p>
                    <a href="{{asset("aire_normatividad")}}">
                        <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Agua normas" />
                    </a>
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Indicadores</p>
                    <a href="{{asset("aire_indicadores")}}">
                        <img src="images/aire/aireINDICADORES.png" width="85" height="63" alt="Agua título" />
                    </a>                    
                </div>
            </div>
    </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
