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
                    <div >
                        <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Calidad aire" /> 
                        <h1 class="seccion fondoAire sinSaltoLinea"> Normatividad</h1></div>

                        <h2 class="centrado colorAire mt40">Regulación Transversal Aire, Ruido y Radiación Electromagnética</h2>

                        <h3>NORMATIVIDAD GENERAL</h3>
                        <ul class="sinVinetas">
                            <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/marco_legal.pdf" class="colorAire">SÍNTESIS MARCO LEGAL</a></li>
                            <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-9-de-1979.pdf" class="colorAire">LEY 09 DE 1979</a></li>
                            <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-675-de-2001.pdf" class="colorAire">LEY 675 DE 2001 </a></li>
                            <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-715-de-2001.pdf" class="colorAire">LEY 715 DE 2001 </a></li>
                            <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/conpes-3344-de-2005.pdf" class="colorAire">CONPES 3344 DE 2005</a></li>
                            <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/decreto-3518-de-2006_1.pdf" class="colorAire">DECRETO 3518 DE 2006</a></li>
                            <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/conpes-3550-de-2008.pdf" class="colorAire">CONPES 3550 DE 2008 </a></li>
                            <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/decreto-596-de-2011.pdf" class="colorAire">DECRETO 596 DE 2011</a></li>
                            <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley_1801_2016.pdf" class="colorAire">LEY 1801 DE 2016</a></li>
                        </ul>


                        <h2 class="centrado colorAire mt40">Regulación Específica</h2>
                        <table width="100%" border="0">
                            <tr class="alinearVerticalInicial">
                                <td><h3>CALIDAD DEL AIRE</h3>
                                <ul class="sinVinetas">
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucin-187-de-2007.pdf" class="colorAire">RESOLUCIÓN 187 DE 2007 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucin-610-de-2010.pdf" class="colorAire">RESOLUCIÓN 610 DE 2010</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/decreto-98-de-2011.pdf" class="colorAire">DECRETO 98 DE 2011 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/decreto-623-de-2011.pdf" class="colorAire">DECRETO 623 DE 2011 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/decreto-595-de-2015.pdf" class="colorAire">DECRETO 595 DE 2015 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/decreto-1076-de-2015.pdf" class="colorAire">DECRETO 1076 DE 2015</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucin-610-de-2010_1.pdf" class="colorAire">RESOLUCIÓN 2410 DE 2015 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/guias-calidad-del-aire-oms.pdf" class="colorAire">GUÍA INTERNACIONAL DE LA OMS</a></li>
                                </ul>
                                </td>
                                <td><h3>HUMO DE TABACO</h3>
                                <ul class="sinVinetas">
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/acuerdo-3-de-1983.pdf" class="colorAire">ACUERDO 3 DE 1983 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucion-543-de-2001.pdf" class="colorAire">RESOLUCIÓN 543 DE 2001 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-1109-de-2006.pdf" class="colorAire">LEY 1109 DE 2006</a></li>
                                    <li ><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/circular-externa-80-de-2008.pdf" class="colorAire">CIRCULAR EXTERNA 80 DE 2008</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucion-01956-de-2008.pdf" class="colorAire">RESOLUCIÓN 1956 DE 2008</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/acuerdo-376-de-2009.pdf" class="colorAire">ACUERDO 376 DE 2009</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-1335-de-2009.pdf" class="colorAire">LEY 1335 DE 2009 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucion-5572-de-2009.pdf" class="colorAire">RESOLUCIÓN 5572 DE 2009</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/circular-031-de-2010.pdf" class="colorAire">CIRCULAR 031 DE 2010</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/circular-41-de-2011.pdf" class="colorAire">CIRCULAR 41 DE 2011 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/circular-externa-005-de-2012.pdf" class="colorAire">CIRCULAR EXTERNA 005 DE 2012 </a></li>
                                    <li ><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/circular-externa-011-de-2012.pdf" class="colorAire">CIRCULAR EXTERNA 011 DE 2012 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/convenio_oms_control_tabaco.pdf" class="colorAire">CONVENIO MARCO OMS PARA EL CONTROL DE TABACO</a></li>
                                    
                                </ul></td>
                                <td><h3>MONÓXIDO DE CARBONO</h3>
                                <ul class="sinVinetas">
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/circular_0009_de_2006.pdf" class="colorAire">CIRCULAR 0009 DE 2006 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/directiva-015-de-2007.pdf" class="colorAire">DIRECTIVA 015 DE 2007 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/directiva-19-de-2009.pdf" class="colorAire">DIRECTIVA 019 DE 2009</a></li>
                                </ul>
                                
                                <h3>OLORES OFENSIVOS</h3>
                                <ul class="sinVinetas">
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucion-1541-de-2013.pdf" class="colorAire">RESOLUCIÓN 1541 DE 2013</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucion-2087-de-2014.pdf" class="colorAire">RESOLUCIÓN 2087 DE 2014 </a></li>
                                    <li ><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/norma_6012_1.pdf" class="colorAire">NORMA TÉCNICA COLOMBIANA 6012-1 </a></li>
                                </ul>
                                
                                <h3>RADIACIONES ELECTROMAGNÉTICAS</h3>
                                <ul class="sinVinetas">
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-99-de-1993.pdf" class="colorAire">LEY 99 DE 1993</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/circular-01-de-2005.pdf" class="colorAire">CIRCULAR 01 DE 2005</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/decreto-195-de-2005.pdf" class="colorAire">DECRETO 195 DE 2005</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/decreto-676-de-2011.pdf" class="colorAire">DECRETO 676 DE 2011 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/acuerdo-339-de-2008.pdf" class="colorAire">ACUERDO 339 DE 2008</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/notas_oms.pdf" class="colorAire">NOTAS OMS </a></li>
                                
                                </ul>
                                </td>
                                <td><h3>CONTAMINACIÓN POR RUIDO</h3>
                                <ul class="sinVinetas">
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucion-8321-de-1983.pdf" class="colorAire">Resolución 8321 DE 1983</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/decreto-948-de-1995.pdf" class="colorAire">Decreto 948 de 1995</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucion-0627-de-2006.pdf" class="colorAire">Resolución 0627 de 2006 </a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucion-6918-de-2010.pdf" class="colorAire">Resolución 6918 de 2010</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucion-6919-de-2010.pdf" class="colorAire">Resolución 6919 de 2010</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/decreto-1076-de-2015_1.pdf" class="colorAire">Decreto 1076 de 2015</a></li>
                                    <li><a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/guia-ruido-urbano-oms.pdf" class="colorAire">Guía ruido urbano OMS</a></li>
                                </ul></td>
                            </tr>
                        </table>
                    </div>
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
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
