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
                    <span class="breadcrumb_ aire"> Indicadores</span>
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
                            <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner restaurante 1a del Home")}}" alt="Sixth slide">
                        </a>
                </div>
            </div>

                <div class="contenidoSecAmb centradoDiv">
                    <div></div>
                    <h3>&nbsp;</h3>
                    <h3 align="left">
                        <img src="images/aire/aireINDICADORES.png" width="85" height="63" align="absbottom" />
                        <span class="colorAire"><b>Indicadores</b></span></h3>
                        <br></br>
                    <div class="contenidoSecAmb centradoDiv">
                    <h3 class="colorAire mt 40"><b>Calidad del aire</b></h3></div>
                    <p align="justify">Representan la tendencia de las enfermedades respiratorias y cardiovasculares y la sintomatología respiratoria posiblemente asociada con la exposición a contaminación del aire en la población vulnerable de Bogotá. </p>

                        <p span class="colorIndicadores">
                            Prevalencia de sibilancias en menores de 5 años posiblemente asociado a material particulado en Bogotá D.C.</span>
                            <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/sibilanciam5/" class="verMas colorAire">
                                <img src="images/aire/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                                {{-- Ver más --}}
                            </a>
                        </p>

                        <p span class="colorIndicadores">Prevalencia de sibilancias en niños de 5 a 14 años posiblemente asociado a material particulado, Bogotá D.C.</span>
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/sibilancia514/" class="verMas colorAire">
                            <img src="images/aire/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                            {{-- Ver más --}}
                        </a>

                          </p>
                        <p><span class="colorIndicadores">Prevalencia de sibilancias en adultos mayores de 60 años en Bogotá D.C.</span>
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/sibilancias60anios/">
                            <img src="images/aire/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                            {{-- Ver más --}}
                        </a>
                    </p>

                       <p> <span class="colorIndicadores">Proporción de demanda de consulta por enfermedad respiratoria en niños menores de 14 años  atendidos en el servicio de urgencias, Red Pública en Bogotá D.C.</span>
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/consultaurgencias14anios/">
                            <img src="images/aire/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                            {{-- Ver más --}}
                        </a>
                        </p>
                        <p>
                         <span class="colorIndicadores">Proporción de demanda de consulta por enfermedad cardiovascular en adulto mayor de 60 años atendidos en el servicio de urgencias, Red Pública en Bogotá D.C.</span>
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/cardiovascular60anios"/>
                            <img src="images/aire/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                            {{-- Ver más --}}
                        </a>
                         </p>
                        <p> <span class="colorIndicadores">Ausentismo escolar por enfermedad respiratoria en niños menores de 14 años en Bogotá D.C.</span>
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/ausentismo-escolar"/>
                            <img src="images/aire/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                            {{-- Ver más --}}
                        </a>
                        </p>

                   <h3 class="colorAire mt 40"><b>Ruido</b></h3>
                    <p>Describen la tendencia de la frecuencia de casos relacionados con la pérdida de audición y la calidad del sueño debido a la exposición a ruido y los resultados de las acciones de la vigilancia sanitaria y ambiental por contaminación auditiva en Bogotá </p>


                            <p span class="colorIndicadores">Prevalencia de alteración del sueño en Bogotá D.C.</span>
                            <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/alteracionsueno/">
                                <img src="images/aire/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                                {{-- Ver más --}}
                            </a>
                        </p>


                        <p span class="colorIndicadores">Prevalencia de somnolencia diurna por exposición al ruido en Bogotá D.C..</span>
                            <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/somnolencia"/>
                                <img src="images/aire/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                                {{-- Ver más --}}
                            </a>
                        </p>
                 </ul>
                 <h3 class="colorAire mt 40"><b>Radiación electromagnética</b></h3>
                    <p>Visualizan la frecuencia de los eventos de interés relacionados con la exposición a radiación electromagnética y los resultados de las acciones de la vigilancia sanitaria y ambiental por contaminación de radiación electromagnética en Bogotá </p>


                            <p span class="colorIndicadores">Prevalencia de síndrome de radiofrecuencia en Bogotá D.C.</span>
                            <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/prevalenciasindromeradiofrecuencia"/>
                                <img src="images/aire/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                                {{-- Ver más --}}
                            </a>
                        </p>
                    </ul>
                    <h3 class="colorAire mt 40"><b>Espacios libres de humo y tabaco</b></h3>
                    <p>Permiten mostrar las principales acciones afines con la implementación de la norma de espacios libres de humo de tabaco
                        y la frecuencia de la exposición al humo de tabaco en Bogotá. </p>


                            <span class="colorIndicadores">Prevalencia de consumo de tabaco en hogares en Bogotá D.C</span>
                            <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/tabaco-hogares/" class="verMas colorAire">
                                <img src="images/aire/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                                {{-- Ver más --}}
                            </a>
                </div>
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
        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
