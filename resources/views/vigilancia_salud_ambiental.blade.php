@extends('layout')
@section('titulo')
    Conceptos Favorables
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/menu.css")}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/secAmbiente.css")}}" />
@endsection
@section('contenido')
    <div class="wrapper min-ancho">
        <div class="container-fluid">
            <div class="row mb-3">

                <div class="col-8">
                    <img src="images/aire/iconoHome.png" width="42" height="38" alt="Ir al home" />
                    <span class="breadcrumb_"> | Vigilancia de la Salud Ambiental </span>
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

            <div class="row mb-3">
                    <div class="col-8 ">
                        <div class="row">
                            <div class=" d-inline-block" >
                                <img class="concept-title d-inline-block" src="{{asset("images/header/menu/IconoParticipacionCiudadana.svg")}}" alt="">
                            </div>
                            <div class="d-inline-block titulo-contenido px-5">
                                <label > Vigilancia de la Salud Ambiental </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4" >
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
        </div>
    </div>

    <div class="wrapper min-ancho">
        <div class="container-fluid">
            <div >
                <a href="https://twitter.com/AmbienteBogota" class="redes pl-1 pt-2" style="margin-top: 90px">
                    <img  src="{{asset("images/redessociales/Twitter.svg")}}" alt="" style="height: 80%">
                </a>
                <a href="https://www.facebook.com/AmbienteBogota/" class="redes pl-2 pt-2" style="margin-top: 150px">
                    <img  src="{{asset("images/redessociales/IconoFacebook.svg")}}" alt="" style="height: 95%">
                </a>
                <a href="https://www.youtube.com/channel/UCjboPXY4C2F3rnqP7k4_9cQ" class="redes pl-1 pt-2" style="margin-top: 210px">
                    <img  src="{{asset("images/redessociales/IconoYouTube.svg")}}" alt="" style="height: 70%">
                </a>
            </div>
                 <div>
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner Autorregulacion Home.jpg")}}" alt="">
                    </div>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-10 offset-1">
                    <div class="row">
                            <p style="text-align: justify;">
                           La vigilancia de la Salud Ambiental se enmarca en un mandato legal contenido en otras normas en la Ley 9 de 1979,
                           Decreto 3518 de 2006, Ley 1122 de 2007, Decreto 596 de 2011, Resolución 1229 de 2013, así como al Decreto Único
                           Reglamentario del Sector Salud Decreto 780 de 2016, que define a las autoridades sanitarias como entidades
                           jurídicas de carácter público, con atribuciones para ejercer funciones de rectoría, regulación, inspección,
                           vigilancia y control de los sectores públicos y privados en salud, para adoptar medidas de prevención y seguimiento
                           que garanticen la protección de la salud pública.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-10 offset-1">
                    <div class="row">
                        <img src="{{asset("images/menu/objetivos_vigilancia.png")}}" alt="">
                    </div>
                    <div class="row">
                      <p align="justify">Realizar el seguimiento continuo y sistemático de la salud ambiental, de acuerdo con procesos
                           establecidos para la notificación, recolección, procesamiento y análisis de los datos ambientales y de
                           eventos de salud; con el fin de generar información oportuna, válida y confiable para orientar medidas de prevención,
                           vigilancia y control a nivel territorial
                      </p>
                      <p>
                <h1 > <b>Objetivos Específicos</b> </h1>

                <div align="justify">Evaluar las condiciones higiénico sanitarias actuales de los establecimientos objeto de inspección,
                           vigilancia y control sanitario, orientadas a eliminar o minimizar riesgos, daños e impactos negativos para la salud humana por el uso o consumo de bienes y servicios.
                      </p>
                </div>
                <p align="justify">Gestionar los riegos asociados a las condiciones sanitarias y ambientales de los establecimientos, a través
                          de las acciones de Inspección, Vigilancia y Control en el Distrito Capital
                </p>
                <p align="justify">Desarrollar procesos de Gestión del Conocimiento, realizando análisis de la situación en salud a partir de la determinación
                          social y ambiental, el desarrollo de procesos de investigación, a fin de promover el mejoramiento de las condiciones de salud y la calidad de vida de los habitantes del Distrito Capital.
                </p>
                 </div>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
