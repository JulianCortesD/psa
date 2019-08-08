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
                <span class="breadcrumb_"> | Agua y Saneamiento| </span>
                <span class="breadcrumb_ agua">Indicadores</span>
                <div width="300px">
                    <img src="{{asset("images/indicators/LogoAguaSaneamiento.png")}}" width="100%" height=""  alt="" />
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

            <a href="https://drive.google.com/file/d/1wIbvN4xKkDNTMttbx_ylvJMPQs5xbZZr/view">
            <div height="355">
                <img src="images/agua/BannerAgua.png" alt="" width="100%"/>
                </div>
                 </a>
                <div class="contenidoSecAmb centradoDiv">
                    <div>
                     <br></br>
                      <h2>
                        <img src="images/agua/IMG_AGUA_TITULO.jpg" width="85" height="63" align="absbottom" />
                        <span class="colorAgua mt 40"><b>Indicadores</b></span>
                      </h2>
                    </div>
                    <p align="justify"></p>
                    <p align="justify" style="font-size: 16px;">Indica la proporción  de  intervenciones  relacionadas con la inspección, vigilancia y control de las condiciones higiénico sanitarias de los establecimientos y la frecuencia de eventos de interés en salud pública.</p>
                    <p align="justify">&nbsp;</p>




                      <div align="justify">
                        <span class="colorIndicadores">Índice de riesgo para la calidad del agua potable (IRCA) otros sistemas de abastecimiento en Bogotá D.C</span>.
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/irca-otros/">
                            <img src="images/agua/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                           {{--  Ver más --}}
                        </a>
                      </div>



                      <div align="justify">
                        <span class="colorIndicadores">Índice de Riesgo para la Calidad del Agua Potable de la Empresa de Acueducto y Alcantarillado de Bogotá D.C</span>.
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/irca-eaab/">
                            <img src="images/agua/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                           {{--  Ver más --}}
                        </a>
                      </div>


                       <div align="justify">
                        <span class="colorIndicadores">Conceptos sanitarios emitidos y medidas de seguridad aplicadas en establecimientos intervenidos en Bogotá D.C</span>.
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/conceptos-sanitarios-establecimientos/">
                            <img src="images/agua/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                           {{--  Ver más --}}
                        </a>
                      </div>



                </div>

            </div>

          <div class="row">
                <hr class="lineaAgua mt80" style="width: 100%;" />
            </div>

           <!--  <div class="row"> -->
             <div class="logos coloragua bold140p">
                <div class="centrado colorAgua">
                    <p class="colorAgua">Documentos e investigaciones</p>
                    <a href="{{asset("agua_saneamiento_documentos")}}">
                    <img src="images/agua/aguaDOCUMENTOS.png" width="85" height="63" alt="Agua docs"/>
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Mapas</p>
                    <a href="{{asset("agua_saneamiento_mapas")}}">
                    <img src="images/agua/IMG_AGUA_MAPA.jpg" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Normatividad</p>
                    <a href="{{asset("agua_saneamiento_normatividad")}}">
                    <img src="images/agua/IMG_AGUA_NORMATIVIDAD.png" width="85" height="63" alt="Agua título" />
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Indicadores</p>
                    <a href="{{asset("agua_saneamiento_indicadores")}}">
                    <img src="images/agua/IMG_AGUA_TITULO.jpg" width="85" height="63" alt="Agua título" />
                </div>
            </div>
        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
