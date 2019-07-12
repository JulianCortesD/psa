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
                    <span class="breadcrumb_"> | Aire, ruido y radiación electromagnética | Calidad del aire -La contaminación del aire en Bogotá y los posibles
                        efectos en salud</span>
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
                        <img src="images/aire/LogoAireRuidoREM.png" width="50%" alt="símbolo sección aire" />
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

                    <h3 class="colorAire">La contaminación del aire en Bogotá y los posibles efectos en salud</h3>
                    <span class="cursiva">Continúa...</span>
                    <p>Actualmente el crecimiento de las dinámicas sociales y económicas de la ciudad pueden contribuir al incremento
                        de las concentraciones de material particulado en el aire superando los estándares permisibles por la Organización
                        Mundial de la Salud (OMS) y la resolución 2254 de 2017 del Ministerio de Ambiente de Colombia. Por ende,
                        la importancia de la vigilancia epidemiológica, ambiental y sanitaria reside en el análisis de los efectos
                        negativos de la contaminación del aire en la salud de la población y en la elaboración y divulgación de recomendaciones
                        y medidas voluntarias para que la ciudadanía ejerza el autocuidado y contribuya a mejorar la calidad del
                        aire referida en el Índice Bogotano de Calidad de Aire (IBOCA).</p>

                    <h3 class="centrado colorAire">Vigilancia Epidemiológica</h3>
                    <p>Contempla el análisis de los posibles factores asociados a la aparición de sintomatología y enfermedades en la
                        población causadas por la exposición a contaminación del aire. La vigilancia epidemiológica se realiza de
                        dos maneras:</p>
                    <p>
                        <strong>Vigilancia Pasiva:</strong> Seguimiento a los casos atendidos de enfermedad respiratoria aguda en menores
                        de cinco años en el servicio de Sala ERA públicos y privados, monitoreo al evento 995 (IRA Colectivo) de
                        todos los grupos de edad del Distrito notificados en SIVIGILA y el análisis de la frecuencia de casos de
                        enfermedad respiratoria en niños menores de 14 años y cardiovascular en personas mayores de 60 años atendidos
                        en los servicios de urgencias y hospitalización públicos del Distrito. Asimismo, se efectúa el análisis de
                        mortalidad posiblemente relacionada con la exposición a contaminación del aire y el comportamiento meteorológico
                        en la ciudad.</p>
                    <p>
                        <strong> Vigilancia Activa:</strong> Se basa en la captación de información de menores de 5 años, niños de 5 a 14
                        años y personas mayores de 60 años; a través de la aplicación de encuestas con el propósito de conocer la
                        sintomatología o enfermedades que puedan estar asociadas con la exposición a contaminación del aire.</p>

                    <h3 class="centrado colorAire mt40">Vigilancia Ambiental</h3>
                    <p>Desde la Secretaria Distrital de Salud se realiza el seguimiento y análisis a los reportes del monitoreo de material
                        particulado (PM10 y PM2.5), gases contaminantes (SO2, NO2, CO, O3) y los parámetros meteorológicos de lluvia,
                        vientos, temperatura, radiación solar y humedad relativa generados por la red de monitoreo de calidad del
                        aire de Bogotá (RMCAB), está incluye 13 estaciones fijas y una estación móvil, ubicadas en diferentes sitios
                        de la ciudad dotadas con equipos de última tecnología. Así mismo, se realiza el monitoreo de los parámetros
                        que indican contaminación del aire en el interior de las viviendas. </p>

                    <h3 class="centrado colorAire mt40">Vigilancia Sanitaria</h3>
                    <p>Contempla la atención y respuesta a las quejas y peticiones interpuestas por los ciudadanos, relacionadas con
                        la contaminación del aire y olores ofensivos que pueden generar afectaciones en la salud de las personas.</p>

                </div>
            </div>

            <div class="row">
                <hr class="lineaAire mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAire bold140p">
            <div class="centrado colorAire">
                <p>Documentos e investigaciones</p>
                <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Agua docs"
                />
            </div>
            <div class="centrado colorAire">
                <p>Mapas</p>
                <img src="images/aire/aireMAPA.png" width="85" height="63" alt="Agua mapa" />
            </div>
            <div class="centrado colorAire">
                <p>Normatividad</p>
                <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Agua normas" />
            </div>
            <div class="centrado colorAire">
                <p>Calidad del aire</p>
                <img src="images/aire/aireNUBE.png" width="85" height="63" alt="Agua título" />
            </div>
            </div>
        </div>  
        </div>        
    </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
