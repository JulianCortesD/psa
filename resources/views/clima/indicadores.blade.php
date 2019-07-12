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
                    <span class="breadcrumb_"> | Cambio climático | </span>
                    <span class="breadcrumb_ cambioC"> Indicadores</span>
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
                        <img src="{{asset("images/indicators/LogoCambioClimatico.png")}}" width="50%" alt="símbolo sección agua" />
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
                    <img src="images/cambioClimatico/BannerCambioClimaticoPartenterna.png" width="100%" alt="Slider Alimentos" />
                </div>
            </div>

            <div class="row" style="text-align:justify;">
                
                <div class="contenidoSecAmb centradoDiv">

                    <h3 class="seccion fondoCambioC mt40">Indicadores</h3>
                    <div class="logos">
                    <div class="seccionIcono">
                        <img src="images/cambioClimatico/cambioINDICADORES.jpg" width="85" height="63" alt="indicadores aire" />
                    </div>
                    <div class="sinSaltoLinea">Reflejan la variabilidad climática y las notificaciones de eventos de interés en salud pública posiblemente asociados
                        al fenómeno de cambio climático en Bogotá. </div>
                    </div>
                    <ul>
                    <li>Eventos notificados de ESI-IRAG en temporada de lluvias en Bogotá D.C. este indicador está disponible en el enlace:
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/temporadalluvias/" class="colorCambioC">http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/temporadalluvias/</a>
                    </li>
                    <li>
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/tbogota/" class="colorCambioC">Temperatura en Bogotá D.C.</a> este indicador está disponible en el enlace:
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/tbogota/"
                        class="colorCambioC">http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/tbogota/</a>
                    </li>
                    </ul>

                </div>

            </div>  

            

            <div class="row">
                <hr class="lineaCambioC mt80" style="width: 100%;" />
            </div>

            <div class="logos colorCambioC bold140p">
                <div class="centrado colorCambioC">
                    <p>Documentos e investigaciones</p>
                    <img src="images/cambioClimatico/cambioDOCUMENTOS.jpg" width="85" height="63" alt="Cambio climático docs"
                    />
                </div>
                <div class="centrado colorCambioC">
                    <p>Mapas</p>
                    <img src="images/cambioClimatico/cambioMAPA.jpg" width="85" height="63" alt="Cambio climático mapa" />
                </div>
                <div class="centrado colorCambioC">
                    <p>Normatividad</p>
                    <img src="images/cambioClimatico/cambioNORMATIVIDAD.jpg" width="85" height="63" alt="Cambio climático normas"
                    />
                </div>
                <div class="centrado colorCambioC">
                    <p>Calidad del aire</p>
                    <img src="images/cambioClimatico/cambioClimaticoNUBE.png" width="85" height="63" alt="Cambio climático título"
                    />
                </div>
            </div>          
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
