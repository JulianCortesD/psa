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
                    <span class="breadcrumb_"> | Alimentos y bebidas</span>
                    <span class="breadcrumb_ alimentos"> Más información </span>
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
                        <img src="{{asset("images/indicators/LogoAlimentosSanos.png")}}" alt="símbolo sección agua" />
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
                    <img src="images/alimentos/BannerCarnesParteInterna.png" width="100%" alt="Slider Alimentos" />
                </div>
            </div>

            <div class="row" style="text-align:justify;">

                <div class="contenidoSecAmb centradoDiv">

                    <h2 align="justify">&nbsp;</h2>                  
                    <h2 align="justify"class="colorAlimentos"><strong>Alimentos Sanos y Seguros</strong></h2>
                    <p align="justify"><br />
                  La  Seguridad Alimentaria y Nutricional se define como la disponibilidad suficiente  y estable de alimentos, el acceso y el consumo oportuno y permanente de los  mismos en cantidad, calidad e inocuidad por parte de todas las personas, bajo  condiciones que permitan su adecuada utilización biológica, para llevar una  vida saludable y activa (Conpes 113 de 2008). La presente línea de  intervención, verifica el cumplimiento de los requisitos higiénico-sanitarios,  locativos, de funcionamiento y manipulación exigidos en las normas sanitarias  vigentes a través de las funciones de inspección, vigilancia y control en los  establecimientos que preparan, almacenan, distribuyen y comercializan alimentos  y bebidas (alcohólicas y no alcohólicas) para consumo humano.</p>
                    <h2 class="colorAlimentos"><span class="texto"><span class="titulos1"><span class="colorAlimentos">Objetivo
                      <span class="titulo">
                      <span class="titulo"> General</span>
                      </span>
                    </span>
                    </span>
                    </span>
                    </h2>
                  <p align="justify" class="colornegro">
                    <span class="texto">Vigilar y promover la calidad e inocuidad de los alimentos y bebidas alcohólicas en establecimientos que los preparan,
                        almacenan, distribuyen, transportan y comercializan en el Distrito Capital, mediante la Vigilancia Sanitaria, a
                        través de acciones de información, educación y comunicación que permitan disminuir el consumo de alimentos y bebidas
                        alcohólicas adulteradas, alteradas, falsificadas o contaminadas y reducir la incidencia de Enfermedades Transmitidas
                        por Alimentos de acuerdo con el análisis de los riesgos asociados al consumo y contribuir la calidad de vida de
                        la población en el Distrito Capital.</span>
                    </p>

                    <h2 align="left" class="colorAlimentos">Objetivos Específicos</h2>
                    <ul class="titulos1">
                  
                        <li align="justify" class="colorIndicadores">Verificar las condiciones higiénico-sanitarias de los establecimientos donde se preparan, almacenan, transportan
                        y expenden alimentos y bebidas, así como en las fábricas de bebidas alcohólicas.</li>
                   
                    
                        <li align="justify" class="colorIndicadores">Capacitar a manipuladores de alimentos y población en general en manejo higiénico de alimentos basado en las Buenas
                        Prácticas de Manufactura.</li>
                    
                        <li align="justify" class="colorIndicadores">Desarrollar una estrategia de comunicación dirigida a la comunidad en cuanto a la importancia que tiene la notificación
                        de situaciones que evidencien incumplimiento en las normas sanitarias por parte de los establecimientos. De igual
                        forma la notificación de eventos de interés en la salud pública asociados al consumo de alimentos.</li>
                   
                        <li align="justify" class="colorIndicadores">Vigilar factores de riesgo que puedan originar la aparición de brotes de Enfermedades Transmitidas por Alimentos-ETA
                        y tomar decisiones que contribuyan a su disminución y control.</li>
                    
                        <li align="justify" class="colorIndicadores">Verificar la calidad e inocuidad de los alimentos y bebidas alcohólicas que se preparan, almacenan, transportan
                        y comercializan en el Distrito Capital mediante actividades de inspección, vigilancia y control.</li>
                   
                  </ul>

                    <h2 class="colorAlimentos">Ejes Temáticos</h2>
                    <ul>
                      <li class="colorIndicadores">Provisión de alimentos sanos y seguros.</li>
                        <li class="colorIndicadores">Consumo de alimentos inocuos y nutritivos.</li>
                        <li class="colorIndicadores">Prevención y atención de eventos de interés en salud pública relacionados con la inocuidad de los alimentos.</li>
                        <li class="colorIndicadores">Manejo de alimentos en situaciones de emergencia y vulnerabilidad en la Ciudad.</li>
                        <li class="colorIndicadores">Investigación y gestión del conocimiento en temas de calidad e inocuidad de alimentos.</li>
                        <li class="colorIndicadores">Vigilancia de la salud ambiental en materia de alimentos.</li>
                        <li class="colorIndicadores">Gestión de la salud ambiental para mejorar la calidad e inocuidad de alimentos en Bogotá D.C.</li>
                  </ul>

                    <p class="verMas colorAlimentos">
                        <a href="{{asset("alimentos_sanos")}}">Volver</a>
                    </p>
                    <h2 class="colorAlimentos mt40">&nbsp;</h2>

              </div>

            </div>

            <div class="row">
                <hr class="lineaAlimentos mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAlimentos bold140p">
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Documentos e investigaciones</p>
                    <img src="images/alimentos/IMG_ALIMENTOS_DOCUMENTOS.jpg" width="85" height="63"
                        alt="Agua docs" />
                </div>
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Mapas</p>
                    <img src="images/alimentos/IMG_ALIMENTOS_ MAPA.jpg" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Normatividad</p>
                    <a href="Alimentos_normatividad.html">
                        <img src="images/alimentos/alimentosNORMATIVIDAD.png" width="85" height="63" alt="Agua normas" />
                    </a>
                </div>
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Indicadores</p>
                    <p class="colorAlimentos">
                        <a href="Alimentos_indicadores.html">
                            <img src="images/alimentos/IMG_ALIMENTOS_INDICADOR.jpg" width="85" height="63" />
                        </a>
                    </p>
                </div>
            </div>

        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
