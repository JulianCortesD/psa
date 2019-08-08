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
                <span class="breadcrumb_ agua">Documentos e Investigaciones</span>
                <div width="300px">
                    <img src="{{asset("images/indicators/LogoAguaSaneamiento.png")}}" width="100%" height=""  alt="" />
                </div>
            </div>
            <div class="col-4">
                <div class="row ">
                    <div class="col-12 date-time-title">
                        <span>Bogotá hoy</span>
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

                <div class="">
                    <h2 class="colorAgua bold140p">
                        <img src="images/agua/aguaDOCUMENTOS.png" width="85" height="63" align="absbottom" /><b>Documentos e Investigaciones
                    </b></h2>
                    <p style="font-size: 16px;">Compendio de documentos e investigaciones relacionados con las condiciones higiénicas sanitarias de los establecimientos
                        y eventos de interés en salud pública.
                    </p>

                    <h2 align="justify" class="colorAgua mt 40 bold140p"><b>Documentos de Mapas de Riesgo</b></h2>

                    <table width="891" border="0">
                        <tr>
                        <td width="70" class="centrado">
                            <div align="justify">
                            <a href="https://drive.google.com/open?id=1pkscXUoIhQ4LJpYV2Eeo2E1qdarF-xzx">
                                <img src="{{asset("images/agua/IconoPDFparaAguaSaneamiento.png")}}" width="37" height="47" />
                            </a>
                            </div>
                        </td>
                        <td width="811" class="colorIndicadores">Mapa de riesgo de la calidad del agua para consumo humano Acueducto Asopicos Bocagrande año 2015</td>
                        </tr>
                        <tr>
                        <td class="centrado">
                            <div align="justify">
                            <a href="https://drive.google.com/open?id=1ciunjUMh0l_-j80k3ogdKl08a8v0y1NV">
                                <img src="{{asset("images/agua/IconoPDFparaAguaSaneamiento.png")}}" alt="" width="37" height="47" />
                            </a>
                            </div>
                        </td>
                        <td class="colorIndicadores">Mapa de riesgo de la calidad del agua para consumo humano Acueducto Batallón de Logística año 2015</td>
                        </tr>
                        <tr>
                        <td class="centrado">
                            <div align="justify">
                            <a href="https://drive.google.com/open?id=1e0U3BclrHo_nHYP8L-Z8_jINj6X7QoBU">
                                <img src="{{asset("images/agua/IconoPDFparaAguaSaneamiento.png")}}" alt="" width="37" height="47" />
                            </a>
                            </div>
                        </td>
                        <td class="colorIndicadores">Mapa de riesgo de la calidad del agua para consumo humano Acueducto Plan Sumapaz año 2015</td>
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
</div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
