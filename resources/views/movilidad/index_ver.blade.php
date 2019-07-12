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
                    <span class="breadcrumb_"> | Alimentos y bebidas</span>
                    <span class="breadcrumb_ alimentos">Ver más</span>
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
                        <img src="{{asset("images/indicators/LogoAlimentosSanos.png")}}" width="50%" alt="símbolo sección agua" />
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
                    <img src="images/alimentos/BannerCarnesParteInterna.png" width="100%" alt="Slider Alimentos" />
                </div>
            </div>

            <div class="row" style="text-align:justify;">
                
                <div class="contenidoSecAmb centradoDiv">

                    <h1 class="colorEspacio">Objetivo General</h1>
                    <span class="cursiva">Continúa...</span>
                    <p>Contribuir al mejoramiento de las condiciones de calidad de vida y salud de las personas residentes en el Distrito Capital,
                        a través de la adecuada gestión y uso del espacio físico y el entorno, la prevención de la enfermedad y la promoción
                        de la salud frente a problemáticas ambientales propias del hábitat, el espacio público y la movilidad.</p>

                    <img src="images/espacio/espacioMovilidad_objetivos.png" width="100%" height="100%" alt="Objetivos específicos" />

                    <h2 class="colorEspacio">Ejes temáticos</h2>
                    <p class="mt40">
                        <strong>Hábitat</strong>
                    </p>
                    <ul>
                        <li>Mejoramiento de las condiciones de habitabilidad para una vivienda digna y segura.</li>
                    </ul>
                    <p class="mt40">
                        <strong>Espacio público</strong>
                    </p>
                    <ul>
                        <li>Generación, construcción, mantenimiento y optimización del espacio público.</li>
                        <li>Promoción de cultura ciudadana para el buen uso del espacio público y mejoramiento ambiental del entorno.</li>
                        <li>Promoción del uso de espacios para la práctica de la actividad física, deportiva, recreativa y cultural como factor protector
                            de la salud, potenciador del desarrollo humano.</li>
                    </ul>
                    <p class="mt40">
                        <strong>Movilidad</strong>
                    </p>
                    <ul>
                        <li>Fortalecimiento de la infraestructura, formación, divulgación de la información, control y regulación para la movilidad
                            segura, accesible y activa.</li>
                    </ul>

                    <h2 class="seccion fondoEspacio mt40">Indicadores</h2>
                    <div class="logos">
                        <div class="seccionIcono">
                            <img src="images/espacio/espacio1INDICADORES.jpg" width="85" height="63" alt="Normatividad Hábitat, Espacio Público y Movilidad"
                            />
                        </div>
                        <div class="sinSaltoLinea">Permiten visualizar las tendencias de las acciones concernientes con el mejoramiento de las condiciones de calidad de
                            vida y salud de las personas residentes en el Distrito Capital por medio de la promoción de estilos de vida saludables.</div>
                    </div>

                    <h2 class="seccion fondoEspacio mt40">Normatividad</h2>
                    <div class="logos">
                        <div class="seccionIcono">
                            <img src="images/espacio/espacioNORMATIVIDAD.jpg" width="85" height="63" alt="Normatividad Hábitat, Espacio Público y Movilidad"
                            />
                        </div>
                        <div class="sinSaltoLinea">Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas con el mejoramiento
                            de la calidad de vida y salud de las personas residentes en el Distrito Capital por medio de la promoción de estilos
                            de vida saludables.</div>
                    </div>

                    <h2 class="seccion fondoEspacio mt40">Mapas</h2>
                    <div class="logos">
                        <div class="seccionIcono">
                            <img src="images/espacio/espacioMAPA.jpg" width="85" height="63" alt="Normatividad Hábitat, Espacio Público y Movilidad"
                            />
                        </div>
                        <div class="sinSaltoLinea">Aquí podrá encontrar la “ubicación geográfica” de las acciones concernientes con el mejoramiento de las condiciones de
                            calidad de vida y salud de las personas residentes en el Distrito Capital por medio de la promoción de estilos de vida
                            saludables.</div>
                    </div>

                    <h2 class="seccion fondoEspacio mt40">Documentos e investigaciones</h2>
                    <div class="logos">
                        <div class="seccionIcono">
                            <img src="images/espacio/espacioDOCUMENTOS.png" width="85" height="63" alt="Normatividad Hábitat, Espacio Público y Movilidad"
                            />
                        </div>
                        <div class="sinSaltoLinea">Compendio de documentos e investigaciones relacionados el mejoramiento de la calidad de vida y salud de las personas
                            residentes en el Distrito Capital por medio de la promoción de estilos de vida saludables. </div>
                    </div>






                </div>
                

            </div>  

            

            <div class="row">
                <hr class="lineaAlimentos mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAlimentos bold140p">
                <div class="centrado colorAlimentos">
                    <p>Documentos e investigaciones</p>
                    <img src="images/alimentos/IMG_ALIMENTOS_DOCUMENTOS.jpg" width="85" height="63"
                        alt="Agua docs" />
                </div>
                <div class="centrado colorAlimentos">
                    <p>Mapas</p>
                    <img src="images/alimentos/IMG_ALIMENTOS_ MAPA.jpg" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAlimentos">
                    <p>Normatividad</p>
                    <img src="images/alimentos/alimentosNORMATIVIDAD.png" width="85" height="63" alt="Agua normas"
                    />
                </div>
                <div class="centrado colorAlimentos">
                    <p>Calidad del aire</p>
                    <img src="images/alimentos/IMG_ALIMENTOS_TITULO.jpg" width="85" height="63" alt="Agua título"
                    />
                </div>
            </div>           
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
