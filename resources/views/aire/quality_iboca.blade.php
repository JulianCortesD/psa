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
                    <br clear="left"><img src="images/aire/iconoHome.png" width="42" height="38" alt="Ir al home" />
                  <span class="breadcrumb_"> | Aire, ruido y radiación electromagnética |</span>
                    <span class="breadcrumb_ aire">Mas informacion</span>
                    <div width="300px">
                        <img src="{{asset("images/aire/LogoAireRuidoREM.png" )}}" width="100%" alt="" />
                    </div>

                </div>
                <div class="col-4">
                    <div class="row ">
                        <div class="col-12 date-time-title">
                        <span>Bogotá hoy</span>
                        </div>
                    </div>
                    <div class="row">
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
                                <img src="{{asset("images/news/climaactual.svg")}}" alt="clima actual" class="img-clima-actual">
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
                   <a href="https://drive.google.com/open?id=1pPWUpFKRV1rh4eoH413mjKgoRphWf9eu">
                            <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner restaurante 1a del Home.png")}}" alt="Sixth slide">
                        </a>
                </div>
            </div>

            <div class="row">
                <div class="contenidoSecAmb centradoDiv">
                        <!-- Texto inicial con fonto azul-->
                    <br></br>
                        <div></div>
                         <h3 class="colorAire mt 40"><b>Vigilancia epidemiológica</b></h3>

                    <p align="justify">Contempla el análisis de los posibles factores asociados a la aparición de sintomatología y enfermedades en la población
                      causadas por la exposición a contaminación del aire. La vigilancia epidemiológica se realiza de dos maneras:</p>
                    <p align="justify">
                      <strong>Vigilancia pasiva:</strong> Seguimiento a los casos atendidos de enfermedad respiratoria aguda en menores de cinco
                      años en el servicio de Sala ERA públicos y privados, monitoreo al evento 995 (IRA Colectivo) de todos los grupos
                      de edad del Distrito notificados en SIVIGILA y el análisis de la frecuencia de casos de enfermedad respiratoria en
                      niños menores de 14 años y cardiovascular en personas mayores de 60 años atendidos en los servicios de urgencias
                      y hospitalización públicos del Distrito. Asimismo, se efectúa el análisis de mortalidad posiblemente relacionada
                      con la exposición a contaminación del aire y el comportamiento meteorológico en la ciudad.</p>
                    <p align="justify">
                      <strong> Vigilancia activa:</strong> Se basa en la captación de información de menores de 5 años, niños de 5 a 14 años y personas
                      mayores de 60 años; a través de la aplicación de encuestas con el propósito de conocer la sintomatología o enfermedades
                      que puedan estar asociadas con la exposición a contaminación del aire.</p>

                    <h3 class="colorAire mt 40"><b>Vigilancia ambiental</b></h3>
                    <p align="justify">Desde la Secretaria Distrital de Salud se realiza el seguimiento y análisis a los reportes del monitoreo de material
                      particulado (PM10 y PM2.5), gases contaminantes (SO2, NO2, CO, O3) y los parámetros meteorológicos de lluvia, vientos,
                      temperatura, radiación solar y humedad relativa generados por la red de monitoreo de calidad del aire de Bogotá (RMCAB),
                      está incluye 13 estaciones fijas y una estación móvil, ubicadas en diferentes sitios de la ciudad dotadas con equipos
                      de última tecnología. Así mismo, se realiza el monitoreo de los parámetros que indican contaminación del aire en
                      el interior de las viviendas. </p>

                    <h3 class="colorAire mt 40"><b>Vigilancia sanitaria</b></h3>
                    <p>Contempla la atención y respuesta a las quejas y peticiones interpuestas por los ciudadanos, relacionadas con la contaminación
                      del aire y olores ofensivos que pueden generar afectaciones en la salud de las personas.</p>
                        <h3 class="colorAire mt 40"><b>Índice Bogotano del Calidad de Aire (IBOCA)</b></h3>
                        <p align="justify">El índice bogotano de calidad del aire, fue adoptado de manera conjunta entre la Secretaria Distrital de Ambiente y
                            la Secretaria Distrital de Salud mediante la Resolución 2410 de 2015, en la cual se define al IBOCA como un indicador
                            multipropósito adimensional, calculado a partir de las concentraciones de contaminantes atmosféricos en un momento
                            y lugar de la ciudad, que comunica simultáneamente y de forma sencilla, oportuna y clara el riesgo ambiental por
                            contaminación atmosférica, el estado de la calidad del aire de Bogotá, las afectaciones y recomendaciones en salud
                            y las medidas voluntarias para que la ciudadanía contribuya a mantener o mejorar la calidad del aire de la ciudad.
                            También funciona como un indicador de riesgo ambiental por contaminación atmosférica en el marco del Sistema Distrital
                            de Alertas del Sistema Distrital de Gestión del Riesgo y Cambio Climático - SATAB Aire. </p>

                        <h3 class="colorAire mt 40"><b>Pronóstico de calidad del aire</b></h3>
                        <p align="justify">A través del Sistema Integrado de Modelación de Calidad de Aire de Bogotá (SIMCAB) la Secretaría Distrital de Ambiente
                            puede estimar el destino y distribución de la concentración de los contaminantes atmosféricos inventariados en la
                            ciudad, complementando la tarea de monitoreo desarrollada por la Red de Monitoreo de Calidad del Aire de Bogotá (RMCAB).
                            Esta herramienta permite estimar el estado de la calidad de aire para las siguientes 48 horas, teniendo en cuenta
                            el pronóstico de variables meteorológicas y comportamientos típicos de emisiones en la ciudad para los días pronosticados.
                            Pronóstico IBOCA.
                           <a href="http://www.ambientebogota.gov.co/calidad-del-aire">
                           Indice Bogotano del Calidad de Aire:</a> Aquí encontrara la información en tiempo real referente al índice bogotano de calidad de aire, modelación de calidad del aire y datos de inmisión (contaminantes criterio). </P>
                        <p class="verMas colorAgua">
                            <a href="{{asset("aire_calidad")}}">Volver</a>
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
                    <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Agua docs"/>
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Mapas</p>
                    <a href="{{asset("aire_mapas")}}">
                    <img src="images/aire/aireMAPA.png" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Normatividad</p>
                    <a href="{{asset("aire_normatividad")}}">
                    <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Agua normas" />
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Indicadores</p>
                    <a href="{{asset("aire_indicadores")}}">
                    <img src="images/aire/aireINDICADORES.png" width="85" height="63" alt="Agua título" />
                </div>
            </div>
        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
