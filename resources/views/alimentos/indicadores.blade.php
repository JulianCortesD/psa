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
                <span class="breadcrumb_"> | Alimentos y Bebidas| </span>
                <span class="breadcrumb_ alimentos">Indicadores</span>
                <div width="300px">
                    <img src="{{asset("images/indicators/LogoAlimentosSanos.png")}}" width="100%" height=""  alt="" />
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

            <a href="http://saludata.saludcapital.gov.co/osb/index.php/2019/07/01/protejase-del-sol-lo-que-debe-saber-sobre-la-radiacion-solar/">
            <div height="355">
                <img src="images/alimentos/BannerCarnes.png" alt="" width="100%"/>
                </div>
                 </a>

            <div class="row" style="text-align:justify;">
                <div class=" ">
                    <br></br>

                    <div class="colorAlimentos">
                        <div align="left" class="colorAlimentos bold140p">
                          <img src="images/alimentos/IMG_ALIMENTOS_INDICADOR.jpg" width="85" height="63" align="absmiddle" />Indicadores</div>
                    </div>

                        <p>Muestra las tendencias de las acciones de inspección,  vigilancia y control de establecimientos   de alimentos  y la frecuencia de  eventos de interés en salud pública (enfermedades transmitidas por alimentos e  intoxicaciones por metanol).  </p>
                        <p align="justify">Casos de morbilidad por ETA por ciclo vital en Bogotá
                            <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/eta/">
                             <img src="images/alimentos/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>



</p> </a>
                              <p align="justify">Proporción de aceptabilidad de alimentos y bebidas  en Bogotá D.C
                            <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/aceptabilidadalimentos/">
                                <img src="images/alimentos/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>



                                {{-- Ver más --}}
                            </a>
                        </p>

                    </div>

                </div>
            </div>


            <div class="row">
                <hr class="lineaAlimentos mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAlimentos bold140p">
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Documentos e investigaciones</p>
                    <img src="images/alimentos/IMG_ALIMENTOS_DOCUMENTOS.jpg" width="85" height="63"
                        alt="Agua docs" />
                </div>
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Mapas</p>
                    <img src="images/alimentos/IMG_ALIMENTOS_ MAPA.jpg" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Normatividad</p>
                    <a href="{{asset("alimentos_sanos_normatividad")}}">

                        <img src="images/alimentos/alimentosNORMATIVIDAD.png" width="85" height="63" alt="Agua normas" />
                    </a>
                </div>
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Indicadores</p>

                <a href="{{asset("alimentos_sanos_indicadores")}}">
                    <p class="colorAlimentos">
                        <img src="images/alimentos/IMG_ALIMENTOS_INDICADOR.jpg" width="85" height="63" />
                        </a>
                    </p>
                </div>
            </div>

        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
