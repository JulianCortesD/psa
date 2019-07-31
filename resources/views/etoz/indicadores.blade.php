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
                    <span class="breadcrumb_"> Zoonosis y Vectores | </span>
                    <span class="breadcrumb_ colorETOZ">Indicadores</span>

                    <div width="300px">
                        <img src="{{asset("images/Eventos zoonoticos/LOGO_ZOONOSIS.png")}}" height="93" alt="símbolo sección etoz" />
                    </div>

                </div>
                <div class="col-4" >
                    <div class="row ocultar">
                        <div class="col-12 date-time-title">
                        <span>Bogotá hoy</span>
                        </div>
                    </div>
                    <div class="row ocultar">
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
                                <img  src="{{asset("images/news/climaactual.svg")}}" alt="clima actual" class="img-clima-actual">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
              <div height="355">
              <img src="images/Eventos zoonoticos/Banner ETOZ del Home.jpg" width="100%" alt="Slider Alimentos" /></div>
          </div>
            <div class="row mt-3" style="text-align:justify;">
                <div class="contenidoSecAmb centradoDiv">
                    <h2 class="colorETOZ">
                        <img src="images/Eventos zoonoticos/INDICADORES.png" width="85" height="63" align="absbottom" />
                        Indicadores
                    </h2>

                    <p>Permite conocer la gestión de las acciones integrales de vigilancia sanitaria y  epidemiológica, promoción de la salud y prevención de las enfermedades  transmisibles de origen zoonótico.</p>
                    <p>&nbsp;</p>
                    <ul>
                    <p>Tasa incidencia de intoxicación con sustancias químicas en Bogotá D.C.<a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/intoxicacion/">Ver aquí</a>
                    </p>
                    </ul>
                    <p>&nbsp;</p>
                    <ul>
                    <p>Cantidad de sustancias químicas peligrosas por habitante en Bogotá D.C.<a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/distribucionsustanciasquimicaspeligrosaspercapita/">ver aquí</a>                    </li>
                    </p>
                    </ul>
                    <p>&nbsp;</p>
                    <p align="right">&nbsp;</p>
                    <p align="right">&nbsp;</p>
                </div>
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
                    <img src="images/Eventos zoonoticos/MAPA.png" width="85" height="63" alt="Aire mapa" />
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
