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
                    <span class="breadcrumb_"> | Aire, ruido y radiación electromagnética | Mapas </span>
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
                        <img src="images/aire/IMG_AIRE_TITULO.jpg" width="85" height="63" alt="Calidad aire" />
                        <h1 class="seccion fondoAire sinSaltoLinea"> Calidad del aire</h1>
                    </div>

                    <h3 class="centrado mt40">La contaminación del aire en Bogotá y los posibles efectos en salud</h3>
                    <p>La Secretaria Distrital de Salud realiza el monitoreo de la información sobre las condiciones de exposición a
                        contaminación del aire de la población vulnerable en Bogotá, mediante procesos de vigilancia epidemiológica,
                        ambiental y sanitaria orientada al diseño de estrategias e intervenciones tendientes a mitigar los efectos
                        nocivos asociados a este factor de riesgo.</p>
                    <p class="verMas colorAire">Ver más</p>



                    <h3 class="centrado colorAire">IBOCA</h3>
                    <p>Índice Bogotano del Calidad de Aire (IBOCA): Aquí encontrara la información en tiempo real referente al índice
                        bogotano de calidad de aire, modelación de calidad del aire y datos de inmisión (contaminantes criterio).</p>
                    <p class="verMas colorAire">Ver más</p>



                    <h1 class="colorAire mt40 centrado">Espacios libres de humo de tabaco</h1>
                    <p>La Secretaría Distrital de Salud realiza la inspección y vigilancia de la Ley 1335 de 2009 a establecimientos
                        públicos, garantizando ambientes 100% libres de humo de tabaco. De igual manera, analiza los posibles efectos
                        en salud por la exposición al humo de tabaco.</p>
                    <p class="verMas colorAire">Ver más</p>



                    <h1 class="colorAire mt40 centrado">Ruido</h1>
                    <p>La Secretaría Distrital de Salud realiza la vigilancia epidemiológica, ambiental y sanitaria de la contaminación
                        auditiva manteniendo actualizada la información sobre las condiciones de exposición de la población a ruido,
                        mediante procesos orientados al diseño de estrategias e intervenciones tendientes a mitigar los efectos nocivos
                        asociados a este factor de riesgo.</p>
                    <p class="verMas colorAire">Ver más</p>



                    <h1 class="colorAire mt40 centrado">Radiación electromagnética</h1>
                    <p>La Secretaría Distrital de Salud realiza la vigilancia sanitaria, ambiental y epidemiológica de la exposición
                        poblacional a radiación electromagnética, desarrollando procesos para orientar el diseño de estrategias e
                        intervenciones tendientes a mitigar los efectos nocivos asociados a este factor de riesgo.</p>
                    <p class="verMas colorAire">Ver más</p>



                    <hr class="lineaAireNotas mt40" />
                    <p class="notaPiePagina">1. Coordinadora, Grupo Políticas, Legislación y Movilización Social. Instituto Nacional de Cancerología, Colombia.
                        drivera@cancer.gov.co</p>
                    <p class="notaPiePagina">2. ABC de la Ley Antitabaco (Ley 1335 de 2009). Diana Esperanza Rivera Rodríguez.
                        <a href="https://www.minsalud.gov.co/Documentos%20y%20Publicaciones/ABC%20DE%20LA%20LEY%20ANTITABACO.pdf">https://www.minsalud.gov.co/Documentos%20y%20Publicaciones/ABC%20DE%20LA%20LEY%20ANTITABACO.pdf</a>
                    </p>

                </div>

            </div>        
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
