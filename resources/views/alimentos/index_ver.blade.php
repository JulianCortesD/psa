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
                    <span class="breadcrumb_ alimentos"></span>
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

                <h2 class="colorAlimentos">2.1 Alimentos Sanos y seguros</h2>
                <span class="cursiva">Continúa...</span>
                <p>

                <h3 class="centrado colorAlimentos mt20">Objetivo General:</h3>
                <p>Vigilar y promover la calidad e inocuidad de los alimentos y bebidas alcohólicas en establecimientos que los preparan,
                    almacenan, distribuyen, transportan y comercializan en el Distrito Capital, mediante la Vigilancia Sanitaria, a
                    través de acciones de información, educación y comunicación que permitan disminuir el consumo de alimentos y bebidas
                    alcohólicas adulteradas, alteradas, falsificadas o contaminadas y reducir la incidencia de Enfermedades Transmitidas
                    por Alimentos de acuerdo con el análisis de los riesgos asociados al consumo y contribuir la calidad de vida de
                    la población en el Distrito Capital.</p>

                <h3 class="centrado colorAlimentos mt20">Objetivos Específicos:</h3>
                <ul>
                    <li>Verificar las condiciones higiénico-sanitarias de los establecimientos donde se preparan, almacenan, transportan
                    y expenden alimentos y bebidas, así como en las fábricas de bebidas alcohólicas.</li>
                    <li>Capacitar a manipuladores de alimentos y población en general en manejo higiénico de alimentos basado en las Buenas
                    Prácticas de Manufactura.</li>
                    <li>Desarrollar una estrategia de comunicación dirigida a la comunidad en cuanto a la importancia que tiene la notificación
                    de situaciones que evidencien incumplimiento en las normas sanitarias por parte de los establecimientos. De igual
                    forma la notificación de eventos de interés en la salud pública asociados al consumo de alimentos.</li>
                    <li>Vigilar factores de riesgo que puedan originar la aparición de brotes de Enfermedades Transmitidas por Alimentos-ETA
                    y tomar decisiones que contribuyan a su disminución y control.</li>
                    <li>Verificar la calidad e inocuidad de los alimentos y bebidas alcohólicas que se preparan, almacenan, transportan
                    y comercializan en el Distrito Capital mediante actividades de inspección, vigilancia y control.</li>
                </ul>

                <h3 class="centrado colorAlimentos mt20">Ejes Temáticos:</h3>
                <ul>
                    <li>Provisión de alimentos sanos y seguros.</li>
                    <li>Consumo de alimentos inocuos y nutritivos.</li>
                    <li>Prevención y atención de eventos de interés en salud pública relacionados con la inocuidad de los alimentos.</li>
                    <li>Manejo de alimentos en situaciones de emergencia y vulnerabilidad en la Ciudad.</li>
                    <li>Investigación y gestión del conocimiento en temas de calidad e inocuidad de alimentos.</li>
                    <li>Vigilancia de la salud ambiental en materia de alimentos.</li>
                    <li>Gestión de la salud ambiental para mejorar la calidad e inocuidad de alimentos en Bogotá D.C.</li>
                </ul>


                <h2 class="colorAlimentos mt40">2.2 Alertas:</h2>
                <p>En esta unidad podrá encontrar reportes proporcionados de las alertas sanitarias de alimentos y bebidasemitidas l
                    INVIMA.</p>
                <p>Se enlaza con la página del Instituto Nacional de Vigilancia de Medicamentos y Alimentos INVIMA donde publican las
                    alertas sanitarias sobre medicamentos y dispositivos médicos.</p>
                <p>
                    <a href="https://app.invima.gov.co/alertas/alertas-alimentos-bebidas" class="colorAlimentos">https://app.invima.gov.co/alertas/alertas-alimentos-bebidas</a>
                </p>


                <h2 class="colorAlimentos mt40">2.3 Restaurantes 1ª: </h2>
                <p>Es un programa dirigido a los restaurantes populares de la ciudad, para capacitar a los propietarios y empleados
                    frente a la adecuada manipulación, prácticas de manufactura, nutrición, gastronomía y mercadeo.</p>
                <p>Se despliega una infografía que describe paso a paso, ¿qué es la estrategia Restaurantes 1ª?, beneficios de participar
                    en la estrategia, los requisitos para inscripción y los correos de contacto de la línea.</p>
                <ul>
                    <li>
                    <a href="https://drive.google.com/open?id=1AbEp5MbXNK4B3hZUmLiXFU99AxckURvc" class="colorAlimentos">https://drive.google.com/open?id=1AbEp5MbXNK4B3hZUmLiXFU99AxckURvc</a>
                    </li>
                    <li>Además se añade el enlace:
                    <a href="http://autorregulacion.saludcapital.gov.co/buenpropietario#estrategiasexcelencia"
                        class="colorAlimentos">http://autorregulacion.saludcapital.gov.co/buenpropietario#estrategiasexcelencia</a> para mayor información sobre
                    autorregulación</li>
                </ul>


                <h2 class="colorAlimentos mt40">2.4 Expendio de carnes y cárnicos comestibles: </h2>
                <p>Se despliega un submenú con dos opciones:</p>
                <ul>
                    <li>
                    <a href="http://autorregulacion.saludcapital.gov.co/carnicerias" class="colorAlimentos">Inscripción: Enlaza a una página de autorregulación de la Secretaria Distrital de Salud dirigida a establecimientos
                        de expendio y/o almacenamiento de carne y productos cárnicos comestibles. (Formulario ilustración 6)</a>
                    </li>
                    <li>
                    <a href="http://appb.saludcapital.gov.co/SivigilaDC/Login.aspx" class="colorAlimentos">Autorización sanitaria: Abre el formulario para actualizar o consultar la autorización sanitaria para almacenamiento
                        y expendio de carne y productos cárnicos comestibles)</a>
                    </li>
                </ul>


                <h2 class="colorAlimentos mt40">2.5 Vehículos transportadores:</h2>
                <p>En este sitio podrá identificar diferentes opciones con relación a la inscripción sanitaria para vehículos transportadores
                    de carne y productos cárnicos comestibles.</p>
                <p> Se despliega un submenú con dos opciones:</p>

                <p>
                    <strong>Cárnicos</strong>
                </p>
                <p>Enlaza con una página de la Secretaria Distrital de Salud donde se diligencia un formulario de inscripción sanitaria
                    para vehículos transportadores de carnes y productos comestibles. (El enlace genera un formulario) http://appb.saludcapital.gov.co/sivigiladc/VehiculosTranspCarne/frmSubMenuVehiculos.aspx?opcion=New&amp;n=&amp;Origen=Login
                </p>

                <p>
                    <strong>Alimentos:</strong>
                </p>
                <p>Enlaza con una página de laSecretaría Distrital de Salud para la inscripción sanitaria a establecimientos de expendio
                    y/o almacenamiento de carne y productos cárnicos comestibles en el que se despliega un submenú con las opciones.
                    (El enlace genera un formulario)</p>


                <h2 class="colorAlimentos mt40">2.6 Indicadores:</h2>
                <p>Muestra las tendencias de las acciones de inspección, vigilancia y control de establecimientos de alimentos y la
                    frecuencia de eventos de interés en salud pública (enfermedades transmitidas por alimentos e intoxicaciones por
                    metanol).</p>
                <p>Enlaza una nueva página del mismo dominio donde se muestra el listado de dos indicadores: </p>
                <ul>
                    <li>
                    <a name="_Hlk13365882" id="_Hlk13365882">Casos de morbilidad por ETA por ciclo vital en Bogotá, </a>D.C.
                    <a name="_Hlk13365935" id="_Hlk13365935">: </a>
                    <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/eta/" class="colorAlimentos">http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/eta/</a>
                    </li>
                </ul>
                <ul>
                    <li>Una vez seleccionado el indicador se enlaza al graficador mostrando al detalle el historial y el comportamiento
                    de este en el tiempo con la posibilidad de comparar entre las localidades y el Distrito. </li>
                </ul>


                <h2 class="colorAlimentos mt40">2.7 Normatividad:</h2>
                <p>Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas con la inspección,
                    vigilancia y control de establecimientos de alimentos y eventos de interés en salud pública.</p>
                <p>Se enlaza a una nueva página del mismo dominio en donde se encuentran las opciones deRegulación Transversal y Específica
                    con cada una de sus especificidades y los enlaces correspondientes de la normatividad.</p>


                <h2 class="colorAlimentos mt40">2.8. Mapas:</h2>
                <p>Aquí podrá observar la “ubicación geográfica” de las acciones de inspección, vigilancia y control de establecimientos
                    de alimentos y los eventos de interés en salud pública (enfermedades transmitidas por alimentos e intoxicaciones
                    por metanol).</p>


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
