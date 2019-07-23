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
                    <span class="breadcrumb_"> | Cambio climático |</span>
                    <span class="breadcrumb_ cambioC">Cambio climático</span>
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
                        <img src="{{asset("images/indicators/LogoCambioClimatico.png")}}" alt="símbolo sección agua" />
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

                    <h1 align="right" class="centrado colorCambioC mt20">&nbsp;</h1>
                    <h2 class="seccion fondoCambioC sinSaltoLinea">Cambio climático</h2>
                    <p align="justify">Según la Convención Marco de las Naciones Unidas (CMNUCC), el cambio climático se define como “
                    <em>un cambio de clima atribuido directa o indirectamente a la actividad humana que altera la composición de la atmósfera
                        mundial y que se suma a la variabilidad natural del clima observada durante períodos de tiempo comparable</em>”
                    y se distingue entre el ‘cambio climático’ atribuido a actividades humanas que alteran la composición atmosférica
                    y ‘variabilidad climática’ debido a causas naturales. En Bogotá, el cambio climático se ha evidenciado principalmente
                    como resultado de la urbanización acelerada y no planificada, el crecimiento poblacional, y las emisiones de la actividad
                    productiva, generando modificaciones en el sistema climático local y aumentando la frecuencia e intensidad de los
                    fenómenos hidrometeorológicos extremos.</p>
                    <a href="{{asset("cambio_climatico_ver_mas")}} " align="right">
                        <img src="images/cambioClimatico/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>    
                        {{-- Ver más --}}
                    </a>
                </div>
            </div>  

            <div class="row">
                <hr class="lineaCambioC mt80" style="width: 100%;" />
            </div>

            <div class="logos colorCambioC bold140p">
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Documentos e investigaciones</p>
                    <a href="CambioClimatico_Documentos.html">
                    <img src="images/cambioClimatico/cambioDOCUMENTOS.jpg" width="85" height="63" alt="Cambio climático docs" />
                    </a>
                </div>
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Mapas</p>
                    <a href="CambioClimatico_mapas.html">
                    <img src="images/cambioClimatico/cambioMAPA.jpg" width="85" height="63" alt="Cambio climático mapa" />
                    </a>
                </div>
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Normatividad</p>
                    <a href="CambioClimatico_normatividad.html">
                    <img src="images/cambioClimatico/cambioNORMATIVIDAD.jpg" width="85" height="63" alt="Cambio climático normas" />
                    </a>
                </div>
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Indicadores</p>
                    <p>
                    <a href="CambioClimatico_Indicadores.html">
                        <img src="images/cambioClimatico/cambioINDICADORES.jpg" width="85" height="63" alt="Cambio climático título" />
                    </a>
                    </p>
                    <p>&nbsp;</p>
                </div>
            </div>          
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
