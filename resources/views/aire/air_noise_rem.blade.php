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
                    <span class="breadcrumb_"> | Aire, ruido y radiación electromagnética|</span>
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
                        <img src="images/aire/LogoAireRuidoREM.png" alt="símbolo sección aire" />
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
                <div >
                    <a href="https://twitter.com/AmbienteBogota" class="redes pl-1 pt-2" style="margin-top: 90px; margin-left:0px;">
                        <img  src="{{asset("images/redessociales/Twitter.svg")}}" alt="" style="height: 80%">
                    </a>
                    <a href="https://www.facebook.com/AmbienteBogota/" class="redes pl-2 pt-2" style="margin-top: 150px; margin-left:0px;">
                        <img  src="{{asset("images/redessociales/IconoFacebook.svg")}}" alt="" style="height: 95%">
                    </a>
                    <a href="https://www.youtube.com/channel/UCjboPXY4C2F3rnqP7k4_9cQ" class="redes pl-1 pt-2" style="margin-top: 210px; margin-left:0px;">
                        <img  src="{{asset("images/redessociales/IconoYouTube.svg")}}" alt="" style="height: 70%">
                    </a>
               </div>
                <div height="355">
                    <img src="images/aire/BannerEstAire.png" width="100%" alt="Slider aire" />
              </div>
          </div>

            <div class="row">
                <div class="contenidoSecAmb centradoDiv">
                    <div>
                      <br>
                      <br>
                      <h1 class="seccion fondoAire sinSaltoLinea">Aire, Ruido y Radiación Electromagnética</h1>
                      <p>&nbsp;</p>
                    </div>
                 <div class="contenidoSecAmb centradoDiv">
                      <p align="justify">La Secretaria Distrital de Salud realiza el monitoreo de la información sobre las condiciones de exposición a contaminación
                        del aire de la población vulnerable en Bogotá, mediante procesos de vigilancia epidemiológica, ambiental y sanitaria
                        orientada al diseño de estrategias e intervenciones tendientes a mitigar los efectos nocivos asociados a este factor
                        de riesgo.
                        La Secretaría Distrital de Salud de Bogotá (SDS) en coordinación con los equipos de la Línea de Aire, Ruido y Radiaciones
                          Electromagnéticas (LARREM) de las Empresas Sociales del Estado E.S.E., dentro del proceso de Vigilancia Epidemiológica,
                          Ambiental y Sanitaria, realiza actividades de seguimiento a los principales efectos en salud asociados con la
                          contaminación del aire por Material Particulado (PM), la exposición a ruido y radiación electromagnética (REM),
                          así como a la verificación de la normatividad sanitaria relacionada con los espacios libres de humo de tabaco
                          y cigarrillo, &nbsp;contribuyendo  así a la prevención de enfermedades, la promoción de la salud y al proceso
                          de toma de decisiones en la implementación de la Política Distrital de Salud Ambiental (PDSA). </p>
                        <p align="right">
                    </div>
                            <a href="{{asset("/aire_que_hacemos")}}" class="verMas colorAire">
                                <img src="images/aire/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                                {{-- Ver más --}}
                            </a>
                        </p>
                    </div>







                      <p class="notaPiePagina">&nbsp;</p>
                </div>
            </div>

            <div class="row">
                <hr class="lineaAire mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAire bold140p">
                <div class="centrado colorAire">
                  <p class="colorAire">Documentos e investigaciones</p>
                  <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Agua docs"
                  />
                </div>
                <div class="centrado colorAire">
                  <p class="colorAire">Mapas</p>
                  <img src="images/aire/aireMAPA.png" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAire">
                  <p class="colorAire">Normatividad</p>
                  <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Agua normas" />
                </div>
                <div class="centrado colorAire">
                  <p class="colorAire">Indicadores</p>
                  <img src="images/aire/aireINDICADORES.png" width="85" height="63" alt="Agua título" />
                </div>
            </div>

        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
