@extends('layout')
@section('titulo')
    Noticias
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/indicator.css")}}" />
@endsection
@section('contenido')
    <div class="wrapper min-ancho">
        <div class="container-fluid">
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
                                <img  class="indicator-title d-inline-block" src="{{asset("images/indicators/IconoIndicadores.svg")}}" alt="" >
                                <div class="titulo-contenido d-inline-block ">
                                    <label for=""> Noticias y publicaciones</label>                                    
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
                            <img src="{{asset("images/news/calidadaire.svg")}}" alt="calidad aire" >
                        </div>
                        <div class="col-4">
                            <img  src="{{asset("images/news/indiceuv.svg")}}" alt="indice uv" >
                        </div>
                        <div class="col-4">
                            <img  src="{{asset("images/news/climaactual.svg")}}" alt="clima actual" >
                        </div>
                    </div>             
                </div>
            </div>

           <div class="row">
                <div class="col-6">
                    <section class="content">
                        <div class="content-inside">
                            <div class="header-content row col-sm-12">
                                <span>Bogotá intensifica operativos para verificar el cumplimiento de las normas antitabaco.</span>
                            </div>
                            <div class="row cont-inside">
                                <figure class="img-content col-sm-3 ">
                                    <img src="{{asset("images/news/Silueta.png")}}">
                                </figure>
                                <div class="col-sm-8 offset-1">
                                    <div class="row">
                                        <p>Con el objetivo de desistimular el consumo de tabaco y promover los espacios libres de humo, la 
                                            Secretraría Distrital de Salud (SDS) ha desarollado este año acciones de inspección, vigilancia y control
                                            en 16.239 establecimientos abiertos al público  de los cuales, en 1.054 se detectaron incumplientos a la ley 
                                        antitabaco. <a href="#"> <em> (ver mas) </em> </a>
                                        </p>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div >
                                            <img src="{{asset("images/news/IconoMegusta.svg")}}" alt="megusta" class="iconoNew">
                                        </div>
                                        <div >
                                            <img  src="{{asset("images/news/IconoCompartir.svg")}}" alt="copmartir" class="iconoNew">
                                        </div>
                                        <div >
                                            <img  src="{{asset("images/news/IconoComentar.svg")}}" alt="comentar" class="iconoNew">
                                        </div>
                                    </div>  
                                </div>
                                </div>
                        </div>
                    </section>
                </div>
                <div class="col-6">
                    <section class="content">
                        <div class="content-inside">
                            <div class="header-content row col-sm-12">
                                <span>Bogotá intensifica operativos para verificar el cumplimiento de las normas antitabaco.</span>
                            </div>
                            <div class="row cont-inside">
                                <figure class="img-content col-sm-3 ">
                                    <img src="{{asset("images/news/Silueta.png")}}">
                                </figure>
                                <div class="col-sm-8 offset-1">
                                    <div class="row">
                                        <p>Con el objetivo de desistimular el consumo de tabaco y promover los espacios libres de humo, la 
                                            Secretraría Distrital de Salud (SDS) ha desarollado este año acciones de inspección, vigilancia y control
                                            en 16.239 establecimientos abiertos al público  de los cuales, en 1.054 se detectaron incumplientos a la ley 
                                        antitabaco. <a href="#"> <em> (ver mas) </em> </a>
                                        </p>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div >
                                            <img src="{{asset("images/news/IconoMegusta.svg")}}" alt="megusta" class="iconoNew">
                                        </div>
                                        <div >
                                            <img  src="{{asset("images/news/IconoCompartir.svg")}}" alt="copmartir" class="iconoNew">
                                        </div>
                                        <div >
                                            <img  src="{{asset("images/news/IconoComentar.svg")}}" alt="comentar" class="iconoNew">
                                        </div>
                                    </div>  
                                </div>
                                </div>
                        </div>
                    </section>
                </div>
           </div>
           <div class="row">
                <div class="col-6">
                    <section class="content">
                        <div class="content-inside">
                            <div class="header-content row col-sm-12">
                                <span>Bogotá intensifica operativos para verificar el cumplimiento de las normas antitabaco.</span>
                            </div>
                            <div class="row cont-inside">
                                <figure class="img-content col-sm-3 ">
                                    <img src="{{asset("images/news/Silueta.png")}}">
                                </figure>
                                <div class="col-sm-8 offset-1">
                                    <div class="row">
                                        <p>Con el objetivo de desistimular el consumo de tabaco y promover los espacios libres de humo, la 
                                            Secretraría Distrital de Salud (SDS) ha desarollado este año acciones de inspección, vigilancia y control
                                            en 16.239 establecimientos abiertos al público  de los cuales, en 1.054 se detectaron incumplientos a la ley 
                                        antitabaco. <a href="#"> <em> (ver mas) </em> </a>
                                        </p>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div >
                                            <img src="{{asset("images/news/IconoMegusta.svg")}}" alt="megusta" class="iconoNew">
                                        </div>
                                        <div >
                                            <img  src="{{asset("images/news/IconoCompartir.svg")}}" alt="copmartir" class="iconoNew">
                                        </div>
                                        <div >
                                            <img  src="{{asset("images/news/IconoComentar.svg")}}" alt="comentar" class="iconoNew">
                                        </div>
                                    </div>  
                                </div>
                                </div>
                        </div>
                    </section>
                </div>
                <div class="col-6">
                    <section class="content">
                        <div class="content-inside">
                            <div class="header-content row col-sm-12">
                                <span>Bogotá intensifica operativos para verificar el cumplimiento de las normas antitabaco.</span>
                            </div>
                            <div class="row cont-inside">
                                <figure class="img-content col-sm-3 ">
                                    <img src="{{asset("images/news/Silueta.png")}}">
                                </figure>
                                <div class="col-sm-8 offset-1">
                                    <div class="row">
                                        <p>Con el objetivo de desistimular el consumo de tabaco y promover los espacios libres de humo, la 
                                            Secretraría Distrital de Salud (SDS) ha desarollado este año acciones de inspección, vigilancia y control
                                            en 16.239 establecimientos abiertos al público  de los cuales, en 1.054 se detectaron incumplientos a la ley 
                                        antitabaco. <a href="#"> <em> (ver mas) </em> </a>
                                        </p>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div >
                                            <img src="{{asset("images/news/IconoMegusta.svg")}}" alt="megusta" class="iconoNew">
                                        </div>
                                        <div >
                                            <img  src="{{asset("images/news/IconoCompartir.svg")}}" alt="copmartir" class="iconoNew">
                                        </div>
                                        <div >
                                            <img  src="{{asset("images/news/IconoComentar.svg")}}" alt="comentar" class="iconoNew">
                                        </div>
                                    </div>  
                                </div>
                                </div>
                        </div>
                    </section>
                </div>
           </div>
            
        </div>        
    </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
