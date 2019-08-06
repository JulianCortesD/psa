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
                    <span class="breadcrumb_"> Zoonosis y Vectores | <span class="breadcrumb_ colorETOZ">Más Información</span></span>


                    <div width="300px">
                        <img src="{{asset("images/Eventos zoonoticos/LOGO_ZOONOSIS.png")}}" width="100%" height="" alt="símbolo sección etoz" />
                    </div>

                </div>
                <div class="col-4">
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
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSdqCtqydhFbuFFOvxOpMP8v5f4KeVWcSPQVsP3SN0Vts2_mEg/viewform?usp=sf_link">
                <div height="355">
                    <img src="images/Eventos zoonoticos/Banner ETOZ del Home.png" width="100%" alt="Slider Cambio climático" />
                </div>
                </div>
                </a>
<p>&nbsp;</p>
                <h2 class="colorETOZ bold140p">Objetivo General<h2>
                 <p align="justify" class="colorIndicadores">
                Mejorar   la calidad de vida y salud de los habitantes del Distrito Capital, a través de   intervenciones integrales sobre los determinantes que generan eventos   transmisibles de origen zoonótico. </p>

               <h2 class="colorETOZ bold140p">Objetivos Específicos</h2>

                <p align="justify" class="colorIndicadores">
                  Prevenir y atender los posibles eventos transmisibles de origen zoonótico, relacionados con situaciones de vulnerabilidad, emergencia y desastre que eventualmente se presenten en la ciudad. </p>
                  <p align="justify" class="colorIndicadores">Prevenir la transmisión de zoonosis mediante la generación de hábitos y competencias en las personas para una sana
                    convivencia con animales. </p>
                  <p align="justify" class="colorIndicadores">Identificar y cuantificar tendencias y patrones de eventos transmisibles de origen zoonótico que pueden representar
                   riesgo para la salud pública y el bienestar animal en el Distrito Capital. </p>
                  <p align="justify" class="colorIndicadores">Fortalecer los procesos de la autoridad sanitaria, ambiental y policivo para el control de los ecosistemas y su biodiversidad, incluyendo el tráfico y comercialización de fauna silvestre y regulación de la cría, comercialización y tenencia de fauna doméstica. </p>
                  <p align="justify" class="colorIndicadores">Posicionar las temáticas de la línea de acción a nivel sectorial e intersectorial y comunitario, en los espacios de
                coordinación y participación propuestos en el Distrito Capital. </p>

                <p>
               <h2 class="colorETOZ bold140p">Ejes Temáticos</h2>
               <p align="justify" class="colorIndicadores">

                  <p align="justify" class="colorIndicadores">Gestión integral del riesgo en eventos transmisibles de origen zoonótico. </p>
                  <p align="justify" class="colorIndicadores">Promoción de la tenencia responsable de animales y el bienestar animal en el Distrito Capital. </p>
                  <p align="justify" class="colorIndicadores">Investigación y gestión del conocimiento sobre eventos que potencialmente pueden afectar la salud pública y la sanidad animal en el Distrito Capital. </p>
                  <p align="justify" class="colorIndicadores">Vigilancia de la salud ambiental en relación con los eventos transmisibles de origen zoonótico. </p>
                   <p align="justify" class="colorIndicadores">Seguridad, vigilancia y convivencia ciudadana en relación con fauna doméstica y silvestre. </p>
                   <p align="justify" class="colorIndicadores">Fortalecimiento de la gestión de la salud ambiental en temas relacionados con eventos trasmisibles de origen zoonótico. </p>

            </p>
              </div>
              <div align="right"><a href="{{asset("etoz")}}">Volver</a>
              </div>


             <div class="row">
                <hr class="lineaETOZ mt80" style="width: 100%;" />
            </div>

            <div class="logos colorETOZ bold140p">
                <div class="centrado">
                    <p class="colorETOZ">Documentos e investigaciones</p>
                    <a href="{{asset("etoz_documentos")}}">
                        <img src="images/Eventos zoonoticos/DOCUMENTOS.png" width="85" height="63" alt="Aire docs" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Mapas</p>
                   <a href="{{asset("etoz_mapas")}}">
                    <img src="images/Eventos zoonoticos/MAPA.png" width="85" height="63" alt="Aire mapa" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Normatividad</p>
                    <a href="{{asset("etoz_normatividad")}}">
                        <img src="images/Eventos zoonoticos/NORMATIVIDAD.png" width="85" height="63" alt="Aire normas" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Indicadores</p>
                    <a href="{{asset("etoz_indicadores")}}">
                        <img src="images/Eventos zoonoticos/INDICADORES.png" width="85" height="63" alt="Aire título" />
                    </a>
                </div>
            </div>

        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
