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
                    <span class="breadcrumb_"> | Política Distrital de Salud Ambiental |</span>
                    <div width="300px">
                        <img src="{{asset("images/menu/Logo Politica.png")}}" width="100%" height="" alt="símbolo sección agua" />
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
                        <div class="col-12 date-time" id="reloj">
                            Fecha y hora
                        </div>
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
              <a href="https://twitter.com/AmbienteBogota" class="redes pl-1 pt-2" style="margin-top: 90px; margin-left:0px;">
                  <img  src="{{asset("images/redessociales/Twitter.svg")}}" alt="" style="height: 80%">
              </a>
              <a href="https://www.facebook.com/AmbienteBogota/" class="redes pl-2 pt-2" style="margin-top: 150px; margin-left:0px;">
                  <img  src="{{asset("images/redessociales/IconoFacebook.svg")}}" alt="" style="height: 95%">
              </a>
              <a href="https://www.youtube.com/channel/UCjboPXY4C2F3rnqP7k4_9cQ" class="redes pl-1 pt-2" style="margin-top: 210px; margin-left:0px;">
                  <img  src="{{asset("images/redessociales/IconoYouTube.svg")}}" alt="" style="height: 70%">
              </a>

                <div height="355">
                      <img src="images/menu/imagen politica.jpg" width="1070px" height="270"alt="Slider aire" />
                </div>

            </div>
  <p>&nbsp;</p>

              <div class="col-10 offset-1">
             <div class="row">
                <h1 class="seccion fondoAire sinSaltoLinea">¿Quiénes Somos?</h1>
               </div>
               </div>
                  <div class="col-10 offset-1">

                   <div class="row mt 40">
                <p style="text-align: justify;"><br>El Portal de Salud Ambiental de Bogotá D.C., es un centro de refrencia a nivel distrital para el abordaje interseciona y en análisis integral de los determinantes socio ambientales del proceso salud enfermedad en la ciudad. Tiene como propósito integrar, promover y apoyar esfuerzos distritales de carácter técnico, político y social tendientes a la conservación del ambiente como estrategia de mejoramiento de las condiciones de salud y la calidad de vida de los bogotanos.</br>
                </p>
                </div>
                </div>
<p>&nbsp;</p>
                <div class="centrado">
                <img  src="{{asset("images/menu/Diagramas de politica distrital.png")}}" alt="" style="height: 70%">
                </div>
<p>&nbsp;</p>
            <div align="left"><img src="{{asset("images/menu/conozcala.png")}}" alt="calidad aire">
            </div>
            <div class="col-10 offset-1">
             <div class="row">
            <font color="#c7d142"; size=5Política> <b>Política Distrital de Salud Ambiental de Bogotá</b></font>
             </div>
              </div>
            <div class="col-10 offset-1">
             <div class="row">
              <p style="text-align: justify;"><br>La Política Distrital de Salud Ambiental para Bogotá 2011- 2023 adoptada mediante el Decreto 596 de 2011, permite orientar la gestión distrital para el mejoramiento de la Salud Ambiental en la ciudad, mediante fortalecimiento institucional y territorial, trabajo articulado de la administración y construcción de espacios de coordinación participativa por medio de líneas de intervención, contribuyendo a la construcción de una ciudad habitable, sostenible, integral, incluyente, participativa y saludable, aportando a una buena calidad de vida y salud para toda su población.</br>
              </p>
               </div>
                </div>

                  <img src="{{asset("images/menu/objetivos.png")}}" alt="calidad aire">
<p>&nbsp;</p>
                  <div class="col-10 offset-1">
                    <div class="row">
                   <font color="#c7d142"; size=5Política> <b>Objetivo General</b></font>
                   </div>
                    <div class="row">
                    <p align="justify"><br>Incidir positivamente sobre las condiciones sanitarias y socio-ambientales que determinan la calidad de vida y salud de los y las
                    habitantes del Distrito Capital.</br>
                    </p>
                    </div>
                    </div>
                     <div class="col-10 offset-1">
                      <div class="row">
                    <font color="#c7d142"; size=5Política><b> Objetivo Especificos</b></font>
                     </div>
                    <div class="row">
                  <p style="text-align: justify;"><br> Desarrollar un modelo de planificación, gestión, seguimiento y evaluación distrital y territorial que permita fortalecer financiera, técnica y administrativamente los procesos de salud ambiental.</br>
                  <br> Desarrollar procesos que permitan la generación, adquisición, transferencia y aplicación del conocimiento en temas de salud ambiental en el Distrito Capital.</br>
                  <br> Promover la reducción, la previsión y el control permanente del riesgo en las diferentes líneas de intervención de la Política Distrital de Salud Ambiental, en consonancia con el Plan Distrital de Prevención y Atención de Emergencias de Bogotá D.C.</br>
                  <br> Fortalecer los procesos de regulación, autorregulación, vigilancia, seguimiento y evaluación de las condiciones sanitarias y ambientales, como factores de protección o deterioro de la salud de las personas.</br>
                  </p>
                  <p align="justify">&nbsp;</p>
                  </div>
                    </div>
                  <div>
                      <img src="{{asset("images/menu/principios.png")}}">
                    </div>
<p>&nbsp;</p>
                            <div class="col-1 offset-1 ">
                             <div>
                                Autonomía <br>
                                Incidencia <br>
                                Sostenibilidad<br>
                                Autonomía <br>
                                Incidencia <br>
                                Sostenibilidad
                            </div>
                        </div>
                        <div class="col-5 offset-1 ">
                            <div>
                                Accesibilidad <br>
                                Participación <br>
                                Objetividad <br>
                                Transectorialidad <br>
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
                        <img src="images/aire/aireINDICADORES.png" width="85" height="63" alt="indicadores aire">
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
