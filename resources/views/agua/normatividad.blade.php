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
            <br clear="left"><img src="images/aire/iconoHome.png" width="42" height="38" alt="Ir al home" />
                <span class="breadcrumb_"> | Agua y Saneamiento| </span>
                <span class="breadcrumb_ agua">Normatividad</span>
                <div width="300px">
                    <img src="{{asset("images/indicators/LogoAguaSaneamiento.png")}}" width="100%" height=""  alt="" />
                </div>
                </div>
            <div class="col-4">
              <div class="row ">
            <div class="col-12 date-time-title">
                    <span>Bogotá hoy</span>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-12 date-time">
                        Fecha y hora
                      </div>
                  </div>
                <div class="row mt-2">
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
                <a href="https://twitter.com/AmbienteBogota"  class="redes pl-1 pt-2" style="margin-top: 90px; margin-left:0px;">
                    <img  src="{{asset("images/redessociales/Twitter.svg")}}" alt="" style="height: 80%">
                </a>
                <a href="https://www.facebook.com/AmbienteBogota/"class="redes pl-2 pt-2" style="margin-top: 150px; margin-left:0px;">
                    <img  src="{{asset("images/redessociales/IconoFacebook.svg")}}" alt="" style="height: 95%">
                </a>
                <a href="https://www.youtube.com/channel/UCjboPXY4C2F3rnqP7k4_9cQ"class="redes pl-1 pt-2" style="margin-top: 210px; margin-left:0px;">
                    <img  src="{{asset("images/redessociales/IconoYouTube.svg")}}" alt="" style="height: 70%">
                </a>

            <a href="https://drive.google.com/file/d/1wIbvN4xKkDNTMttbx_ylvJMPQs5xbZZr/view">
            <div height="355">
                <img src="images/agua/BannerAgua.png" alt="" width="100%"/>
                </div>
                 </a>

                <div class="contenidoSecAmb centradoDiv">
                    <div>
