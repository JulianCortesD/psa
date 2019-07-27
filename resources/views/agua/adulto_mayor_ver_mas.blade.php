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
                    <span class="breadcrumb_"> | Agua y saneamiento |</span>
                    <span class="breadcrumb_ agua"> Adulto mayor</span>
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
                        <img src="{{asset("images/indicators/LogoAguaSaneamiento.png")}}" alt="símbolo sección agua" />
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
                    <img src="images/agua/bannerAguaSaneamientoParte_interna.png" width="100%" alt="Slider Agua" />
                </div>
            </div>

            <div class="row " style="text-align: justify;">
                <!-- INICIO contenido-->
                <div class="contenidoSecAmb centradoDiv">
                    <p align="justify"><strong>Hogar Geriátrico:</strong> Instituciones que ofrecen albergue, servicios sociales y atención integral en salud a la persona mayor con grado moderado o severo de incapacidad física y/o psíquica, para desarrollar las actividades de la vida diaria (levantarse, deambular, bañarse, vestirse, usar el baño, alimentarse y controlar esfínteres) o que están aquejados por enfermedades que requieren control frecuente de medicina, enfermería y servicios de rehabilitación y disciplinas afines.</p>
                    <p align="justify"><strong> Hogares Gerontológicos:</strong> Instituciones destinadas al albergue permanente o temporal de ancianos con mínima incapacidad física o psíquica, donde se ofrecen servicios sociales y de salud básicos (suministro o supervisión de tratamientos médicos, primeros auxilios, terapias, etc.). </p>
                    <p align="justify"><strong>Centro Días o Centro Vida para la Persona Mayor:</strong> Son lugares donde se reúnen las personas mayores para desarrollar actividades puramente sociales: funcionan durante el día hasta 8 horas y la persona mayor vuelve a su red familiar.</p>
                    <p align="justify">La Secretaría Distrital de Salud, ha venido promocionando para los diferentes establecimientos que actualmente funcionan en el Distrito Capital y que cumplen con las condiciones higiénico sanitarias, el buen trato a la persona mayor, cuentan con personal idóneo, con una minuta de alimentación acorde a la situación de salud a la persona mayor institucionalizada o por horas el Reconocimiento Distrital Hogar Dorado. El cual es un reconocimiento a las condiciones anteriormente mencionadas y será un reconocimiento a nivel Distrital.</p>
                    <p align="justify"><strong> Establecimientos con concepto favorable:</strong> Consulte aquí los establecimientos vigilados por la línea de calidad del agua y saneamiento básico ubicado en la ciudad de Bogotá, que cuentan con concepto favorable por parte de la Secretaria Distrital de Salud.</p>
                    <p class="mt40"><a href="https://drive.google.com/open?id=1bc1HCAgUdkDTKDKbDQ39qEwFT9Ai-gpu" class="colorAgua">Consulte normatividad</a> que rige para la apertura de hogares para adulto mayor.</p>
                    <p class="verMas colorAgua">
                        <a href="{{asset("agua_saneamiento_adulto_mayor")}}">Volver</a>
                    </p>
                </div>
                <!-- FIN contenido-->
            </div>  

            <div class="row">
                <hr class="lineaAgua mt80" style="width: 100%;" />
            </div>

           <!--  <div class="row"> -->
           <div class="logos colorAgua bold140p">
                <div class="centrado colorAgua">
                    <p class="colorAgua">Documentos e investigaciones</p>
                    <a  href="{{asset("agua_saneamiento_documentos")}}">
                      <img src="images/agua/aguaDOCUMENTOS.png" width="85" height="63" alt="Agua docs"/>
                    </a>
                    
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Mapas</p>
                    <a  href="{{asset("agua_saneamiento_mapas")}}">
                      <img src="images/agua/IMG_AGUA_MAPA.jpg" width="85" height="63" alt="Agua mapa" />
                    </a>
                    
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Normatividad</p>
                    <a href="{{asset("agua_saneamiento_normatividad")}}">
                      <img src="images/agua/aguaNORMATIVIDAD.png" width="85" height="63" alt="Agua normas" />
                    </a>
                    
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Indicadores</p>
                    <a href="{{asset("agua_saneamiento_indicadores")}}">
                      <img src="images/agua/IMG_AGUA_INDICADORES.jpg" width="85" height="63" alt="Agua título" />
                    </a>
                </div>
                <!-- <div class="centrado colorAgua">
                    <p class="colorAgua">Calidad del aire</p>
                    <a href="{{asset("agua_saneamiento_normatividad")}}">
                      <img src="images/agua/IMG_AGUA_TITULO.jpg" width="85" height="63" alt="Agua título" />
                    </a>
                </div> -->
            </div>  
            <!-- </div> -->
            
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
