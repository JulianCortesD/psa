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
                            <a href="">
                                <img src="{{asset("images/news/calidadaire.svg")}}" alt="calidad aire" class="img-calidad-aire">
                            </a>                            
                        </div>
                        <div class="col-4">
                            <a href="http://saludata.saludcapital.gov.co/osb/index.php/2019/07/01/protejase-del-sol-lo-que-debe-saber-sobre-la-radiacion-solar/">
                                <img src="{{asset("images/news/indiceuv.svg")}}" alt="indice uv" class="img-indice-uv">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="">
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
                        <img src="images/aire/IMG_AIRE_TITULO.jpg" width="85" height="63" alt="Calidad aire: espacios libres de humo" />
                        <h1 class="seccion fondoAire sinSaltoLinea"> Espacios libres de humo</h1>
                    </div>

                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de
                        relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta)
                        desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
                    <p class="verMas colorAire">Ver más</p>


                    <h3 class="seccion fondoAire mt40">Indicadores</h3>
                    <div class="logos">
                        <div class="seccionIcono">
                        <img src="images/aire/IMG_AGUA_INDICADORES.jpg" width="85" height="63" alt="indicadores aire" />
                        </div>
                        <div class="sinSaltoLinea">No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando
                        esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales
                        contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker,
                        el cual incluye versiones de Lorem Ipsum.miten mostrar las principales acciones afines con la implementación de
                        la norma de espacios libres de humo de tabaco y la frecuencia de la exposición al humo de tabaco en Bogotá. </div>
                    </div>


                    <h3 class="seccion fondoAire mt40">Normatividad</h3>
                    <div class="logos">
                        <div class="seccionIcono">
                        <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="normas aire" />
                        </div>
                        <div class="sinSaltoLinea">Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web
                        que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los
                        años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</div>
                    </div>


                    <h3 class="seccion fondoAire mt40">Mapas</h3>
                    <div class="logos">
                        <div class="seccionIcono">
                        <img src="images/aire/IMG_AIRE_MAPA.jpg" width="85" height="63" alt="mapas aire" />
                        </div>
                        <div class="sinSaltoLinea">Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices
                        en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera
                        mas de 2000 años de antiguedad.</div>
                    </div>


                    <h3 class="seccion fondoAire mt40">Documentos e investigaciones</h3>
                    <div class="logos">
                        <div class="seccionIcono">
                        <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="normas aire" />
                        </div>
                        <div class="sinSaltoLinea">Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web
                        que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los
                        años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</div>
                    </div>


                </div>

            </div>        
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
