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
                    <span class="breadcrumb_"> Zoonosis y Vectores |   Eventos Transmisibles de Origen Zoonótico ETOZ </span>
                    <span class="breadcrumb_ colorETOZ">Más Información</span>

                    <div width="300px">
                        <img src="{{asset("images/Eventos zoonoticos/LOGO_ZOONOSIS.png")}}" height="93" alt="símbolo sección etoz" />
                    </div>

                </div>
                <div class="col-4" id="ocultar-contenedor">
                    <div class="row ocultar">
                        <div class="col-12 date-time-title">
                        <span>Bogotá hoy</span> 
                        </div>
                    </div>
                    <div class="row ocultar">
                        <div class="col-12 date-time" id="reloj">
                            Fecha y hora
                        </div>
                    </div>  
                    <div class="row mt-2">
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
            <!-- <div class="row">
                <div class="col-8 mr-2 fluid-left">
                    <div width="300px">
                        <img src="{{asset("images/Eventos zoonoticos/LOGO_ZOONOSIS.png")}}" height="93" alt="símbolo sección etoz" />
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
            </div>  -->  
            
            <div class="row">
                <!-- <div >
                    <a href="https://twitter.com/AmbienteBogota" class="redes pl-1 pt-2" style="margin-top: 90px; margin-left:0px;">
                        <img  src="{{asset("images/redessociales/Twitter.svg")}}" alt="" style="height: 80%">
                    </a>    
                    <a href="https://www.facebook.com/AmbienteBogota/" class="redes pl-2 pt-2" style="margin-top: 150px; margin-left:0px;">
                        <img  src="{{asset("images/redessociales/IconoFacebook.svg")}}" alt="" style="height: 95%">
                    </a> 
                    <a href="https://www.youtube.com/channel/UCjboPXY4C2F3rnqP7k4_9cQ" class="redes pl-1 pt-2" style="margin-top: 210px; margin-left:0px;">
                        <img  src="{{asset("images/redessociales/IconoYouTube.svg")}}" alt="" style="height: 70%">
                    </a>             
                </div>  -->
                <div height="355">
                    <img src="images/quimica/Banner peluqueria parte interna.png" alt="Slider aire" width="945" />
                </div>
            </div>

            <div class="row" style="text-align:justify;">
                <div class="contenidoSecAmb centradoDiv">
                    <h2 class="colorSeguridadquimica">
                    <img src="images/quimica/espacioINDICADORES.jpg" width="85" height="63" align="absbottom" />Indicadores</h2>
                    <h2 class="seccion fondoSeguridadquimica sinSaltoLinea"></h2>

                    <p>Refleja la proporción  de las intervenciones realizadas en los  procesos de vigilancia y control, en las actividades
                    de la industria y del sector belleza, así como el acompañamiento a los establecimientos en su gestión de la salud ambiental.</p>
                    <p>&nbsp;</p>
                    <ul>
                    <li>
                        <span class="colorIndicadores">Tasa incidencia de intoxicación con sustancias químicas en Bogotá D.C</span>..
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/intoxicacion/">Ver aquí</a>
                    </li>
                    </ul>
                    <p>&nbsp;</p>
                    <ul>
                    <li>
                        <span class="colorIndicadores">Cantidad de sustancias químicas peligrosas por habitante en Bogotá D.C</span>.
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/distribucionsustanciasquimicaspeligrosaspercapita/">ver aquí</a>
                    </li>
                    </ul>
                    <p>&nbsp;</p>
                    <p align="right">&nbsp;</p>
                    <p align="right">&nbsp;</p>
                </div>
            </div>  

            <div class="row">
                <hr class="lineaQuimica mt80" style="width: 100%;" />
            </div>

            <div class="logos colorSeguridadquimica bold140p">
                <div class="centrado">
                    <p class="colorSeguridadquimica">Documentos e investigaciones</p>
                    <a href="SeguridadQuimica_Documentos.html">
                    <img src="images/quimica/espacioDOCUMENTOS.jpg" width="85" height="63" alt="Aire docs" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Mapas</p>
                    <img src="images/quimica/espacioMAPA.jpg" width="85" height="63" alt="Aire mapa" />
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Normatividad</p>
                    <a href="SeguridadQuimica_Normatividad.html">
                    <img src="images/quimica/espacioNORMATIVIDAD.jpg" width="85" height="63" alt="Aire normas" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Indicadores</p>
                    <a href="SeguridadQuimica_Indicadores.html">
                    <img src="images/quimica/espacioINDICADORES.jpg" width="85" height="63" alt="Aire título" />
                    </a>
                </div>
                </div>        
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
