@extends('layout')
@section('titulo')
    Noticias
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/news.css")}}" />
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
                            <div class="d-inline">
                                <img  class="news-title" src="{{asset("images/news/news.svg")}}" alt="" >
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div id="rootwizard">
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab1">
                                        <section class="content">
                                            <div class="content-inside">
                                                <div class="header-content row col-sm-12">
                                                    <span>
                                                        Aumenta el número expendios de carne autorizados
                                                        por la Secretaría Distrital de Salud
                                                    </span>
                                                </div>
                                                <div class="row cont-inside">
                                                    <figure class="img-content col-sm-3 ">
                                                        <img src="{{asset("images/news/expendiocarnes.jpg")}}">
                                                    </figure>
                                                    <div class="col-sm-7 offset-2">
                                                        <div class="row mr-1">
                                                            <p style="text-align: justify;">
                                                                De los cerca de 9.700 establecimientos que venden y almacenan productos cárnicos en Bogotá, 4.039 han hecho durante 2019 ante la Secretaría Distrital de Salud (SDS) la solicitud de autorización sanitaria para su funcionamiento. De estos, 1.050 expendios han sido aprobados por ajustarse a los estándares sanitarios. Sin embargo, los que no cumplan con este requisito se exponen a sanciones, que contemplan incluso la clausura 
                                                                <a href="{{asset("noticias")}}"> <em> (ver mas) </em> </a>
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
                                    <div class="tab-pane" id="tab2">
                                        <section class="content">
                                            <div class="content-inside">
                                                <div class="header-content row col-sm-12">
                                                    <span>
                                                        ENCUENTRO DE FÁRMACO VIGILANCIA
                                                    </span>
                                                </div>
                                                <div class="row cont-inside">
                                                    <figure class="img-content col-sm-3 ">
                                                        <img src="{{asset("images/news/encuentrofarmaco.jpg")}}">
                                                    </figure>
                                                    <div class="col-sm-7 offset-2">
                                                        <div class="row">
                                                            <p style="text-align: justify;">
                                                                Con la participación de más de 200 asistentes se realizóen el auditorio principal de la Secretaría Distritalde Salud (SDS) el Encuentro de Fármacovigilancia, el evento estuvo dirigido a establecimientos farmacéuticos minoristas, el propósito fundamental fue brindar capacitación y sensibilizar a los asistentes en laimportancia del reportede eventosadversosrelacionados con el uso demedicamentos
                                                                <a href="{{asset("noticias")}}"> <em> (ver mas) </em> </a>
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
                                    <div class="tab-pane" id="tab3">
                                        <section class="content">
                                            <div class="content-inside">
                                                <div class="header-content row col-sm-12">
                                                    <span>
                                                        OPERATIVO  DE VIGILANCIA EN EXPENDIOS AVÍCOLAS DE CORABASTO
                                                    </span>
                                                </div>
                                                <div class="row cont-inside">
                                                    <figure class="img-content col-sm-3 ">
                                                        <img src="{{asset("images/news/operativo.jpg")}}">
                                                    </figure>
                                                    <div class="col-sm-7 offset-2">
                                                        <div class="row">
                                                            <p style="text-align: justify;">
                                                                Con el objetivo de verificar la  adecuada manipulación, almacenamiento y comercialización de alimentos en Bogotá,   la Secretaría Distrital de Salud el pasado mes de febrero realizóvisitade inspección, vigilancia y control(IVC) en los expendios cárnicos y procesadoras de productos avícolas del sector de Corabastos. 
                                                                <a href="{{asset("noticias")}}"> <em> (ver mas) </em> </a>
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
                                    <div class="tab-pane" id="tab4">
                                        <section class="content">
                                            <div class="content-inside">
                                                <div class="header-content row col-sm-12">
                                                    <span>
                                                        Reconocimiento a 7 restaurantes populares por su calidad y cumplimiento sanitario
                                                    </span>
                                                </div>
                                                <div class="row cont-inside">
                                                    <figure class="img-content col-sm-3 ">
                                                        <img src="{{asset("images/news/restaurantes.jpg")}}" style="width:203px;">
                                                    </figure>
                                                    <div class="col-sm-7 offset-2">
                                                        <div class="row">
                                                            <p style="text-align: justify;">
                                                                La Secretaría Distrital de Salud (SDS) entrega hoy la distinción ‘Restaurantes1A’ a 7 establecimientos populares de la ciudad que se destacan por cumplir con las normas sanitarias y contar con menús balanceados y variados, buenos niveles de calidad y de atención y una adecuada manipulación de alimentos 
                                                            <a href="{{asset("noticias")}}"> <em> (ver mas) </em> </a>
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
                                <div class="navbar justify-content-end">
                                    <div class="navbar-inner">
                                        <div class="container">
                                            <ul>
                                                <li class="number-wizard"><a href="#tab1" data-toggle="tab"> 1</a></li>
                                                <li class="number-wizard"><a href="#tab2" data-toggle="tab"> 2</a></li>
                                                <li class="number-wizard"><a href="#tab3" data-toggle="tab"> 3</a></li>
                                                <li class="number-wizard"><a href="#tab4" data-toggle="tab"> 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <img  src="{{asset("images/news/indiceuv.svg")}}" alt="indice uv" style="margin-left: -8px; margin-right: -8px">
                        </div>
                        <div class="col-4">
                            <img  src="{{asset("images/news/climaactual.svg")}}" alt="clima actual" style="margin-right: -15px;">
                        </div>
                    </div>  
                    <div class="mt-3">
                        <div class="col-12" >
                            <div id='calendar'></div>
                        </div>
                    </div>              
                </div>
            </div>
            
        </div>        
    </div>

    <div class="wrapper min-ancho">
        <div class="row mb-3">
                <div class="col-md-3 col-sm-4">
                    <a href="http://autorregulacion.saludcapital.gov.co">
                        <img class="d-block altura" src="{{asset("images/news/LogoAutorregulacion.svg")}}" alt="autorregulación" style="height: 80px;">
                    </a>
                </div>
                <div class="col-lg-2 col-sm-4" >
                    <div class="d-block mt-3">
                        <a href="http://autorregulacion.saludcapital.gov.co/" class="boton-registe">
                            <img src="{{asset("images/news/BotonRegistreEstablecimiento.svg")}}" alt="registre aquín" style="height: 55px; margin-left: 5px"> 
                            {{-- Registre aquí su establecimiento --}}
                        </a>                
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="d-block mt-3" style="margin-top: 15px;">
                        <a href="{{asset("conceptos")}}" class="boton-consul">
                            {{--   Consulte aquí establecimientos con concepto favorable --}}
                            <img src="{{asset("images/news/BotonConsulteEstablecimiento.svg")}}" alt="autorregulación" style="height: 55px; margin-left: 5px;"> 
                        </a>                
                    </div> 
                </div>                
                <div class="col-lg-2 col-sm-4 offset-md-2 offset-lg-0" >
                    <div class="d-block mt-3">
                        <a href="#" class="boton-registe">
                                <img src="{{asset("images/news/BotonConsulteEstablecimiento2.svg")}}" alt="registre aquí" style="height: 55px; margin-left: 5px">
                        </a>                
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <a href="">
                        <img src="{{asset("images/news/LogoExcelenciaSanitaria.svg")}}" alt="Excelencia sanitaria" style="height: 80px; margin-left: 5px;">
                    </a>
                </div>
            </div>
    </div>
    

    <div class="content-wrapper min-ancho" >
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row mb-3">
                    <img class="d-block w-100" src="{{asset("images/indicators/IndicadorDestacado.png")}}" alt="Indicador principal">
                </div>            
            </div>    
        </div>
    </div>

    <div class="content-wrapper min-ancho">
        <div class="wrapper min-ancho">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="contactenos col-12">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12">
                                <form class="form-contactenos">
                                    <div class="row align-items-start mt-4">
                                        <div class="col-4 icono-contactenos media">
                                            <img src="{{asset("images/contactenos/IconoContactenos.svg")}}" alt="" style="width: 70px;">
                                            <div>
                                                <h3 class="pt-3">Contáctenos</h3>
                                            </div>
                                        </div>
                                        <div class="col-6 offset-2 pt-4">
                                            <label >Eres:&nbsp;&nbsp;</label>  
                                            <label class="radio-inline">
                                                Propietario  <input type="radio" name="optradio" checked> &nbsp;&nbsp;
                                            </label>
                                            <label class="radio-inline">
                                                Ciudadano <input type="radio" name="optradio">
                                            </label>                                        
                                        </div>
                                    </div>
                                    <div class="row justify-content-start mt-5">
                                        <div class="col-12">                                        
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group row">
                                                        <label for="Nombre" class="col-sm-2 col-form-label">Nombre: </label>
                                                        <div class="col-sm-9 offset-1">
                                                            <input type="text" class="form-control" id="nombre" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group row">
                                                        <label for="ocalidad" class="col-sm-3 col-form-label">Localidad: </label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="localidad" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group row">
                                                        <label for="telefono" class="col-sm-3 col-form-label">Teléfono: </label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="telefono" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group row">
                                                        <label for="temainteres" class="col-sm-5 col-form-label">Tema de interes: </label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="temaInteres" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>      
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <label for="email" class="col-sm-3 col-form-label">E-mail: </label>
                                                                <div class="col-sm-9">
                                                                    <input type="email" class="form-control" id="e-mail" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <label for="tiponegocio" class="col-sm-3 col-form-label">Tipo de negocio: </label>
                                                                <div class="col-sm-9">
                                                                    <input type="tiponegocio" class="form-control" id="tiponegocio" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                                
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-11">
                                                            <div class="form-group row">
                                                                <label for="comentarios" class="col-sm-5 col-form-label">Comentarios: </label>
                                                                <div class="col-sm-7">
                                                                    <textarea name="comentarios" id="comentarios" cols="20" rows="4"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                            </div>     
                                            <div class="row mt-1 justify-content-end">                                    
                                                <div class="col-3 offset-1">
                                                    <a href="#">
                                                        <div class="container-boton-enviar">
                                                            <div class="rectangulo-boton-enviar">
                                                                <div class="row align-items-center ml-2 mt-1">
                                                                    <div class="d-inline menu-header-interno preguntas-frecuentes">
                                                                        <label> Enviar</label> 
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>                          
                                        </div>                                        
                                    </div>
                                </form>                            
                            </div>
                            <div class="col-lg-4 col-sm-12 alpha60">
                                <div class="row mt-4">                                    
                                    <div class="col-6 offset-1">
                                        <a href="#">
                                            <div class="container-contactenos">
                                                <div class="rectangulo-contactenos">
                                                    <div class="row align-items-center ml-3 mt-1">
                                                        <div class="d-inline-block ">
                                                            <img  class="right-bottom-menu" src="{{asset("images/contactenos/IconoPreguntasFrecuentes.svg")}}" alt=""  style="height:40.9px;">
                                                        </div>
                                                        <div class="d-inline menu-header-interno preguntas-frecuentes">
                                                            <label> Preguntas Frecuentes</label> 
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">                                    
                                    <div class="col-6 offset-1">
                                        <a href="#">
                                            <div class="container-oficinas">
                                                <div class="rectangulo-contactenos">
                                                    <div class="row align-items-center ml-3">
                                                        <div class="d-inline-block ">
                                                            <img  class="right-bottom-menu" src="{{asset("images/contactenos/IconoOficinasdeAtencion.svg")}}" alt=""  style="height:40.9px;">
                                                        </div>
                                                        <div class="d-inline menu-header-interno oficinas">
                                                            <label class="mt-2">Oficinas de Atención al Ambiente</label> 
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </a>
                                    </div>                                   
                                </div>
                                <div class="row mt-3">                                    
                                    <div class="col-6 offset-1">
                                        <a href="#">
                                            <div class="puntos-recoleccion">
                                                <label >Ubica los puntos de recolección</label> 
                                            </div>
                                        </a>
                                    </div>                                   
                                </div>
                                <div class="row mt-4 ml-2">          
                                    <div class="col alig-self-center">
                                        <div class="d-inline-block">
                                            <a href="#">
                                                <img  class="right-bottom-menu" src="{{asset("images/contactenos/BotonPilas.svg")}}" alt=""  style="height:54px;">
                                            </a>
                                        </div>   
                                        <div class="d-inline-block">
                                            <a href="#">
                                                <img  class="right-bottom-menu" src="{{asset("images/contactenos/BotonBombillas.svg")}}" alt=""  style="height:54px;">
                                            </a>
                                        </div>   
                                        <div class="d-inline-block">
                                            <a href="#">
                                                <img  class="right-bottom-menu" src="{{asset("images/contactenos/BotonPuntoAzul.svg")}}" alt=""  style="height:54px;">
                                            </a>
                                        </div> 
                                        <div class="d-inline-block">
                                            <a href="#">
                                                <img  class="right-bottom-menu" src="{{asset("images/contactenos/BotonRecolecciondeAceite.svg")}}" alt=""  style="height:54px;">
                                            </a>
                                        </div>  
                                    </div>                          
                                                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>    
        </div>
    </div>
    
