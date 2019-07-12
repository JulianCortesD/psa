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
                    <span class="breadcrumb_">| Aire, ruido y radiación electromagnética | Calidad del aire - Ruido</span>
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

                    <h3 class="colorAire">Ruido</h3>
                    <span class="cursiva">Continúa...</span>
                    <p>
                    <strong>Vigilancia Epidemiológica:</strong> Analiza los posibles efectos extra-auditivos en la población debido a la exposición
                    a diferentes niveles de ruido; mediante el análisis de la información captada a través de las encuestas de percepción
                    y test de sueño aplicadas a la población de adolescentes de 11 a 17 años y en adultos de 18 a 64 años, con el propósito
                    de identificar afectación en la salud y calidad de vida.</p>
                    <p>
                    <strong>Vigilancia Sanitaria:</strong> Contempla la atención de quejas presentadas por las partes interesadas respecto al
                    ruido que es percibido por diferentes fuentes de emisión.</p>
                    <p>
                    <strong>Vigilancia Ambiental:</strong> Realiza el seguimiento a los niveles de contaminación por ruido mediante fuentes secundarias
                    como redes de ruido o la publicación de mapas de ruido elaborados por la autoridad ambiental – Secretaria Distrital
                    de Ambiente, así como la caracterización de zonas de exposición a ruido ambiental.</p>
                    <p>De interés:
                    </p>
                    <ul>
                    <li>
                        <a href="http://biblioteca.saludcapital.gov.co/img_upload/57c59a889ca266ee6533c26f970cb14a/Que%20hay%20de%20Nuevo/infografia_ruido.pdf">¿Cómo protegerse del ruido?</a> – SDS</li>
                    <li>
                        <a href="http://documentacion.ideam.gov.co/openbiblio/bvirtual/023770/Boletin_Ruido_Ambiental.pdf">¿Qué puedo hacer para contribuir a la reducción de los niveles de ruido ambiental</a>? Boletín ruido Ambiental.
                        – IDEAM.</li>
                    <li>
                        <a href="https://www.minsalud.gov.co/salud/Documents/poster_cuidados_auditivos.pdf">Cuidados Auditivos</a>. - MSPS</li>
                    <li>
                        <a href="http://www.saludcapital.gov.co/Documents/Plan_Territorial_Salud_2016_2020.pdf">Plan Territorial de Salud para Bogotá</a>, D. C. 2016-2020. - SDS</li>
                    <li>
                        <a href="http://www.bogota.gov.co/tag/ruido">VECINO RUIDOSO</a>: LE ENSEÑAMOS DÓNDE QUEJARSE. </li>
                    <li>
                        <a href="https://www.minsalud.gov.co/Paginas/Ruido-excesivo-en-entornos-una-de-las-principales-causas-para-perdida-auditiva.aspx">Ruido excesivo en entornos</a>, una de las principales causas para pérdida auditiva. – MSPS.</li>
                    <li>
                        <a href="http://www.who.int/es/news-room/fact-sheets/detail/deafness-and-hearing-loss">Sordera y Audición</a>. - OMS</li>
                    <li>Día internacional de la Audición. – OMS</li>
                    <li>
                        <a href="http://chchearing.org/noise/day/">El Día Internacional de Concienciación sobre el Ruido</a>.- El Centro de Audición y Comunicación (CHC)</li>
                    <li>Guía para trámite de quejas y peticiones. SDS.</li>
                    <li>
                        <a href="https://www.senalmemoria.co/articulos/contaminaci%C3%B3n-ac%C3%BAstica-afecta-ecosistema-y-especies-animales-en-bogot%C3%A1">Contaminación acústica afecta ecosistema y especies animales en Bogotá</a>. </li>
                    </ul>

                    <h3 class="seccion fondoAire mt40">Indicadores</h3>
                    <div class="logos">
                    <div class="seccionIcono">
                        <img src="images/aire/IMG_AGUA_INDICADORES.jpg" width="85" height="63" alt="indicadores aire" />
                    </div>
                    <div class="sinSaltoLinea">Describen la tendencia de la frecuencia de casos relacionados con la pérdida de audición y la calidad del sueño debido
                        a la exposición a ruido y los resultados de las acciones de la vigilancia sanitaria y ambiental por contaminación
                        auditiva en Bogotá.</div>
                    </div>

                    <h3 class="seccion fondoAire mt40">Normatividad</h3>
                    <div class="logos">
                    <div class="seccionIcono">
                        <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="normas aire" />
                    </div>
                    <div class="sinSaltoLinea">Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas con la emisión
                        de ruido.</div>
                    </div>
                    <table border="0" cellspacing="0" cellpadding="0" width="0">
                    <tr>
                        <td width="35%" nowrap="nowrap">
                        <p>Resolución 8321 de 1983</p>
                        </td>
                        <td width="65%">
                        <p>
                            <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucion-8321-de-1983.pdf">http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucion-8321-de-1983.pdf</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">
                        <p>Decreto 948 de 1995</p>
                        </td>
                        <td width="65%">
                        <p>
                            <a href="http://www.minambiente.gov.co/images/normativa/app/decretos/54-dec_0948_1995.pdf">http://www.minambiente.gov.co/images/normativa/app/decretos/54-dec_0948_1995.pdf</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">
                        <p>LEY 715 DE 2001</p>
                        </td>
                        <td width="65%">
                        <p>
                            <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=4452&amp;dt=S">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=4452&amp;dt=S</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">
                        <p>LEY 769 DE 2002</p>
                        </td>
                        <td width="65%">
                        <p>
                            <a href="https://www.minsalud.gov.co/sites/rid/Lists/BibliotecaDigital/RIDE/INEC/IGUB/ley-769-de-2002.pdf">https://www.minsalud.gov.co/sites/rid/Lists/BibliotecaDigital/RIDE/INEC/IGUB/ley-769-de-2002.pdf</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">
                        <p>Resolución 0627 de 2006</p>
                        </td>
                        <td width="65%">
                        <p>
                            <a href="http://www.minambiente.gov.co/images/AsuntosambientalesySectorialyUrbana/pdf/emisiones_atmosfericas_contaminantes/norma_ruido/Resolucion_627_de_2006_-_Norma_nacional_de_emision_de_ruido.pdf">http://www.minambiente.gov.co/images/AsuntosambientalesySectorialyUrbana/pdf/emisiones_atmosfericas_contaminantes/norma_ruido/Resolucion_627_de_2006_-_Norma_nacional_de_emision_de_ruido.pdf</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">
                        <p>Resolución 6918 de 2010</p>
                        </td>
                        <td width="65%">
                        <p>
                            <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=40790&amp;dt=S">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=40790&amp;dt=S</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">
                        <p>Resolución 6919 de 2010</p>
                        </td>
                        <td width="65%">
                        <p>
                            <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=40812&amp;dt=S">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=40812&amp;dt=S</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">
                        <p>Decreto 1076 de 2015</p>
                        </td>
                        <td width="65%">
                        <p>
                            <a href="https://www.ani.gov.co/sites/default/files/decreto_1076.pdf">https://www.ani.gov.co/sites/default/files/decreto_1076.pdf</a>
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="35%" nowrap="nowrap">
                        <p>Guía ruido urbano OMS</p>
                        </td>
                        <td width="65%">
                        <p>
                            <a href="https://ocw.unican.es/pluginfile.php/965/course/section/1090/Guias%2520para%2520el%2520ruido%2520urbano.pdf">https://ocw.unican.es/pluginfile.php/965/course/section/1090/Guias%2520para%2520el%2520ruido%2520urbano.pdf</a>
                        </p>
                        </td>
                    </tr>
                    </table>


                    <h3 class="seccion fondoAire mt40">Mapas</h3>
                    <div class="logos">
                    <div class="seccionIcono">
                        <img src="images/aire/IMG_AIRE_MAPA.jpg" width="85" height="63" alt="mapas aire" />
                    </div>
                    <div class="sinSaltoLinea">Contempla las ubicaciones geográficas de las acciones de vigilancia ambiental, sanitaria y los eventos de interés
                        en salud pública relacionados con la exposición a ruido en Bogotá.</div>
                    </div>
                    <ul>
                    <li>
                        <a name="_Hlk13361079" id="_Hlk13361079">Quejas atendidas por exposición a contaminación de ruido. Bogotá, año 2018. </a>
                    </li>
                    <li>Distribución de casos de buenos y malos dormidores según el ICSP Bogotá, año 2018. </li>
                    <li>Distribución de casos de buenos y malos dormidores en población, según EPWORTH Bogotá, año 2018. </li>
                    <li>Distribución de casos de buenos y malos dormidores en población, según el ICSP. Bogotá, año 2018. </li>
                    </ul>


                </div>
            </div>   
            
            <div class="row">
                <hr class="lineaAire mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAire bold140p">
            <div class="centrado colorAire">
                <p>Documentos e investigaciones</p>
                <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Agua docs"
                />
            </div>
            <div class="centrado colorAire">
                <p>Mapas</p>
                <img src="images/aire/aireMAPA.png" width="85" height="63" alt="Agua mapa" />
            </div>
            <div class="centrado colorAire">
                <p>Normatividad</p>
                <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Agua normas" />
            </div>
            <div class="centrado colorAire">
                <p>Calidad del aire</p>
                <img src="images/aire/aireNUBE.png" width="85" height="63" alt="Agua título" />
            </div>
            </div>
        </div>  
    </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
