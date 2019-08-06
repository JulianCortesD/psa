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
                <span class="breadcrumb_"> | Cambio Climático| </span>
                <span class="breadcrumb_ cambioC">Mapas</span>
                <div width="300px">
                    <img src="{{asset("images/indicators/LogoCambioClimatico.png")}}" width="100%" height=""  alt="" />
                </div>
                </div>
            <div class="col-4">
              <div class="row ">
            <div class="col-12 date-time-title">
                    <span>Bogotá hoy</span>
                    </div>
                    </div>

                <div class="row">
                    <div class="col-12 date-time">
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

            <a href="http://saludata.saludcapital.gov.co/osb/index.php/2019/07/01/protejase-del-sol-lo-que-debe-saber-sobre-la-radiacion-solar/">
            <div height="355">
                <img src="images/cambioClimatico/BannerCClima.png" alt="" width="100%"/>
                </div>
                 </a>
             </div>
<br></br>
            <div class="row" style="text-align:justify;">

                <div class=" ">
                    <h2 class="colorCambioC bold140p">
                    <img src="images/cambioClimatico/cambioMAPA.jpg" width="85" height="63" align="absbottom"/><b>Mapas</b></h2>
                    <h2 class="colorCambioC">&nbsp;</h2>
                    <div align="justify">
                    <p>Aquí podrá encontrar la &ldquo;ubicación geográfica&rdquo; de la variabilidad climática y de los eventos relacionados
                        con este fenómeno en Bogotá. Documentos e investigaciones: Compendio de documentos e investigaciones relacionadas
                        con la variabilidad climática y los eventos de interés en salud pública.
                    </p>
                    <p>&nbsp;</p>
                    </div>
                    <table width="928" border="0">
                    <tr>
                        <td width="70">
                        <a href="https://drive.google.com/open?id=15IYJNOPHcr3PrcnlHBL6D19mG7XxXBZ1" class="colorCambioC"><img src="images/cambioClimatico/IconoPDFcambio.jpg" width="37" height="46" alt="ver más" style="margin-top: -8px;"align="left"/></a>
                        </td>
                        <td width="848">Vulnerabilidad en salud asociada a la variabilidad climática 2015</td>
                    </tr>

                    </table>
                    <h2 align="left" class="colorCambioC">&nbsp;</h2>

                </div>

            </div>


 <div class="row">
                <hr class="lineaCambioC mt80" style="width: 100%;" />
            </div>

            <div class="logos colorCambioC bold140p">
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Documentos e investigaciones</p>
                    <a href="{{asset("cambio_climatico_documentos")}}">
                    <img src="images/cambioClimatico/cambioDOCUMENTOS.jpg" width="85" height="63" alt="Cambio climático docs" />
                    </a>
                </div>
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Mapas</p>
                    <a href="{{asset("cambio_climatico_mapas")}}">
                    <img src="images/cambioClimatico/cambioMAPA.jpg" width="85" height="63" alt="Cambio climático mapa" />
                    </a>
                </div>
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Normatividad</p>
                    <a href="{{asset("cambio_climatico_normatividad")}}">
                    <img src="images/cambioClimatico/cambioNORMATIVIDAD.jpg" width="85" height="63" alt="Cambio climático normas" />
                    </a>
                </div>
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Indicadores</p>
                    <a href="{{asset("cambio_climatico_indicadores")}}">
                    <img src="images/cambioClimatico/cambioINDICADORES.jpg" width="85" height="63" alt="Cambio climático título" />
                    </a>
                    </p>
                    <p>&nbsp;</p>
                </div>
            </div>

        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
