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
                    <span class="breadcrumb_"> Zoonosis y Vectores |  </span>
                    <span class="breadcrumb_ colorETOZ"> Documetos e Investigaciones</span>
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
                        <img src="{{asset("images/Eventos zoonoticos/LOGO_ZOONOSIS.png")}}" height="93" alt="símbolo sección etoz" />
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
                    <img src="images/Eventos zoonoticos/Banner ETOZ del Home.jpg" width="100%" alt="Slider Cambio climático" />
                </div>
            </div>

            <div class="row">
                <div class="contenidoSecAmb centradoDiv">

                    <p>&nbsp;</p>
                    <h2 align="left">
                        <img src="images/Eventos zoonoticos/DOCUMENTOS.png" width="85" height="63" align="absbottom" />
                        <span class="colorETOZ">Documentos e investigaciones</span>
                    </h2>
                    <p>&nbsp;</p>
                    <p>Esta línea de intervención procura el mejoramiento de la calidad de vida y salud de la población bogotana, mediante
                    la implementación de acciones integrales de vigilancia sanitaria y epidemiológica, promoción de la salud, prevención
                    de la enfermedad y control de los eventos transmisibles de origen zoonótico, que puedan representar riesgo para la
                    salud animal y la salud humana en el Distrito Capital. </p>
                    <p>Comportamiento del evento de Vigilancia integrada de la rabia. Bogotá, 2017.
                    <span class="Izquieda">
                        <img src="images/Eventos zoonoticos/IconoPDFparaETOZ.png" width="37" height="41" alt="Cambio climático docs" />
                    </span>
                    </p>
                    <p>Comportamiento del evento de Vigilancia integrada de la rabia. Bogotá, año 2016.
                    <span class="Izquieda">
                        <img src="images/Eventos zoonoticos/IconoPDFparaETOZ.png" width="37" height="41" alt="Cambio climático docs" />
                    </span>
                    </p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            </div>

            <div class="row">
                <hr class="lineETOZ mt80" style="width: 100%;" />
            </div>

            <div class="logos colorETOZ bold140p">
                <div class="centrado">
                    <p class="colorETOZ">Documentos e investigaciones</p>
                    <img src="images/Eventos zoonoticos/DOCUMENTOS.png" width="85" height="63" alt="Aire docs" />
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Mapas</p>
                    <img src="images/Eventos zoonoticos/MAPA.png" width="85" height="63" alt="Aire mapa" />
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Normatividad</p>
                    <img src="images/Eventos zoonoticos/NORMATIVIDAD.png" width="85" height="63" alt="Aire normas" />
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Indicadores</p>
                    <img src="images/Eventos zoonoticos/INDICADORES.png" width="85" height="63" alt="Aire título" />                    </a>
                </div>
            </div>        
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
