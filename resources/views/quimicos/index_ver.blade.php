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
                    <span class="breadcrumb_"> | Productos químicos, industria y belleza| </span>
                    <span class="colorSeguridadquimica">Más Información</span>
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
                        <img src="{{asset("images/quimica/LogoSeguridadQuimica.png")}}" width="568" height="93" alt="símbolo sección medicamentos" />
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
                    <img src="images/quimica/Banner peluqueria parte interna.png" alt="Slider aire" width="945" />
                </div>
            </div>

            <div class="row" style="text-align:justify;">
                <div class="contenidoSecAmb centradoDiv">
                    <p>&nbsp;</p>
                    <p align="justify">Se entiende por seguridad química el conjunto de actividades encaminadas a prevenir los efectos nocivos, a corto y
                        largo plazo para la salud y el ambiente, derivados de la exposición a las sustancias químicas en cualquiera de las
                        fases de su ciclo de vida.  La línea de Seguridad Química de la Secretaría Distrital de Salud se encarga, entre otras
                        actividades, de la verificación del adecuado uso, manejo, expendio y almacenamiento de las sustancias químicas que
                        con ocasión del desarrollo de las actividades que las emplean, pueden implicar riesgos para la salud pública y la
                        contaminación del ambiente. Además, orienta acciones encaminadas a la vigilancia de eventos en salud derivados de
                        la exposición a sustancias químicas (intoxicaciones agudas y crónicas) y la gestión de riesgos relacionados con el
                        manejo de las mismas y de residuos generados en los espacios urbanos (espacios educativos, públicos, vivienda, trabajo).</p>
                    <p align="justify">Sin embargo, dado que la competencia y el alcance de las funciones de la entidad no lo permite, se exceptúa la vigilancia
                        de aquellas actividades económicas relacionadas con la producción y procesamiento de alimentos o sus materias primas,
                        la fabricación de medicamentos, cosméticos o productos para el aseo de uso doméstico.</p>
                    <p align="justify">De la misma manera la línea de intervención de Seguridad Química de la Política Distrital de Salud Ambiental, se encarga
                        entre otras actividades, de la verificación del adecuado uso, manejo, transporte y almacenamiento de las sustancias
                        químicas que con ocasión del desarrollo de las actividades que las emplean, ofrecen riesgo a la salud pública y contaminación
                        al ambiente. Además, se orienta a la prevención de los riesgos relacionados y a la promoción del correcto manejo
                        de los residuos generados durante los procesos productivo que utilizan estas sustancias.</p>
                    <p align="justify">&nbsp; </p>
                    <h2 align="left">
                        <strong class="colorSeguridadquimica">Objetivo General</strong>
                    </h2>
                    <p align="justify">
                        <br /> Orientar acciones que prevengan problemas de salud y ambiente asociados al uso de sustancias químicas peligrosas
                        en el medio donde se manipulan, teniendo en cuenta sus características fisicoquímicas a lo largo de su vida.</p>
                    <p align="justify">&nbsp;</p>
                    <h2 align="left" class="colorSeguridadquimica">
                        <strong>Objetivos Específicos</strong>
                        <br />
                    </h2>
                    <ul>
                        <li class="colorIndicadores">Identificar, priorizar y desarrollar procesos de investigación y gestión del conocimiento en temas de seguridad química.
                        </li>
                        <li class="colorIndicadores">Mejorar la seguridad química en el territorio urbano y rural del Distrito Capital. </li>
                        <li class="colorIndicadores">Promover la gestión integral de áreas contaminadas en Bogotá DC. </li>
                        <li class="colorIndicadores">Fortalecer la Gestión Integral del Riesgo asociado a la seguridad química en concordancia con el</li>
                        <li class="colorIndicadores">Plan Distrital de Prevención y Atención de Emergencias del Distrito Capital.</li>
                    </ul>
                    <p>
                        <em>&nbsp;</em>
                    </p>
                    <h2 align="left" class="colorSeguridadquimica">
                        <strong>Ejes Temáticos</strong>
                    </h2>
                    <ul>
                        <li class="colorIndicadores">Desarrollo de procesos de investigación y gestión del conocimiento en seguridad química.</li>
                        <li class="colorIndicadores">Fortalecimiento de la gestión de la seguridad química a nivel Distrital. </li>
                        <li class="colorIndicadores">Fortalecimiento institucional para la gestión de la salud ambiental en seguridad química. </li>
                        <li class="colorIndicadores">Promoción de la salud y prevención de la enfermedad en temas de seguridad química. </li>
                        <li class="colorIndicadores">Vigilancia en salud ambiental en seguridad química. </li>
                        <li class="colorIndicadores">Recuperación ambiental de áreas contaminadas. </li>
                        <li class="colorIndicadores">Preparación y administración de emergencias y recuperación post desastre.</li>
                    </ul>
                    <p align="justify">&nbsp;</p>
                    <p class="verMas colorAgua">
                        <a href="{{asset("quimicos")}}">Volver</a>
                    </p>

                </div>
            </div>  

            <div class="row">
                <hr class="lineaQuimica mt80" style="width: 100%;" />
            </div>

            <div class="logos colorSeguridadquimica bold140p">
                <div class="centrado">
                    <p class="colorSeguridadquimica">Documentos e investigaciones</p>
                    <a href="SeguridadQuimica_Documentos.html">
                    <img src="images/quimica/espacioDOCUMENTOS.jpg" width="85" height="63" alt="Aire docs" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Mapas</p>
                    <img src="images/quimica/espacioMAPA.jpg" width="85" height="63" alt="Aire mapa" />
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Normatividad</p>
                    <a href="SeguridadQuimica_Normatividad.html">
                    <img src="images/quimica/espacioNORMATIVIDAD.jpg" width="85" height="63" alt="Aire normas" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Indicadores</p>
                    <a href="SeguridadQuimica_Indicadores.html">
                    <img src="images/quimica/espacioINDICADORES.jpg" width="85" height="63" alt="Aire título" />
                    </a>
                </div>
                </div>        
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