<br></br>
                      <h2 class="colorAgua mt 40">
                        <img src="images/agua/IMG_AGUA_NORMATIVIDAD.png" alt="Calidad aire" width="97" height="78" align="absbottom" hspace="1"/><b>Normatividad</b></h2>
                    </div>
                    <p>Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas con la inspección,
                      vigilancia y control de las condiciones higiénico sanitarias de establecimientos</p>
                    <p>&nbsp;</p>
                    <p>
                      <h1 align="center" class="colorAgua" data-toggle="collapse" href="#collapseTransversal" role="button" aria-expanded="false" aria-controls="collapseTransversal" style="cursor: pointer;">
                       <b> Regulación Transversal</b>
                      </h1>
                    </p>
                    <div class="collapse" id="collapseTransversal">
                      <ul>

                        <div align="center">
                          <a href="https://drive.google.com/open?id=1KM4SlJjP-ntbUQkeTW1hTvRxOmrGo1a_" class="colorIndicadores">Ley 09 de 1979</a>
                        </div>

                        <div align="center">
                          <a href="https://drive.google.com/open?id=1lEQeeQvIfU0In99FD5VeD4xq3RA0M2n1" class="colorIndicadores">Ley 715 de 2001 </a>
                        </div>
                        <div align="center">
                          <a href="https://drive.google.com/open?id=1dzlJPG_HB4RtJ_FzkWgQhHCl1HxMKVhC" class="colorIndicadores">Decreto 3518 de 2006 </a>
                        </div>
                        <div align="center">
                          <a href="https://drive.google.com/open?id=1RwLN3yX-4K5kRx_tJielYDMDJcdVyp6P" class="colorIndicadores">Acuerdo 230 de 2006</a>
                        </div>
                        <div align="center">
                          <a href="https://drive.google.com/open?id=1_6izKlJ7cMIGHmbTtYiZqsTd3JPTSfe1" class="colorIndicadores">Resolución 705 de 2007 </a>
                        </div>
                        <div align="center">
                          <a href="https://drive.google.com/open?id=1r982i4y5kOKr0U-1d2HgeDB3Ph34d6bx" class="colorIndicadores">Resolución 1956 de 2008</a>
                        </div>
                        <div align="center">
                          <a href="https://drive.google.com/open?id=1MuLSs_WieSjObX7s8H_2_GA7pBpzR3ux" class="colorIndicadores">Ley 1335 de 2009</a>
                        </div>
                        <div align="center">
                          <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley_1801_2016.pdf" class="colorIndicadores">Ley 1801 de 2016</a>
                        </div>
                      </ul>
                    </div>

                    <h2 align="center" class="colorAgua"><b>Regulación Específica</b></h2>
                    <table width="100%" border="0">
                      <tr class="alinearVerticalInicial">
                        <td width="36%">
                          <p>
                            <h2 class="colorIndicadores" data-toggle="collapse" href="#collapseAgua" role="button" aria-expanded="false" aria-controls="collapseAgua" style="cursor: pointer; color:black; ">
                             <p class="breadcrumb_ agua"> Agua para consumo humano
                            </h2>
                          </p>
                          <h2 class="collapse" id="collapseAgua">
                              <ul class="sinVinetas">
                              <li>
                               <a href="https://drive.google.com/open?id=1hkBAmqeQlz5z4mOuQpohdBEB_w9ZEmbD" class="colorIndicadores">Resolución 1096 de 2000 </a>
                             </li>
                             <li>
                                <a href="https://drive.google.com/open?id=1Z8ArTEKyttPG4IzWd4IdbsHHixZfvrXx" class="colorIndicadores">Resolución 414 de 2002</a>
                              </li>
                              <li>
                                <a href="https://drive.google.com/open?id=1jfqh9HrK9Mvhvl6H0mEZzAfbnc6C1ynW" class="colorIndicadores">Decreto 1575 de 2007</a>
                             </li>
                             <li>
                                <a href="https://drive.google.com/open?id=1Kqbz9LCdZeTed84sTsfRSInZBQA-nsIR" class="colorIndicadores">Resolución 2115 de 2007</a>
                              </li>
                               <li>
                                <a href="https://drive.google.com/open?id=1i9O04ip1FN8d9Pv4M7QpbjHWU_9J4aH5" class="colorIndicadores">Resolución 811 de 2008</a>
                             </li>
                             <li>
                                <a href="https://drive.google.com/open?id=1v03_qG4x80xTJJYuowYBWAaKtwQr4myA" class="colorIndicadores">Resolución 82 de 2009</a>
                              </li>
                               <li>
                                <a href="https://drive.google.com/open?id=1WVpyBYzZkxmlxyK-3-7gdI_RLcBZ-h_G" class="colorIndicadores">Resolución 4716 de 2010</a>
                              </li>
                               <li>
                                <a href="https://drive.google.com/open?id=1h_TFB3uhHnNynXmPSv0fNj7SYv3uKiVC" class="colorIndicadores">Decreto 552 de 2011</a>
                              </li>
                               <li>
                                <a href="https://drive.google.com/open?id=1xZdBjgZ4a2Xo4Sz7aVoaByi_B2jTZz8y" class="colorIndicadores">Resolución 1615 de 2015</a>
                              </li>
                               <li>
                                <a href="https://drive.google.com/open?id=1OmzgvkMVKlwD0JDU1itN8Zmpaps6jCng" class="colorIndicadores">Resolución 549 de 2017</a>
                              </li>
                              </ul>
                            </ul>
                          </h2>
                        </td>
                        <td width="31%">
                          <p>
                            <h2 class="colorIndicadores" data-toggle="collapse" href="#collapseResiduos" role="button" aria-expanded="false" aria-controls="collapseResiduos" style="cursor: pointer; color:black; ">
                              <p class="breadcrumb_ agua"align= "center">Residuos sólidos y líquidos
                            </h2>
                          </p>
                          <h2 class="collapse" id="collapseResiduos">
                            <ul class="sinVinetas"align="center">
                              <li>
                                <a href="https://drive.google.com/open?id=1eqtybUGOLxyNStIey2NYNh9L-lnEwowz" class="colorIndicadores">Decreto 605 de 1996</a>
                              </li>
                              <li>
                                <a href="https://drive.google.com/open?id=1CYHOXXGKtqUen4uWveYmRFoOv-OVaYUt" class="colorIndicadores">Decreto 1505 de 2003</a>
                              </li>
                              <li>
                                <a href="https://drive.google.com/open?id=1mYGrTxkHVupFqy3XykAgF-mJHYt9e1AD" class="colorIndicadores">Decreto 400 de 2004</a>
                              </li>
                              <li>
                                <a href="https://drive.google.com/open?id=1j_pcpKQW_nu1XqKxMyXTbNQ9nl3fTJEU" class="colorIndicadores">Decreto 838 de 2005</a>
                              </li>
                              <li>
                                <a href="https://drive.google.com/open?id=1fQBKw618wJoXoRaAydNAuL4kfKKAuAqX" class="colorIndicadores">Resolución 0482 de 2009</a>
                              </li>
                              <li>
                                <a href="https://drive.google.com/open?id=1Fzydu4vwZ-wJk5gqeRFCzrVoFcv_1qyi" class="colorIndicadores">Decreto 1076 de 2015</a>
                              </li>
                              <li>
                                <a href="https://drive.google.com/open?id=1s2ZiNDOiRj6wbIXP85tWxWmuwKdspD9Z" class="colorIndicadores">Decreto 780 de 2016</a>
                              </li>

                          </h2>
                          <p>
                            <h2 align="center" class="colorIndicadores"  data-toggle="collapse" href="#collapseCarro" role="button" aria-expanded="false" aria-controls="collapseCarro" style="cursor: pointer; color:black; ">
                             <p class="breadcrumb_ agua"> Carrotanques
                            </h2>
                          </p>
                          <h2 class="collapse" id="collapseCarro">
                              <ul class="sinVinetas"align="center">
                             <li>
                                <a href="https://drive.google.com/open?id=1ILIIT85UO6OL3vTrA5r7lVbPhX45dPXO" class="colorIndicadores">Resolución 2190 de 1991 </a>
                              </li>
                              <li>
                                <a href="https://drive.google.com/open?id=1HZyA3bFqCNMsOMERU72oS8x6hjuYfa9Z" class="colorIndicadores"> Resolución 2115 de 07</a>
                                </li>
                              <li>
                                <a href="https://drive.google.com/open?id=1djG3BSM_XV0-SJyuZVZAcET2dx32PJ8u" class="colorIndicadores"> Decreto 1575 de 07</a> 
                              </li>
                              </ul>
                          </h2>
                        </td>
                        <td width="33%">
                          <p>
                            <h2 align="center" class="colorIndicadores" data-toggle="collapse" href="#collapsePiscinas" role="button" aria-expanded="false" aria-controls="collapsePiscinas" style="cursor: pointer; color:black; ">
                              <p class="breadcrumb_ agua">Piscinas
                            </h2>
                          </p>
                          <h2 class="collapse" align="center" id="collapsePiscinas">
                          <ul class="sinVinetas"align="">
                            <li>
                                <a href="https://drive.google.com/open?id=1ECsMO6pOFkamwkxsAAunP7DUg3fUrXnx" class="colorIndicadores">Ley 1209 de 2008</a>
                              </li>
                              <li>
                                <a href="https://drive.google.com/open?id=1LgFy0JBLqeJYiRHX4MBZ2t2Pl2AFHbUl" class="colorIndicadores">Resolución 1394 del 2015</a>
                              </li>
                             <li>
                                <a href="https://drive.google.com/open?id=1s2ZiNDOiRj6wbIXP85tWxWmuwKdspD9Z" class="colorIndicadores"> Decreto 780 de 2016</a>
                              </li>
                              <li>
                                <a href="https://www.who.int/water_sanitation_health/bathing/bathing2/es/"class="colorIndicadores ">
                                  Guías para ambientes seguros en aguas recreativas Volumen 2 - Pis-cinas, balnearios y ambientes de agua recreativa
                                  similares</a>
                                  </li>
                              </ul>
                          </h2>
                        </td>
                      </tr>
                    </table>
                    <div>
                      <h2 align="center" class="colorAgua">Establecimientos de alto riesgo físico</h2>
                      <table width="100%" border="0">
                        <tr class="alinearVerticalInicial">
                          <td width="32%" height="275">
                            <p>
                              <h2 class="colorIndicadores" data-toggle="collapse" href="#collapseFunerarios" role="button" aria-expanded="false" aria-controls="collapseFunerarios" style="cursor: pointer; color:black; ">
                                <p class="breadcrumb_ agua">Servicios funerarios y cementerios
                              </h2>
                            </p>
                            <h2 class="collapse" id="collapseFunerarios">
                               <ul class="sinVinetas"align="center">
                                  <li>
                                  <a href="https://drive.google.com/open?id=1kDqwkCsCoZCO8nrkoKCj4EUSWZKebF-j" class="colorIndicadores">Decreto 391 de 1991</a>
                                </li>
                                <li>
                                  <a href="https://drive.google.com/open?id=17jq721aNmUSa3i8wiy413TWtB5Ctat9V" class="colorIndicadores"> Circular 026 de 2004 </a>
                                </li>
                                <li>
                                  <a href="https://drive.google.com/open?id=1zIjDYWmwCWy8zvNxVyf4JMhVJ3gBN09F" class="colorIndicadores">Circular 027 de 2004 </a>
                                </li>
                                <li>
                                  <a href="https://drive.google.com/open?id=1YHy33rPJ3vANE-sc6tbNWFoAENBPlCX0" class="colorIndicadores">Circular 028 de 2004</a>
                                </li>
                                <li>
                                  <a href="https://drive.google.com/open?id=1sniBpBEwFyjo2rW5ve8Fg20XsN1y_-2z" class="colorIndicadores"> Decreto 313 de 2006 </a>
                                </li>
                                <li>
                                  <a href="https://drive.google.com/open?id=17WL4imZDIMJLAdyUu_o1U_LcQuosimtb" class="colorIndicadores">Resolución 5194 de 2010
                                  </a>
                               </li>
                               </ul>
                            </h2>
                          </td>
                          <td width="32%">
                            <p>
                              <h2 align="center" class="colorIndicadores" data-toggle="collapse" href="#collapseServicios" role="button" aria-expanded="false" aria-controls="collapseServicios" style="cursor: pointer; color:black; ">
                                <p class="breadcrumb_ agua">Establecimientos con servicios de alto impacto
                              </h2>
                            </p>
                            <h2 class="collapse" id="collapseServicios">
                              <ul class="sinVinetas"align="center">
                                <li>
                                  <a href="https://drive.google.com/open?id=1fAwTe8A5s0CL84_xczwwRxKqsdk2MMMn" class="colorIndicadores">Decreto 400 de 2004</a>
                                </li>
                                <li>
                                  <a href="https://drive.google.com/open?id=1OYWmG42FPVxiWiS62eRWfC7BFdbGqjrI" class="colorIndicadores">Decreto 780 de 2016</a>
                                </li>
                              </ul>
                            </h2>
                            <p>
                              <h2 class="colorIndicadores" align="center" data-toggle="collapse" href="#collapseCarcel" role="button" aria-expanded="false" aria-controls="collapseCarcel" style="cursor: pointer; color:black; ">
                                <p class="breadcrumb_ agua">Cárceles, centros de rehabilitación de menores y salas de retenidos
                              </h2>
                            </p>
                            <h2 class="collapse" id="collapseCarcel">
                              <ul class="sinVinetas"align="center">
                                <li>
                                <a href="https://drive.google.com/open?id=14cB2i-bKCPC-LV23_KGJhhVMIqV3jOFd" class="colorIndicadores">Ley 65 de1993</a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1-rDq3n9cqLaJ_It6GFV7tTlDyN2LdgDG" class="colorIndicadores">Acuerdo 011 de 1995</a>
                                </li>
                            </h2>
                          </td>
                          <td width="36%">
                            <p>
                              <h2 align="" class="colorIndicadores" data-toggle="collapse" href="#collapseHogares" role="button" aria-expanded="false" aria-controls="collapseHogares" style="cursor: pointer; color:black; ">
                                <p class= "breadcrumb_ agua"align="center">Hogares geriátricos
                              </h2>
                            </p>
                            <h2 class="collapse" id="collapseHogares">
                              <ul class="sinVinetas" align="center">
                                  <li>
                                  <a href="https://drive.google.com/open?id=1IhUMmoVcQHn79ZN8Up42IzvB068Q6oEk" class="colorIndicadores">Acuerdo 312 de 2008</a>
                                 </li>
                                  <li>
                                  <a href="https://drive.google.com/open?id=1xEJR7ohoV7hjbEKBhNp-tVjAxsb7KapW" class="colorIndicadores">Resolución 110 de 1995</a>
                                  </li>
                                  <li>
                                  <a href="https://drive.google.com/open?id=1-A1KrFClmGs8EIqMi3urIeJS5TJO4Nlo" class="colorIndicadores">Ley 1315 de 2009</a>
                                  </li>
                                  <li>
                                  <a href=": https://drive.google.com/open?id=199TcCo-iJfAoKBRn4sHjavN2LuKKBlXc" class="colorIndicadores">Decreto 780 de 2016</a>
                                  </li>
                              </ul>
                            </h2>
                          </td>
                        </tr>
                      </table>
                      <p>
                        <h2 align="center" class="colorAgua"  data-toggle="collapse" href="#collapseBajo" role="button" aria-expanded="false" aria-controls="collapseBajo" style="cursor: pointer;">
                          Establecimientos de bajo riesgo físico
                        </h2>
                      </p>
                      <h2 class="collapse" id="collapseBajo">
                        <table width="94%" border="0">
                          <tr class="alinearVerticalInicial">
                            <td width="27%" height="133">
                              <div align="center">
                                <ul class="sinVinetas"align="center">
                                  <li>
                                <a href="https://drive.google.com/open?id=1LFiim7IXylTAmRKADN0MLvixitAx-225" class="colorIndicadores">Resolución 3388 de 2008
                                </li>
                                <li>
                                  <a href="https://drive.google.com/open?id=1yPXYKiPD0rpsBTd5FVWVZfXJsIUupOKJ" align="center" class="colorIndicadores">Resolución 1842 de 2009
                                  </li>
                                  <li>
                                    <a href="https://drive.google.com/open?id=1oJpKKduY6iQ7LWWW0N2EpdMMfOdPUBus" align="center" class="colorIndicadores">Decreto 456 de 2010
                                    </li>
                                    <li>
                                  <a href="https://drive.google.com/open?id=1X_-En83FfovRwvWMvEOiIJa5CI0T911D" class="colorIndicadores">Resolución 1682 de 2010
                                  </li>
                                  <li>
                                      <a href="https://drive.google.com/open?id=19I4ahBG6uxPIdSrngU6ldiSesIfqNlvi" class="colorIndicadores">Decreto 113 de 2013</a>
                                    </li>
                                  </h2>
                                </div>
                              </div>
                              <div>
                                <div>

                                    <div align="left">
                                      <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucion-1842-de-2009.pdf"
                                        class="colorIndicadores"></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <p align="center">
                                <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucin-110-de-1995.pdf"
                                  class="colorIndicadores"></a>
                              </p>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <hr class="lineaAgua mt80" style="width: 100%;" />
            </div>

           <!--  <div class="row"> -->
             <div class="logos coloragua bold140p">
                <div class="centrado colorAgua">
                    <p class="colorAgua">Documentos e investigaciones</p>
                    <a href="{{asset("agua_saneamiento_documentos")}}">
                    <img src="images/agua/aguaDOCUMENTOS.png" width="85" height="63" alt="Agua docs"/>
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Mapas</p>
                    <a href="{{asset("agua_saneamiento_mapas")}}">
                    <img src="images/agua/IMG_AGUA_MAPA.jpg" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Normatividad</p>
                    <a href="{{asset("agua_saneamiento_normatividad")}}">
                    <img src="images/agua/IMG_AGUA_NORMATIVIDAD.png" width="85" height="63" alt="Agua título" />
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Indicadores</p>
                    <a href="{{asset("agua_saneamiento_indicadores")}}">
                    <img src="images/agua/IMG_AGUA_TITULO.jpg" width="85" height="63" alt="Agua título" />
                </div>
            </div>
        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
