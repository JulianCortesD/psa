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
                    <span class="breadcrumb_"> | Aire, ruido y radiación electromagnética | Mapas </span>
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
                <div >
                    <img src="images/aire/aireMAPA.png" width="85" height="63" alt="Calidad aire" /> 
                    <h1 class="seccion fondoAire sinSaltoLinea"> Mapas</h1></div>

                    <h2 class="centrado colorAire mt40">Detalle de mapas de contaminación por ruido</h2>

                    <h3 class="centrado colorAire">Mapas 2016</h3>
                    <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis turpis elit. Nunc tincidunt risus eu rhoncus convallis. Fusce nisi velit, dapibus eu lacus eget, bibendum dignissim lorem.</li>
                    <li>Fusce a lorem fermentum, tincidunt urna malesuada, iaculis justo. Nam eu orci non elit fermentum condimentum in et erat.</li>
                    </ul>

                    <h3 class="centrado colorAire">Mapas 2015</h3>
                    <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis turpis elit. Nunc tincidunt risus eu rhoncus convallis. Fusce nisi velit, dapibus eu lacus eget, bibendum dignissim lorem.</li>
                    <li>Fusce a lorem fermentum, tincidunt urna malesuada, iaculis justo. Nam eu orci non elit fermentum condimentum in et erat.</li>
                    <li>Ut quis turpis elit. Nunc tincidunt risus eu rhoncus convallis. Fusce nisi velit, dapibus eu lacus eget, bibendum dignissim lorem.</li>
                    </ul>

                    <h3 class="centrado colorAire">Mapas 2014</h3>
                    <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis turpis elit. Nunc tincidunt risus eu rhoncus convallis. Fusce nisi velit, dapibus eu lacus eget, bibendum dignissim lorem.</li>
                    <li>Fusce a lorem fermentum, tincidunt urna malesuada, iaculis justo. Nam eu orci non elit fermentum condimentum in et erat.</li>
                    </ul>

                    <h3 class="centrado colorAire">Mapas 2013</h3>
                    <ul>
                    <li>Curabitur elit metus, lobortis vel diam eget, semper posuere ante. Quisque vulputate diam mauris, sit amet facilisis odio rutrum sed. Duis id velit ultrices, gravida nulla a, lacinia odio. </li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis turpis elit. Nunc tincidunt risus eu rhoncus convallis. Fusce nisi velit, dapibus eu lacus eget, bibendum dignissim lorem.</li>
                    <li>Fusce a lorem fermentum, tincidunt urna malesuada, iaculis justo. Nam eu orci non elit fermentum condimentum in et erat.</li>
                    </ul>

                    <h3 class="centrado colorAire">Te puede interesar</h3>
                    <ul>
                    <li>Quisque vulputate diam mauris, sit amet facilisis odio rutrum sed. Duis id velit ultrices, gravida nulla a, lacinia odio. </li>
                    <li>Consectetur adipiscing elit. Ut quis turpis elit. Nunc tincidunt risus eu rhoncus convallis. Fusce nisi velit, dapibus eu lacus eget, bibendum dignissim lorem.</li>
                    <li>Donec pulvinar blandit ex, et pulvinar nibh auctor vel.</li>
                    <li>Fincidunt urna malesuada, iaculis justo. Nam eu orci non .</li>
                    <li>Nullam convallis ipsum id vehicula accumsan. Suspendisse ut aliquet odio. Nulla venenatis ex enim, id vestibulum</li>
                    </ul>


                    <h2 class="centrado colorAire mt40">Calidad del aire</h2>
                    <p>Aquí podrá observar la ubicación geográfica de las acciones de vigilancia ambiental, sintomatología y enfermedades respiratorias posiblemente asociadas con la exposición a contaminación del aire en Bogotá.</p>
                    <ul>
                    <li>Sibilancias en adulto mayor  vs. Zonas de exposición de contaminación del aire en Bogotá, año 2018</li>
                    <li>Tos en adulto mayor vs.  Zonas de exposición de contaminación del aire en Bogotá, año 2018. </li>
                    <li>Ausentismo escolar en  menores de 5 años vs. Zonas de exposición de contaminación del aire en Bogotá,  año 2018.</li>
                    <li>Sibilancias en menores de  cinco años vs. Zonas de exposición de contaminación del aire en Bogotá, año  2018.</li>
                    <li>Tos en menores de 5 años vs.  Zonas de exposición de contaminación de aire en Bogotá, año 2018. </li>
                    <li>Ausentismo escolar en niños  de 5 a 14 años vs. Zonas de exposición de contaminación de aire, año 2018.</li>
                    <li>Sibilancias en niños de 5 a  14 años vs. Zonas de exposición de contaminación de aire en Bogotá, año 2018. </li>
                    <li>Tos en niños de 5 a 14 años  vs. Zonas de exposición de contaminación de aire en Bogotá, año 2018.</li>
                    <li>Quejas atendidas por  exposición a contaminación del aire, Bogotá, año 2018</li>
                    </ul>

                    <h2 class="centrado colorAire mt40">Espacios libres de humo de tabaco</h2>
                    <p>Aquí podrá encontrar la “ubicación geográfica” de las acciones de vigilancia, inspección y control a establecimientos públicos que garanticen ambientes 100% libres de humo de tabaco y la frecuencia de casos relacionados con la exposición al humo de tabaco.</p>
                    <ul>
                    <li>Quejas atendidas por exposición a contaminación de  tabaco, Bogotá, año 2018. </li>
                    </ul>

                    <h2 class="centrado colorAire mt40">Ruido</h2>
                    <p>La Secretaría Distrital de Salud realiza la vigilancia epidemiológica, ambiental y sanitaria de la contaminación auditiva manteniendo actualizada la información sobre las condiciones de exposición de la población a ruido, mediante procesos orientados al diseño de estrategias e intervenciones tendientes a mitigar los efectos nocivos asociados a este factor de riesgo.</p>
                    <ul>
                    <li>Quejas atendidas por  exposición a contaminación de ruido. Bogotá, año 2018. </li>
                    <li>Distribución de casos de  buenos y malos dormidores según el ICSP Bogotá, año 2018. </li>
                    <li>Distribución de casos de  buenos y malos dormidores en población, según EPWORTH Bogotá, año 2018. </li>
                    <li>Distribución de casos de  buenos y malos dormidores en población, según el ICSP. Bogotá, año 2018. </li>
                    </ul>

                    <h2 class="centrado colorAire mt40">Radiación electromagnética </h2>
                    <p>Muestran las ubicaciones geográficas de las acciones de vigilancia ambiental, sanitaria y eventos de interés en salud pública relacionados con la exposición a radiación electromagnética en Bogotá. </p>
                    <ul>
                    <li>Quejas atendidas por exposición a contaminación de  radiación electromagnética en Bogotá. Año 2018. </li>
                    </ul>

                </div>

            </div>        
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
