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
                    <span class="breadcrumb_"> | Alimentos y bebidas | </span>
                    <span class="breadcrumb_ alimentos">Alimentos Sanos y Seguros</span>
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
                        <img src="{{asset("images/indicators/LogoAlimentosSanos.png")}}" alt="símbolo sección agua" />
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
                    <img src="images/alimentos/BannerCarnesParteInterna.png" width="100%" alt="Slider Alimentos" />
                </div>
            </div>

            <div class="row" style="text-align:justify;">
                <div class="contenidoSecAmb centradoDiv">

                    <div>
                        <p>&nbsp;</p>
                        <h1 class="seccion fondoAlimentos sinSaltoLinea"> Alimentos Sanos y Seguros</h1>
                    </div>

                    <p align="justify" class="colornegro">Este es el nombre técnico de este apartado donde se tendrá siguiente texto, acompañado de un banner distrital y un
                        logo que identifica la línea correspondiente:</p>
                    <p align="justify" class="colornegro">La línea de alimentos sanos y seguros contribuye al mejoramiento la calidad de vida de la población mediante la verificación
                        del cumplimiento de los requisitos higiénico-sanitarios y del funcionamiento y manipulación exigidos en la normatividad
                        sanitaria, promoviendo la identificación y control de factores de riesgo que puedan afectar la calidad e inocuidad
                        de los alimentos y bebidas (alcohólicas y no alcohólicas) en los establecimientos que los preparan, almacenan, distribuyen,
                        transportan y comercializan en el distrito capital. Igualmente, se promueve la acción intersectorial en la ejecución
                        de estrategias de fomento de la seguridad alimentaria y nutricional en espacios educativos, laborales y de vivienda.</p>
                        <a href="{{asset("alimentos_sanos_ver")}}">
                            <img src="images/alimentos/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>    
                            {{-- Ver más --}}
                        </a>
                </div>
                

            </div>  

            

            <div class="row">
                <hr class="lineaAlimentos mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAlimentos bold140p">
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Documentos e investigaciones</p>
                    <img src="images/alimentos/IMG_ALIMENTOS_DOCUMENTOS.jpg" width="85" height="63"
                        alt="Agua docs" />
                </div>
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Mapas</p>
                    <img src="images/alimentos/IMG_ALIMENTOS_ MAPA.jpg" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Normatividad</p>
                    <a href="Alimentos_normatividad.html">
                        <img src="images/alimentos/alimentosNORMATIVIDAD.png" width="85" height="63" alt="Agua normas" />
                    </a>
                </div>
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Indicadores</p>
                    <p class="colorAlimentos">
                        <a href="Alimentos_indicadores.html">
                        <img src="images/alimentos/IMG_ALIMENTOS_INDICADOR.jpg" width="85" height="63" />
                        </a>
                    </p>
                </div>
            </div>         
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection