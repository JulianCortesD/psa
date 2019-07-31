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
                    <span class="breadcrumb_"> | Cambio climático | </span>
                    <span class="breadcrumb_ cambioC">Documentos e Investigaciones</span>
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
                        <img src="{{asset("images/indicators/LogoCambioClimatico.png")}}" alt="símbolo sección agua" />
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
                <!-- <div >
                    <a href="https://twitter.com/AmbienteBogota" class="redes pl-1 pt-2" style="margin-top: 90px; margin-left:0px;">
                        <img  src="{{asset("images/redessociales/Twitter.svg")}}" alt="" style="height: 80%">
                    </a>
                    <a href="https://www.facebook.com/AmbienteBogota/" class="redes pl-2 pt-2" style="margin-top: 150px; margin-left:0px;">
                        <img  src="{{asset("images/redessociales/IconoFacebook.svg")}}" alt="" style="height: 95%">
                    </a>
                    <a href="https://www.youtube.com/channel/UCjboPXY4C2F3rnqP7k4_9cQ" class="redes pl-1 pt-2" style="margin-top: 210px; margin-left:0px;">
                        <img  src="{{asset("images/redessociales/IconoYouTube.svg")}}" alt="" style="height: 70%">
                    </a>
                </div>  -->
                <div height="355">
                    <img src="images/cambioClimatico/BannerCambioClimaticoPartenterna.png" width="100%" alt="Slider Alimentos" />
                </div>
            </div>

            <div class="row" style="text-align:justify;">

                <div class="contenidoSecAmb centradoDiv">
                    <p>&nbsp; </p>
                    <div class="mR30">
                        <div class="anchoPagina">
                        <Indicadores>
                        </indicadores>
                        <h2 align="left">
                            <img src="images/cambioClimatico/cambioDOCUMENTOS.jpg" width="85" height="63" align="absbottom" />
                            <span class="colorcambioclimatico">Documentos e investigaciones</span>
                        </h2>
                        <p>&nbsp;</p>
                        </div>
                        <div class="colorIndicadoressinSaltoLinea">
                        <p>Compendio de documentos e investigaciones relacionadas con la variabilidad climática y los eventos de interés en
                            salud pública. </p>
                        </div>
                        <ul>
                                <span class="colorIndicadores">Boletín informativo distrital: Impactos en salud posiblemente asociados a variabilidad climática. Enero 2019</span>
                                <a href="https://drive.google.com/open?id=18acYD-L3KVawsP29vz6MDr0q_r7Z3OPv" >
                                    <img src="images/cambioClimatico/IconoPDFcambio.jpg" width="37" height="46" alt="ver más" style="margin-top: -8px;" align="left" />
                                    {{-- Ver más --}}
                                </a>
                              <br>
                             </br>
                                <span class="colorIndicadores">Boletín informativo distrital: Impactos en salud posiblemente asociados a variabilidad climática. Febrero 2019</span>
                                <a href="https://drive.google.com/open?id=1bbSOHYzWMlhTCO_sfONGUj_IRbmAw7f7" >
                                    <img src="images/cambioClimatico/IconoPDFcambio.jpg" width="37" height="46" alt="ver más" style="margin-top: -8px;"align="left"/>
                                    {{-- Ver más --}}
                                </a>
                              <br>
                             </br>
                                <span class="colorIndicadores">Boletín informativo distrital: Impactos en salud posiblemente asociados a variabilidad climática. Marzo 2019</span>
                                <a href="https://drive.google.com/open?id=1S-uKF-c7AHRBZv8Sx27Fq1ULuFgvcoJA" >
                                    <img src="images/cambioClimatico/IconoPDFcambio.jpg" width="37" height="46" alt="ver más" style="margin-top: -8px;"align="left"/>
                                    {{-- Ver más --}}
                                </a>
                                <br>
                               </br>
                                <span class="colorIndicadores">Boletín clima y salud. Gobierno de Colombia. Edición N°5 de 2019</span>
                                <a href="https://drive.google.com/open?id=1_m4qMwxk17EAUR5DkZcbf12NlloOzboR" >
                                    <img src="images/cambioClimatico/IconoPDFcambio.jpg" width="37" height="46" alt="ver más" style="margin-top: -8px;"align="left"/>
                                    {{-- Ver más --}}
                                </a>
                            </li>
                            <br>
                           </br>
                        </ul>
                        <p>&nbsp;</p>
                    </div>

                </div>

            </div>



            <div class="row">
                <hr class="lineaCambioC mt80" style="width: 100%;" />
            </div>

            <div class="logos colorCambioC bold140p">
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Documentos e investigaciones</p>
                    <a href="CambioClimatico_Documentos.html">
                    <img src="images/cambioClimatico/cambioDOCUMENTOS.jpg" width="85" height="63" alt="Cambio climático docs" />
                    </a>
                </div>
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Mapas</p>
                    <a href="CambioClimatico_mapas.html">
                    <img src="images/cambioClimatico/cambioMAPA.jpg" width="85" height="63" alt="Cambio climático mapa" />
                    </a>
                </div>
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Normatividad</p>
                    <a href="CambioClimatico_normatividad.html">
                    <img src="images/cambioClimatico/cambioNORMATIVIDAD.jpg" width="85" height="63" alt="Cambio climático normas" />
                    </a>
                </div>
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Indicadores</p>
                    <p>
                    <a href="CambioClimatico_Indicadores.html">
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
