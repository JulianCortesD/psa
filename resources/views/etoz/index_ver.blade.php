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
                    <div class="row mt-2 ocultar">
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
                    <img src="images/Eventos zoonoticos/Banner ETOZ del Home.jpg" width="100%" alt="Slider Alimentos" />
                </div>
            </div>

            <div class="contenidoSecAmb centradoDiv">

                <p>&nbsp;</p>
                <p align="justify">Prevenir y atender los posibles eventos transmisibles de origen zoonótico, relacionados con situaciones de vulnerabilidad,
                emergencia y desastre que eventualmente se presenten en la ciudad. </p>
                <p align="justify">Prevenir la transmisión de zoonosis mediante la generación de hábitos y competencias en las personas para una sana
                convivencia con animales. </p>
                <p align="justify">Identificar y cuantificar tendencias y patrones de eventos transmisibles de origen zoonótico que pueden representar
                riesgo para la salud pública y el bienestar animal en el Distrito Capital. </p>
                <p align="justify">Fortalecer los procesos de la autoridad sanitaria, ambiental y policivo para el control de los ecosistemas y su biodiversidad,
                incluyendo el tráfico y comercialización de fauna silvestre y regulación de la cría, comercialización y tenencia
                de fauna doméstica. </p>
                <p align="justify">Posicionar las temáticas de la línea de acción a nivel sectorial e intersectorial y comunitario, en los espacios de
                coordinación y participación propuestos en el Distrito Capital. </p>
                <p>
                <strong>Ejes Temáticos:</strong>
                <strong> </strong>
                </p>
                <ul>
                    <li class="colorETOZ">Gestión integral del riesgo en eventos transmisibles de origen zoonótico. </li>
                </ul>
                <ul>
                    <li class="colorETOZ">Promoción de la tenencia responsable de animales y el bienestar animal en el Distrito Capital. </li>
                </ul>
                <ul>
                    <li class="colorETOZ">Investigación y gestión del conocimiento sobre eventos que potencialmente pueden afectar la salud pública y la sanidad
                    animal en el Distrito Capital. </li>
                </ul>
                <ul>
                    <li class="colorETOZ">Vigilancia de la salud ambiental en relación con los eventos transmisibles de origen zoonótico. </li>
                </ul>
                <ul>
                    <li class="colorETOZ">Seguridad, vigilancia y convivencia ciudadana en relación con fauna doméstica y silvestre. </li>
                </ul>
                <ul>
                    <li class="colorETOZ">Fortalecimiento de la gestión de la salud ambiental en temas relacionados con eventos trasmisibles de origen zoonótico.
                    </li>
                </ul>
                <h1 align="right" class=" colorIndicadores">&nbsp;</h1>
                <h1 class="seccion sinSaltoLinea">&nbsp;</h1>
                <p class="verMas colorAgua">
                    <a href="{{asset("etoz")}}">Volver</a>
                </p>
            </div>

            <div class="row">
                <hr class="lineETOZ mt80" style="width: 100%;" />
            </div>

            <div class="logos colorETOZ bold140p">
                <div class="centrado">
                    <p class="colorETOZ">Documentos e investigaciones</p>
                    <img src="images/Eventos zoonoticos/DOCUMENTOS.png" width="85" height="63" alt="Aire docs" />
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Mapas</p>
                    <img src="images/Eventos zoonoticos/MAPA.png" width="85" height="63" alt="Aire mapa" />
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Normatividad</p>
                    <img src="images/Eventos zoonoticos/NORMATIVIDAD.png" width="85" height="63" alt="Aire normas" />
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Indicadores</p>
                    <img src="images/Eventos zoonoticos/INDICADORES.png" width="85" height="63" alt="Aire título" />                    </a>
                </div>
            </div>        
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
