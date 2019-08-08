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
                <span class="breadcrumb_ agua">Mapas</span>
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
                      <h2 class="colorAgua mt 40">
                        <img src="images/agua/IMG_AGUA_MAPA.jpg" width="85" height="63" align="absbottom" /><b>Mapas</b></h2>
                    </div>

                    <p align="justify">Aquí podrá observar la &ldquo;ubicación geográfica&rdquo; de las acciones de inspección, vigilancia y control de las
                      condiciones higiénico sanitarias de los establecimientos.</p>
                    <p>A continuación se muestran los mapas de:</p>
                    <p>&nbsp;</p>
                    <table width="1429" border="0">
                      <tr>
                        <td width="48">
                          <a href="https://drive.google.com/open?id=1mzc99lVEJ5l0IsAqHgNPBL2tc_Xxfx0J ">
                            <img src="images/agua/IconoPDFAguaSaneamiento.png" alt="" width="37" height="47" />
                          </a>
                        </td>
                        <td width="841" class="colorIndicadores">
                          <div align="justify">Distribución de sistemas de abastecimiento de agua para el consumo humano en Bogotá D.C. Índice de riesgo de
                            calidad de agua (IRCA). Promedio 2017</div>
                        </td>
                        <td width="526">
                          <a href="https://drive.google.com/open?id=1oMjQj6u1m8QjWkWZ5eB0yJk5W9-iBjkE">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="https://drive.google.com/open?id=1me5cESUjFMj79WVLlkn2lsBoPTyuhoys ">
                            <img src="images/agua/IconoPDFAguaSaneamiento.png" alt="" width="37" height="47" />
                          </a>
                        </td>
                        <td class="colorIndicadores">
                          <div align="justify">Distribución de puntos de muestreo empresa de acueducto de Bogotá (EAB). Índice de riesgo de calidad de agua
                            (IRCA). Promedio 2017</div>
                        </td>
                        <td>
                          <a href="https://drive.google.com/open?id=1me5cESUjFMj79WVLlkn2lsBoPTyuhoys">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="https://drive.google.com/open?id=1ijwQYH_0VfcD7ZPOzw4U5La7B4Uhqi68 ">
                            <img src="images/agua/IconoPDFAguaSaneamiento.png" alt="" width="37" height="47" />
                          </a>
                        </td>
                        <td class="colorIndicadores">Transporte de agua para el consumo puntos de cargue y descargue año 2017</td>
                        <td>
                          <a href="https://drive.google.com/open?id=1ijwQYH_0VfcD7ZPOzw4U5La7B4Uhqi68">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="https://drive.google.com/open?id=1oMjQj6u1m8QjWkWZ5eB0yJk5W9-iBjkE ">
                            <img src="images/agua/IconoPDFAguaSaneamiento.png" alt="" width="37" height="47" />
                          </a>
                        </td>
                        <td class="colorIndicadores">Distribución de piscinas vigiladas en el Distrito Capital. Años 2014-2017</td>
                        <td>
                          <a href="https://drive.google.com/open?id=1mzc99lVEJ5l0IsAqHgNPBL2tc_Xxfx0J">
                        </td>
                      </tr>
                      <tr>
                        <td width="48">
                          <a href="https://drive.google.com/open?id=1JkbkhuzsGjMSCtdkzkqwblGvVyxVo6Kq ">
                            <img src="images/agua/IconoPDFAguaSaneamiento.png" alt="" width="37" height="47" />
                          </a>
                        </td>
                        <td width="841" class="colorIndicadores">
                          <div align="justify">Distribución de sistemas de abastecimiento de agua para el consumo humano en Bogotá D.C. 2017</div>
                        </td>
                      </tr>
                      <tr>
                        <td width="48">
                          <a href="https://drive.google.com/open?id=1qXumYJje1rDNxFRSTEHdweRT4rXi5ioc">
                            <img src="images/agua/IconoPDFAguaSaneamiento.png" alt="" width="37" height="47" />
                          </a>
                        </td>
                        <td width="841" class="colorIndicadores">
                          <div align="justify">Distribución de sistemas de abastecimiento de agua para el consumo humano en Bogotá D.C. 2019</div>
                        </td>
                      </tr>
                      <tr>
                    </table>

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
