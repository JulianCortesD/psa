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
                    <span class="colorSeguridadquimica">Favorables</span>
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
                <h2 class="colorSeguridadquimica">&nbsp;</h2>
                <h1 class="seccion fondoSeguridadquimica sinSaltoLinea mt-3">Establecimientos con concepto favorable</h1>
                <div class="contenidoSecAmb centradoDiv">
                    <p align="justify">Consulte aquí empresas que realizan aplicación de plaguicidas y/o lavado de tanques que cumplen al 100% con la norma
                    sanitaria y cuentan con concepto  favorable por parte de la Secretaria de Salud a 30 de abril de 2019. </p>
                    <table width="859" border="0">
                    <tr>
                        <td width="62">
                        <a href="https://drive.google.com/open?id=1bYWTQd5tzv8XNSeOXc84RhKBTDJx7XmV">
                            <img src="images/quimica/IconoPDFparaSeguridadQuimica.png" alt="" width="37" height="43" />
                        </a>
                        <a href="https://drive.google.com/open?id=1ulL2NLFynO4DqPvb28gzM0gFreoPU-Hd">
                        </td>
                        <td width="787" class="colorIndicadores">Listado de empresas que realizan aplicación de plaguicidas y/o lavado de tanques</td>
                    </tr>
                    </table>
                    <p align="justify">Consulte aquí los asistentes técnicos autorizados por la Secretaria de Salud como particulares para aplicación de plaguicidas
                    en Bogotá a 28 de febrero de 2019</p>
                    <table width="873" border="0">
                    <tr>
                        <td width="57">
                        <a href="https://drive.google.com/open?id=1nFUK6tLaIWH73d1lOUwcjJ6JGdVePswu">
                            <img src="images/quimica/IconoPDFparaSeguridadQuimica.png" alt="" width="37" height="43" />
                        </a>
                        <a href="https://drive.google.com/open?id=1Hq6AHQrQ-euWsSmAyThdl8VGbv6d902L">
                        </td>
                        <td width="806" class="colorIndicadores">Listado de los asistentes técnicos</td>
                    </tr>
                    </table>
                    <p>Consulte aquí las empresas almacenadoras y/o aprovechadoras de materiales como bolsas de suero, registradas bajo la
                    resolución 482 de 2009 y su concepto sanitario a 30 de noviembre de 2018</p>
                    <table width="868" border="0">
                    <tr>
                        <td width="55">
                        <a href="https://drive.google.com/open?id=1Sds9eJWSb-ojTimO4rORFt--yyWKHfkW">
                            <img src="images/quimica/IconoPDFparaSeguridadQuimica.png" alt="" width="37" height="43" />
                        </a>
                        </td>
                        <td width="803" class="colorIndicadores">Listado de empresas almacenadoras y/o aprovechadoras de materiales como bolsas de suero y su concepto sanitario</td>
                    </tr>
                    </table>
                </div>
            </div>  

            <div class="row">
                <hr class="lineaQuimica mt80" style="width: 100%;" />
            </div>

            <div class="logos colorSeguridadquimica bold140p">
                <div class="centrado">
                    <p class="colorSeguridadquimica">Documentos e investigaciones</p>
                    <a href="{{asset("quimicos_documentos")}}">
                    <img src="images/quimica/espacioDOCUMENTOS.jpg" width="85" height="63" alt="Aire docs" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Mapas</p>
                    <img src="images/quimica/espacioMAPA.jpg" width="85" height="63" alt="Aire mapa" />
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Normatividad</p>
                    <a href="{{asset("quimicos_normatividad")}}">
                        <img src="images/quimica/espacioNORMATIVIDAD.jpg" width="85" height="63" alt="Aire normas" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Indicadores</p>
                    <a href="{{asset("quimicos_indicadores")}}">
                        <img src="images/quimica/espacioINDICADORES.jpg" width="85" height="63" alt="Aire título" />
                    </a>
                </div>
            </div>          
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
