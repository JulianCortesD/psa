@extends('layout')
@section('titulo')
    Conceptos Favorables
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/concepts.css")}}" />
@endsection
@section('contenido')
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
            <div id="carouselExampleIndicators" class="carousel slide carousel-news" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner restaurante 1a del Home.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner ETOZ del Home.jpg")}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner PISA del Home.jpg")}}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/BannerHomeSemanaAmbiental.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner Autorregulacion Home.jpg")}}" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>  
        </div>    
    </div>

    <div class="wrapper min-ancho">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-6">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="d-inline" style="margin-left: -15px;">
                                <img  class="concept-title d-inline-block" src="{{asset("images/concepts/IconoEstablecimientoFavorables.svg")}}" alt="" >
                                <div class="titulo-contenido d-inline-block ">
                                    <label for=""> Establecimientos con concepto favorables </label>                                    
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <p style="text-align: justify;">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
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
                    <div class="row">
                        <div class="col-4">
                            <img src="{{asset("images/news/calidadaire.svg")}}" alt="calidad aire" style="margin-left: -15px;">
                        </div>
                        <div class="col-4">
                            <a href="http://saludata.saludcapital.gov.co/osb/index.php/2019/07/01/protejase-del-sol-lo-que-debe-saber-sobre-la-radiacion-solar/">
                                <img src="{{asset("images/news/indiceuv.svg")}}" alt="indice uv" style="margin-left: -8px; margin-right: -8px">
                            </a>
                        </div>
                        <div class="col-4">
                            <img  src="{{asset("images/news/climaactual.svg")}}" alt="clima actual" style="margin-right: -15px;">
                        </div>
                    </div>             
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-6">
                    <div class="row">
                        <img class="d-block w-100 altura" src="{{asset("images/indicators/LogoAireRuidoREM.png")}}" alt="" style="height:113px;">
                    </div>
                    <div class="row">
                        <img class="d-inline-block" src="{{asset("images/concepts/IconoPDFparaAguaSaneamiento.svg")}}" alt="" style="height: 33px;margin-left: 100px;">
                        <label for=""> Lorem ipsum dolor sit amet</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <img class="d-block w-100 altura" src="{{asset("images/indicators/LogoMedicamentosSeguros.png")}}" alt="" style="height:113px;">
                    </div>
                    <div class="row">
                        <img class="d-inline-block" src="{{asset("images/concepts/IconoPDFparaMedicamentos.svg")}}" alt="" style="height: 33px;margin-left: 100px;">
                        <label for=""> Lorem ipsum dolor sit amet</label>
                    </div>                    
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-6">
                    <div class="row">
                        <img class="d-block w-100 altura" src="{{asset("images/indicators/LogoAlimentosSanos.png")}}" alt="" style="height:113px;">
                    </div>
                    <div class="row">
                    </div>                      
                </div>
                <div class="col-6">
                    <div class="row">
                        <img class="d-block w-100 altura" src="{{asset("images/indicators/LogoSeguridadQuimica.png")}}" alt="" style="height:113px;">
                    </div>
                    <div class="row">
                        <img class="d-inline-block" src="{{asset("images/concepts/IconoPDFparaSeguridadQuimica.svg")}}" alt="" style="height: 33px;margin-left: 100px;">
                        <label for=""> Lorem ipsum dolor sit amet</label>
                    </div> 
                </div>
            </div>

            <div class="row mt-3 mb-5">
                <div class="col-6">
                    <div class="row">
                        <img class="d-block w-100 altura" src="{{asset("images/indicators/LogoAguaSaneamiento.png")}}" alt="" style="height:113px;">
                    </div>
                    <div class="row">
                        <img class="d-inline-block" src="{{asset("images/concepts/IconoPDFparaAguaSaneamiento.svg")}}" alt="" style="height: 33px;margin-left: 100px;">
                        <label for=""> Lorem ipsum dolor sit amet</label>
                    </div> 
                </div>
                <div class="col-6">
                    <div class="row">
                        <img class="d-block w-100 altura" src="{{asset("images/indicators/LogoETOZ.png")}}" alt="" style="height:113px;">
                    </div>
                    <div class="row">
                        <img class="d-inline-block" src="{{asset("images/concepts/IconoPDFparaETOZ.svg")}}" alt="" style="height: 33px;margin-left: 100px;">
                        <label for=""> Lorem ipsum dolor sit amet</label>
                    </div>
                </div>
            </div>

            
        </div>        
    </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
