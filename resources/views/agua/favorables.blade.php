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
                <span class="breadcrumb_ agua">Favorables</span>
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
                 <br></br>
                    <h1 class="seccion fondoAgua sinSaltoLinea">

                        {{-- <img src="images/agua/Exelencia_agua.png" width="80" height="90" align="absbottom" /> --}}
                        Establecimientos con concepto favorable </h1>
                        <br></br>

                    <p></p>
                    <p align="justify">Consulte aquí empresas prestadoras de servicio de abastecimiento de agua potable para el consumo humano. que cumplen al 100% con la norma sanitaria y cuentan con concepto  favorable por parte de la Secretaria de Salud.</p>
                    <table width="527" border="0">
                        <tr>
                            <td width="57">
                            <a href="https://drive.google.com/open?id=1wIbvN4xKkDNTMttbx_ylvJMPQs5xbZZr">
                                <img src="images/agua/IconoPDFAguaSaneamiento.png" alt="" width="37" height="47" />
                            </a>
                            <a href="https://drive.google.com/open?id=1ulL2NLFynO4DqPvb28gzM0gFreoPU-Hd">
                            </td>
                            <td width="460" class="colorIndicadores">Listado de vehículos que transportan agua potable</td>
                        </tr>

                    </table>
                    <p align="justify">Consulte aquí el listado de vehículos que prestan servicios fúnebres y cuentan con concepto sanitario favorable emitido
                    por la secretaria de salud.</p>
                    <table width="554" border="0">
                        <tr>
                            <td width="57">
                            <a href="https://drive.google.com/open?id=1l3lUZCQYE5QuYvNj6pauutPPqHsvVqOz">
                                <img src="images/agua/IconoPDFAguaSaneamiento.png" alt="" width="37" height="47" />
                            </a>
                            <a href="https://drive.google.com/open?id=1Hq6AHQrQ-euWsSmAyThdl8VGbv6d902L">
                            </td>
                            <td width="487" class="colorIndicadores">Listado de vehículos que prestan servicios fúnebres</td>
                        </tr>
                    </table>
                    <p align="justify"></p>
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
