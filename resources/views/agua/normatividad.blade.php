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
                    <span class="breadcrumb_ agua"> Normatividad</span>
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
                    <div>
                        <img src="images/agua/IMG_AGUA_NORMATIVIDAD.jpg" width="85" height="63" alt="Calidad aire" />
                        <h1 class="seccion fondoAgua sinSaltoLinea"> Normatividad</h1>
                    </div>

                    <h2 class="centrado colorAgua mt40">Regulación Transversal</h2>

                    <ul>
                        <li>
                        <a href="https://drive.google.com/open?id=1KM4SlJjP-ntbUQkeTW1hTvRxOmrGo1a_" class="colorAgua">Ley 09 de 1979</a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1lEQeeQvIfU0In99FD5VeD4xq3RA0M2n1" class="colorAgua">Ley 715 de 2001 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1dzlJPG_HB4RtJ_FzkWgQhHCl1HxMKVhC" class="colorAgua">Decreto 3518 de 2006 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1RwLN3yX-4K5kRx_tJielYDMDJcdVyp6P" class="colorAgua">Acuerdo 230 de 2006</a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1_6izKlJ7cMIGHmbTtYiZqsTd3JPTSfe1" class="colorAgua">Resolución 705 de 2007 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1r982i4y5kOKr0U-1d2HgeDB3Ph34d6bx" class="colorAgua">Resolución 1956 de 2008</a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1MuLSs_WieSjObX7s8H_2_GA7pBpzR3ux" class="colorAgua">Ley 1335 de 2009</a>
                        </li>
                        <li>
                        <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley_1801_2016.pdf" class="colorAgua">LEY 1801 DE 2016</a>
                        </li>
                    </ul>


                    <h2 class="centrado colorAgua mt40">Regulación Específica</h2>
                    <table width="100%" border="0">
                        <tr class="alinearVerticalInicial">
                        <td width="30%">
                            <h3>Agua para consumo humano</h3>
                            <ul>
                            <li>
                                <a href="https://drive.google.com/open?id=1hkBAmqeQlz5z4mOuQpohdBEB_w9ZEmbD" class="colorAgua">Resolución 1096 de 2000 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1Z8ArTEKyttPG4IzWd4IdbsHHixZfvrXx" class="colorAgua">Resolución 414 de 2002</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1hm5t_Sbvmo5VbUuY24nK_MNV14VL7Ge" class="colorAgua">Decreto 1575 de 2007</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1Kqbz9LCdZeTed84sTsfRSInZBQA-nsIR" class="colorAgua">Resolución 2115</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1i9O04ip1FN8d9Pv4M7QpbjHWU_9J4aH5" class="colorAgua">Resolución 811 de 2008</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1v03_qG4x80xTJJYuowYBWAaKtwQr4myA" class="colorAgua">Resolución 82 de 2009</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1WVpyBYzZkxmlxyK-3-7gdI_RLcBZ-h_G" class="colorAgua">Resolución 4716 de 2010</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1h_TFB3uhHnNynXmPSv0fNj7SYv3uKiVC" class="colorAgua">Decreto 552 de 2011</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1xZdBjgZ4a2Xo4Sz7aVoaByi_B2jTZz8y" class="colorAgua">Resolución 1615 de 2015</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1OmzgvkMVKlwD0JDU1itN8Zmpaps6jCng" class="colorAgua">Resolución 549 de 2017</a>
                            </li>
                            </ul>
                        </td>
                        <td width="30%">
                            <h3>Residuos sólidos y líquidos</h3>
                            <ul>
                            <li>
                                <a href="https://drive.google.com/open?id=1eqtybUGOLxyNStIey2NYNh9L-lnEwowz" class="colorAgua">Decreto 605 de 1996</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1CYHOXXGKtqUen4uWveYmRFoOv-OVaYUt" class="colorAgua">Decreto 1505 de 2003</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1mYGrTxkHVupFqy3XykAgF-mJHYt9e1AD" class="colorAgua">Decreto 400 de 2004</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1j_pcpKQW_nu1XqKxMyXTbNQ9nl3fTJE" class="colorAgua">Decreto 838 de 2005</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1fQBKw618wJoXoRaAydNAuL4kfKKAuAqX" class="colorAgua">Resolución 0482 de 2009</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1Fzydu4vwZ-wJk5gqeRFCzrVoFcv_1qyi" class="colorAgua">Decreto 1076 de 2015</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1s2ZiNDOiRj6wbIXP85tWxWmuwKdspD9Z" class="colorAgua">Decreto 780 de 2016</a>
                            </li>
                            </ul>
                        </td>
                        <td width="40%">
                            <h3>Piscinas</h3>
                            <ul>
                            <li>
                                <a href="https://drive.google.com/open?id=1ECsMO6pOFkamwkxsAAunP7DUg3fUrXnx" class="colorAgua">Ley 1209 de 2008</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1LgFy0JBLqeJYiRHX4MBZ2t2Pl2AFHbUl" class="colorAgua">Resolución 1394 del 2015</a>
                            </li>
                            <li>Decreto 780 de 2016</li>
                            <li>RETIE: Reglamento Técnico de Instalaciones Eléctricas y fue creado por el Decreto 18039 de 2004, del Ministerio
                                de Minas y Energía</li>
                            <li>Guías para ambientes seguros en aguas recreativas Volumen 2 - Pis-cinas, balnearios y ambientes de agua recreativa
                                similares</li>
                            </ul>

                        </td>
                        </tr>
                    </table>


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
