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
                    <span class="breadcrumb_ aire"> Espacios libres de humo</span>
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

            <div class="row">
                <div class="contenidoSecAmb centradoDiv">
                        <div></div>
                    
                        <h3 class="centrado colorAire mt40"> Espacios libres de humo</strong>
                        </h3>
                        <p align="justify">La Secretaría Distrital de Salud realiza la inspección y vigilancia de la Ley 1335 de 2009 a establecimientos públicos,
                            garantizando ambientes 100% libres de humo de tabaco. De igual manera, analiza los posibles efectos en salud por
                            la exposición al humo de tabaco. El consumo de tabaco es uno de los principales factores de riesgo de varias enfermedades
                            crónicas, como el cáncer y de enfermedades pulmonares y cardiovasculares.</p>
                        <p align="justify"> El consumo de tabaco es un hábito aún aceptado y admitido por una parte importante de nuestra sociedad que ocasiona
                            deterioro de la calidad de vida e importantes costos económicos, sociales y ambientales. Es la primera causa de muerte
                            evitable en el mundo, ocasionando alrededor de 5 millones de defunciones anuales. En Colombia se cuenta con la Resolución
                            1956 de 2008 del Ministerio de Salud y Protección Social y la Ley 1335 de 2009, las cuales adoptan las medidas necesarias
                            para garantizar un ambiente sano y libre de humo de tabaco, así mismo, la ley 1109 de 2006 por la cual se adopta
                            el
                            <u>“Convenio Marco de la Organización Mundial de la Salud para el control del tabaco</u>”. </p>
                    
                        <div align="justify">
                            <!-- Color de txto  -->
                        </div>
                        <h3 class="centrado colorAire mt40"> Vigilancia Epidemiológica </strong>
                            </p>
                        </h3>
                        <p align="justify">Vigila los posibles efectos en salud en la población debido al consumo de tabaco y a la exposición poblacional de humo
                            de segunda mano, indagando a través de las encuestas de prevalencia realizadas en la población vulnerable. </p>
                    
                        <h3 class="centrado colorAire mt40"> Vigilancia Sanitaria</strong>
                            </p>
                        </h3>
                        <p align="justify">Establece las condiciones sanitarias de los lugares de trabajo o establecimientos abiertos al público por medio de
                            acciones de inspección, vigilancia y control, verificando el cumplimiento de las exigencias consignadas en la Ley
                            1335 de 2009, así mismo, contempla la atención y respuesta a quejas y peticiones interpuestas por los capitalinos,
                            relacionadas con el incumplimiento de la Ley 1335 de 2009 y la exposición al humo de tabaco. </p>
                    
                        <h3 class="centrado colorAire mt40"> Vigilancia Ambiental</strong>
                            </p>
                        </h3>
                        <p align="justify"> Realiza el monitoreo de los niveles de contaminación del aire a nivel intramural por humo de tabaco. De interés: ¿Por
                            qué son tan importantes los entornos libres de humo? - American Academy of Pediatrics. Estrategia, Instituciones
                            Educativas Libres de Humo.- MSPS Iniciativa Liberarse del Tabaco -OMS Sociedad Americana Contra el Cáncer El humo
                            de segunda mano – CDC en español Día mundial sin Tabaco</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        </div>
                        <hr class="lineaAireNotas mt40"  style="width: 50%;"/>
                        <p>&nbsp;</p>
                        <p class="notaPiePagina">1. Coordinadora, Grupo Políticas, Legislación y Movilización Social. Instituto Nacional de Cancerología, Colombia. drivera@cancer.gov.co</p>
                        <span class="notaPiePagina">2. ABC de la Ley Antitabaco (Ley 1335 de 2009). Diana Esperanza Rivera Rodríguez.</span>
                        <a href="https://www.minsalud.gov.co/Documentos%20y%20Publicaciones/ABC%20DE%20LA%20LEY%20ANTITABACO.pdf"
                        class="notaPiePagina">
                            https://www.minsalud.gov.co/Documentos%20y%20Publicaciones/ABC%20DE%20LA%20LEY%20ANTITABACO.pdf
                        </a>
                        <p><br></p>
                        <p class="verMas colorAgua" style="text-align: right; width: 100%">
                            <br>
                            <a href="{{asset("aire_ruido_rem")}}">Volver</a>
                        </p>
            </div> 
            
            <div class="row">
                <hr class="lineaAire mt80" style="width: 100%;" />
            </div>
    
            <div class="logos colorAire bold140p">
                <div class="centrado colorAire">
                    <p class="colorAire">Documentos e investigaciones</p>
                    <a href="{{asset("aire_documentos")}}">
                        <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Agua docs" />
                    </a>
                    
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Mapas</p>
                    <a href="{{asset("aire_mapas")}}">
                        <img src="images/aire/aireMAPA.png" width="85" height="63" alt="Agua mapa" />
                    </a>                    
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Normatividad</p>
                    <a href="{{asset("aire_normatividad")}}">
                        <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Agua normas" />
                    </a>
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Indicadores</p>
                    <a href="{{asset("aire_indicadores")}}">
                        <img src="images/aire/aireINDICADORES.png" width="85" height="63" alt="Agua título" />
                    </a>                    
                </div>
            </div>
        </div> 
    </div>       
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
