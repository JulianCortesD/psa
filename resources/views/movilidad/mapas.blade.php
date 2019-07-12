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
                    <span class="breadcrumb_ cambioC"> Mapas</span>
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

                    <h1 class="centrado colorCambioC mt20">Mapas de contaminación por ruido</h1>

                    <h2 class="centrado colorCambioC mt20">Mapas 2016</h2>
                    <ul>
                    <li>Habitantes con hipoacusia. Bogotá año 2016</li>
                    <li>Habitantes con hipoacusia. Bogotá año 2016</li>
                    <li> del sueño en los habitante de Bogoá. Bogotá año 2016</li>
                    </ul>

                    <h2 class="centrado colorCambioC mt20">Mapas 2015</h2>
                    <ul>
                    <li>Quejas atendidas por exposición a contaminación por ruido. Bogotá año 2015</li>
                    <li>Personas con hipoacusia. Bogotá año 2015</li>
                    <li>Calidad del sueño. Bogotá año 2015</li>
                    </ul>

                    <h2 class="centrado colorCambioC mt20">Mapas 2014</h2>
                    <ul>
                    <li>Localizción del total de enuestas relacionadas con problemas auditivos asocidos a conaminación sonora</li>
                    <li>Personas sensibilizadas sobre el impacto del ruido en la salud. Bogotá año 2014</li>
                    <li>Prevalencia de hipoacusia en zonas de contaminación por ruido. Bogotá año 2014</li>
                    <li>Quejas atendidas por exposición a contaminación por ruido. Bogotá año 2014</li>
                    <li>Prevalencia de insomnio en zonas de contaminacón por ruido. Bogotá año 2014</li>
                    <li>Localización de población con problemas auditivos asociados a la contamnación sonora</li>
                    </ul>

                    <h2 class="centrado colorCambioC mt20">Mapas 2013</h2>
                    <ul>
                    <li>Prevalencia de hipoacusia en zonas de contaminación por ruido. Bogotá año 2013</li>
                    <li>Personas sensibilizadas sobre el impacto del ruido en la salud. Bogotá año 2013</li>
                    <li>Quejas atendidas por exposición a contaminación por ruido. Bogotá año 2013</li>
                    <li>Prevalencia de insomnio en zonas de contaminacón por ruido. Bogotá año 2013</li>
                    </ul>

                    <h2 class="centrado colorCambioC mt20">Te puede interesar</h2>
                    <ul>
                    <li>Aire, ruido y radiación electromagnética</li>
                    <li>Calidad del aire</li>
                    <li>Humo de tabaco</li>
                    <li>Monóxido de carbaono</li>
                    <li>Olores ofensivos</li>
                    <li>Radiación electromagnética</li>
                    </ul>


                    <h3 class="seccion fondoCambioC mt40">Calidad del aire</h3>
                    <p>Aquí podrá observar la ubicación geográfica de las acciones de vigilancia ambiental, sintomatología y enfermedades
                    respiratorias posiblemente asociadas con la exposición a contaminación del aire en Bogotá.</p>
                    <ul>
                    <li>Sibilancias en adulto mayor vs. Zonas de exposición de contaminación del aire en Bogotá, año 2018</li>
                    <li>Tos en adulto mayor vs. Zonas de exposición de contaminación del aire en Bogotá, año 2018. </li>
                    <li>Ausentismo escolar en menores de 5 años vs. Zonas de exposición de contaminación del aire en Bogotá, año 2018.</li>
                    <li>Sibilancias en menores de cinco años vs. Zonas de exposición de contaminación del aire en Bogotá, año 2018.</li>
                    <li>Tos en menores de 5 años vs. Zonas de exposición de contaminación de aire en Bogotá, año 2018. </li>
                    <li>Ausentismo escolar en niños de 5 a 14 años vs. Zonas de exposición de contaminación de aire, año 2018.</li>
                    <li>Sibilancias en niños de 5 a 14 años vs. Zonas de exposición de contaminación de aire en Bogotá, año 2018. </li>
                    <li>Tos en niños de 5 a 14 años vs. Zonas de exposición de contaminación de aire en Bogotá, año 2018.</li>
                    <li>Quejas atendidas por exposición a contaminación del aire, Bogotá, año 2018</li>
                    </ul>

                    <h3 class="seccion fondoCambioC mt40">Espacios libres de humo de tabaco</h3>
                    <p> Aquí podrá encontrar la “ubicación geográfica” de las acciones de vigilancia, inspección y control a establecimientos
                    públicos que garanticen ambientes 100% libres de humo de tabaco y la frecuencia de casos relacionados con la exposición
                    al humo de tabaco.</p>
                    <p>Quejas atendidas por exposición a contaminación de tabaco, Bogotá, año 2018.</p>

                    <h3 class="seccion fondoCambioC mt40">Ruido</h3>
                    <p>La Secretaría Distrital de Salud realiza la vigilancia epidemiológica, ambiental y sanitaria de la contaminación auditiva
                    manteniendo actualizada la información sobre las condiciones de exposición de la población a ruido, mediante procesos
                    orientados al diseño de estrategias e intervenciones tendientes a mitigar los efectos nocivos asociados a este factor
                    de riesgo.</p>
                    <ul>
                    <li>Quejas atendidas por exposición a contaminación de ruido. Bogotá, año 2018. </li>
                    <li>Distribución de casos de buenos y malos dormidores según el ICSP Bogotá, año 2018. </li>
                    <li>Distribución de casos de buenos y malos dormidores en población, según EPWORTH Bogotá, año 2018. </li>
                    <li>Distribución de casos de buenos y malos dormidores en población, según el ICSP. Bogotá, año 2018. </li>
                    </ul>

                    <h3 class="seccion fondoCambioC mt40">Radiación electromagnética</h3>
                    <p>Muestran las ubicaciones geográficas de las acciones de vigilancia ambiental, sanitaria y eventos de interés en salud
                    pública relacionados con la exposición a radiación electromagnética en Bogotá.</p>
                    <ul>
                    <li>Quejas atendidas por exposición a contaminación de radiación electromagnética en Bogotá. Año 2018</li>
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
