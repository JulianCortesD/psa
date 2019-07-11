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
                    <span class="breadcrumb_"> | Aire, ruido y radiación electromagnética | Calidad del aire - Radiación electromagnética</span>
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

                    <h3 class="colorAire">Radiación electromagnética </h3>
                    <span class="cursiva">Continúa...</span>
                    <p>
                    <strong>Vigilancia Epidemiológica;</strong> Vigila los posibles efectos en salud debido a la exposición a radiaciones electromagnéticas
                    no ionizantes, mediante el análisis de la información captada a través de las encuestas de percepción aplicadas a
                    la población entre los 18 a 55 años, con el propósito de conocer los factores asociados al síndrome de radiofrecuencia.
                    </p>
                    <p>
                    <strong>Vigilancia Sanitaria:</strong> Contempla la atención de quejas presentadas por la comunidad respecto a la ubicación
                    de infraestructuras eléctricas y de comunicaciones que emiten radiaciones electromagnéticas. </p>
                    <p>
                    <strong>Vigilancia Ambiental</strong>: Consta del seguimiento a reportes de la Agencia Nacional del Espectro – ANE, así como
                    la caracterización de infraestructuras tales como: estación base de telefonía móvil, antena de telefonía móvil, antena
                    de televisión, antena de radio, transformador, subestación eléctrica, líneas de alta, media y baja tensión u otra,
                    asociadas con la exposición a radiación electromagnética.</p>
                    De interés:</p>
                    <ul>
                    <li>
                        <a href="http://www.who.int/peh-emf/about/WhatisEMF/es/">¿Campos Electromagnéticos?</a> – OMS</li>
                    <li>
                        <a href="http://www.who.int/peh-emf/project/es/">Proyecto Internacional CEM</a>. – OMS</li>
                    <li>
                        <a href="https://www.ane.gov.co/images/ArchivosDescargables/Normatividad/cartilla.ppt">Radiaciones electromagnéticas, salud pública e instalación de infraestructura de telecomunicaciones.</a> - Ministerio
                        de Tecnologías
                        <br /> de la Información y las Comunicaciones.</li>
                    <li>
                        <a href="https://www.minsalud.gov.co/sites/rid/Lists/BibliotecaDigital/RIDE/VS/PP/SA/gestion-dts-campos-electromagneticos-telefonia-movil.pdf">Guía Para La Gestión De Las Dts En El Desarrollo De Los Procesos De Promoción, Prevención, Vigilancia Y Control
                        Sanitario Relacionados Con Los Campos Electromagnéticos Generados Por La Telefonía </a> MÓVIL. Min salud y OMS.</li>
                    </ul>

                    <h3 class="seccion fondoAire mt40">Normatividad</h3>
                    <div class="logos">
                    <div class="seccionIcono">
                        <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="normas aire" />
                    </div>
                    <div class="sinSaltoLinea">Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas con la exposición
                        a radiación electromagnética.</div>
                    </div>
                    <table border="0" cellspacing="0" cellpadding="0" width="0">
                    <tr>
                        <td width="35%" nowrap="nowrap">Ley 99 de 1993</td>
                        <td width="65%">
                        <a href="https://www.oas.org/dsd/fida/laws/legislation/colombia/colombia_99-93.pdf">https://www.oas.org/dsd/fida/laws/legislation/colombia/colombia_99-93.pdf</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">Circular 01 de 2005</td>
                        <td width="65%">
                        <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/circular-01-de-2005.pdf">http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/circular-01-de-2005.pdf</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">Decreto 195 de 2005</td>
                        <td width="65%">
                        <a href="https://www.mintic.gov.co/portal/604/articles-3569_documento.pdf">https://www.mintic.gov.co/portal/604/articles-3569_documento.pdf</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">Resolución 1645 DE 2005</td>
                        <td width="65%">
                        <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=17461#0">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=17461#0</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">Ley 1341 de 2009</td>
                        <td width="65%">
                        <a href="https://www.mintic.gov.co/portal/604/articles-3707_documento.pdf">https://www.mintic.gov.co/portal/604/articles-3707_documento.pdf</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">Decreto Nacional 1078 DE 2015</td>
                        <td width="65%">
                        <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=62513&amp;dt=S">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=62513&amp;dt=S</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">Resolución 754 2016</td>
                        <td width="65%">
                        <a href="https://www.ane.gov.co/images/COMUNICACIONES2016/RESOLUCION_754_2016.pdf">https://www.ane.gov.co/images/COMUNICACIONES2016/RESOLUCION_754_2016.pdf</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">Acuerdo 645 DE 2016</td>
                        <td width="65%">
                        <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=66271">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=66271</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">Decreto Distrital 397 de 2017</td>
                        <td width="65%">
                        <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=70337&amp;dt=S">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=70337&amp;dt=S</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">Decreto 472 de 2017</td>
                        <td width="65%">
                        <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=71202&amp;dt=S">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=71202&amp;dt=S</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">Resolución 1370 de 2018</td>
                        <td width="65%">
                        <a href="http://portal.anla.gov.co/sites/default/files/res_1370_22082018_ct_4232_ct_4460.pdf">http://portal.anla.gov.co/sites/default/files/res_1370_22082018_ct_4232_ct_4460.pdf</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">Resolución 774 de 2018</td>
                        <td width="65%">
                        <a href="https://www.ane.gov.co/images/ArchivosDescargables/Normatividad/Radiaciones_no_ionizantes/Resol_774-2018.pdf?s=57572B2572477A469FB185AD1435459E3CD4DB1B">https://www.ane.gov.co/images/ArchivosDescargables/Normatividad/Radiaciones_no_ionizantes/Resol_774-2018.pdf?s=57572B2572477A469FB185AD1435459E3CD4DB1B</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap" rowspan="2">Notas OMS</td>
                        <td width="65%" nowrap="nowrap">
                        <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/notas_oms.pdf">http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/notas_oms.pdf</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="65%" nowrap="nowrap">
                        <a href="https://www.who.int/peh-emf/publications/factsheets/es/">https://www.who.int/peh-emf/publications/factsheets/es/</a>
                        </td>
                    </tr>
                    </table>

                    <h3 class="seccion fondoAire mt40">Mapas</h3>
                    <div class="logos">
                    <div class="seccionIcono">
                        <img src="images/aire/IMG_AIRE_MAPA.jpg" width="85" height="63" alt="mapas aire" />
                    </div>
                    <div class="sinSaltoLinea">Muestran las ubicaciones geográficas de las acciones de vigilancia ambiental, sanitaria y eventos de interés en salud
                        pública relacionados con la exposición a radiación electromagnética en Bogotá.</div>
                    </div>
                    <ul>
                    <li>Quejas atendidas por exposición a contaminación de radiación electromagnética en Bogotá. Año 2018.</li>
                    </ul>
                </div>
            </div>        
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
