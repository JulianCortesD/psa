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
                    <span class="breadcrumb_"> | Cambio climático |</span>
                    <span class="breadcrumb_ cambioC"></span>
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
                        <img src="{{asset("images/indicators/LogoCambioClimatico.png")}}" width="50%" alt="símbolo sección agua" />
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

                    <h1 class="centrado colorCambioC mt20">CAMBIO CLIMÁTICO</h1>

                    <h2 class="centrado colorCambioC mt20">¿Qué hacemos?</h2>
                    <p>Según la Convención Marco de las Naciones Unidas (CMNUCC), el cambio climático se define como “
                    <em>un cambio de clima atribuido directa o indirectamente a la actividad humana que altera la composición de la atmósfera
                        mundial y que se suma a la variabilidad natural del clima observada durante períodos de tiempo comparable</em>”
                    y se distingue entre el ‘cambio climático’ atribuido a actividades humanas que alteran la composición atmosférica
                    y ‘variabilidad climática’ debido a causas naturales. En Bogotá, el cambio climático se ha evidenciado principalmente
                    como resultado de la urbanización acelerada y no planificada, el crecimiento poblacional, y las emisiones de la actividad
                    productiva, generando modificaciones en el sistema climático local y aumentando la frecuencia e intensidad de los
                    fenómenos hidrometeorológicos extremos.</p>
                    <p>A nivel distrital el Decreto 596 de 2011 de la Alcaldía Mayor de Bogotá, por el cual se adopta la Política Distrital
                    de Salud Ambiental para Bogotá 2011-2023, define como una de sus líneas de intervención las problemáticas asociadas
                    al cambio climático y salud. Así mismo el Decreto 579 de 2015 y el Acuerdo 001 de 2018 de la Alcaldía Mayor de Bogotá,
                    adopta el Plan Distrital de Gestión de Riesgos y Cambio Climático para Bogotá D.C., 2018- 2030 que incorpora dentro
                    de sus objetivos estrategias de adaptación en salud frente al cambio climático. De acuerdo con lo anterior, la Secretaria
                    Distrital de Salud plantea como objetivo general para este tema definir y desarrollar procesos articulados de respuesta
                    interinstitucional e intersectorial en salud ambiental, para la mitigación y adaptación a los fenómenos asociados
                    a la variabilidad y cambio climático que se presentan en Bogotá D.C. </p>

                    <h3 class="seccion fondoCambioC mt40">Indicadores</h3>
                    <div class="logos">
                    <div class="seccionIcono">
                        <img src="images/cambioClimatico/cambioINDICADORES.jpg" width="85" height="63" alt="indicadores aire" />
                    </div>
                    <div class="sinSaltoLinea">Reflejan la variabilidad climática y las notificaciones de eventos de interés en salud pública posiblemente asociados
                        al fenómeno de cambio climático en Bogotá.</div>
                    </div>
                    <ul>
                    <li>Eventos notificados de ESI-IRAG en temporada de lluvias en Bogotá D.C. este indicador está disponible en el enlace:
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/temporadalluvias/" class="colorCambioC">http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/temporadalluvias/</a>
                    </li>
                    <li>
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/tbogota/" class="colorCambioC">Temperatura en Bogotá D.C.</a> este indicador está disponible en el enlace:
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/tbogota/"
                        class="colorCambioC">http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/tbogota/</a>
                    </li>
                    </ul>

                    <h3 class="seccion fondoCambioC mt40">Normatividad</h3>
                    <div class="logos">
                    <div class="seccionIcono">
                        <img src="images/cambioClimatico/cambioNORMATIVIDAD.jpg" width="85" height="63" alt="Normatividad cambio climático"
                        />
                    </div>
                    <div class="sinSaltoLinea">Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas con las acciones
                        de mitigación y adaptación a los fenómenos asociados a la variabilidad y cambio climático que se presentan en Bogotá
                        D.C. </div>
                    </div>
                    <p class="cursiva">Regulación Transversal Cambio climático</p>
                    <ul>
                    <li>Conpes 3550 de 2008</li>
                    <li>Acuerdo 391 de 2009</li>
                    <li>Conpes 3700 de 2011</li>
                    <li>Decreto 596 de 2011</li>
                    <li>Decreto 566 de 2014</li>
                    <li>Decreto 579 de 2015</li>
                    </ul>
                    <p class="cursiva">Regulación específica</p>
                    <ul>
                    <li>Ley 99 de 1993</li>
                    <li>Ley 629 de 2000</li>
                    <li>Resolución 1652 de 2007</li>
                    <li>Resolución 552 de 2009</li>
                    <li>Acuerdo 372 de 2009</li>
                    <li>Resolución 2733 de 2010</li>
                    <li>Ley 164 de 1994</li>
                    <li>Conpes 3242 de 2003</li>
                    <li>Resolución 551 de 2009</li>
                    <li>Acuerdo 367 de 2009</li>
                    <li>Acuerdo 418 de 2009</li>
                    <li>Resolución 2734 de 2010</li>
                    <li>Ley 1931 del 27 de julio de 2018. </li>
                    </ul>

                    <h3 class="seccion fondoCambioC mt40">Documentos e investigaciones</h3>
                    <div class="logos">
                    <div class="seccionIcono">
                        <img src="images/cambioClimatico/cambioDOCUMENTOS.jpg" width="85" height="63" alt="Documentos e investigaciones cambio climático"
                        />
                    </div>
                    <div class="sinSaltoLinea">Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas con las acciones
                        de mitigación y adaptación a los fenómenos asociados a la variabilidad y cambio climático que se presentan en Bogotá
                        D.C. </div>
                    </div>
                    <p class="cursiva">Boletín informativo distrital</p>
                    <ul>
                    <li>Impactos en salud posiblemente asociados a variabilidad climática. Enero 2019</li>
                    <li>Impactos en salud posiblemente asociados a variabilidad climática. Febrero 2019</li>
                    <li>Impactos en salud posiblemente asociados a variabilidad climática. Marzo 2019</li>
                    <li>Boletín clima y salud. Gobierno de Colombia. Edición N°5 de 2019. Link:
                        <a href="http://www.pronosticosyalertas.gov.co/boletines-e-informes-tecnicos"
                        class="colorCambioC">http://www.pronosticosyalertas.gov.co/boletines-e-informes-tecnicos</a>
                    </li>
                    </ul>


                </div>                

            </div>  

            

            <div class="row">
                <hr class="lineaCambioC mt80" style="width: 100%;" />
            </div>

            <div class="logos colorCambioC bold140p">
                <div class="centrado colorCambioC">
                    <p>Documentos e investigaciones</p>
                    <img src="images/cambioClimatico/cambioDOCUMENTOS.jpg" width="85" height="63" alt="Cambio climático docs"
                    />
                </div>
                <div class="centrado colorCambioC">
                    <p>Mapas</p>
                    <img src="images/cambioClimatico/cambioMAPA.jpg" width="85" height="63" alt="Cambio climático mapa" />
                </div>
                <div class="centrado colorCambioC">
                    <p>Normatividad</p>
                    <img src="images/cambioClimatico/cambioNORMATIVIDAD.jpg" width="85" height="63" alt="Cambio climático normas"
                    />
                </div>
                <div class="centrado colorCambioC">
                    <p>Calidad del aire</p>
                    <img src="images/cambioClimatico/cambioClimaticoNUBE.png" width="85" height="63" alt="Cambio climático título"
                    />
                </div>
            </div>          
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
