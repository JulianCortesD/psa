@extends('layout')
@section('titulo')
    Noticias
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/news.css")}}" />
@endsection
@section('contenido')
    <div class="wrapper">
        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide carousel-news" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100 altura" src="{{asset("images/carousel/banner lluvias.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 altura" src="{{asset("images/carousel/bannersectorambiente.png")}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner Conpes.jpg")}}" alt="Third slide">
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
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-8">
                            <img  class="news-title" src="{{asset("images/news/news.svg")}}" alt="" >
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                                <div id="rootwizard">
                                        <div class="navbar">
                                          <div class="navbar-inner">
                                            <div class="container">
                                                <ul>
                                                    <li><a href="#tab1" data-toggle="tab">1</a></li>
                                                    <li><a href="#tab2" data-toggle="tab">2</a></li>
                                                    <li><a href="#tab3" data-toggle="tab">3</a></li>
                                                    <li><a href="#tab4" data-toggle="tab">4</a></li>
                                                    <li><a href="#tab5" data-toggle="tab">5</a></li>
                                                </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tab1">
                                                <section class="content">
                                                        <div class="content-inside">
                                                            <div class="header-content row col-sm-10">
                                                                <span>Bogotá intensifica operativos para verificar el cumplimiento de las normas antitabaco.</span>
                                                            </div>
                                                            <div class="row cont-inside">
                                                                <figure class="img-content col-sm-3 ">
                                                                    <img src="./imgs/Imagenes y fondos/PNG/Silueta.png">
                                                                </figure>
                                                                <div class="col-sm-8 offset-1">
                                                                    <p>Con el objetivo de desistimular el consumo <br> de tabaco y promover los espacios libres de humo, la 
                                                                    <br>Secretraría Distrital de Salud (SDS) ha desarollado <br> este año acciones de inspección, vigilancia y control
                                                                    <br> en 16.239 establecimientos abiertos al público  <br> de los cuales, en 1.054 se detectaron incumplientos<br> a la ley 
                                                                    antitabaco. <a href="#">(ver mas)</a>
                                                                    </p>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                              2
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                3
                                            </div>
                                            <div class="tab-pane" id="tab4">
                                                4
                                            </div>
                                            <div class="tab-pane" id="tab5">
                                                5
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12 date-time-title">
                           <span>Bogotá hoy</span> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 date-time" id="reloj">
                           Fecha y hora
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset("images/news/calidadaire.svg")}}" alt="" >
                        </div>
                        <div class="col-md-4">
                            <img  src="{{asset("images/news/indiceuv.svg")}}" alt="" >
                        </div>
                        <div class="col-md-4">
                            <img  src="{{asset("images/news/climaactual.svg")}}" alt="" >
                        </div>
                    </div>                
                </div>
            </div>
            
        </div>        
    </div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.js"></script>
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection