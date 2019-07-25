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
            <div class="row mb-3">
                <div class="col-8">
                    <div class="row">
                        <div class=" d-inline-block" >
                            <img class="concept-title d-inline-block"  src="{{asset("images/news/Iconomodulonoticias.svg")}}" alt="">
                        </div>
                        <div class="d-inline-block titulo-contenido px-5">
                            <label > Noticias y publicaciones </label> 
                        </div>
                    </div>
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
                    <div id="rootwizard">
                        <div class="content-inside tab-content">
                            <div class="tab-pane active" id="tab1">
                                <section class="content">
                                    <div class="header-content col-12">
                                        <div class="row ml-1">
                                            <div class="col-12">
                                                <span style="text-align: justify">
                                                    AUMENTA EL NÚMERO EXPENDIOS DE CARNE AUTORIZADOS
                                                    POR LA SECRETARÍA DISTRITAL DE SALUD                                                            
                                                </span>
                                            </div>                                            
                                        </div>
                                        <div class="row cont-inside">
                                            <div class="col-12">                                                
                                                <div class="row mr-1">
                                                    <div class="col" style="text-align: justify">
                                                            <p>Junio 27 de 2019</p> <br>
                                                            <img src="{{asset("images/news/expendiocarnes.jpg")}}" class="rounded float-left" style="margin-right: 10px;">
                                                            De los cerca de 9.700 establecimientos que venden y almacenan productos cárnicos en Bogotá, 4.039 han hecho durante 2019 ante la Secretaría Distrital de Salud (SDS) la solicitud de autorización sanitaria para su funcionamiento. De estos, 1.050 expendios han sido aprobados por ajustarse a los estándares sanitarios. Sin embargo, los que no cumplan con este requisito se exponen a sanciones, que contemplan incluso la clausura 
                                                        <a href="{{asset("noticias")}}"> <em> (ver mas) </em> </a>
                                                    </div>
                                                </div>    
                                                <div class="row justify-content-end mb-1">
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
                                    <div class="header-content col-12">
                                        <div class="header-content row col-sm-12">
                                            <span>
                                                ENCUENTRO DE FÁRMACO VIGILANCIA
                                            </span>
                                        </div>
                                        <div class="row cont-inside">
                                           <div class="col-12">
                                                <div class="row">
                                                    <div class="col" style="text-align: justify">
                                                        <p>Febrero 15 de 2019</p> <br>
                                                        <img  src="{{asset("images/news/encuentrofarmaco.jpg")}}" class="rounded float-left" style="margin-right: 10px;">        
                                                        <p style="text-align: justify;">
                                                            Con la participación de más de 200 asistentes se realizóen el auditorio principal de la Secretaría Distritalde Salud (SDS) el Encuentro de Fármacovigilancia, el evento estuvo dirigido a establecimientos farmacéuticos minoristas, el propósito fundamental fue brindar capacitación y sensibilizar a los asistentes en laimportancia del reportede eventosadversosrelacionados con el uso demedicamentos
                                                            <a href="{{asset("noticias")}}"> <em> (ver mas) </em> </a>
                                                        </p>
                                                    </div>   
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
                                    <div class="header-content col-12">
                                        <div class="header-content row col-sm-12">
                                            <span>
                                                OPERATIVO  DE VIGILANCIA EN EXPENDIOS AVÍCOLAS DE CORABASTO
                                            </span>
                                        </div>
                                        <div class="row cont-inside">
                                            <div class="col-12">
                                                <div class="row">
                                                        <div class="col-10-justify-content-center" style="padding:10px;">
                                                            <p>Febrero 15 de 2019</p> <br>
                                                            <img  src="{{asset("images/news/operativo.jpg")}}" class="rounded float-left" style="margin-right: 10px;">
                                                            <p style="text-align: justify;">
                                                                Con el objetivo de verificar la  adecuada manipulación, almacenamiento y comercialización de alimentos en Bogotá,   la Secretaría Distrital de Salud el pasado mes de febrero realizóvisitade inspección, vigilancia y control(IVC) en los expendios cárnicos y procesadoras de productos avícolas del sector de Corabastos. 
                                                                <a href="{{asset("noticias")}}"> <em> (ver mas) </em> </a>
                                                            </p>
                                                        </div>   
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
                                    <div class="header-content col-12">
                                        <div class="header-content row col-sm-12">
                                            <span>
                                                RECONOCIMIENTO A 7 RESTAURANTES POPULARES POR SU CALIDAD Y CUMPLIMIENTO SANITARIO
                                            </span>
                                        </div>
                                        <div class="row cont-inside">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-10-justify-content-center" style="padding:10px;">
                                                        <p>Junio 27 de 2019</p> <br>
                                                        <img  src="{{asset("images/news/restaurantes.jpg")}}" style="width:203px; margin-right: 10px;" class="rounded float-left" > 
                                                        <p style="text-align: justify;">
                                                            La Secretaría Distrital de Salud (SDS) entrega hoy la distinción ‘Restaurantes1A’ a 7 establecimientos populares de la ciudad que se destacan por cumplir con las normas sanitarias y contar con menús balanceados y variados, buenos niveles de calidad y de atención y una adecuada manipulación de alimentos 
                                                            <a href="{{asset("noticias")}}"> <em> (ver mas) </em> </a>
                                                        </p>
                                                    </div>   
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
                    <div class="row">
                        <a href="{{asset("calendario")}}">
                            <div class="mt-3 container-calendar">
                                <label>Calendario de eventos Salud Ambiental</label>
                                <div class="col-10 offset-1" >
                                    <div id='calendar'></div>
                                </div>
                            </div> 
                        </a>
                         
                    </div>
                </div>
            </div>            
        </div>        
    </div>

    <div class="wrapper min-ancho">
        <div class="row mb-3">
                <div class="col-3 offset-1">
                    <a href="http://autorregulacion.saludcapital.gov.co">
                        <img class="d-block altura" src="{{asset("images/news/LogoAutorregulacion.svg")}}" alt="autorregulación" style="height: 80px;">
                    </a>
                </div>
                <div class="col-2" >
                    <div class="d-block mt-3">
                        <a href="http://appb.saludcapital.gov.co/MicroSivigilaDC/ServiciosComuni1.aspx" class="boton-registe">
                            <img src="{{asset("images/news/BotonRegistreEstablecimiento.svg")}}" alt="registre aquí" style="height: 60px; margin-left: 25px"> 
                        </a>                
                    </div>
                </div>
                <!-- <div class="col-2">
                    <div class="d-block mt-3" style="margin-top: 15px;">
                        <a href="{{asset("conceptos")}}" class="boton-consul">
                            <img src="{{asset("images/news/BotonConsulteEstablecimiento.svg")}}" alt="autorregulación" style="height: 60px; margin-left: 50px;"> 
                        </a>                
                    </div> 
                </div>    -->             
                <div class="col-2" >
                    <div class="d-block mt-3">
                        <a href="{{asset("acreditados")}}" class="boton-registe">
                            <img src="{{asset("images/news/BotonConsulteEstablecimiento2.svg")}}" alt="restablecimientos acreditados" style="height: 60px; margin-left: 65px">
                        </a>                
                    </div>
                </div>
                <div class="col-3" style="text-align: center;">
                    <a href="http://autorregulacion.saludcapital.gov.co/buenpropietario">
                        <img src="{{asset("images/news/LogoExcelenciaSanitaria.svg")}}" alt="Excelencia sanitaria" style="height: 80px; margin-left: 70px;">
                    </a>
                </div>
            </div>
    </div>
    

    <div class="content-wrapper min-ancho" >
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row mb-3">
                    <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/consumodetabaco/">
                        <img class="d-block w-100" src="{{asset("images/indicators/IndicadorDestacado.png")}}" alt="Indicador principal">
                    </a>                    
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
                                <form id ="form-contactenos" class="form-contactenos" >
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
                                                Propietario  <input type="radio" name="optradio" value="propietario" checked> &nbsp;&nbsp;
                                            </label>
                                            <label class="radio-inline">
                                                Ciudadano <input type="radio" name="optradio" value="ciudadano">
                                            </label>                                        
                                        </div>
                                    </div>
                                    <div class="row justify-content-start mt-3">
                                        <div class="col-12">                                        
                                            <div class="row mb-3">
                                                <div class="col-6">
                                                    {{-- <div class="form-group row">
                                                        <label for="Nombre" class="col-sm-2 col-form-label">Nombre: </label>
                                                        <div class="col-sm-9 offset-1">
                                                            <input type="text" class="form-control" id="nombre" placeholder="">
                                                        </div>
                                                    </div> --}}
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="inputIconBox"><i class="fas fa-user"></i></span>
                                                        </div>
                                                        <input id="name" name="nombre" type="text" class="form-control" placeholder="Nombre" required="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="inputIconBox"><i class="fas fa-flag"></i></span>
                                                        </div>
                                                        <input id="localidad" name="localidad" type="text" class="form-control" placeholder="Localidad" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="inputIconBox"><i class="fas fa-phone"></i></span>
                                                        </div>
                                                        <input id="telefono" name="telefono" type="number" class="form-control" placeholder="Teléfono" required="">
                                                    </div> 
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="inputIconBox"><i class="fas fa-heart"></i></span>
                                                        </div>
                                                        <input id="temainteres" name="temainteres" type="text" class="form-control" placeholder="Tema de Interes" required="">
                                                    </div> 
                                                </div>
                                            </div>      
                                            <div class="row mb-3">
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="inputIconBox"><i class="fas fa-envelope"></i></span>
                                                        </div>
                                                        <input id="correo" name="correo" type="email" class="form-control" placeholder="Correo electrónico" required="">
                                                    </div> 
                                                </div>            
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="inputIconBox"><i class="fas fa-edit"></i></span>
                                                        </div>
                                                        <input id="comentarios" name="comentarios" type="text" class="form-control" placeholder="Comentarios" required="">
                                                    </div> 
                                                    {{-- <div class="form-group row">
                                                        <label for="comentarios" class="col-sm-5 col-form-label">Comentarios: </label>
                                                        <div class="col-sm-7">
                                                            <textarea name="comentarios" id="comentarios" cols="18" rows="3"></textarea>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-6">
                                                    {{-- <div class="form-group row">
                                                        <label for="tiponegocio" class="col-sm-5 col-form-label">Tipo de negocio: </label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="tiponegocio" placeholder="">
                                                        </div>
                                                    </div> --}}
                                                    <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="inputIconBox"><i class="fas fa-building"></i></span>
                                                            </div>
                                                            <input id="tiponegocio" name="tiponegocio" type="text" class="form-control" placeholder="Tipo de negocio" required="">
                                                        {{-- <select name="tipo" id="tipo">
                                                                <option value="6">Agencia funeraria</option>
                                                                <option value="7">Albergue sin servicio</option>
                                                                <option value="8">Almacén</option>
                                                                <option value="9">Almacén por departamentos</option>
                                                                <option value="10">Anfiteatro universidad</option>
                                                                <option value="11">Bancos</option>
                                                                <option value="12">Baño público</option>
                                                                <option value="15">Biblioteca</option>
                                                                <option value="16">Bodega de reciclaje</option>
                                                                <option value="17">Cacharrerías y/o misceláneas</option>
                                                                <option value="20">Carrozas funerarias y/o vehículos</option>
                                                                <option value="21">Casa vecinal con o sin tienda escolar</option>
                                                                <option value="22">Casa vecinal</option>
                                                                <option value="23">Casa vecinal con servicios de alimentos</option>
                                                                <option value="24">Cementerio</option>
                                                                <option value="26">Centro de culto</option>
                                                                <option value="27">Centro día para persona mayor Fontibón</option>
                                                                <option value="28">Centros comerciales sin plazoletas de comidas</option>
                                                                <option value="30">Cinema</option>
                                                                <option value="31">Circo</option>
                                                                <option value="32">Comercio de calzado y artículos de cuero</option>
                                                                <option value="33">Comercio de prendas de vestir</option>
                                                                <option value="34">Comercio de productos textiles</option>
                                                                <option value="35">Convento</option>
                                                                <option value="36">Educación académica no formal</option>
                                                                <option value="39">Educación básica primaria sin servicios adicionales</option>
                                                                <option value="40">Educación básica primaria con o sin tienda escolar</option>
                                                                <option value="41">Educación básica primaria con servicios de alimentos</option>
                                                                <option value="42">Educación media académica</option>
                                                                <option value="43">Educación media académica con o sin tienda escolar</option>
                                                                <option value="44">Educación media académica con servicios de alimentos</option>
                                                                <option value="45">Educación preescolar con o sin tienda escolar</option>
                                                                <option value="46">Educación preescolar</option>
                                                                <option value="47">Educación preescolar con servicios de alimentos</option>
                                                                <option value="48">Educación secundaria</option>
                                                                <option value="49">Educación secundaria con o sin tienda escolar</option>
                                                                <option value="50">Educación secundaria con servicios de alimentos</option>
                                                                <option value="51">Empresa aplicadora de plaguicidas</option>
                                                                <option value="52">Empresa de lavado de tanques</option>
                                                                <option value="53">Establecimiento de venta de juguetes</option>
                                                                <option value="54">Establecimiento que combina diferentes niveles de educación</option>
                                                                <option value="55">Establecimiento que combina diferentes niveles de educación con o sin tienda escolar</option>
                                                                <option value="56">Establecimiento que combina diferentes niveles de educación con servicios de alimentos</option>
                                                                <option value="57">Estadio y/o coliseo</option>
                                                                <option value="58">Expendio de colchones y muebles</option>
                                                                <option value="59">Fabricación y expendio de cofres de cremación</option>
                                                                <option value="60">Floristería</option>
                                                                <option value="61">Funeraria con laboratorio de tanatopraxia</option>
                                                                <option value="62">Funeraria y sala de cremación</option>
                                                                <option value="63">Gimnasio especializado</option>
                                                                <option value="64">Gimnasio, centro de acondicionamiento físico</option>
                                                                <option value="65">Hangar</option>
                                                                <option value="66">Hogar de bienestar</option>
                                                                <option value="67">Hogar de paso Sin servicio</option>
                                                                <option value="68">Hogar geriátrico</option>
                                                                <option value="69">Hogar gerontológico (CIIU 8730)</option>
                                                                <option value="70">Horno crematorio</option>
                                                                <option value="71">Hotel con = o menor a 4 servicios</option>
                                                                <option value="72">Motel de 4 Servicios</option>
                                                                <option value="73">Hotel sin servicios adicionales</option>
                                                                <option value="74">Iglesia</option>
                                                                <option value="75">Instituto de medicina legal</option>
                                                                <option value="76">Jacuzzi</option>
                                                                <option value="77">Juegos de azar</option>
                                                                <option value="78">Librería y/o papelería</option>
                                                                <option value="79">Museo, galería de arte</option>
                                                                <option value="80">Oficina</option>
                                                                <option value="81">Operativos de juguetes</option>
                                                                <option value="82">Osario</option>
                                                                <option value="83">Parque recreativo</option>
                                                                <option value="84">Parqueadero</option>
                                                                <option value="85">Parques de atracciones y temáticos</option>
                                                                <option value="86">Piscina</option>
                                                                <option value="87">Polideportivo</option>
                                                                <option value="88">Pozo de agua para consumo humano</option>
                                                                <option value="90">Relleno sanitario</option>
                                                                <option value="92">Reparación de enceres domésticos</option>
                                                                <option value="93">Residencia de 4 Servicios</option>
                                                                <option value="95">Residencia Sin servicios</option>
                                                                <option value="96">Sala de velación</option>
                                                                <option value="98">Salón comunal</option>
                                                                <option value="99">Salón de eventos</option>
                                                                <option value="100">Sauna</option>
                                                                <option value="102">Sitio de encuentro sexual</option>
                                                                <option value="103">Spa</option>
                                                                <option value="104">Teatro</option>
                                                                <option value="110">Buses de transporte intermunicipal</option>
                                                                <option value="117">Turco</option>
                                                                <option value="120">Vivero</option>
                                                                <option value="122">Agencia de Especialidades Farmacéuticas</option>
                                                                <option value="123">Comercializadora de productos de aseo</option>
                                                                <option value="124">Deposito de Drogas</option>
                                                                <option value="125">Distribuidor de cosméticos</option>
                                                                <option value="126">Distribuidor de dispositivos médicos y/o reactivos para diagnóstico in vitro</option>
                                                                <option value="127">Distribuidores de productos odontológicos</option>
                                                                <option value="128">Droguería</option>
                                                                <option value="129">Droguería con arqueo de medicamentos de control especial</option>
                                                                <option value="130">Droguería de alto riesgo</option>
                                                                <option value="131">Farmacia homeopática nivel I</option>
                                                                <option value="132">Farmacia homeopática nivel II</option>
                                                                <option value="133">Farmacia-droguería</option>
                                                                <option value="134">Hiperdroguerías</option>
                                                                <option value="135">Operadores logísticos</option>
                                                                <option value="136">Pañalera</option>
                                                                <option value="138">Tienda naturista</option>
                                                                <option value="139">Tienda naturista de alto riesgo</option>
                                                                <option value="140">Vehículo transportador de medicamentos y dispositivos médicos</option>
                                                                <option value="141">Bodegas de almacenamiento de medicamentos veterinarios y/o insumos y/o materias primas para la elaboración de los mismos</option>
                                                                <option value="142">Clínica veterinaria</option>
                                                                <option value="143">Comercio de instrumentos, aparatos y accesorios de medicina, cirugía</option>
                                                                <option value="144">Comercio de materias primas agropecuarias; animales vivos</option>
                                                                <option value="145">Comercio de productos veterinarios</option>
                                                                <option value="146">Consultorio veterinario</option>
                                                                <option value="147">Droguería veterinaria</option>
                                                                <option value="148">Entrenamiento, guarderia, hospedaje y albergue de mascotas</option>
                                                                <option value="149">Laboratorio de diagnóstico veterinario</option>
                                                                <option value="150">Laboratorios productores de medicamentos veterinarios</option>
                                                                <option value="151">Peluquería y salas de cuidado para animales domésticos</option>
                                                                <option value="163">Bares, cantinas, discotecas y tabernas; salas de baile, donde se expenda y consuma licor</option>
                                                                <option value="164">Bodegas de almacenamiento, almacenamiento de productos en zona franca</option>
                                                                <option value="165">Cafetería IPS</option>
                                                                <option value="166">Carritos de leche cruda</option>
                                                                <option value="168">Cevichería</option>
                                                                <option value="169">Cigarrerías</option>
                                                                <option value="170">Cinema multiplex</option>
                                                                <option value="171">Comedores comunitarios</option>
                                                                <option value="172">Comercio de productos alimenticios</option>
                                                                <option value="173">Comidas rápidas</option>
                                                                <option value="174">Depósito de alimentos</option>
                                                                <option value="175">Depósito de bebidas alcohólicas</option>
                                                                <option value="176">Depósito de bebidas no alcohólicas</option>
                                                                <option value="177">Depósito expendio de pescado y productos de mar</option>
                                                                <option value="178">Depósitos de leche higienizada</option>
                                                                <option value="180">Expendio de bebidas alcohólicas</option>
                                                                <option value="181">Expendio de carne y productos cárnicos comestibles</option>
                                                                <option value="183">Expendio de pescado y productos de mar</option>
                                                                <option value="186">Frutería</option>
                                                                <option value="187">Heladería</option>
                                                                <option value="188">Hipermercados</option>
                                                                <option value="190">Minimercado</option>
                                                                <option value="193">Panadería</option>
                                                                <option value="194">Plantas de ensamble de refrigerios</option>
                                                                <option value="196">Plaza de mercado las Flores</option>
                                                                <option value="197">Plaza de mercado 12 de Octubre</option>
                                                                <option value="198">Plaza de mercado 20 de Julio de San Cristóbal</option>
                                                                <option value="199">Plaza de mercado 7 de Agosto de Chapinero</option>
                                                                <option value="200">Plaza de mercado Codabas</option>
                                                                <option value="201">Plaza de mercado Concordia</option>
                                                                <option value="202">Plaza de mercado Coopminduagro</option>
                                                                <option value="203">Plaza de mercado Corabastos</option>
                                                                <option value="204">Plaza de mercado Corcoboc de Pablo VI Bosa</option>
                                                                <option value="205">Plaza de mercado Corvec de Pablo VI Bosa</option>
                                                                <option value="206">Plaza de mercado Cruces</option>
                                                                <option value="207">Plaza de mercado el Carmen</option>
                                                                <option value="208">Plaza de mercado Esperanza</option>
                                                                <option value="209">Plaza de mercado Ferias de Engativá</option>
                                                                <option value="210">Plaza de mercado Fontibón</option>
                                                                <option value="211">Plaza de mercado Kennedy</option>
                                                                <option value="212">Plaza de mercado las Nieves de Centro Oriente</option>
                                                                <option value="213">Plaza de mercado Lucero de Vista Hermosa</option>
                                                                <option value="214">Plaza de mercado Paloquemao</option>
                                                                <option value="215">Plaza de mercado Perseverancia</option>
                                                                <option value="216">Plaza de mercado Quirigua</option>
                                                                <option value="217">Plaza de mercado Restrepo</option>
                                                                <option value="218">Plaza de mercado Ricaurte de Centro Oriente</option>
                                                                <option value="219">Plaza de mercado Rumichaca</option>
                                                                <option value="220">Plaza de mercado Samper Mendoza</option>
                                                                <option value="221">Plaza de mercado San Benito</option>
                                                                <option value="222">Plaza de mercado San Carlos</option>
                                                                <option value="223">Plaza de mercado San Francisco</option>
                                                                <option value="224">Plaza de mercado Santander de Rafael Uribe</option>
                                                                <option value="225">Plaza de mercado Trinidad Galán</option>
                                                                <option value="226">Plaza de mercado Tunjuelito</option>
                                                                <option value="228">Restaurante</option>
                                                                <option value="229">Restaurante IPS</option>
                                                                <option value="230">Supermercado</option>
                                                                <option value="231">Supermercado de frutas y verduras</option>
                                                                <option value="232">Teatro, auditorios, salas de conciertos</option>
                                                                <option value="253">Tiendas</option>
                                                                <option value="254">Trilladora de harina de maíz y otros cereales</option>
                                                                <option value="255">Cafetería</option>
                                                                <option value="256">Vehículos transportadores de refrigerios</option>
                                                                <option value="257">Vehículos transportadores de alimentos</option>
                                                                <option value="258">Vehículos transportadores de carne</option>
                                                                <option value="259">Vehículos transportadores de leche</option>
                                                                <option value="262">Aserraderos de madera</option>
                                                                <option value="263">Cambio de aceite</option>
                                                                <option value="264">Canteras de piedra, pizarra, cascajo, arena</option>
                                                                <option value="265">Centro de Estética Facial o corporal sin uso de aparatología</option>
                                                                <option value="266">Centro de Estética Facial o corporal con uso de aparatología</option>
                                                                <option value="267">Comercializadoras al por menor de agroquímicos y plaguicidas microempresas y pequeñas empresas</option>
                                                                <option value="269">Comercializadoras al por mayor de agroquímicos y plaguicidas medianas y grandes empresas</option>
                                                                <option value="270">Comercializadoras al por mayor de flores y plantas ornamentales medianas y grandes empresas</option>
                                                                <option value="272">Comercializadoras al por mayor de pinturas</option>
                                                                <option value="273">Comercializadoras al por mayor de productos químicos medianas y grandes empresas</option>
                                                                <option value="275">Comercializadoras al por menor de pinturas</option>
                                                                <option value="276">Comercializadoras al por menor productos químicos microempresas y pequeñas empresas</option>
                                                                <option value="277">Comercializadoras de gases industriales microempresas y pequeñas empresas</option>
                                                                <option value="278">Comercializadoras de madera, con procesos de corte y/o pulido</option>
                                                                <option value="279">Comercializadoras de materiales metálicos, con procesos de corte o pulido</option>
                                                                <option value="280">Comercializadoras de productos químicos de uso agropecuario medianas y grandes empresas</option>
                                                                <option value="281">Comercializadoras de productos químicos de uso agropecuario microempresas y pequeñas empresas</option>
                                                                <option value="282">Curtidoras de cueros</option>
                                                                <option value="283">Depósitos de materiales de construcción</option>
                                                                <option value="284">Empresas de tratamiento o eliminación de residuos peligrosos</option>
                                                                <option value="285">Empresas transportadoras de residuos peligrosos</option>
                                                                <option value="286">Escuela de estética (educación para el trabajo y desarrollo humano) con uso de aparatología</option>
                                                                <option value="287">Escuela de estética (educación para el trabajo y desarrollo humano) sin uso de aparatología</option>
                                                                <option value="288">Escuela de estética (educación superior) con uso de aparatología</option>
                                                                <option value="289">Escuela de estética (educación superior) sin uso de aparatología</option>
                                                                <option value="290">Escuela de peluquería</option>
                                                                <option value="291">Establecimientos de conservación y tratamiento de la madera</option>
                                                                <option value="292">Establecimientos de recarga y mantenimiento de extintores medianas y grandes empresas</option>
                                                                <option value="293">Establecimientos de recarga y mantenimiento de extintores microempresas y pequeñas empresas</option>
                                                                <option value="294">Establecimientos de reparación y mantenimiento de maquinaria y equipo medianas y grandes empresas</option>
                                                                <option value="295">Establecimientos de reparación y mantenimiento de maquinaria y equipo microempresas y pequeñas empresas</option>
                                                                <option value="296">Estaciones de servicio</option>
                                                                <option value="297">Evento estética</option>
                                                                <option value="298">Evento peluquería</option>
                                                                <option value="299">Expendios de gas propano microempresas y pequeñas empresas</option>
                                                                <option value="300">Fábricas de artículos en fibra de vidrio</option>
                                                                <option value="303">Fábricas de formas básicas en fibra de vidrio</option>
                                                                <option value="304">Fábrica de hilazas</option>
                                                                <option value="305">Fábrica de muñecos plásticos</option>
                                                                <option value="307">Fábricas de productos en madera</option>
                                                                <option value="308">Fábricas de productos termoplásticos</option>
                                                                <option value="309">Fábricas de recipientes en madera</option>
                                                                <option value="310">Fábricas de rodillos</option>
                                                                <option value="311">Fábricas de baterías</option>
                                                                <option value="312">Fábricas de abonos y fertilizantes medianas y grandes empresas</option>
                                                                <option value="313">Fábricas de abonos y fertilizantes microempresas y pequeñas empresas</option>
                                                                <option value="314">Impresión, tipografías y litografías medianas y grandes empresas</option>
                                                                <option value="315">Fábricas de acabados en madera</option>
                                                                <option value="316">Fábricas de accesorios plásticos</option>
                                                                <option value="317">Fábricas de accesorios y repuestos para automotores</option>
                                                                <option value="318">Fábricas de adornos e insignias militares</option>
                                                                <option value="319">Fábricas de agregados tubos, ladrillos, etc.</option>
                                                                <option value="320">Fábricas de agroquímicos y plaguicidas medianas y grandes empresas</option>
                                                                <option value="321">Fábricas de agroquímicos y plaguicidas microempresas y pequeñas empresas</option>
                                                                <option value="322">Fábricas de alambre, piezas metálicas, productos metálicos, productos de aluminio, tornillos</option>
                                                                <option value="323">Fábricas de artículos de corcho y cestería</option>
                                                                <option value="324">Fábricas de artículos de plástico</option>
                                                                <option value="325">Fábricas de artículos textiles fabricados en materateriales sintéticos</option>
                                                                <option value="326">Fábricas de avisos publicitarios medianas y grandes empresas</option>
                                                                <option value="327">Fábricas de avisos publicitarios microempresas y pequeñas empresas</option>
                                                                <option value="328">Fábricas de balones medianas y grandes empresas</option>
                                                                <option value="329">Fábricas de balones microempresas y pequeñas empresas</option>
                                                                <option value="330">Fábricas de bolsos de cuero y artículos similares</option>
                                                                <option value="331">Fábricas de cables medianas y grandes empresas</option>
                                                                <option value="332">Fábricas de cables microempresas y pequeñas empresas</option>
                                                                <option value="333">Fábricas de cajas mortuorias</option>
                                                                <option value="334">Fábricas de calzado</option>
                                                                <option value="335">Fábricas de carnaza para mascotas</option>
                                                                <option value="336">Fábricas de carpas</option>
                                                                <option value="337">Fábricas de carrocerías</option>
                                                                <option value="338">Fábricas de chaquetas en cuero</option>
                                                                <option value="339">Fábricas de cobijas</option>
                                                                <option value="340">Fábricas de cocinas integrales</option>
                                                                <option value="341">Fábricas de colchones</option>
                                                                <option value="342">Fábricas de cortinas en madera</option>
                                                                <option value="343">Fábricas de cera artificial medianas y grandes empresas</option>
                                                                <option value="344">Fábricas de cera artificial microempresas y pequeñas empresas</option>
                                                                <option value="345">Fábricas de productos de yeso medianas y grandes empresas</option>
                                                                <option value="346">Fábricas de productos de yeso microempresas y pequeñas empresas</option>
                                                                <option value="347">Fábricas de empaques plásticos</option>
                                                                <option value="348">Fábricas de encajes de fibras artificiales y sintéticas en tejido de punto</option>
                                                                <option value="349">Fábricas de envases de plástico</option>
                                                                <option value="350">Fábricas de estandartes, banderas y etiquetas militares</option>
                                                                <option value="352">Fábricas de estructuras metálicas</option>
                                                                <option value="353">Fábricas de formas básicas de caucho</option>
                                                                <option value="355">Fábricas de formas básicas de poliéster y plástico en general</option>
                                                                <option value="356">Fábricas de formas primarias de productos de plástico</option>
                                                                <option value="358">Fábricas de forros para autos</option>
                                                                <option value="359">Fábricas de juguetes industria de la madera</option>
                                                                <option value="360">Fábricas de juguetes industria del plástico</option>
                                                                <option value="361">Fábricas de juguetes establecimientos que utilicen como materia prima el metal</option>
                                                                <option value="362">Fábricas de luminarias medianas y grandes empresas</option>
                                                                <option value="363">Fábricas de luminarias microempresas y pequeñas empresas</option>
                                                                <option value="364">Fábricas de maderas aglomerada</option>
                                                                <option value="365">Fábricas de marcos</option>
                                                                <option value="367">Fábricas de motores y partes para motor</option>
                                                                <option value="368">Fábricas de muebles en madera para el comercio</option>
                                                                <option value="369">Fábricas de muebles en madera para el hogar</option>
                                                                <option value="370">Fábricas de muebles en madera para oficina</option>
                                                                <option value="371">Fábricas de muebles metálicos</option>
                                                                <option value="372">Fábricas de otros artículos textiles</option>
                                                                <option value="373">Fábricas de papel, cartón, envases y embalajes de papel y cartón medianas y grandes empresas</option>
                                                                <option value="374">Fábricas de papel, cartón, envases y embalajes de papel y cartón microempresas y pequeñas empresas</option>
                                                                <option value="375">Fábricas de partes del calzado en cuero</option>
                                                                <option value="376">Fábricas de partes para bicicleta medianas y grandes empresas</option>
                                                                <option value="377">Fábricas de partes para bicicleta microempresas y pequeñas empresas</option>
                                                                <option value="378">Fábricas de partes y piezas de carpintería para edificios y construcciones</option>
                                                                <option value="379">Fábricas de pegantes medianas y grandes empresas</option>
                                                                <option value="380">Fábricas de pegantes microempresas y pequeñas empresas</option>
                                                                <option value="381">Fábricas de bombas, compresores, grifos y válvulas</option>
                                                                <option value="382">Fábricas de piezas metálicas, maquinaria industrial general, cocinas, hornos y estufas</option>
                                                                <option value="383">Fábricas de piezas de ferretería</option>
                                                                <option value="384">Fábricas de pinturas</option>
                                                                <option value="385">Fábricas de prendas de vestir</option>
                                                                <option value="386">Fabricas de productos de aseo de uso industrial medianas y grandes empresas</option>
                                                                <option value="387">Fabricas de productos de aseo de uso industrial microempresas y pequeñas empresas</option>
                                                                <option value="388">Fábricas de productos de caucho</option>
                                                                <option value="389">Fábricas de productos de caucho en formas primarias</option>
                                                                <option value="390">Fábricas de productos de cera y betunes medianas y grandes empresas</option>
                                                                <option value="391">Fábricas de productos de cera y betunes microempresas y pequeñas empresas</option>
                                                                <option value="392">Fábricas de productos de cuero y lona</option>
                                                                <option value="394">Fábricas de productos de mármol y piedra medianas y grandes empresas</option>
                                                                <option value="395">Fábricas de productos de mármol y piedra microempresas y pequeñas empresas</option>
                                                                <option value="396">Fábricas de productos de poliéster</option>
                                                                <option value="397">Fábricas de productos de vidrio medianas y grandes empresas</option>
                                                                <option value="398">Fábricas de productos de vidrio microempresas y pequeñas empresas</option>
                                                                <option value="399">Fábricas de productos de hierro y acero</option>
                                                                <option value="400">Fábricas de reatas para cortinas</option>
                                                                <option value="401">Fábricas de ropa de lana en tejido de punto y de géneros</option>
                                                                <option value="402">Fábricas de suelas de caucho</option>
                                                                <option value="403">Fábricas de tableros laminados y contrachapados</option>
                                                                <option value="404">Fábricas de tanques y recipientes de metal</option>
                                                                <option value="405">Fábricas de tapetes y alfombras</option>
                                                                <option value="406">Fábricas de tejidos</option>
                                                                <option value="407">Fábricas de telas</option>
                                                                <option value="408">Fábricas de velas, veladoras, cirios, espermas medianas y grandes empresas</option>
                                                                <option value="409">Fábricas de velas, veladoras, cirios, espermas microempresas y pequeñas empresas</option>
                                                                <option value="410">Ferretería</option>
                                                                <option value="411">Fundidoras de metales ferrosos</option>
                                                                <option value="412">Fundidoras de metales no ferrosos</option>
                                                                <option value="413">Fundidoras de aluminio</option>
                                                                <option value="415">Laboratorios fotográficos microempresas y pequeñas empresas</option>
                                                                <option value="416">Lavaderos de vehículos</option>
                                                                <option value="417">Lavanderías</option>
                                                                <option value="419">Montallantas</option>
                                                                <option value="420">Peluquerías</option>
                                                                <option value="421">Procesadoras de minerales provenientes de canteras, o laderas de río, incluyendo trituración y molienda medianas y grandes empresas</option>
                                                                <option value="422">Procesadoras de minerales provenientes de canteras, o laderas de río, incluyendo trituración y molienda microempresas y pequeñas empresas</option>
                                                                <option value="423">Procesadoras de papel medianas y grandes empresas medianas y grandes empresas</option>
                                                                <option value="424">Procesadoras de papel microempresas y pequeñas empresas</option>
                                                                <option value="425">Gestores de residuos peligrosos</option>
                                                                <option value="426">Reparación de muebles</option>
                                                                <option value="427">Reencauchadoras de llantas</option>
                                                                <option value="430">Servicio de recubrimiento electrolítico; cromado, fosfatado, pasivado, zincado, anodizado, etc</option>
                                                                <option value="433">Servicios de recubrimiento de metales no galvánico</option>
                                                                <option value="434">Talleres de mecánica de automóviles</option>
                                                                <option value="435">Talleres de mecánica de motocicletas</option>
                                                                <option value="436">Talleres de artesanía y bisutería medianas y grandes empresas</option>
                                                                <option value="437">Talleres de artesanía y bisutería microempresas y pequeñas empresas</option>
                                                                <option value="438">Talleres de elaboración de joyas microempresas y pequeñas empresas</option>
                                                                <option value="439">Talleres de reparación de joyas microempresas y pequeñas empresas</option>
                                                                <option value="440">Servicio de tapicería de automóviles</option>
                                                                <option value="441">Teñedurías de pieles</option>
                                                                <option value="442">Tintorerías y demás servicios de acabado textil</option>
                                                                <option value="444">Transformadoras o recicladoras de plástico</option>
                                                                <option value="445">Tratamiento térmico</option>
                                                                <option value="446">Comercializadoras al por menor de productos para mantenimiento automotriz</option>
                                                                <option value="457">Plaza de mercado Agrópolis</option>
                                                                <option value="477">Comercializadoras de artículos para industrias de calzado medianas y grandes empresas</option>
                                                                <option value="478">Comercializadoras de productos de aseo y limpieza medianas y grandes empresas</option>
                                                                <option value="479">Producción de sal para ganado medianas y grandes empresas</option>
                                                                <option value="480">Fabrica de maquinaria agropecuaria medianas y grandes empresas</option>
                                                                <option value="481">Reparación de cardanes medianas y grandes empresas</option>
                                                                <option value="482">Impresión, tipografías y litografías microempresas y pequeñas empresas</option>
                                                                <option value="483">Comercializadoras de artículos para industrias de calzado microempresas y pequeñas empresas</option>
                                                                <option value="484">Comercializadoras de productos de aseo y limpieza microempresas y pequeñas empresas</option>
                                                                <option value="485">Producción de sal para ganado microempresas y pequeñas empresas</option>
                                                                <option value="486">Fabricas de maquinaria agropecuaria microempresas y pequeñas empresas</option>
                                                                <option value="487">Reparación de cardanes microempresas y pequeñas empresas</option>
                                                                <option value="488">Comercializadoras de productos y utensilios domésticos microempresas y pequeñas empresas</option>
                                                                <option value="491">Alquiler de maquinaria y equipos especializados medianas y grandes empresas</option>
                                                                <option value="492">Alquiler de maquinaria y equipos especializados microempresas y pequeñas empresas</option>
                                                                <option value="494">Cultivo de flores medianas y grandes empresas</option>
                                                                <option value="495">Desarrollo de actividades de servicios medianas y grandes empresas</option>
                                                                <option value="496">Reparación de enseres domésticos medianas y grandes empresas</option>
                                                                <option value="497">Comercializadoras de productos y utensilios domésticos medianas y grandes empresas</option>
                                                                <option value="498">Comercializadoras de maquinaria y equipos medianas y grandes empresas</option>
                                                                <option value="499">Cultivo de flores microempresas y pequeñas empresas</option>
                                                                <option value="500">Reparación de enseres domésticos microempresas y pequeñas empresas</option>
                                                                <option value="501">Desarrollo de actividades de servicios microempresas y pequeñas empresas</option>
                                                                <option value="502">Tratamiento de aceites y grasas mediante procesos químicos microempresas y pequeñas empresas</option>
                                                                <option value="503">Tratamiento de aceites y grasas mediante procesos químicos medianas y grandes empresas</option>
                                                                <option value="504">Perforación de pozos para exploración medianas y grandes empresas</option>
                                                                <option value="505">Perforación de pozos para exploración microempresas y pequeñas empresas</option>
                                                                <option value="506">Lavado y desinfección de tanques de agua potable</option>
                                                                <option value="507">Lavado y desinfección de tanques de agua potable y mantenimiento de motobombas</option>
                                                                <option value="508">Control de vectores</option>
                                                                <option value="509">Control de vectores/Distribución de plaguicidas para salud pública</option>
                                                                <option value="510">Control de vectores/Lavado y desinfección de tanques de agua potable</option>
                                                                <option value="511">Control vectores/Lavado y desinfección de tanques de agua potable/ recarga de extintores</option>
                                                                <option value="512">Fábrica de productos de tabaco medianas y grandes empresas</option>
                                                                <option value="513">Fábrica de productos de tabaco microempresas y pequeñas empresas</option>
                                                                <option value="515">Establecimientos de mezcla de disolventes para elaboración de otros productos microempresas y pequeñas empresas</option>
                                                                <option value="516">Cardadora</option>
                                                                <option value="517">Catering (en establecimientos educativos)</option>
                                                                <option value="518">Catering (privados)</option>
                                                                <option value="519">Clubes</option>
                                                                <option value="520">Depósito de llantas y neumáticos usados</option>
                                                                <option value="521">Óptica sin consultorio</option>
                                                                <option value="522">Óptica sin consultorio con taller óptico</option>
                                                                <option value="523">Óptica sin consultorio y distribuidor</option>
                                                                <option value="525">Taller óptico</option>
                                                                <option value="526">Óptica con consultorio</option>
                                                                <option value="527">Óptica con consultorio y taller óptico</option>
                                                                <option value="528">Fabricas de partes electrónicas medianas y grandes empresas</option>
                                                                <option value="529">Fabricas de partes electrónicas microempresas y pequeñas empresas</option>
                                                                <option value="532">Laboratorio de análisis físico - químico microempresas y pequeñas empresas</option>
                                                                <option value="534">Fabricación de cemento, cal y yeso</option>
                                                                <option value="535">Fabricas de estructuras para explotación de minas y canteras</option>
                                                                <option value="536">Fabricas de maquinaria de uso especial medianas y grandes empresas</option>
                                                                <option value="537">Fabricas de maquinaria de uso especial microempresas y pequeñas empresas</option>
                                                                <option value="538">Fábricas de pantimedias</option>
                                                                <option value="539">Servicios de ornamentación</option>
                                                                <option value="540">Acabados de muebles metálicos</option>
                                                                <option value="541">Fabricas de maquinaria para la elaboración de alimentos y tabaco medianas y grandes empresas</option>
                                                                <option value="542">Fabricas de maquinaria para la elaboración de alimentos y tabaco microempresas y pequeñas empresas</option>
                                                                <option value="543">Comercializadoras al por mayor de productos para mantenimiento automotriz</option>
                                                                <option value="544">Vidriería y Marquetería microempresas y pequeñas empresas</option>
                                                                <option value="545">Comercializadores de equipo biomedico y dispositiv</option>
                                                                <option value="546">Profesionales independientes de la Salud (Actividades de la práctica médica, sin internación)</option>
                                                                <option value="547">Profesionales independientes de la Salud (Actividades de la práctica odontológica)</option>
                                                                <option value="548">Profesionales independientes de la Salud (Actividades de apoyo diagnóstico)</option>
                                                                <option value="549">Profesionales independientes de la Salud (Actividades de apoyo terapéutico)</option>
                                                                <option value="550">Profesionales independientes de la Salud (Otras actividades de atención de la salud humana)</option>
                                                                <option value="551">Servicios de transporte especial de pacientes (Otras actividades de atención de la salud humana)</option>
                                                                <option value="552">Actividades de atención residencial medicalizada de tipo general</option>
                                                                <option value="553">Actividades de atención residencial, para el cuidado de pacientes con retardo mental, enfermedad mental y consumo de sustancias psicoactivas.</option>
                                                                <option value="554">Instituciones Prestadoras de Servicios de Salud (Actividades de hospitales y clínicas, con internación)</option>
                                                                <option value="555">Instituciones Prestadoras de Servicios de Salud (Actividades de la práctica médica, sin internación)</option>
                                                                <option value="556">Instituciones Prestadoras de Servicios de Salud (Actividades de la práctica odontológica)</option>
                                                                <option value="557">Instituciones Prestadoras de Servicios de Salud (Actividades de apoyo diagnóstico)</option>
                                                                <option value="558">Instituciones Prestadoras de Servicios de Salud (Actividades de apoyo terapéutico)</option>
                                                                <option value="559">Instituciones Prestadoras de Servicios de Salud (Otras actividades de atención de la salud humana)</option>
                                                                <option value="560">Instituciones Prestadoras de Servicios de Salud (Actividades de atención en instituciones para el cuidado de personas mayores y/o discapacitadas)</option>
                                                                <option value="561">Tatuaje, Perforación y/o Modificación Corporal</option>
                                                                <option value="562">Almacenamiento de carne y productos cárnicos comestibles</option>
                                                                <option value="1562">Remontadoras de calzado microempresas y pequeñas empresas</option>
                                                                <option value="1563">TERMINAL PORTUARIO, TRANSPORTE TERRESTRE DE PASAJEROS TRANSPORTE AEREO DE PASAJEROS Y CARGA ALMACENAMIENTO DE MERCANCIAS (AEROPUERTO)</option>
                                                                <option value="1564">TERMINAL PORTUARIO, TRANSPORTE TERRESTRE DE PASAJEROS TRANSPORTE AEREO DE PASAJEROS Y CARGA ALMACENAMIENTO DE MERCANCIAS (Z0NA FRANCA)</option>
                                                                <option value="1565">BODEGAS Y DEPOSITOS DE MERCANCIAS, ALMACENAMIENTO Y DEPOSITO DE MERCANCIAS</option>
                                                                <option value="1566">OPERADORES EN TIERRA AEROPUERTO, OTRAS ACTIVIDADES &nbsp;DE PUERTOS Y AEROPUERTOS</option>
                                                                <option value="1567">OTROS ESTABLECIMIENTOS QUE ELABORAN PRODUCTOS ALIMENTICIOS PARA CONSUMO EN AERONAVES, &nbsp;ELABORACION DE PRODUCTOS ALIMENTICIOS PARA CONSUMO EN AERONAVES</option>
                                                                <option value="1568">TERMINAL PORTUARIO, TRANSPORTE TERRESTRE DE PASAJEROS TRANSPORTE AEREO DE PASAJEROS Y CARGA ALMACENAMIENTO DE MERCANCIAS (TERRESTRE)</option>
                                                                <option value="1569">Centro noche para persona mayor Fontibón</option>
                                                                <option value="1570">Centros de Diagnóstico Automotriz microempresas y pequeñas empresas</option>
                                                                <option value="1571">Comercializadora de carbón microempresas y pequeñas empresas</option>
                                                                <option value="1572">Servicio de corte y doblado</option>
                                                                <option value="1573">Servicio de soldadura</option>
                                                                <option value="1574">Servicio de torno</option>
                                                                <option value="1575">Hogar gerontológico (CIIU 8810)</option>
                                                                <option value="1576">Fabricación de artículos de piel</option>
                                                                <option value="1577">Elaboración de alimentos preparados para animales</option>
                                                                <option value="1579">Clínicas y Consultorios veterinarios</option>
                                                                <option value="1580">Laboratorio de diagnóstico médico veterinario</option>
                                                                <option value="1581">Criaderos de caninos y/o felinos</option>
                                                                <option value="1583">Agropunto</option>
                                                                <option value="1584">Comercialización de animales de compañía</option>
                                                                <option value="1585">Comercialización de alimentos para animales</option>
                                                                <option value="1587">Pet shop</option>
                                                                <option value="1588">Peluquerias para animales de compañía (CIIU 7500)</option>
                                                                <option value="1589">Guardería para caninos y felinos (CIIU 7500)</option>
                                                                <option value="1590">Establecimientos para adiestramiento canino</option>
                                                                <option value="1591">SPA para animales de compañía</option>
                                                                <option value="1592">Refugio u hogar de paso para animales compañía</option>
                                                                <option value="1593">Establecimientos para pompas funebres o disposición final de cadaveres de animales de compañía</option>
                                                                <option value="1594">Establecimientos para adiestramiento canino</option>
                                                                <option value="1595">Guarderia para caninos y felinos (CIIU 9609)</option>
                                                                <option value="1596">Peluquerías para animales de compañía (CIIU 9609)</option>
                                                                <option value="1597">Establecimientos no farmaceutico</option>
                                                                <option value="1598">Comercializadora de petroleo y derivados microempresas y pequeñas empresas</option>
                                                                <option value="1599">Depósito de pescado y productos de mar</option>
                                                                <option value="1602">Peluquería</option>
                                                                <option value="1603">Centro de Estética Facial o corporal</option>
                                                                <option value="1604">Escuela de Estética</option>
                                                                <option value="1605">Escuela de Estética (Educación Profesional)</option>
                                                                <option value="1617">Expendio de derivados cárnicos y otros</option>
                                                                <option value="1618">Establecimientos con actividades afines o conexas a transporte aéreo</option>
                                                                <option value="1619">Establecimientos que ofertan el servicio de tele mercadeo</option>
                                                                <option value="1620">Pasaje Comercial</option>
                                                                <option value="1621">Edificio de Oficinas</option>
                                                                <option value="1622">Edificios de Prestadores de Servicios de Salud</option>
                                                                <option value="1623">Edificios Mixtos</option>
                                                                <option value="1624">Motel Sin servicios</option>
                                                                <option value="1625">Hotel con = o mayor a 5 servicios</option>
                                                                <option value="1626">Motel de 5 Servicios</option>
                                                                <option value="1627">Residencia de 5 Servicios</option>
                                                                <option value="1630">Salsamentaria</option>
                                                                <option value="1631">Expendio de dulces</option>
                                                                <option value="1632">Expendio de frutas y verduras</option>
                                                                <option value="1633">Expendio de lácteos y derivados lácteos</option>
                                                                <option value="1635">Depósito de drogas al por mayor</option>
                                                                <option value="1636">Elaboración de alimentos preparados para animales medianas y grandes empresas</option>
                                                                <option value="1637">Elaboración de alimentos preparados para animales microempresas y pequeñas empresas</option>
                                                                <option value="1638">Fábricas de artículos para uso escolar y de oficina</option>
                                                                <option value="1639">Baño público portatil</option>
                                                                <option value="1643">Clubes con 4 o menos servicios</option>
                                                                <option value="1648">Centro de rehabilitación de menores</option>
                                                                <option value="1650">Salas de retenidos o de paso</option>
                                                                <option value="1651">Albergue 5 servicios</option>
                                                                <option value="1652">Hogares de paso 5 Servicios</option>
                                                                <option value="1653">Albergue 4 servicios</option>
                                                                <option value="1654">Hogar de paso 4 servicios</option>
                                                                <option value="1655">Clubes con 5 o más servicios</option>
                                                                <option value="1656">Fábricas de calzado en material sintético</option>
                                                                <option value="1658">Instituciones Prestadoras de Servicios de Salud con Servicio de Alimentos (Actividad de hospitales y clínicas, con internación)</option>
                                                                <option value="1659">Instituciones Prestadoras de Servicios de Salud con servicio de alimentos ( Actividades de la practica medica, sin internación)</option>
                                                                <option value="1660">Instituciones Prestadoras de Servicios de Salud con servicio de Alimentos (Actividades de la practica Odontología)</option>
                                                                <option value="1661">Instituciones Prestadoras de Servicios de Salud con servicio de Alimentos (Actividades de apoyo diagnostico)</option>
                                                                <option value="1662">Instituciones Prestadoras de Servicios de Salud con servicio de Alimentos (Actividades de apoyo terapéutico)</option>
                                                                <option value="1663">Instituciones Prestadoras de Servicios de Salud con servicio de Alimentos (Otras actividades de atención de la Salud humana)</option>
                                                                <option value="1664">Instituciones Prestadoras de Servicios de Salud con servicio de Alimentos (Actividades de atención en instituciones para el cuidado de personas mayores y discapacitados)</option>
                                                                <option value="1665">Batallones, cuarteles y afines (Policía Nacional)</option>
                                                                <option value="1666">Universidades con = a 4 servicios</option>
                                                                <option value="1667">Universidades con = a 5 servicios</option>
                                                                <option value="1668">Universidades sin servicios adicionales</option>
                                                                <option value="1669">URI</option>
                                                                <option value="1670">Fábricas de aditivos para cementos microempresas y pequeñas empresas</option>
                                                                <option value="1671">Batallones, cuarteles y afines (ejército nacional) sin servicios</option>
                                                                <option value="1672">Batallones, cuarteles y afines (policía nacional) sin servicios</option>
                                                                <option value="1673">Batallones, cuarteles y afines (ejército nacional) menor o igial a 4 servicios</option>
                                                                <option value="1674">Batallones, cuarteles y afines (ejército nacional) mayor o igual a 5 servicios</option>
                                                                <option value="1675">Batallones, cuarteles y afines (policía nacional) menor o igual a 4 servicos</option>
                                                                <option value="1676">Batallones, cuarteles y afines (policía nacional) mayor o igual a 5 servicios</option>
                                                                <option value="1677">Fábrica de aditivos para cementos medianas y grandes empresas</option>
                                                                <option value="1678">Carpa ferias de juguetes</option>
                                                                <option value="1679">Planta de tratamiento de aguas residuales</option>
                                                                <option value="1688">Lavado de accesorios de motocicleta y otros microempresas y pequeñas empresas</option>
                                                            </select> --}}
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="row mt-1 justify-content-end">                                    
                                                <div class="col-3 offset-1">
                                                    <button  class="btn blue w-100 py-2"  data-toggle="modal" data-target="#contactModal" data-line="contact-send" >Enviar</button>
                                                </div>
                                            </div>                                
                                        </div>                                        
                                    </div>
                                </form>                            
                            </div>
                            <div class="col-lg-4 col-sm-12 alpha60">
                                <div class="row mt-4">                                    
                                    <div class="col-6 ">
                                        <a href="{{asset("preguntas")}}">
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
                                    <div class="col-6 ">
                                        <a href="{{asset("oficinas")}}">
                                            <div class="container-oficinas">
                                                <div class="rectangulo-contactenos">
                                                    <div class="row align-items-center ml-3">
                                                        <div class="d-inline-block ">
                                                            <img  class="right-bottom-menu" src="{{asset("images/contactenos/IconoOficinasdeAtencion.svg")}}" alt=""  style="height:40.9px;">
                                                        </div>
                                                        <div class="d-inline menu-header-interno oficinas">
                                                            <label class="mt-2">Oficinas de Atención al <br> Ambiente</label> 
                                                        </div>                                         
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </a>
                                    </div>                                   
                                </div>
                                <div class="row mt-3">                                    
                                    <div class="col-6 mt-3">
                                        <div class="puntos-recoleccion">
                                            <label >Ubica los puntos de recolección</label> 
                                        </div>
                                    </div>                                   
                                </div>
                                <div class="row mt-4">          
                                    <div class="col alig-self-center">
                                        <div class="d-inline-block">
                                            <a href="https://www.pilascolombia.com/puntos">
                                                <img  class="right-bottom-menu" src="{{asset("images/contactenos/BotonPilas.svg")}}" alt=""  style="height:58px;">
                                            </a>
                                        </div>   
                                        <div class="d-inline-block">
                                            <a href="http://www.lumina.com.co/recolectar/puntos_recoleccion">
                                                <img  class="right-bottom-menu" src="{{asset("images/contactenos/BotonBombillas.svg")}}" alt=""  style="height:58px;">
                                            </a>
                                        </div>   
                                        <div class="d-inline-block">
                                            <a href="http://www.puntoazul.com.co/donde-estamos-3/">
                                                <img  class="right-bottom-menu" src="{{asset("images/contactenos/BotonPuntoAzul.svg")}}" alt=""  style="height:58px;">
                                            </a>
                                        </div> 
                                        <div class="d-inline-block">
                                            <a href="http://www.ambientebogota.gov.co/aceites-usados">
                                                <img  class="right-bottom-menu" src="{{asset("images/contactenos/BotonRecolecciondeAceite.svg")}}" alt=""  style="height:58px;">
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

    <!-- Modal -->
    <div class="modal fade  bd-example-modal-lg" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content alert-ambiental">
                <div class="modal-header" style="border-bottom: 0px solid #dee2e6;">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea recibir más información sobre salud ambiental?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="radio" name="gender" value="male"> Acepta los términos y condiciones: autorizo expresamente a las Secretaria  Distrital de Salud y el Fondo Financiero Distrital de Salud,
                        para hacer uso y tratamiento de datos personales de conformidad con lo previsto en Decreto 1377 de 2013 que reglamenta la Ley 1581 de 2012. (Política de Protección de Datos Personales)
                        <br>
                    </form>
                </div>
                <div class="modal-footer" style="border-top: 0px solid #dee2e6; align-items: center; justify-content:center;">
                    <div class="container-fluid">
                        <div class="row justify-content-between">
                            <div class="col offset-2">
                                <button type="button" class="btn btn-modal" data-dismiss="modal">No, Gracias</button>
                            </div>
                            <div class="col">
                                <button id="btn-enviar" type="button" class="btn btn-modal">Sí, suscribirme</button>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content alert-ambiental">
                <div class="modal-header" style="border-bottom: 0px solid #dee2e6;">
                    <h5 class="modal-title" id="exampleModalLabel">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Debe ingresar toda la información solicitada.
                </div>
                <div class="modal-footer" style="border-top: 0px solid #dee2e6; align-items: center; justify-content:center;">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col offset-4">
                                <button type="button" class="btn btn-modal" data-dismiss="modal">Aceptar</button>
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
    $(function() {
        $('#btn-enviar').click( function(){
            if(  $('#name').val() !== '' && $('#localidad').val() !== '' && $('#telefono').val() !== '' && $('#temainteres').val() !== '' && $('#correo').val() !== '' && $('#comentarios').val() !== '' && $('#tiponegocio').val() !== '' ) {
                $.ajax({
                    method: "POST",
                    url: "email.php",
                    data: { name: "John" }
                })
                .done(function( msg ) {
                    alert( "Data Saved: " + msg );
                });
            } else {
                $('#contactModal').modal('hide');
            
                $('#infoModal').modal('show');
            }
                
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
    
        var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [  'dayGrid' ],
        defaultDate: '2019-07-22',
        editable: true,
        lang: 'es',
        eventLimit: true, // allow "more" link when too many events
        events: [
            {
            title: ' IVC  promoción y prevención prostitución y comunidad  LGBTI  “Dueños de Establecimientos”.',
            start: '2019-07-24'
            },
            {
            title: 'Taller mensual  proyecto  PISA  “Aspectos ambiental  y Cumplimiento de la Normatividad”.',
            start: '2019-07-23'
            },
            {
            title: 'Evento Acoplasticos  Café & Polímeros "Economía Circular y Sostenibilidad".',
            start: '2019-07-31'
            },
            /* {
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
            } */
        ]
        });
    
        calendar.render();
    
        calendar.setOption('locale','es');
    });      
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.js"></script>
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection