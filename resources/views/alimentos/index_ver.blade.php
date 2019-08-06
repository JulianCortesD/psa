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
                    <span class="breadcrumb_"> |Alimentos y bebidas | <span class="breadcrumb_ alimentos">Mas información</span></span>
                    <div width="300px">
                        <img src="{{asset("images/indicators/LogoAlimentosSanos.png")}}" width="100%" alt="" />
                    </div>

                </div>
                <div class="col-4">
                    <div class="row ">
                        <div class="col-12 date-time-title">
                        <span>Bogotá hoy</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 date-time" >
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
</div>
            <div class="row">
            <div>
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
                    <a href="http://autorregulacion.saludcapital.gov.co/carnicerias">
                    <img src="images/alimentos/BannerCarnes.png" width="100%" height="" alt="Slider Alimentos" /></a>
                </div>
            </div>
 </div>
            <div class="row" style="text-align:justify;">

                <div class="contenidoSecAmb centradoDiv">

                     <br></br>
                    <h3 class="colorAlimentos mt 40">Alimentos sanos y seguros</h3>

                    <p align="justify">
                  La  Seguridad Alimentaria y Nutricional se define como la disponibilidad suficiente  y estable de alimentos, el acceso y el consumo oportuno y permanente de los  mismos en cantidad, calidad e inocuidad por parte de todas las personas, bajo  condiciones que permitan su adecuada utilización biológica, para llevar una  vida saludable y activa (Conpes 113 de 2008). La presente línea de  intervención, verifica el cumplimiento de los requisitos higiénico-sanitarios,  locativos, de funcionamiento y manipulación exigidos en las normas sanitarias  vigentes a través de las funciones de inspección, vigilancia y control en los  establecimientos que preparan, almacenan, distribuyen y comercializan alimentos  y bebidas (alcohólicas y no alcohólicas) para consumo humano.</p>

                    <h3 class="colorAlimentos mt 40">Objetivo general</h3>

                  <p align="justify" class="colorIndicadores">
                        Vigilar y promover la calidad e inocuidad de los alimentos y bebidas alcohólicas en establecimientos que los preparan,
                        almacenan, distribuyen, transportan y comercializan en el Distrito Capital, mediante la Vigilancia Sanitaria, a
                        través de acciones de información, educación y comunicación que permitan disminuir el consumo de alimentos y bebidas
                        alcohólicas adulteradas, alteradas, falsificadas o contaminadas y reducir la incidencia de Enfermedades Transmitidas
                        por Alimentos de acuerdo con el análisis de los riesgos asociados al consumo y contribuir la calidad de vida de
                        la población en el Distrito Capital.</span>
                    </p>
                    <h3 class="colorAlimentos mt 40">Objetivos específicos</h3>
                        <p align="justify" class="colorIndicadores">Verificar las condiciones higiénico-sanitarias de los establecimientos donde se preparan, almacenan, transportan
                        y expenden alimentos y bebidas, así como en las fábricas de bebidas alcohólicas.</p>


                        <p align="justify" class="colorIndicadores">Capacitar a manipuladores de alimentos y población en general en manejo higiénico de alimentos basado en las Buenas
                        Prácticas de Manufactura.</p>

                        <p align="justify" class="colorIndicadores">Desarrollar una estrategia de comunicación dirigida a la comunidad en cuanto a la importancia que tiene la notificación
                        de situaciones que evidencien incumplimiento en las normas sanitarias por parte de los establecimientos. De igual
                        forma la notificación de eventos de interés en la salud pública asociados al consumo de alimentos.</p>

                        <p align="justify" class="colorIndicadores">Vigilar factores de riesgo que puedan originar la aparición de brotes de Enfermedades Transmitidas por Alimentos-ETA
                        y tomar decisiones que contribuyan a su disminución y control.</p>

                        <p align="justify" class="colorIndicadores">Verificar la calidad e inocuidad de los alimentos y bebidas alcohólicas que se preparan, almacenan, transportan
                        y comercializan en el Distrito Capital mediante actividades de inspección, vigilancia y control.</p>


                     <h3 class="colorAlimentos mt 40">Ejes temáticos</h3>
                    
                      <p class="colorIndicadores">Provisión de alimentos sanos y seguros.</p>
                        <p class="colorIndicadores">Consumo de alimentos inocuos y nutritivos.</p>
                        <p class="colorIndicadores">Prevención y atención de eventos de interés en salud pública relacionados con la inocuidad de los alimentos.</p>
                        <p class="colorIndicadores">Manejo de alimentos en situaciones de emergencia y vulnerabilidad en la Ciudad.</p>
                        <p class="colorIndicadores">Investigación y gestión del conocimiento en temas de calidad e inocuidad de alimentos.</p>
                        <p class="colorIndicadores">Vigilancia de la salud ambiental en materia de alimentos.</p>
                        <p class="colorIndicadores">Gestión de la salud ambiental para mejorar la calidad e inocuidad de alimentos en Bogotá D.C.</p>


                    <p class="verMas colorAgua">
                        <a href="{{asset("alimentos_sanos")}}">Volver</a>
                    </p>

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
                    <a href="{{asset("alimentos_sanos_normatividad")}}">

                        <img src="images/alimentos/alimentosNORMATIVIDAD.png" width="85" height="63" alt="Agua normas" />
                    </a>
                </div>
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Indicadores</p>

                <a href="{{asset("alimentos_sanos_indicadores")}}">
                    <p class="colorAlimentos">
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
