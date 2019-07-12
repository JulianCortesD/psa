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
                    <span class="breadcrumb_"> | Agua y saneamiento |</span>
                    <span class="breadcrumb_ agua"></span>
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
                        <img src="{{asset("images/indicators/LogoAguaSaneamiento.png")}}" width="50%" alt="símbolo sección agua" />
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
                    <img src="images/agua/bannerAguaSaneamientoParte_interna.png" width="100%" alt="Slider Agua" />
                </div>
            </div>

            <div class="row" >
                
                <div class="contenidoSecAmb centradoDiv">

                    <h3 class="colorAire">Agua y saneamiento</h3>
                    <span class="cursiva">Continúa...</span>

                    <h2 class="colorAgua">1. Calidad del Agua y Saneamiento Básico</h2>
                    <p>La línea de calidad de agua y saneamiento básico comprende el conjunto de acciones técnicas y sociales que buscan alcanzar niveles crecientes de salubridad, en los diferentes establecimientos identificados y que son objeto de intervención de forma regular o intensificada.  Comprende el manejo sanitario del agua para consumo, las aguas residuales y excretas, los residuos sólidos y el comportamiento higiénico que reduce los riesgos para la salud y previene la contaminación. Tiene por finalidad el control de factores de riesgo, promoción y mejoramiento de condiciones de vida de la población tanto en el área urbana y rural.</p>

                    <h2 class="colorAgua">Objetivo General:</h2>
                    <p>Disminuir los factores de riesgo relacionados con el abastecimiento de agua, manejo de residuos sólidos y disposición de vertimientos mediante la identificación e intervención de condiciones higiénico-sanitarias en los diferentes espacios abordados por la línea y que afectan la salud de los habitantes y visitantes de la Ciudad, para potencializar factores protectores, promover entornos ambientalmente saludables y garantizar la seguridad sanitaria.</p>

                    <h2 class="colorAgua">Objetivos Específicos:</h2>
                    <ul>
                    <li>Desarrollar estrategias que faciliten el acceso y manejo del agua apta para consumo humano  para todos los habitantes del Distrito Capital, incluidos los habitantes  rurales y de asentamientos informales.</li>
                    <li>Fortalecer los instrumentos existentes que buscan garantizar la calidad del agua apta para  consumo humano, su sostenibilidad en el tiempo y la promoción de buenas  prácticas de uso, manejo y disposición del agua en el Distrito Capital.&nbsp;</li>
                    </ul>
                    <ul>
                    <li>Promover la gestión integral del recurso hídrico en Bogotá D.C. y la protección de la  funcionalidad de los ecosistemas estratégicos distritales y regionales, para  garantizar la disponibilidad de agua para consumo humano.&nbsp;</li>
                    <li>Fomentar el uso racional y seguro del agua para actividades recreativas.</li>
                    <li>Optimizar la gestión integral de los residuos sólidos en el Distrito Capital.&nbsp;</li>
                    <li>Desarrollar estrategias orientadas a mejorar las condiciones higiénicas y sanitarias en  viviendas y establecimientos abiertos al público.&nbsp;</li>
                    <li>Fortalecer los procesos de gestión de la salud ambiental para la calidad del agua y el  saneamiento básico en Bogotá, D.C.</li>
                    </ul>

                    <h2 class="colorAgua">Ejes Temáticos:</h2>
                    <ul>
                    <li>Abastecimiento  de agua potable en condiciones apropiadas.</li>
                    <li>Control  de eventos mórbidos y mortales asociados a la calidad del agua y saneamiento  básico.</li>
                    <li>Gestión  ambiental del recurso hídrico y los servicios hidrológicos</li>
                    <li>Prevención  y control de riegos en agua para uso recreativo</li>
                    <li>Manejo  integral de residuos sólidos</li>
                    <li>Mejoramiento  de condiciones higiénicas y sanitarias en viviendas y establecimientos abiertos  al público</li>
                    <li>Gestión  de la salud ambiental para la calidad del agua y el saneamiento básico</li>
                    </ul>

                    <h2 class="colorAgua mt40">2. Carrotanques:</h2>
                    <h3 class="colorAgua">2.1 Listado de vehículos para el trasporte de agua potable:</h3>
                    <p><a href="https://drive.google.com/open?id=1viKWkuMqYlujwWnJLNfSfXw_ARKD9THh" class="colorAgua">Consulte aquí  acerca del listado de empresas prestadoras de servicio de abastecimiento de  agua potable para el consumo humano.</a></p>
                    <p><a href="https://drive.google.com/open?id=1LmRo44bQNpeXE63KkbV_KdQt2MjFc3Kb" class="colorAgua">Para mayor información, leer aquí</a></p>

                    <h3 class="colorAgua">2.2 Listado de coches Fúnebres:</h3>
                    <p><a href="https://drive.google.com/open?id=1fy8BouY9rKpWETj07mpzjTrtf293_GB_" class="colorAgua">Consulte aquí acerca del listado de  concepto sanitario favorable de los vehículos que prestan servicios fúnebres</a></p>


                    <h2 class="colorAgua mt40">3. Hogares Para Persona Mayor:</h2>
                    <p>A continuación, usted encontrar las definiciones de cada una de las Instituciones Protectoras de la Persona Mayor que funcionan en el Distrito Capital. Así mismo señor usuario escogerá la Institución que más se acomode a sus expectativas de trabajo o de constitución de los mismos.</p>
                    <p><a href="https://drive.google.com/open?id=1bc1HCAgUdkDTKDKbDQ39qEwFT9Ai-gpu" class="colorAgua">Consulte normatividad que rige para la apertura de hogares para adulto mayor</a></p>

                    <h3 class="colorAgua">3.1 Hogar Geriátrico: </h3>
                    <p>Instituciones que ofrecen albergue, servicios sociales y atención integral en salud a la persona mayor con grado moderado o severo de incapacidad física y/o psíquica, para desarrollar las actividades de la vida diaria (levantarse, deambular, bañarse, vestirse, usar el baño, alimentarse y controlar esfínteres) o que están aquejados por enfermedades que requieren control frecuente de medicina, enfermería y servicios de rehabilitación y disciplinas afines.</p>

                    <h3 class="colorAgua">3.2 Hogares Gerontológicos:</h3>
                    <p>Instituciones destinadas al albergue permanente o temporal de ancianos con mínima incapacidad física o psíquica, donde se ofrecen servicios sociales y de salud básicos (suministro o supervisión de tratamientos médicos, primeros auxilios, terapias, etc.).</p>

                    <h3 class="colorAgua">3.3 Centro Días o Centro Vida</h3>
                    <p><strong>Para la Persona Mayor:</strong> Son lugares donde se reúnen las personas mayores para desarrollar actividades puramente sociales: funcionan durante el día hasta 8 horas y la persona mayor vuelve a su red familiar.</p>
                    <p> La Secretaría Distrital de Salud, ha venido promocionando para los diferentes establecimientos que actualmente funcionan en el Distrito Capital y que cumplen con las condiciones higiénico sanitarias, el buen trato a la persona mayor, cuentan con personal idóneo, con una minuta de alimentación acorde a la situación de salud a la persona mayor institucionalizada o por horas el Reconocimiento Distrital Hogar Dorado. El cual es un reconocimiento a las condiciones anteriormente mencionadas y será un reconocimiento a nivel Distrital.</p>


                    <h2 class="colorAgua mt40">4. Establecimientos con concepto favorable:</h2>
                    <p>Consulte aquí los establecimientos vigilados por la línea de calidad del agua y saneamiento básico ubicado en la ciudad de Bogotá, que cuentan con concepto favorable por parte de la Secretaria Distrital de Salud.</p>


                    <h2 class="colorAgua mt40">5. Indicadores:</h2>
                    <ul>
                    <li><a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/" class="colorAgua">Se enlaza una nueva  página de diferente dominio/</a></li>
                    <li><a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/irca-otros/" class="colorAgua">Índice de riesgo para la  calidad del agua potable (IRCA) otros sistemas de abastecimiento en Bogotá D.C.</a></li>
                    <li>Medidas sanitarias aplicadas</li>
                    <li>Este indicador se publicará próximamente en la siguiente página: <a href="http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/" class="colorAgua">http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/</a></li>
                    </ul>


                    <h2 class="colorAgua mt40">6. Normatividad:</h2>
                    <p>Encuentre aquí el marco normativo para la línea de Calidad del Agua y Saneamiento Básico</p>


                    <h2 class="colorAgua mt40">7. Documentos e investigaciones:</h2>
                    <p>Este espacio fue credo para poner a disposición de los interesados los siguientes documentos:</p>
                    <h3 class="colorAgua">7.1 Mapas de riesgo: Se enlaza a una página web del mismo dominio, con los siguientes títulos:</h3>
                    <ul>
                    <li><a href="https://drive.google.com/open?id=1pkscXUoIhQ4LJpYV2Eeo2E1qdarF-xzx" class="colorAgua">Mapa de riesgo de la calidad del agua para consumo humano Acueducto Asopicos Bocagrande</a></li>
                    <li><a href="https://drive.google.com/open?id=1ciunjUMh0l_-j80k3ogdKl08a8v0y1NV" class="colorAgua">Mapa de riesgo de la calidad del agua para consumo humano Acueducto Batallón de Logística </a></li>
                    <li><a href="https://drive.google.com/open?id=1e0U3BclrHo_nHYP8L-Z8_jINj6X7QoBU" class="colorAgua">Mapa de riesgo de la calidad del agua para consumo humano Acueducto Plan Sumapaz</a></li>
                    </ul>


                    <h2 class="colorAgua mt40">8. Mapas</h2>
                    <p>Consulte información cartográfica sobre el índice de riesgo de la calidad del agua y  distribución de piscinas vigiladas en el Distrito Capital.</p>
                    <p>A continuación de listan los mapas:</p>
                    <ol>
                    <li><a href="https://drive.google.com/open?id=1oMjQj6u1m8QjWkWZ5eB0yJk5W9-iBjkE" class="colorAgua">Distribución de piscinas vigiladas en el Distrito Capital. Años 2014-2017.</a></li>
                    <li><a href="https://drive.google.com/open?id=1me5cESUjFMj79WVLlkn2lsBoPTyuhoys" class="colorAgua">Distribución de puntos de muestreo empresa de  acueducto de Bogotá (EAB). Índice de riesgo de calidad de agua (IRCA). Promedio  2017.</a></li>
                    <li><a href="https://drive.google.com/open?id=1ijwQYH_0VfcD7ZPOzw4U5La7B4Uhqi68" class="colorAgua">Transporte de agua para el consumo puntos de  cargue y descargue año 2017.</a></li>
                    <li><a href="https://drive.google.com/open?id=1mzc99lVEJ5l0IsAqHgNPBL2tc_Xxfx0J" class="colorAgua">Distribución de sistemas de abastecimiento de  agua para el consumo humano en Bogotá D.C. Índice de riesgo de calidad de agua  (IRCA). Promedio 2017.</a></li>
                    </ol>
                </div>

            </div>  

            <div class="row">
                <hr class="lineaAgua mt80" style="width: 100%;" />
            </div>

           <!--  <div class="row"> -->
                <div class="logos colorAgua bold140p">
                <div class="centrado colorAgua">
                    <p>Documentos e investigaciones</p>
                    <img src="images/agua/IMG_AGUA_DOCUMENTOS.jpg" width="85" height="63" alt="Agua docs"
                    />
                </div>
                <div class="centrado colorAgua">
                    <p>Mapas</p>
                    <img src="images/agua/IMG_AGUA_MAPA.jpg" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAgua">
                    <p>Normatividad</p>
                    <img src="images/agua/aguaNORMATIVIDAD.png" width="85" height="63" alt="Agua normas" />
                </div>
                <div class="centrado colorAgua">
                    <p>Calidad del aire</p>
                    <img src="images/agua/IMG_AGUA_TITULO.jpg" width="85" height="63" alt="Agua título" />
                </div>
            <!-- </div> -->
            
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
