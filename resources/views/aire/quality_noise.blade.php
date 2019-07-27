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
                    <span class="breadcrumb_">| Aire, ruido y radiación electromagnética | </span>
                    <span class="breadcrumb_ aire">Ruido</span>
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
                    <p align="center">
                        <span class="colorAire mt40 centrado">
                        <strong>Ruido</strong>
                        </span>
                    </p>
                    <p align="justify">En una ciudad como Bogotá con alto tráfico vehicular, concentración de establecimientos públicos permitidos en zonas
                        comerciales (bares, restaurantes, almacenes, entre otros), el tráfico aéreo o el perifoneo, es evidente el incremento
                        de la emisión de ruido el cual supera los estándares máximos permitidos en Colombia correspondientes a un máximo
                        permitido durante las horas del día en las zonas residenciales de 65 decibeles (dB); en zonas comerciales e industriales,
                        hasta 70 dB y en zonas de tranquilidad 45 dB; mientras que en las noches el máximo permitido es de 45 dB en zonas
                        residenciales; 60 dB, en zonas comerciales; 75 dB, en zonas industriales; y 45 dB, en zonas de tranquilidad. </p>
                    <p align="justify">
                        <strong>Vigilancia Epidemiológica:</strong> Analiza los posibles efectos extra-auditivos en la población debido a la exposición
                        a diferentes niveles de ruido; mediante el análisis de la información captada a través de las encuestas de percepción
                        y test de sueño aplicadas a la población de adolescentes de 11 a 17 años y en adultos de 18 a 64 años, con el propósito
                        de identificar afectación en la salud y calidad de vida.</p>
                    <p align="justify">
                        <strong>Vigilancia Sanitaria:</strong> Contempla la atención de quejas presentadas por las partes interesadas respecto al
                        ruido que es percibido por diferentes fuentes de emisión.</p>
                    <p align="justify">
                        <strong>Vigilancia Ambiental:</strong> Realiza el seguimiento a los niveles de contaminación por ruido mediante fuentes secundarias
                        como redes de ruido o la publicación de mapas de ruido elaborados por la autoridad ambiental – Secretaria Distrital
                        de Ambiente, así como la caracterización de zonas de exposición a ruido ambiental.</p>
                    <p>&nbsp;</p>
                    <p class="verMas colorAgua">
                        <a href="{{asset("aire_ruido_rem")}}">Volver</a>
                    </p>
                </div>
            </div>   
            
            <div class="row">
                <hr class="lineaAire mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAire bold140p">
                <div class="centrado colorAire">
                    <p class="colorAire">Documentos e investigaciones</p>
                    <a href="{{asset("aire_documentos")}}">
                        <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Agua docs" />
                    </a>
                    
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Mapas</p>
                    <a href="{{asset("aire_mapas")}}">
                        <img src="images/aire/aireMAPA.png" width="85" height="63" alt="Agua mapa" />
                    </a>                    
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Normatividad</p>
                    <a href="{{asset("aire_normatividad")}}">
                        <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Agua normas" />
                    </a>
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Indicadores</p>
                    <a href="{{asset("aire_indicadores")}}">
                        <img src="images/aire/aireINDICADORES.png" width="85" height="63" alt="Agua título" />
                    </a>                    
                </div>
            </div>
        </div>  
    </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