@endsection
@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
    
        var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [  'dayGrid' ],
        defaultDate: '2019-06-12',
        editable: true,
        lang: 'es',
        eventLimit: true, // allow "more" link when too many events
        events: [
            {
            title: 'All Day Event',
            start: '2019-06-01'
            },
            {
            title: 'Long Event',
            start: '2019-06-07',
            end: '2019-06-10'
            },
            {
            groupId: 999,
            title: 'Repeating Event',
            start: '2019-06-09T16:00:00'
            },
            {
            groupId: 999,
            title: 'Repeating Event',
            start: '2019-06-16T16:00:00'
            },
            {
            title: 'Conference',
            start: '2019-06-11',
            end: '2019-06-13'
            },
            {
            title: 'Meeting',
            start: '2019-06-12T10:30:00',
            end: '2019-06-12T12:30:00'
            },
            {
            title: 'Lunch',
            start: '2019-06-12T12:00:00'
            },
            {
            title: 'Meeting',
            start: '2019-06-12T14:30:00'
            },
            {
            title: 'Happy Hour',
            start: '2019-06-12T17:30:00'
            },
            {
            title: 'Dinner',
            start: '2019-06-12T20:00:00'
            },
            {
            title: 'Birthday Party',
            start: '2019-06-13T07:00:00'
            },
            {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2019-06-28'
            }
        ]
        });
    
        calendar.render();
    
        calendar.setOption('locale','es');
    });      
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.js"></script>
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection