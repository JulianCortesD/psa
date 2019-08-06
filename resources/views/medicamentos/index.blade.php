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
                <span class="breadcrumb_"> | Medicamentos seguros y dispositivos médicos| </span>
                <span class="colorMedicamentos">Medicamentos Seguros</span>
                <div width="300px">
                    <img src="{{asset("images/medicamentos/LogoMedicamentos.png")}}" width="100%" height=""  alt="" />
                </div>
            </div>
            <div class="col-4">
                <div class="row">
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
            <a href="http://autorregulacion.saludcapital.gov.co/droguerias">
            <div height="355">
                <img src="images/medicamentos/BannersMedicamentos.png" alt="" width="100%" />
            </div>
            </a>
        </div>
            <div class="row" style="text-align:justify;">
                <div class="contenidoSecAmb centradoDiv">
                    <span class="cursiva">.</span>

                    <h2 class="colorMedicamentos">&nbsp;</h2>
                    <h1 class="seccion fondoMedicamentos sinSaltoLinea">Medicamentos seguros y dispositivos médicos</h1>
                    <p>&nbsp;</p>
                    <p align="justify">La línea de intervención de Medicamentos Seguros, está orientada a contribuir en el derecho de los habitantes de la
                        ciudad a la salud y a un ambiente sano, mediante la gestión integral de los medicamentos, dispositivos médicos y
                        productos farmacéuticos, durante todo su ciclo de vida, con el fin de garantizar que la población del Distrito Capital,
                        cuente con productos de calidad, promoviendo su uso seguro, minimizando el riesgo de consumo de productos alterados
                        y/o fraudulentos, y contribuyendo a su disposición final en condiciones ambientalmente sostenibles.</p>
                    <p align="justify">&nbsp;</p>
                    <a href="{{asset("medicamentos_ver")}} " align="right" class="verMas colorMedicamentos">
                        <img src="images/medicamentos/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"align="right"/>
                        {{-- Ver más --}}
                    </a>

                </div>
            </div>

           <div class="row">
                <hr class="lineaMedicamentos mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAgua bold140p">
                <div class="centrado colorAgua">
                    <p align="center" class="colorMedicamentos">Documentos e investigaciones</p>
                    <p align="center" class="colorMedicamentos">
                    <img src="images/medicamentos/IMG_MEDICAMENTOS_DOCUMENTOS.jpg" width="85" height="63" />
                    </p>
                    <p>&nbsp;</p>
                </div>
                <div class="centrado colorAgua">
                    <p class="colorMedicamentos">Mapas</p>
                    <p class="colorMedicamentos">
                    <img src="images/medicamentos/IMG-MEDICAMENTOS_MAPA.jpg" width="85" height="63" />
                    </p>
                    <p class="colorMedicamentos">&nbsp;</p>
                </div>
                <div class="centrado colorAgua">
                    <p class="colorMedicamentos">Normatividad</p>
                    <p class="colorMedicamentos">
                        <a href="{{asset("medicamentos_normatividad")}}">

                        <img src="images/medicamentos/IMG_MEDICAMENTOS_NORMATIVIDAD.jpg" width="85" height="63" />
                    </a>
                    </p>
                </div>
                <div class="centrado colorAgua">
                    <p class="colorMedicamentos">Indicadores</p>
                    <p>
                    <img src="images/medicamentos/IMG_MEDICAMENTOS_INDICADORES.jpg" width="85" height="63" />
                    </p>
                </div>
            </div>

        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
