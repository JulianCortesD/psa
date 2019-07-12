@extends('layout')
@section('titulo')
    Oficinas de Atención al Ambiente
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/offices.css")}}" />
@endsection
@section('contenido')
    <div class="wrapper min-ancho">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-8">
                    <div class="row">
                        <div class=" d-inline-block" >
                            <img class="concept-title d-inline-block"  src="{{asset("images/contactenos/IconoOficinasdeAtencion.svg")}}" alt="">
                        </div>
                        <div class="d-inline-block titulo-contenido px-5">
                            <label > Oficinas de Atención al Ambiente </label> 
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
                <div class="col-4 offset-8" >
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


            <div class="row block mapa" id="quien">
                <div class="col-12">
                    <div class="subtitle">
                        <h2><b>¿Quién me visita?</b></h2>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div id="mapa">
                        <img class="w-100"   src="{{asset("images/offices/mapa.png")}}" alt="">
                    </div>
                    <div class="text-white mt-4">
                        <p style="text-align: justify;"><strong>La inspección, vigilancia y control es un proceso realizado por medio de las cuatro Subredes Integradas de Servicios de Salud</strong>, con las cuales se pueden realizar las solicitudes de visitas de inspección a establecimientos, teniendo en cuenta el sector donde están ubicados:</p>
                    </div>
                </div>
                <div class="col-12 col-md-5 text-white">
                    <ul class="mapaExplain">
                        <li>
                            <i><img  src="{{asset("images/offices/01.png")}}" alt=""></i>
                            <div><b>Subred Norte:</b> Calle 66 No. 15-41. Teléfono:300 323 8661. Abarca las localidades de Usaquén, Teusaquillo, Chapinero, Barrios Unidos, Engativá y Suba.</div> 
                        </li>
                        <li>
                            <i><img src="{{asset("images/offices/02.png")}}"  alt=""></i>
                            <div><b>Subred Sur:</b> Transversal 44 No. 52B-16 Sur. Teléfono: 730 0000, ext. 72415. Abarca las localidades de Ciudad Bolívar, Tunjuelito, Usme y Sumapaz.</div> 
                        </li>
                        <li>
                            <i><img src="{{asset("images/offices/03.png")}}" alt=""></i>
                            <div><b>Subred Centro Oriente:</b> <p>Diagonal 34 No. 5-43. Teléfono: 209 1480, ext. 9020. Abarca las localidades de Antonio Nariño, Rafael Uribe Uribe, La Candelaria, Santafé, San Cristóbal y Los Mártires.</p></div> 
                        </li>
                        <li>
                            <i><img src="{{asset("images/offices/04.png")}}"  alt=""></i>
                            <div><b>Subred Sur Occidente:</b> <p>Calle 9 No. 39-46. Teléfono: 486 0033, ext. 10302. Abarca las localidades de Puente Aranda, Fontibón, Kennedy y Bosa.</p></div> 
                        </li>
                    </ul>
                </div>
            </div>     
        </div>        
    </div>
    
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.js"></script>
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
