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
                    <img src="images/aire/iconoHome.png" width="42" height="38" alt="Ir al home" />
                    <span class="breadcrumb_"> | Agua y saneamiento </span>
                    <span class="breadcrumb_ agua"> | Documentos e investigaciones</span>
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
                </div>
            </div>  
            <div class="row">
                <div class="col-8 mr-2 fluid-left">
                    <div width="300px">
                        <img src="{{asset("images/indicators/LogoAguaSaneamiento.png")}}" alt="símbolo sección agua" />
                    </div>
                </div>
                <div class="col-4" style="margin-left: 7px;">
                    <div class="row">
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
                <div height="355">
                    <img src="images/agua/bannerAguaSaneamientoParte_interna.png" width="100%" alt="Slider Agua" />
                </div>
            </div>

            <div class="row mt-5">
                <div class="contenidoSecAmb centradoDiv">
                    <h2 class="colorAgua">
                        <img src="images/agua/aguaDOCUMENTOS.png" width="85" height="63" align="absbottom" />Documentos e investigaciones
                    </h2>
                    <p>Compendio de documentos e investigaciones relacionados con las condiciones higiénicas sanitarias de los establecimientos
                        y eventos de interés en salud pública. 
                    </p>
                    <p>&nbsp;</p>
                    <h1 align="justify" class="colorAgua">Mapas de riesgo</h1>
                    <p align="justify">&nbsp;</p>
                    <table width="891" border="0">
                        <tr>
                        <td width="70" class="centrado">
                            <div align="justify">
                            <a href="https://drive.google.com/open?id=1pkscXUoIhQ4LJpYV2Eeo2E1qdarF-xzx">
                                <img src="{{asset("images/agua/IconoPDFparaAguaSaneamiento.png")}}" width="37" height="47" />
                            </a>
                            </div>
                        </td>
                        <td width="811" class="colorIndicadores">Mapa de riesgo de la calidad del agua para consumo humano Acueducto Asopicos Bocagrande</td>
                        </tr>
                        <tr>
                        <td class="centrado">
                            <div align="justify">
                            <a href="https://drive.google.com/open?id=1ciunjUMh0l_-j80k3ogdKl08a8v0y1NV">
                                <img src="{{asset("images/agua/IconoPDFparaAguaSaneamiento.png")}}" alt="" width="37" height="47" />
                            </a>
                            </div>
                        </td>
                        <td class="colorIndicadores">Mapa de riesgo de la calidad del agua para consumo humano Acueducto Batallón de Logística</td>
                        </tr>
                        <tr>
                        <td class="centrado">
                            <div align="justify">
                            <a href="https://drive.google.com/open?id=1e0U3BclrHo_nHYP8L-Z8_jINj6X7QoBU">
                                <img src="{{asset("images/agua/IconoPDFparaAguaSaneamiento.png")}}" alt="" width="37" height="47" />
                            </a>
                            </div>
                        </td>
                        <td class="colorIndicadores">Mapa de riesgo de la calidad del agua para consumo humano Acueducto Plan Sumapaz</td>
                        </tr>
                    </table>
                    <p align="justify">&nbsp;</p>
                </div>
            </div>  

            <div class="row">
                <hr class="lineaAgua mt80" style="width: 100%;" />
            </div>

           <!--  <div class="row"> -->
            <div class="logos colorAgua bold140p">
                <div class="centrado colorAgua">
                    <p class="colorAgua">Documentos e investigaciones</p>
                    <img src="images/agua/aguaDOCUMENTOS.png" width="85" height="63" alt="Agua docs"/>
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Mapas</p>
                    <img src="images/agua/IMG_AGUA_MAPA.jpg" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Normatividad</p>
                    <img src="images/agua/aguaNORMATIVIDAD.png" width="85" height="63" alt="Agua normas" />
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Calidad del aire</p>
                    <img src="images/agua/IMG_AGUA_TITULO.jpg" width="85" height="63" alt="Agua título" />
                </div>
            <!-- </div> -->
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
