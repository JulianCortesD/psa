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
                    <span class="breadcrumb_"> | Hábitat, Espacio Público y Movilidad |</span>
                    <span class="breadcrumb_ espacio"></span>
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
                        <img src="{{asset("images/indicators/LogoEspacioyMovilidad.png")}}" width="50%" alt="símbolo sección agua" />
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
                    <img src="images/espacio/bannerEspacioPublico3.png" width="100%" alt="Slider Alimentos" />
                </div>
            </div>

            <div class="row" style="text-align:justify;">
                           
                <div class="contenidoSecAmb centradoDiv">
                    <h1 class="centrado colorEspacio mt20">Hábitat, Espacio Público y Movilidad </h1>

                    <p>La línea de Hábitat, Espacio Público y Movilidad contribuye al mejoramiento de las condiciones de la calidad
                        de vida y de la salud de las personas residentes en el Distrito Capital mediante la adecuada gestión y uso
                        del espacio físico y el entorno incluyendo la calidad y disponibilidad de los sistemas de transporte teniendo
                        en cuenta una movilidad activa, accesible y segura por medio de la promoción de estilos de vida saludables.
                        </p>
                    <a href="{{asset("espacio_movilidad_ver")}}" class="verMas colorEspacio">Ver más</a>
                </div>

            </div>  

            

            <div class="row">
                <hr class="lineaEspacio mt80" style="width: 100%;" />
            </div>

            <div class="logos colorEspacio bold140p">
                <div class="centrado colorEspacio">
                    <p>Documentos e investigaciones</p>
                    <img src="images/espacio/espacioDOCUMENTOS.png" width="85" height="63" alt="Espacio y movilidad docs"
                    />
                </div>
                <div class="centrado colorEspacio">
                    <p>Mapas</p>
                    <img src="images/espacio/espacioMAPA.jpg" width="85" height="63" alt="Espacio y movilidad mapa"
                    />
                </div>
                <div class="centrado colorEspacio">
                    <p>Normatividad</p>
                    <img src="images/espacio/espacioNORMATIVIDAD.jpg" width="85" height="63" alt="Espacio y movilidad normas"
                    />
                </div>
                <div class="centrado colorEspacio">
                    <p>Calidad del aire</p>
                    <img src="images/espacio/espacioNube.png" width="85" height="63" alt="Espacio y movilidad título"
                    />
                </div>
            </div>        
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
