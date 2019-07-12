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
                    <span class="breadcrumb_"> | Aire, ruido y radiación electromagnética | Calidad del aire - Indicadores</span>
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
                    <div>
                        <img src="images/aire/aireINDICADORES.png" width="85" height="63" alt="Calidad aire" />
                        <h1 class="seccion fondoAire sinSaltoLinea"> Indicadores</h1>
                    </div>

                    <h2 class="centrado colorAire mt40">Calidad del aire</h2>
                    <p>Representan la tendencia de las enfermedades respiratorias y cardiovasculares y la sintomatología respiratoria posiblemente
                        asociada con la exposición a contaminación del aire en la población vulnerable de Bogotá. </p>
                    <ul>
                        <li>Prevalencia de sibilancias en menores de 5 años posiblemente asociado a material particulado en Bogotá D.C.</li>
                        <li>Link:
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/sibilanciam5/" class="colorAire">http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/sibilanciam5/</a>
                        </li>
                        <li>Prevalencia de sibilancias en niños de 5 a 14 años posiblemente asociado a material particulado, Bogotá D.C.</li>
                        <li>Link:
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/sibilancia514/" class="colorAire">http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/sibilancia514/</a>
                        </li>
                    </ul>

                    <h2 class="centrado colorAire mt40">Espacios libre de humo y tabaco</h2>
                    <p>Permiten mostrar las principales acciones afines con la implementación de la norma de espacios libres de humo de tabaco
                        y la frecuencia de la exposición al humo de tabaco en Bogotá. </p>
                    <ul>
                        <li>
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/tabaco" class="colorAire">Prevalencia de consumo de tabaco en hogares en Bogotá D.C</a>
                        </li>
                        <li>Link:
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/tabaco-hogares/" class="colorAire">http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/tabaco-hogares/</a>
                        </li>
                    </ul>


                    <h2 class="centrado colorAire mt40">Ruido</h2>
                    <p>Describen la tendencia de la frecuencia de casos relacionados con la pérdida de audición y la calidad del sueño debido
                        a la exposición a ruido y los resultados de las acciones de la vigilancia sanitaria y ambiental por contaminación
                        auditiva en Bogotá.</p>

                    </div>
                
                <!-- <div class="contenidoSecAmb centradoDiv">
                    <div>
                        <img src="images/aire/IMG_AIRE_TITULO.jpg" width="85" height="63" alt="Calidad aire: espacios libres de humo" />
                        <h1 class="seccion fondoAire sinSaltoLinea"> Espacios libres de humo</h1>
                    </div>

                    <p>
                        Permiten mostrar las principales acciones afines con la implementación de la norma de espacios libres de humo de tabaco y la frecuencia de la exposición al humo de tabaco en Bogotá.
                    </p>
                    <p class="verMas colorAire">Ver más</p>


                    <h3 class="seccion fondoAire mt40">Indicadores</h3>
                    <div class="logos">
                        <div class="seccionIcono">
                        <img src="images/aire/IMG_AGUA_INDICADORES.jpg" width="85" height="63" alt="indicadores aire" />
                        </div>
                        <div class="sinSaltoLinea">
                            Representan las tendencias de las enfermedades respiratorias y cardiovasculares y la sintomatología respiratoria posiblemente asociada con la exposición a contaminación del aire en la población vulnerable de Bogotá.
                        </div>
                    </div>


                    <h3 class="seccion fondoAire mt40">Normatividad</h3>
                    <div class="logos">
                        <div class="seccionIcono">
                        <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="normas aire" />
                        </div>
                        <div class="sinSaltoLinea">
                            Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas con la calidad del aire.
                        </div>
                    </div>


                    <h3 class="seccion fondoAire mt40">Mapas</h3>
                    <div class="logos">
                        <div class="seccionIcono">
                        <img src="images/aire/IMG_AIRE_MAPA.jpg" width="85" height="63" alt="mapas aire" />
                        </div>
                        <div class="sinSaltoLinea">
                            Aquí podrá observar la ubicación geográfica de las acciones de vigilancia ambiental, sintomatología y enfermedades respiratorias posiblemente asociadas con la exposición a contaminación del aire en Bogotá.
                        </div>
                    </div>


                    <h3 class="seccion fondoAire mt40">Documentos e investigaciones</h3>
                    <div class="logos">
                        <div class="seccionIcono">
                        <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="normas aire" />
                        </div>
                        <div class="sinSaltoLinea">
                            Compendio de documentos e investigaciones relacionados con la contaminación del aire en Bogotá.
                        </div>
                    </div>


                </div> -->

            </div>        

            
            <div class="row">
                <hr class="lineaAire mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAire bold140p">
            <div class="centrado colorAire">
                <p>Documentos e investigaciones</p>
                <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Agua docs"
                />
            </div>
            <div class="centrado colorAire">
                <p>Mapas</p>
                <img src="images/aire/aireMAPA.png" width="85" height="63" alt="Agua mapa" />
            </div>
            <div class="centrado colorAire">
                <p>Normatividad</p>
                <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Agua normas" />
            </div>
            <div class="centrado colorAire">
                <p>Calidad del aire</p>
                <img src="images/aire/aireNUBE.png" width="85" height="63" alt="Agua título" />
            </div>
            </div>
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
