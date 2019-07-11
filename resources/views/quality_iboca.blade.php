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
                    <span class="breadcrumb_">  | Aire, ruido y radiación electromagnética | Calidad del aire - IBOCA </span>
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
                        <img src="images/aire/LogoAireRuidoREM.png" width="50%" alt="símbolo sección aire" />
                    </div>
                </div>
                <div class="col-4" style="margin-left: 7px;">
                    <div class="row">
                        <div class="col-4">
                            <a href="">
                                <img src="{{asset("images/news/calidadaire.svg")}}" alt="calidad aire" class="img-calidad-aire">
                            </a>                            
                        </div>
                        <div class="col-4">
                            <a href="http://saludata.saludcapital.gov.co/osb/index.php/2019/07/01/protejase-del-sol-lo-que-debe-saber-sobre-la-radiacion-solar/">
                                <img src="{{asset("images/news/indiceuv.svg")}}" alt="indice uv" class="img-indice-uv">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="">
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

                    <h3 class="colorAire">IBOCA</h3>
                    <span class="cursiva">Continúa...</span>
                    <p>El índice bogotano de calidad del aire, fue adoptado de manera conjunta entre la Secretaria Distrital de Ambiente y
                    la Secretaria Distrital de Salud mediante la Resolución 2410 de 2015, en la cual se define al IBOCA como un indicador
                    multipropósito adimensional, calculado a partir de las concentraciones de contaminantes atmosféricos en un momento
                    y lugar de la ciudad, que comunica simultáneamente y de forma sencilla, oportuna y clara el riesgo ambiental por
                    contaminación atmosférica, el estado de la calidad del aire de Bogotá, las afectaciones y recomendaciones en salud
                    y las medidas voluntarias para que la ciudadanía contribuya a mantener o mejorar la calidad del aire de la ciudad.
                    También funciona como un indicador de riesgo ambiental por contaminación atmosférica en el marco del Sistema Distrital
                    de Alertas del Sistema Distrital de Gestión del Riesgo y Cambio Climático - SATAB Aire. </p>

                    <h3 class="centrado colorAire mt40">Pronóstico de calidad del aire</h3>
                    <p>A través del Sistema Integrado de Modelación de Calidad de Aire de Bogotá (SIMCAB) la Secretaría Distrital de Ambiente
                    puede estimar el destino y distribución de la concentración de los contaminantes atmosféricos inventariados en la
                    ciudad, complementando la tarea de monitoreo desarrollada por la Red de Monitoreo de Calidad del Aire de Bogotá (RMCAB).
                    Esta herramienta permite estimar el estado de la calidad de aire para las siguientes 48 horas, teniendo en cuenta
                    el pronóstico de variables meteorológicas y comportamientos típicos de emisiones en la ciudad para los días pronosticados.
                    Pronóstico IBOCA.</p>
                    <p>De interés:</p>
                    <ul>
                    <li>Calidad del aire y Salud Urbana. - SDS</li>
                    <li>Calidad de aire y Salud, Organización Mundial de la Salud. </li>
                    <li>Sistemas de vigilancia de contaminantes ambientales, Instituto Nacional de Salud.</li>
                    </ul>

                    <h3 class="seccion fondoAire mt40">Indicadores</h3>
                    <div class="logos">
                    <div class="seccionIcono">
                        <img src="images/aire/IMG_AGUA_INDICADORES.jpg" width="85" height="63" alt="indicadores aire" />
                    </div>
                    <div class="sinSaltoLinea">Representan la tendencia de las enfermedades respiratorias y cardiovasculares y la sintomatología respiratoria posiblemente
                        asociada con la exposición a contaminación del aire en la población vulnerable de Bogotá.</div>
                    </div>
                    <ul>
                    <li>Prevalencia de sibilancias en menores de 5 años posiblemente asociado a material particulado en Bogotá D.C.</li>
                    <li>Link:
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/sibilanciam5/">http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/sibilanciam5/</a>
                    </li>
                    <li>Prevalencia de sibilancias en niños de 5 a 14 años posiblemente asociado a material particulado, Bogotá D.C.</li>
                    <li>Link:
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/sibilancia514/">http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/sibilancia514/</a>
                    </li>
                    </ul>

                    <h3 class="seccion fondoAire mt40">Normatividad</h3>
                    <div class="logos">
                    <div class="seccionIcono">
                        <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="normas aire" />
                    </div>
                    <div class="sinSaltoLinea">Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas con la calidad
                        del aire.</div>
                    </div>
                    <table border="0" cellspacing="0" cellpadding="0" width="0">
                    <tr>
                        <td width="198" nowrap="nowrap">
                        <br /> Conpes 3344 de 2005 </td>
                        <td width="985">
                        <p>
                            <a href="http://www.minambiente.gov.co/images/normativa/conpes/2005/Conpes_3344_2005.pdf">http://www.minambiente.gov.co/images/normativa/conpes/2005/Conpes_3344_2005.pdf</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="198" nowrap="nowrap">
                        <p>Resolución 187 de 2007</p>
                        </td>
                        <td width="985">
                        <p>
                            <a href="https://www.icbf.gov.co/cargues/avance/docs/resolucion_minagricultura_0187_2007.htm">https://www.icbf.gov.co/cargues/avance/docs/resolucion_minagricultura_0187_2007.htm</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="198" nowrap="nowrap">
                        <p>Resolución 610 de 2010</p>
                        </td>
                        <td width="985">
                        <p>
                            <a href="http://www.minambiente.gov.co/images/normativa/app/resoluciones/bf-Resoluci%C3%B3n%20610%20de%202010%20-%20Calidad%20del%20Aire.pdf">http://www.minambiente.gov.co/images/normativa/app/resoluciones/bf-Resoluci%C3%B3n%20610%20de%202010%20-%20Calidad%20del%20Aire.pdf</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="198" nowrap="nowrap">
                        <p>Decreto 98 de 2011</p>
                        </td>
                        <td width="985">
                        <p>
                            <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=41826&amp;dt=S">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=41826&amp;dt=S</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="198" nowrap="nowrap">
                        <p>Decreto 623 de 2011</p>
                        </td>
                        <td width="985">
                        <p>
                            <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=45155">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=45155</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="198" nowrap="nowrap">
                        <p>Decreto 595 de 2015</p>
                        </td>
                        <td width="985">
                        <p>
                            <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=64242&amp;dt=S">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=64242&amp;dt=S</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="198" nowrap="nowrap">
                        <p>Decreto 1076 de 2015</p>
                        </td>
                        <td width="985">
                        <p>
                            <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=62511">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=62511</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="198" nowrap="nowrap">
                        <p>Resolución 2410 de 2015</p>
                        </td>
                        <td width="985">
                        <p>
                            <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=64167&amp;dt=S">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=64167&amp;dt=S</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="198" nowrap="nowrap">
                        <p>Resolución 2254 de 2017</p>
                        </td>
                        <td width="985">
                        <p>
                            <a href="http://www.minambiente.gov.co/images/normativa/app/resoluciones/96-res%202254%20de%202017.pdf">http://www.minambiente.gov.co/images/normativa/app/resoluciones/96-res%202254%20de%202017.pdf</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="198" nowrap="nowrap">
                        <p>Guía internacional de la OMS</p>
                        </td>
                        <td width="985">
                        <p>
                            <a href="https://apps.who.int/iris/bitstream/handle/10665/69478/WHO_SDE_PHE_OEH_06.02_spa.pdf;jsessionid=2A2C6DFE7DD9F121D3169167EA2D7E1A?sequence=1">https://apps.who.int/iris/bitstream/handle/10665/69478/WHO_SDE_PHE_OEH_06.02_spa.pdf;jsessionid=2A2C6DFE7DD9F121D3169167EA2D7E1A?sequence=1</a>
                        </p>
                        </td>
                    </tr>
                    </table>

                    <h3 class="seccion fondoAire mt40">Mapas</h3>
                    <div class="logos">
                    <div class="seccionIcono">
                        <img src="images/aire/IMG_AIRE_MAPA.jpg" width="85" height="63" alt="mapas aire" />
                    </div>
                    <div class="sinSaltoLinea">Aquí podrá observar la ubicación geográfica de las acciones de vigilancia ambiental, sintomatología y enfermedades
                        respiratorias posiblemente asociadas con la exposición a contaminación del aire en Bogotá.</div>
                    </div>
                    <ul>
                    <li>Sibilancias en adulto mayor vs. Zonas de exposición de contaminación del aire en Bogotá, año 2018</li>
                    <li>Tos en adulto mayor vs. Zonas de exposición de contaminación del aire en Bogotá, año 2018. </li>
                    <li>Ausentismo escolar en menores de 5 años vs. Zonas de exposición de contaminación del aire en Bogotá, año 2018.</li>
                    <li>Sibilancias en menores de cinco años vs. Zonas de exposición de contaminación del aire en Bogotá, año 2018.</li>
                    <li>Tos en menores de 5 años vs. Zonas de exposición de contaminación de aire en Bogotá, año 2018. </li>
                    <li>Ausentismo escolar en niños de 5 a 14 años vs. Zonas de exposición de contaminación de aire, año 2018.</li>
                    <li>Sibilancias en niños de 5 a 14 años vs. Zonas de exposición de contaminación de aire en Bogotá, año 2018. </li>
                    <li>Tos en niños de 5 a 14 años vs. Zonas de exposición de contaminación de aire en Bogotá, año 2018.</li>
                    <li>Quejas atendidas por exposición a contaminación del aire, Bogotá, año 2018.</li>
                    </ul>



                    </div>
            </div>        
    </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
