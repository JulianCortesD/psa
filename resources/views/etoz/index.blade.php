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
                    <span class="breadcrumb_"> Zoonosis y Vectores | <span class="breadcrumb_ colorETOZ">Eventos Transmisibles de Origen Zoonótico</span></span>
                    <div width="300px">
                        <img src="{{asset("images/Eventos zoonoticos/LOGO_ZOONOSIS.png")}}" width="100%" alt="" />
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
                </a>
            </div>
            <div class="contenidoSecAmb centradoDiv">
                <h1 align="right" class="centrado colorETOZ mt20">&nbsp;</h1>
                <h2 class="seccion fondoETOZ sinSaltoLinea">Eventos transmisibles de origen zoonótico</h2>

                <p align="justify">
                    Esta línea de intervención procura el mejoramiento de la calidad de vida y salud de la población bogotana, mediante
                    la implementación de acciones integrales de vigilancia sanitaria y epidemiológica, promoción de la salud, prevención
                    de la enfermedad y control de los eventos transmisibles de origen zoonótico, que puedan representar riesgo para la
                    salud animal y la salud humana en el Distrito Capital.
                </p>
                <p align="justify">&nbsp;</p>
                <div align="right"><a href="{{asset("etoz_ver_mas")}} " align="right">
                  <img src="images/Eventos zoonoticos/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                  {{-- Ver más --}}
                </a></div>


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
