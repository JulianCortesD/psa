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
                <span class="breadcrumb_"> | Medicamentos seguros y dispositivos médicos| </span>
                <span class="colorMedicamentos">Normatividad</span>
                <div width="300px">
                    <img src="{{asset("images/medicamentos/LogoMedicamentos.png")}}" width="100%" height=""  alt="" />
                </div>
            </div>
            <div class="col-4">
                <div class="row">
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
            <a href="http://autorregulacion.saludcapital.gov.co/droguerias">
            <div height="355">
                <img src="images/medicamentos/BannersMedicamentos.png" alt="Slider aire" width="100%" />
            </div>
            </a>
        </div>

<br></br>
            <div class="row" style="text-align:justify;">
                <div class="contenidoSecAmb centradoDiv">
                    <h2 class="colorMedicamentos bold140p">
                    <img src="images/medicamentos/IMG_MEDICAMENTOS_NORMATIVIDAD.jpg" width="85" height="63" align="absbottom" /><b>Normatividad</b></h2>
                    <p>
                        Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas con las acciones de
                        vigilancia, inspección y control en los establecimientos dedicados a la comercialización de medicamentos, dispositivos
                        médicos y productos farmacéuticos.
                    </p>
                    <p>
                        <h2 align="center" data-toggle="collapse" href="#collapseTransversal" role="button" aria-expanded="false" aria-controls="collapseTransversal" style="cursor: pointer; "class="colorMedicamentos bold140p">
                                Regulación Trasversal
                            </span>
                        </h2>
                    </p>
                    <div class="collapse" id="collapsetransversal" align="center">
                        <table width="599" border="0">
                            <tr>
                                <td width="331" class="colorIndicadores">
                                    <a href="https://drive.google.com/open?id=1j3rEtQprPCF7ynTda-ORnwDbbnR_lnbi" class="colorIndicadores">
                                    <div align="center">Ley 09 de 1979 
                                </div></td>
                                <td width="258" class="colorIndicadores">
                                    <a href="https://drive.google.com/open?id=1CyROigjrZJ5vq9o4f6y0tdTbjCgY94xq" class="colorIndicadores">
                                    <div align="center">Resolución 705 de 2007</div></td>
                            </tr>
                            <tr>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=10N9rFWeOArQPukHtu9LcYFauEdVTUSWp" class="colorIndicadores">
                                <div align="center">Ley 30 de 1986  </div></td>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=12GruqPM3ypiJ4pEb9PBrU-gM9jsqC4If" class="colorIndicadores">
                                <div align="center">Resolución 1403 de 2007  </div></td>
                            </tr>
                            <tr>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1VVW90Ac0TZDDS2IKhgRlmdS-nUTWgfws" class="colorIndicadores">
                                <div align="center">Decreto 1070 de 1990  </div></td>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1XuKv1aHr1c2qxjgHiem__-xSGLQEyIPw" class="colorIndicadores">
                                <div align="center">Resolución 2955 de 2007  </div></td>
                            </tr>
                            <tr>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1j1fximBxVdzFQ2Qv1aNCjVQgPQG83xt6" class="colorIndicadores">
                                <div align="center">Resolución 13370 de 1990  </div></td>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1Meq9JihUYRgdwXr_1kwtQSiRa_HrXEwo" class="colorIndicadores">
                                <div align="center">Decreto 780 de 2016 </div></td>
                            </tr>
                            <tr>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1BlOf-0MnNk8CG21n6xj1W36-qRqgcLJJ" class="colorIndicadores">
                                <div align="center">Resolución 10911 de 1992  </div></td>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=18WjoYli0lED4umz_Lf2YRWd49s7gV2_q" class="colorIndicadores">
                                <div align="center">Decreto 1879 de 2008  </div></td>
                            </tr>
                            <tr>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1bjO08kfORBqEPPtOiW1uA76tOBttqUJL" class="colorIndicadores">
                                <div align="center">Resolución 4547 de 1998  </div></td>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=16mVLN6m9dnLW5DyKA_F35c8TYG9rXPW3" class="colorIndicadores">
                                <div align="center">Resolución 126 de 2009  </div></td>
                            </tr>
                            <tr>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1NoQW4M41hoxhKZGXYBDpxyBqeE3GRLG_" class="colorIndicadores">
                                <div align="center">Resolución 886 de 2004  </div></td>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1_jJ89mQ0c0taUtBryF-jB01z7uC1sdce" class="colorIndicadores">
                                <div align="center">Resolución 371 de 2009</div></td>
                            </tr>
                            <tr>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1WO4InP9tPNnYnAf3xCrxW4alIql4eoLi" class="colorIndicadores">
                                <div align="center">Decreto 2200 de 2005  </div></td>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1DvTIMo2GkIi0rxuippLGuNHIalK4FNyJ" class="colorIndicadores">
                                <div align="center">Resolución 527 de 2010 </div></td>
                            </tr>
                            <tr>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1gbKhT2mZW4OhNQiSNt0gkh0spfMPo0uQ" class="colorIndicadores">
                                <div align="center">Decreto 3050 de 2005  </div></td>
                            <td class="colorIndicadores"><div align="center">Resolución 1229 de 2013 </div></td>
                            </tr>
                            <tr>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1W5m-6PbUIAYxA7K_QjWHSpsLmMlLSpnz" class="colorIndicadores">
                                <div align="center">Decreto 2330 de 2006</div></td>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1UF2ftkDktn2JGcFVUiN9onQz9zoUNR0S" class="colorIndicadores"> <div align="center">Decreto 351 de  2014</div></td>
                            </tr>
                            <tr>
                            <td class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1oPnw80QX3-AwlXxF5rTiYQYmCNR0qbcG" class="colorIndicadores">
                                <div align="center">Decreto 3518 de 2006  </div></td>
                            <td><div align="center"></div></td>
                            </tr>
                        </table>
                        <p>&nbsp;</p>

                    </div>

                    <h2 align="center" class="colorMedicamentos bold140p">Regulación Específica</h2>
                    <div align="center">
                      <table width="969" border="0">
                        <tr class="colorMedicamentos">
                          <td width="295">
                            <p>
                            <h6 align="" class="colorIndicadores" data-toggle="collapse" href="#collapseReactivos" role="button" aria-expanded="false" aria-controls="collapseReactivos" style="cursor: pointer; color:#662d8d; "class="colorMedicamentos"> Reactivos de diagnóstico in vitro</h6>
                              </p>
                            <div class="collapse" id="collapseReactivos">
                              <div align="left" class="colorIndicadores">
                                <ul class="sinVinetas">
                                <li>
                              <a href="https://drive.google.com/open?id=1KkkUo1fi2rvAMJdXXlnxbomo4yjnryba" class="colorIndicadores">Decreto 3770 de 2004 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1SSow46Rld26ozdggdSl4lP-6UOMeG-rL" class="colorIndicadores">Resolución 132 de 2006</a>
                              </li>

                                </div>
                              </td>
                          <td width="202">
                            <p>
                            <h6  align="center" class="colorIndicadores"  data-toggle="collapse" href="#collapseSuplementos" role="button" aria-expanded="false" aria-controls="collapseSuplementos" style="cursor: pointer; color:#662d8d;">Suplementos dietarios</h6>
                              </p>
                            <div class="collapse" id="collapseSuplementos">

                          <a href="https://drive.google.com/open?id=1kPqr3dQdtD8tfrJWHUEnjYVTcefVixxH" class="colorIndicadores">Decreto 3249 de 2006 </a>

                          <l>
                         <a href="https://drive.google.com/open?id=1QJ_y2rgtCIU4WTas3ReeOpQVesIyiPMZ" class="colorIndicadores">Decreto 3863 de 2008 </a>

                         <l>
                        <a href="https://drive.google.com/open?id=19WUZX_jj_OJS3jucWIBrvFEbBP35dxLH" class="colorIndicadores">Decreto 272 de 2009 </a></div>
                         <l>
                              </div>
                            </td>
                          <td width="263">
                          <p>
                            <h6 align="center" class="colorIndicadores"  data-toggle="collapse" href="#collapseFito" role="button" aria-expanded="false" aria-controls="collapseFito" style="cursor: pointer; color:#662d8d; class ="colorMedicamentos>Productos fitoterapéuticos
                            </h6>
                              </p>
                            <div class="collapse" id="collapseFito">
                              <div align="center">
                                <ul class="sinVinetas">
                                <li>
                                <a href="https://drive.google.com/open?id=1bTWoz73IPdXzKdjV-akvqSF5dR5BSQgk" class="colorIndicadores">Decreto 337 de 1998 </a>
                              </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1vVzuGi2ctjPmPSo2zn5OZoytX6zb0nXx" class="colorIndicadores">Decreto 2510 de 2003 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1kikW2dBdwQ-0wdrFJ_y9Vg9JsePDhTvS" class="colorIndicadores">Decreto 3553 de 2004 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1ahtNavJzdKXoLxGINnWwj9-TG7Z-9laX" class="colorIndicadores">Resolución 4320 de 2004 </a>
                              </li>
                              </div>
                            </div>
                            </td>
                          </ul>

                          <td width="191">
                            <h6 align="center" class="colorIndicadores"  data-toggle="collapse" href="#collapseHomeopaticos" role="button" aria-expanded="false" aria-controls="collapseHomeopaticos" style="cursor: pointer; color:#662d8d; "class="colorMedicamentos">Medicamentos homeopáticos</h3>
                              </p>
                              <ul class="sinVinetas">
                            <div class="collapse" id="collapseHomeopaticos">
                              <li>
                              <a href="https://drive.google.com/open?id=1KCA1KslrAzxVS1Bk_kSfpBlz7Zwqnigm" class="colorIndicadores">Decreto 3554 de 2004 </a>
                            </li>
                              <li>
                            <a href="https://drive.google.com/open?id=19ow-F3UC3SaZfxWI3AdysyYI-413i-AX" class="colorIndicadores">Decreto 1737 de 2005 </a>
                             </li>
                              <li>
                              <a href="https://drive.google.com/open?id=1c27yZ3qOyDZcyB3XWU9xR5x8Lf_Ts4_x" class="colorIndicadores">Decreto 1861 de 2006 </a>
                              </li>
                              <li>
                              <a href="https://drive.google.com/open?id=1StQVxQtLBCHHBD_1Xq3JL39B27q9g_a6" class="colorIndicadores">Decreto 4858 de 2007 </a>
                             </li>
                              <li>
                            <a href="https://drive.google.com/open?id=132dnh5H3j7bvpT8fisRoOt6wdACzHjch" class="colorIndicadores">Decreto 1229 de 2015 </a>
                              </li>
                              </div>
                            </td>
                          </ul>
                          </tr>
                        </table>
                  </div>
                    <div align="center">
                      <table width="100%" border="0">
                        <tr class="alinearVerticalInicial">
                          <td width="258" class="colorIndicadores">
                            <h6 align="center" class="s" data-toggle="collapse" href="#collapseMedicamentos" role="button" aria-expanded="false" aria-controls="collapseMedicamentos" style="cursor: pointer; color:#662d8d" align="center" class="colorMedicamentos"> Medicamentos</h6>

                            <div class="collapse" id="collapseMedicamentos">
                              <ul class="sinVinetas">
                            <div align="center"><a href="https://drive.google.com/open?id=1kHb9U1XJ5QzU17nHsQxZvimFuyT0afx2" class="colorIndicadores" >Decreto 677 de 1995</div>
                                <div align="center"><a href="https://drive.google.com/open?id=158Ote8o78PJNiwMa6NzQob8DON_SXeA" class="colorIndicadores">Decreto 2510 de 2003</div>
                                <div align="center"><a href="https://drive.google.com/open?id=1n9Xn_mscc1d4NOEz5D1ostcIGr9_KAo4" class="colorIndicadores">Decreto 481 de 2004</div>
                                <div align="center"><a href="https://drive.google.com/open?id=11weCf5UMoIkWyWHKCfmCON0jpqxtlcnk" class="colorIndicadores">Resolución 1672 de 2004</div>
                                <div align="center"><a href="https://drive.google.com/open?id=1pHOnVA9-fmrY7UzSNwQqfcC6pz5Yi_lY" class="colorIndicadores">Resolución 4320 de 2004 </div>
                                <div align="center"><a href="https://drive.google.com/open?id=1bD_WZxGZct2mvOtVG8o6Ufn3SRFeaEDG" class="colorIndicadores">Decreto 3050 de 2005 </div>
                                    <div align="center"><a href="https://drive.google.com/open?id=1XlNixRb_CucOVeb8pcKbYWvymhTvpjKg" class="colorIndicadores">Resolución 1478 de 2006</div>
                                    <div align="center"><a href="https://drive.google.com/open?id=1XlNixRb_CucOVeb8pcKbYWvymhTvpjKg" class="colorIndicadores">Resolución 1479 de 2006 </div>
                                <div align="center"><a href="https://drive.google.com/open?id=1BE2juW5Kit5VS6OVj2if6WVgL4y921Po" class="colorIndicadores">Resolución 2564 de 2008</div>
                               <div align="center"><a href="https://drive.google.com/open?id=1VOupYd363bQNKq4U3HuZLu8DOTX51iC3" class="colorIndicadores"> Resolución 4410 de 2009 </div>
                                 </div>
                          </td>
                          <td width="419" class="colorIndicadores" >
                            <h6 class="colorMedicamentos"align="left" data-toggle="collapse" href="#collapseHigiene" role="button" aria-expanded="false" aria-controls="collapseHigiene" style="cursor: pointer; color:#662d8d;class="colorMedicamentos>Productos de higiene doméstica y absorbentes de higiene personal
                            </h6>
                            <div class="collapse" id="collapseHigiene" >
                              <ul class="sinVinetas">
                                <a href="hhttps://drive.google.com/open?id=1Iw2sjS200RoTTi_yxj-peTvm6xdl5Uve" class="colorIndicadores">
                                <div align="center">Decreto 1545 de 1998
                                <l>
                                </div>
                                <li class="colorIndicadores">
                                  <div align="center"><a href="https://drive.google.com/open?id=1Y0uK3qc9zWDSG1BRZtlA_7OhJWwu447q" class="colorIndicadores">Decreto 612 de 2000
                                    <l>
                                  </div>
                                <li class="colorIndicadores">
                                  <div align="center"><a href="https://drive.google.com/open?id=1t2ZKpXY-3jBq1QdCVNW37S7I6cX4hI0p" class="colorIndicadores">Decisión 706 de 2008
                                    <l>
                                  </div>
                                <li class="colorIndicadores">
                                    <div align="center"><a href="https://drive.google.com/open?id=1NfrY5pJx8ub3aH0X06VYOfzyJzxwd17h" class="colorIndicadores">Circular externa DG 0100-284
                                    <l>
                                  </div>
                                <li class="colorIndicadores">
                                    <div align="center"><a href="https://drive.google.com/open?id=1GPLkDc1WfeJtegvvjLlWc8wgNy_r_myO" class="colorIndicadores">Decisión 783 de 2013
                                    <l>
                                  </div>
                                <li class="colorIndicadores">
                                    <div align="center"><a href="https://drive.google.com/open?id=15dA19lvYStzESXg2qFzCkMI04FuoQtd2" class="colorIndicadores">Decisión 784 de 2013
                                    <l>
                                  </div>
                                </ul>
                              </div>

                            </td>
                          <td width="291">
                            <p>
                            <h6 align="center" class="colorIndicadores" data-toggle="collapse" href="#collapseCosmeticos" role="button" aria-expanded="false" aria-controls="collapseCosmeticos" style="cursor: pointer; color:#662d8d;"class="colorMedicamentos">Cosméticos</h6>
                              </p>
                            <div class="collapse" id="collapseCosmeticos">
                              <ul class="sinVinetas">
                                <li class="colorIndicadores">
                                  <a href="https://drive.google.com/open?id=10ms-eWXFJ4yyBhaDSW12Dg_n9YpkXIdC" class="colorIndicadores">Decreto 2092 de 1986
                                </li>
                                <li class="colorIndicadores">
                                  <a href="https://drive.google.com/open?id=15YJKbi6gd1S3tyexIJI9bDs74-hZLrkM " class="colorIndicadores">Decreto 219 de 1998
                                  </li>
                                  <li class="colorIndicadores">
                                    <a href="https://drive.google.com/open?id=1ByHhk0UM5mO6jMjoqehS4qgpRzG-Vwmy" class="colorIndicadores">Decisión 516 de 2000
                                    </li>
                                  <li class="colorIndicadores">
                                    <a href="https://drive.google.com/open?id=1q2DFiwcsCamHQzXM6Xqsy_nAJ8vdXng9" class="colorIndicadores">Decreto 612 de 2000
                                    </li>
                                  <li class="colorIndicadores">
                                      <a href="https://drive.google.com/open?id=1FycbFg4Vdv8e7m_xF2CaNP-ryXpXbcgU" class="colorIndicadores">Decisión 777 de 2000
                                    </li>
                                  <li class="colorIndicadores">
                                      <a href="https://drive.google.com/open?id=1lKHOkX4bsnALEOOq5LPzOVjqgVXYrljW" class="colorIndicadores">Resolución 797 de 2004
                                    </li>
                                  <li class="colorIndicadores">
                                      <a href="https://drive.google.com/open?id=1sEH903Pm8WDxVgUrJDWKGMuqsYpR_RIY" class="colorIndicadores">Decisión 783 de 2013
                                    </li>
                                </ul>
                              </div>
                            </td>
                          <td width="335" class="colorMedicamentos">
                            <p>
                            <h6 align="center" class="colorIndicadores" data-toggle="collapse" href="#collapseDispositivos" role="button" aria-expanded="false" aria-controls="collapseDispositivos" style="cursor: pointer; color:#662d8d;"class="colorMedicamentos">Dispositivos Médicos</h6>

                            </p>
                            <div class="collapse" id="collapseDispositivos">
                              <ul class="sinVinetas">
                                <li class="colorIndicadores">
                                  <a href="https://drive.google.com/open?id=1qbQT82PSJPSqSr27481hAO6Qk2GP9mIJ" class="colorIndicadores">Decreto 4725 de 2005
                                </li>
                                <li class="colorIndicadores">
                                  <a href="https://drive.google.com/open?id=1uRDS5uIXGWISk6Q6x7uyIqhGKxP3oQW" class="colorIndicadores">Decreto 4562 de 2006
                                  </li>
                                  <li class="colorIndicadores">
                                    <a href="https://drive.google.com/open?id=1CZNG32KWOn5lP_PVYejADIg3OwtJSVro" class="colorIndicadores">Decreto 1030 de 2007
                                    </li>
                                  <li class="colorIndicadores">
                                      <a href="https://drive.google.com/open?id=1T3PMsiVcDTFzh7b8Tivpyt0MfF2nV9VO" class="colorIndicadores">Resolución 4396 de 2008
                                    </li>
                                  <li class="colorIndicadores">
                                      <a href="https://drive.google.com/open?id=18njmLDRCPQM_-ej0H2hg9SULM8wolUez" class="colorIndicadores">Resolución 4816 de 2008
                                    </li>
                                  <li class="colorIndicadores">
                                      <a href="https://drive.google.com/open?id=12KLDSIyMu4onv1qBEZ8SfpI1ljLK8oU2" class="colorIndicadores">Resolución 605 de 2015
                                    </li>
                                  <li class="colorIndicadores">
                                      <a href="https://drive.google.com/open?id=1zRmsvCq7WGCPvC4Ac8Du_q4F0eVExHDl" class="colorIndicadores">Resolución 2968 de 2015
                                    </li>
                                  <li class="colorIndicadores">
                                      <a href="https://drive.google.com/open?id=1tCAa7gtEweTjyUUL9nkZVoYd1M1_y9tH" class="colorIndicadores">Resolución 482 de 2018
                                    </li>
                                  <li class="colorIndicadores">
                                      <a href="https://drive.google.com/open?id=1XCDqoBpek8yOUSX04f8DcXC95rgSFpi6" class="colorIndicadores">Circular 26 de 2018
                                    <li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        </table>
                    </div>
                    <p align="center">&nbsp;</p>
                </div>
            </div>

          <div class="row">
                <hr class="lineaMedicamentos mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAgua bold140p">
                <div class="centrado colorAgua">
                    <p align="center" class="colorMedicamentos">Documentos e investigaciones</p>
                    <p align="center" class="colorMedicamentos">
                    <img src="images/medicamentos/IMG_MEDICAMENTOS_DOCUMENTOS.jpg" width="85" height="63" />
                    </p>
                    <p>&nbsp;</p>
                </div>
                <div class="centrado colorAgua">
                    <p class="colorMedicamentos">Mapas</p>
                    <p class="colorMedicamentos">
                    <img src="images/medicamentos/IMG-MEDICAMENTOS_MAPA.jpg" width="85" height="63" />
                    </p>
                    <p class="colorMedicamentos">&nbsp;</p>
                </div>
                <div class="centrado colorAgua">
                    <p class="colorMedicamentos">Normatividad</p>
                    <p class="colorMedicamentos">
                        <a href="{{asset("medicamentos_normatividad")}}">

                        <img src="images/medicamentos/IMG_MEDICAMENTOS_NORMATIVIDAD.jpg" width="85" height="63" />
                    </a>
                    </p>
                </div>
                <div class="centrado colorAgua">
                    <p class="colorMedicamentos">Indicadores</p>
                    <p>
                    <img src="images/medicamentos/IMG_MEDICAMENTOS_INDICADORES.jpg" width="85" height="63" />
                    </p>
                </div>
            </div>

        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
