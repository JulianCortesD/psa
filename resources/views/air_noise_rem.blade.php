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
                    <span class="breadcrumb_"> | Aire, ruido y radiación electromagnética</span>
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
                            <a href="">
                                <img src="{{asset("images/news/calidadaire.svg")}}" alt="calidad aire" class="img-calidad-aire">
                            </a>                            
                        </div>
                        <div class="col-4">
                            <a href="http://saludata.saludcapital.gov.co/osb/index.php/2019/07/01/protejase-del-sol-lo-que-debe-saber-sobre-la-radiacion-solar/">
                                <img src="{{asset("images/news/indiceuv.svg")}}" alt="indice uv" class="img-indice-uv">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="">
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

                    <h1 class="centrado colorAire mt20">CONTENIDO DE LA LINEA DE AIRE, RUIDO Y RADIACIÓN ELECTROMAGNÉTICA</h1>
                    <h2 class="centrado colorAire mt20">Vigilancia epidemiológica, ambiental y sanitaria por exposición a contaminación atmosférica, contaminación acústica
                    y exposición a radiación electromagnética no ionizante</h2>

                    <h3 class="colorAire">¿Qué hacemos?</h3>
                    <p>La Secretaría Distrital de Salud de Bogotá (SDS) en coordinación con los equipos de la Línea de Aire, Ruido y Radiaciones
                    Electromagnéticas (LARREM) de las Empresas Sociales del Estado E.S.E., dentro del proceso de Vigilancia Epidemiológica,
                    Ambiental y Sanitaria, realiza actividades de seguimiento a los principales efectos en salud asociados con la contaminación
                    del aire por Material Particulado (PM), la exposición a ruido y radiación electromagnética (REM), así como a la verificación
                    de la normatividad sanitaria relacionada con los espacios libres de humo de tabaco y cigarrillo, contribuyendo así
                    a la prevención de enfermedades, la promoción de la salud y al proceso de toma de decisiones en la implementación
                    de la Política Distrital de Salud Ambiental (PDSA).</p>
                    <p class="verMas colorAire">Ver más</p>

                    <h3 class="colorAire">DOCUMENTOS E INVESTIGACIONES</h3>
                    <p class="mt20">Compendio de documentos e investigaciones relacionados con la contaminación del aire, contaminación auditiva, exposición
                    al humo de tabaco y contaminación por radiación electromagnética en Bogotá.</p>
                    <ul>
                    <li>Informe anual de calidad del aire en Bogotá. Año 2017</li>
                    <li>Informe de la semana ambiental. Año 2018:
                        <a href="http://201.245.192.252:81/">http://201.245.192.252:81/</a>
                    </li>
                    <li>Informe ejecutivo de las jornadas de profundización del día mundial sin tabaco del año 2018 en Bogotá.</li>
                    <li>Informe de la Jornada de profundización contra el Ruido. Año 2018</li>
                    <li>Informe de la jornada de profundización en radiaciones electromagnéticas. Año 2018</li>
                    <li>Infografía &ldquo;Mejoremos el aire que respiramos&rdquo;</li>
                    <li>Infografía &ldquo;Día Mundial sin tabaco&rdquo;. Año 2019 </li>
                    <li>Infografía &ldquo;Calidad del sueño&rdquo;. Año 2019</li>
                    <li>Infografía &ldquo;Día sin carro y sin moto&rdquo;. Año 2019</li>
                    <li>Infografía &ldquo;Efectos en salud de la radiación electromagnética&rdquo;. </li>
                    </ul>

                    <h3 class="colorAire mt40">NORMATIVIDAD</h3>
                    <p>Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas con la calidad del
                    aire, ambientes 100% libres de humo de tabaco, contaminación por ruido y radiación electromagnética.</p>
                    <table border="0" cellspacing="0" cellpadding="0" width="0">
                    <tr>
                        <td width="179" nowrap="nowrap">
                        <p>Ley 09 de 1979</p>
                        </td>
                        <td width="628">
                        <p>
                            <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=1177">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=1177</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="179" nowrap="nowrap">
                        <p>Ley 675 de 2001</p>
                        </td>
                        <td width="628">
                        <p>
                            <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=4162">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=4162</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="179" nowrap="nowrap">
                        <p>Ley 715 de 2001</p>
                        </td>
                        <td width="628">
                        <p>
                            <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=4452&amp;dt=S">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=4452&amp;dt=S</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="179" nowrap="nowrap">
                        <p>Decreto 3518 de 2006</p>
                        </td>
                        <td width="628">
                        <p>
                            <a href="https://www.minsalud.gov.co/Normatividad_Nuevo/DECRETO%203518%20DE%202006.pdf">https://www.minsalud.gov.co/Normatividad_Nuevo/DECRETO%203518%20DE%202006.pdf</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="179" nowrap="nowrap">
                        <p>Conpes 3550 de 2008</p>
                        </td>
                        <td width="628">
                        <p>
                            <a href="https://www.minsalud.gov.co/sites/rid/Lists/BibliotecaDigital/RIDE/VS/PP/SA/marco-conpes-3550-2008-RSI-2005.pdf">https://www.minsalud.gov.co/sites/rid/Lists/BibliotecaDigital/RIDE/VS/PP/SA/marco-conpes-3550-2008-RSI-2005.pdf</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="179" nowrap="nowrap">
                        <p>Decreto 596 de 2011</p>
                        </td>
                        <td width="628">
                        <p>
                            <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/decreto-596-de-2011.pdf">http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/decreto-596-de-2011.pdf</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="179" nowrap="nowrap">
                        <p>Ley 1801 de 2016</p>
                        </td>
                        <td width="628">
                        <p>
                            <a href="https://www.policia.gov.co/sites/default/files/ley-1801-codigo-nacional-policia-convivencia.pdf">https://www.policia.gov.co/sites/default/files/ley-1801-codigo-nacional-policia-convivencia.pdf</a>
                        </p>
                        </td>
                    </tr>
                    </table>

                    <hr class="lineaAire mt80" />

                    <div class="logos colorAire bold140p">
                    <div class="centrado">
                        <p>Documentos e investigaciones</p>
                        <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Aire docs"
                        />
                    </div>
                    <div class="centrado">
                        <p>Mapas</p>
                        <img src="images/aire/IMG_AIRE_MAPA.jpg" width="85" height="63" alt="Aire mapa" />
                    </div>
                    <div class="centrado">
                        <p>Normatividad</p>
                        <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Aire normas" />
                    </div>
                    <div class="centrado">
                        <p>Calidad del aire</p>
                        <img src="images/aire/IMG_AIRE_TITULO.jpg" width="85" height="63" alt="Aire título" />
                    </div>
                    </div>
                </div>

            </div>        
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
