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
                    <span class="breadcrumb_"> | Aire, ruido y radiación electromagnética |</span>
                    <span class="breadcrumb_ aire">Mas información</span>
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
                        <img src="images/aire/LogoAireRuidoREM.png" alt="símbolo sección aire" />
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

            <div class="row" style="text-align: justify;">
                
                <div class="contenidoSecAmb centradoDiv">

                    <div></div>
              
                    <p align="justify">La contaminación atmosférica, por ruido y radiación electromagnética puede ser producto de fuentes naturales o antrópicas
                      que bajo unos niveles y unas condiciones específicas pueden producir impactos en la salud y la calidad de vida de
                      los individuos, por esta razón es necesario realizar un análisis epidemiológico y ambiental. Por lo anterior, la línea
                      de Aire, Ruido y REM, utiliza como fuente primaria de información obtenida de la aplicación de encuestas de prevalencia
                      de sintomatología respiratoria posiblemente asociada a contaminación del aire en los grupos etarios como son menores
                      de 5 años, 5 a 14 años y mayores de 60 años, encuestas de percepción por exposición a ruido, test de sueño en población
                      adolescente de 11 a 17 años y adultos de 18 a 64 años y encuestas de síntomas no específicos de radiación electromagnética
                      en población adulta, del mismo modo utiliza fuentes secundarias de información realizando el seguimiento a los reportes
                      generados por la
                      <a href="http://ambientebogota.gov.co/red-de-calidad-del-aire">Red de Monitoreo de Calidad de Aire de Bogotá</a> (RMCAB), la cual realiza las mediciones permanentes de contaminantes
                      criterio y variables meteorológicas en diferentes puntos de la ciudad
                      <strong>.</strong>
                      <strong> </strong>
                    </p>
                    <p align="justify">&nbsp;</p>
                    <p class="verMas colorAgua">
                        <a href="{{asset("aire_ruido_rem")}}">Volver</a>
                    </p>
                </div>

            </div>    
            <div class="row">
                <hr class="lineaAire mt80"  style="width: 100%" />
            </div>
            
                      
            <div class="logos colorAire bold140p">
                <div class="centrado colorAire">
                  <p class="colorAire">Documentos e investigaciones</p>
                  <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Agua docs"
                  />
                </div>
                <div class="centrado colorAire">
                  <p class="colorAire">Mapas</p>
                  <img src="images/aire/aireMAPA.png" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAire">
                  <p class="colorAire">Normatividad</p>
                  <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Agua normas" />
                </div>
                <div class="centrado colorAire">
                  <p class="colorAire">Indicadores</p>
                  <img src="images/aire/aireINDICADORES.png" width="85" height="63" alt="Agua título" />
                </div>
            </div>
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
