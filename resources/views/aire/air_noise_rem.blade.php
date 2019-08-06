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
                  <span class="breadcrumb_"> | Aire, ruido y radiación electromagnética |</span>
                    <span class="breadcrumb_ aire"> Aire, ruido y REM</span>
                    <div width="300px">
                        <img src="{{asset("images/aire/LogoAireRuidoREM.png" )}}" width="100%" alt="" />
                    </div>

                </div>
                <div class="col-4">
                    <div class="row ">
                        <div class="col-12 date-time-title">
                        <span>Bogotá hoy</span>
                        </div>
                    </div>
                    <div class="row">
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
                                <img src="{{asset("images/news/climaactual.svg")}}" alt="clima actual" class="img-clima-actual">
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
                   <a href="https://drive.google.com/open?id=1pPWUpFKRV1rh4eoH413mjKgoRphWf9eu">
                            <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner restaurante 1a del Home.png")}}" alt="Sixth slide">
                        </a>
                </div>
            </div>


            <div class="row">
                <div class="contenidoSecAmb centradoDiv">
                    <div>
                      <br>
                      </br>
                        <p>&nbsp;</p>
                      <h1 class="seccion fondoAire sinSaltoLinea">Aire, Ruido y Radiación Electromagnética</h1>
                      <p>&nbsp;</p>
                    </div>

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
                            <a href="{{asset("/aire_que_hacemos")}}" class="verMas colorAire">
                                <img src="images/aire/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                                {{-- Ver más --}}
                            </a>
                        </p>
                    </div>



                      <p class="notaPiePagina">&nbsp;</p>
                </div>


             <div class="row">
               <hr class="lineaAire mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAire bold140p">
                <div class="centrado colorAire">
                    <p class="colorAire">Documentos e investigaciones</p>
                     <a href="{{asset("aire_documentos")}}">
                    <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Agua docs"/>
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Mapas</p>
                    <a href="{{asset("aire_mapas")}}">
                    <img src="images/aire/aireMAPA.png" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Normatividad</p>
                    <a href="{{asset("aire_normatividad")}}">
                    <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Agua normas" />
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Indicadores</p>
                    <a href="{{asset("aire_indicadores")}}">
                    <img src="images/aire/aireINDICADORES.png" width="85" height="63" alt="Agua título" />
                </div>
            </div>

@endsection
