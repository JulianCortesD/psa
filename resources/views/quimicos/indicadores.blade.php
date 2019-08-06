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
                <span class="breadcrumb_"> | Productos químicos, industria y belleza| </span>
                <span class="colorSeguridadquimica">Indicadores</span>
                <div width="300px">
                    <img src="{{asset("images/quimica/LogoSeguridadQuimica.png")}}" width="100%" height=""  alt="" />
                </div>
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
                            <img  src="{{asset("images/news/climaactual.svg")}}" alt="clima actual" class="img-clima-actual">
                        </a>
                    </div>
                </div>
            </div>
    </div>

        <div class="row">
                <a href="https://twitter.com/AmbienteBogota"  class="redes pl-1 pt-2" style="margin-top: 90px; margin-left:0px;">
                    <img  src="{{asset("images/redessociales/Twitter.svg")}}" alt="" style="height: 80%">
                </a>
                <a href="https://www.facebook.com/AmbienteBogota/"class="redes pl-2 pt-2" style="margin-top: 150px; margin-left:0px;">
                    <img  src="{{asset("images/redessociales/IconoFacebook.svg")}}" alt="" style="height: 95%">
                </a>
                <a href="https://www.youtube.com/channel/UCjboPXY4C2F3rnqP7k4_9cQ"class="redes pl-1 pt-2" style="margin-top: 210px; margin-left:0px;">
                    <img  src="{{asset("images/redessociales/IconoYouTube.svg")}}" alt="" style="height: 70%">
                </a>
            <a href="http://autorregulacion.saludcapital.gov.co/salonesbelleza">
            <div height="355">
                <img src="images/quimica/Banner peluqueria.png" alt="Slider aire" width="100%"/>
            </div>
            </a>
        </div>
<br></br>
            <div class="row" style="text-align:justify;">

                    <h2 class="colorSeguridadquimica bold140p">
                    <img src="images/quimica/espacioINDICADORES.jpg" width="85" height="63" align="absbottom" />Indicadores</h2>

                          <p span class="colorIndicadores">Refleja la proporción  de las intervenciones realizadas en los  procesos de vigilancia y control, en las actividades
                    de la industria y del sector belleza, así como el acompañamiento a los establecimientos en su gestión de la salud ambiental.</p>



                    <p span class="colorIndicadores">Tasa incidencia de intoxicación con sustancias químicas en Bogotá D.C</span>
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/intoxicacion/" class="verMas colorSeguridadquimica">
                            <img src="images/quimica/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                            {{-- Ver más --}}
                        </a>


                         <p span class="colorIndicadores">
                            <span >Cantidad de sustancias químicas peligrosas por habitante en Bogotá D.C</span>.
                            <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/distribucionsustanciasquimicaspeligrosaspercapita/" class="verMas colorSeguridadquimica">

                                <img src="images/quimica/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                            {{-- Ver más --}}
                        </a>

                    <p>&nbsp;</p>

                </div>
            </div>

            <div class="row">
                <hr class="lineaQuimica mt80" style="width: 100%;" />
            </div>

            <div class="logos colorSeguridadquimica bold140p">
                <div class="centrado">
                    <p class="colorSeguridadquimica">Documentos e investigaciones</p>
                    <a href="{{asset("quimicos_documentos")}}">
                    <img src="images/quimica/espacioDOCUMENTOS.jpg" width="85" height="63" alt="Aire docs" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Mapas</p>
                    <img src="images/quimica/espacioMAPA.jpg" width="85" height="63" alt="Aire mapa" />
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Normatividad</p>
                    <a href="{{asset("quimicos_normatividad")}}">
                        <img src="images/quimica/espacioNORMATIVIDAD.jpg" width="85" height="63" alt="Aire normas" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Indicadores</p>
                    <a href="{{asset("quimicos_indicadores")}}">
                        <img src="images/quimica/espacioINDICADORES.jpg" width="85" height="63" alt="Aire título" />
                    </a>
                </div>
            </div>

        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
