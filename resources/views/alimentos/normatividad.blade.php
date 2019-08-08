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
                    <span class="breadcrumb_"> |Alimentos y bebidas | <span class="breadcrumb_ alimentos">Normatividad</span></span>
                    <div width="300px">
                        <img src="{{asset("images/indicators/LogoAlimentosSanos.png")}}" width="100%" alt="" />
                    </div>

                </div>
                <div class="col-4">
                    <div class="row ">
                        <div class="col-12 date-time-title">
                        <span>Bogotá hoy</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 date-time" id="reloj">
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
                                <img src="{{asset("images/news/climaactual.svg")}}" alt="clima actual" class="img-clima-actual">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
</div>
            <div class="row">
            <div>
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
                    <a href="http://autorregulacion.saludcapital.gov.co/carnicerias">
                    <img src="images/alimentos/BannerCarnes.png" width="100%" height="" alt="Slider Alimentos" /></a>
                </div>
            </div>
 </div>

            <div class="row" style="text-align:justify;">

              <br></br>
                    <div>
                        <p align="left" class="colorAlimentos bold140p">
                            <img src="images/alimentos/alimentosNORMATIVIDAD.png" width="85" height="63" align="absbottom" /><b>Normatividad</b></p>
                            <p>Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas con la inspección, vigilancia y control de establecimientos  de alimentos  y eventos de interés en salud pública  </p>
                        <p align="center" class="colorAlimentos">Regulación Transversal</p>
                        <p align="center" class="colorAlimentos"></p>
                    </div>

                    <table width="100%" border="0">
                        <tr class="alinearVerticalInicial">

                            <td width="20%">
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseAditivos" role="button" aria-expanded="false" aria-controls="collapseAditivos" style="cursor: pointer; color:black; text-align:left;">
                                         <span class="breadcrumb_ alimentos">Aditivos alimentarios</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseAditivos">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1qU3b1d8fV-bcJWmPQRBDhQ-RcCbDAX6e" class="colorIndicadores">Decreto 2106 de 1983</a>
                                            </span>
                                            <a href="https://drive.google.com/open?id=1qU3b1d8fV-bcJWmPQRBDhQ-RcCbDAX6e"></a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1QCd2q41GH763DKwAE7G0KNk1Gj0u9dTG" class="colorIndicadores">Resolución 13402 de 1985</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1dxHBEtkmTnB7kGCcTjv8i1ssL29rAEr5" class="colorIndicadores">Resolución 10593 de 1985 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1vimH2nd9e2VYrVMJLeHMsIN9C-AmOu2b" class="colorIndicadores">Resolución 14985 de 1988 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1U-kyp8ew5SuY1aKxR8d7AHW2WIT92kmI" class="colorIndicadores">Resolución 1618 de 1991</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1W8cf6DU66BpHCzXXW7v160z11z7v0E20f" class="colorIndicadores">Resolución 4124 de 1991</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1pQwPMcqRmUeXqXanuoQnmYrBV1o6q3Ca" class="colorIndicadores">Resolución 4125 de 1991</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1h7G_TCABIYi6vvBX4w-qhS6smIn1AVuF" class="colorIndicadores">Resolución 4126 de 1991</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1zRSzDu4-eAb5iQMajdmNGlP6YmjvdiSg" class="colorIndicadores">Resolución 2826 de 1996</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1Y3cCvhCdUWPHAf6izIVyiWgtiRn7Dtf4" class="colorIndicadores">Resolución 1528 de 2002</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1IkJseLgFhv5zZeP6ecQSCHYsWzYdUEWJ" class="colorIndicadores">Resolución 2606 de 2009</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td width="20%">
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseInspeccion" role="button" aria-expanded="false" aria-controls="collapseInspeccion" style="cursor: pointer; color:black; text-align:left;">
                                        <span class="breadcrumb_ alimentos">Inspección, vigilancia y control de procedimientos</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseInspeccion">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1nSU8kNR_tQE5GeNwfp7yTiiB5COnM4jn" class="colorIndicadores">Ley 1437 de 2011 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1gLn30CxiwVzhHc94usgiDw7FBDJQrvYP" class="colorIndicadores">Ley 09 de 1979</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=139EzdpytDpNPse9XKSBK2XuFW_H9d6D6" class="colorIndicadores">Decreto 2078 de 2012 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1iSe6j9ijb8PMIhN1YEjr0l6PDCGCHVFE" class="colorIndicadores">Resolución 1229 de 2013</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=18cCHzeWRbRTRO30zS8W5GCdk-NFF9jma" class="colorIndicadores">Resolución 5296 de 2013 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1NcLl0m7AMC3UMuWxDF4MQtkxbzXtvkOQ" class="colorIndicadores">Resolución 770 de 2014</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1HH4uxBN8iDMZXv-WuKm9JlZKBCBFnaTF" class="colorIndicadores">Circular 046 de 2014</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1peevQae8SttoSRxik2G8skhOSbgydD4j" class="colorIndicadores">Circular 031 de 2015</a>
                                        </li>
                                    </ul>
                                </div>

                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseMuestras" role="button" aria-expanded="false" aria-controls="collapseMuestras" style="cursor: pointer; color:black; text-align:left;">
                                        <span class="breadcrumb_ alimentos">Muestras sin valor comercial, incentivos</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseMuestras">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1PeYzUB3V7VhmhYTGoaPUxgUeH6Ej0j3y" class="colorIndicadores">Resolución 1893 de 2001</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1obY98rX3sWdCNz1GvKyaIT64kjxyB6Tn" class="colorIndicadores">Resolución 3772 de 2013</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td width="20%">
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseImportacion" role="button" aria-expanded="false" aria-controls="collapseImportacion" style="cursor: pointer; color:black; text-align:left;">
                                        <span class="breadcrumb_ alimentos">Importación y exportación</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseImportacion">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1cVT92qwtUIFr78XgiXbb5gF_vDXXEOK9" class="colorIndicadores">Ley 915 de 2004 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1Gxu5_brVUMOolJKjyZdbugJRFYxs_XSI" class="colorIndicadores">Decreto ley 019 de 2012</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1-RTCj9DpVKsKLT8f-bJPkwrEnL7b3XG2" class="colorIndicadores">Decreto 1686 de 2012</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1pG2FJZ8AF0lia4gQ5Tj4BISXYWa_GXgj" class="colorIndicadores">Decreto 539 de 2014</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1uUSyBfA4CTYfKHDidLUC5KUbC76Yoa58" class="colorIndicadores">Decreto 590 de 2014</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1uUSyBfA4CTYfKHDidLUC5KUbC76Yoa58" class="colorIndicadores">Decreto 590 de 2014</a>
                                        </li>
                                    </ul>
                                </div>

                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseSuperficies" role="button" aria-expanded="false" aria-controls="collapseSuperficies" style="cursor: pointer; color:black; text-align:left;">
                                       <span class="breadcrumb_ alimentos"> Superficies en contacto</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseSuperficies">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1wcLkKwjV6uzMtkO8Xiv5UcM-oTpe1V0j" class="colorIndicadores">Resolución 683 de 2012</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1cY2mZzBLlhVX7Bcri86WizykCnyfcXWJ" class="colorIndicadores">Resolución 4142 de 2012</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=13hHY-LUHjlc80xaUcxNfMSK-KnPsU09k" class="colorIndicadores">Resolución 4143 de 2012</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1kTKMYeFrgjD-Q7FUl7_fWDd2bnllFkX2" class="colorIndicadores">Resolución 834 de 2013</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1gvK-Iw4vJnLIDg1yXkxto5rMpf27Ozfs" class="colorIndicadores">Resolución 835 de 2013</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td width="20%">
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapsePracticas" role="button" aria-expanded="false" aria-controls="collapsePracticas" style="cursor: pointer; color:black; text-align:left;">
                                       <span class="breadcrumb_ alimentos"> Buenas Prácticas de Manufactura - BPM, Sistema de Análisis de Riesgos y Puntos Críticos de Control
                                        HACCP, Registro, Permiso y Notificación</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapsePracticas">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1LAr6p8vv-tfoDzyIKvCWxULNJ17bIsUY" class="colorIndicadores">Resolución 604 de 1993 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1gDpdXwyaC8mni0zR10YvMff_99woa49v" class="colorIndicadores">Decreto 60 de 2002 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1sJICP07TMBLmhuv4ShMtYlCf_thmfbkU" class="colorIndicadores">Ley 915 de 2004 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1nSnGNYQgDGhC5rGr-YN3OIskYoSfo3ga" class="colorIndicadores">Decreto 1686 de 2012 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1hSuAe5O1FNLeMs2X-pJezO1yklAb-1DP" class="colorIndicadores">Decreto 2674 de 2013</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=15Euii53-GizFSxoclTCVEePa_FMiGXcM" class="colorIndicadores">Resolución 719 de 2015</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1Z5in7wcwsufIsL1UrdlpoFqcXlnX57LM" class="colorIndicadores">Resolución 3168 de 2015</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1Y1zhE91hRaKgkE6TUwq7xRklYe5s9aJp" class="colorIndicadores">Resolución 2015048290 de 2015 </a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseRotulado" role="button" aria-expanded="false" aria-controls="collapseRotulado" style="cursor: pointer; color:black; text-align:left;">
                                        <span class="breadcrumb_ alimentos">Rotulado etiquetado</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseRotulado">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1l-zQUx7YABiVJUKodw1t2tNfNSaDvWAO" class="colorIndicadores">Resolución 5109 de 2005 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1enMWjm1yrcbaGIXuA5VDQhLgUGClvEHj" class="colorIndicadores">Resolución 1506 de 2011 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1jQUTCb8gmLTV3vhqJtx5l4KW9DwRVLV5" class="colorIndicadores">Resolución 333 de 2011 </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td width="20%">
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseAlimentos" role="button" aria-expanded="false" aria-controls="collapseAlimentos" style="cursor: pointer; color:black; text-align:left;">
                                        <span class="breadcrumb_ alimentos">Alimentos envasados herméticamente</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseAlimentos">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1jqf3EAl8_Bq6DgdEfKn0XHyEs_UEiG8S" class="colorIndicadores">Resolución 2195 De 2010</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseLimites" role="button" aria-expanded="false" aria-controls="collapseLimites" style="cursor: pointer; color:black; text-align:left;">
                                       <span class="breadcrumb_ alimentos"> Límites máximos de residuos y niveles máximos</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseLimites">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1YBw3J4W0ZfTspLDMt3DH4asvuoU8W5Ha" class="colorIndicadores">Resolución 2906 de 2007</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1fJUr7TbNn0CzdABlSCvEyQcQFplUNZHe" class="colorIndicadores">Resolución 1382 de 2013 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1XydwBheV6gPyZyaDSqhGiRlE7YsuHhKC" class="colorIndicadores">Resolución 4506 de 2013</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1zU4tROM_ez6keYIisjxcnrmGkjuI2O8o" class="colorIndicadores">Resolución 2671 de 2014</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1PNtDyMBxXw7tbHADEFjbkQ_l63lvavT4" class="colorIndicadores">Resolución 3709 de 2015</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <br></br>
                    <div class="colorAlimentos">
                    <h2 align="center" class="colorAlimentos"><b>Regulación Específica</b></h2>
                    <table width="100%" border="0">
                        <tr class="alinearVerticalInicial">
                            <td width="20%">
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseCarne" role="button" aria-expanded="false" aria-controls="collapseCarne" style="cursor: pointer; color:black; text-align:left;">
                                        <span class="breadcrumb_ alimentos">Carne y productos cárnicos</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseCarne">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1LupGx0-WLdRXpBZhUe4OSUgCEYyP25tD" class="colorIndicadores">Decreto 2278 de 1982 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1BX-rN2LwX9G14PEM89Bn38kB-Y_SMN0Z" class="colorIndicadores">Resolución 222 de 1990 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1gJWjP6DjSYTF-gBgQ5Jg1p7jMzxDargD" class="colorIndicadores">Decreto 1036 de 1991</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1_aWJ8o8uR26aV3VAVbh4YNVUNqkvnj8S" class="colorIndicadores">Resolución 402 de 2002</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1fQK9ass1OuqH3bfBghFP-cXhtrcD9n5F" class="colorIndicadores">Decreto 3752 de 2006</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1U5em2FB-iMVcc9r1P0HRc-3dg2suv_Ul" class="colorIndicadores">Decreto 3755 de 2006</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1X60oLtr8MwUCXCWVLWRAsd10WBVBu1vd" class="colorIndicadores">Decreto 1500 de 2007</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1l3lb45YJ5xgB5l-X3LDVLzmZX0vO1dsd" class="colorIndicadores">Decreto 2965 de 2008</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1Ot8pnMX_oVRxerkLoLuw4SgAULyuXEWD" class="colorIndicadores">Resolución 3659 de 2008 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1XrWh0GNSOWhVmQgqeGN-uaeUfsClHErC" class="colorIndicadores">Decreto 2380 de 2009</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1ZdxJ90foDEk4-JxflAmGMCqT3fNea1W3" class="colorIndicadores">Decreto 4131 de 2009</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=16I1HJLr85MlET82Zc31QBKtY_a_2vGKw" class="colorIndicadores">Decreto 4974 de 2009</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1eaP9mVTFO4Y3Ao5w2xxAm4f-_-OjtinD" class="colorIndicadores">Resolución 4772 de 2009</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1WEmIPsv2UN4XxX6xkQrTzde1aETvw4fV" class="colorIndicadores">Resolución 3009 de 2010</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=16A6l5FAhJzhm6AqZYyQjPfJfwdz6_uau" class="colorIndicadores">Decreto 3961 de 2011</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=106vcJEScU087ziLJlG5GkWyqTNPnMyil" class="colorIndicadores">Decreto 917 de 2012</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1LznpSUTHN4W_hG4SUAn8623DzCO-zQh5" class="colorIndicadores">Decreto 2270 de 2012</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1lm0KbM4bzOOTmLfpIjsLbjwfug6oVOjK" class="colorIndicadores">Resolución 240 de 2013</a>
                                        </li>
                                        <li>
                                            <a href="" class="colorIndicadores">Resolución 241 de 2013</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1JFBFlIzLbMrUhacje3ek4AENK_t5HyrY" class="colorIndicadores">Resolución 242 de 2013</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1lgaL231ogN_e8UpJsplGcVt3rBXQLPTH" class="colorIndicadores">Decreto 318 de 2013</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1DreVoUBEIhruZ8jgXStOcDyu97isRt6G" class="colorIndicadores">Resolución 3753 de 2013</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1l3av4C3_Ibxhys1I4CMhwBy_vyiIP1aJ" class="colorIndicadores">Resolución 2690 de 2015</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1nqnflURz4A5TQVHuee4vTLoNRlQPjbSX" class="colorIndicadores">Resolución 0562 de 2016</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1nCWws0ccgxxS4iKI9U0eV0WLvFuJyLnQ" class="colorIndicadores">Resolución 2016041871 de 2016</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td width="20%">
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapsePesca" role="button" aria-expanded="false" aria-controls="collapsePesca" style="cursor: pointer; color:black; text-align:left;">
                                        <span class="breadcrumb_ alimentos">Productos de la pesca</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapsePesca">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1QVvFMGs-POJIFrTFrAIgwEbKHrORkDYI" class="colorIndicadores">Decreto 561 de 1984</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1wkZBsZ2GkB_Q9HCGGll7r4KGzjxnY_cN" class="colorIndicadores">Resolución 730 de 1998</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1o0No5SH9WbYoTXESht9Om-bx9-Tb-JNJ" class="colorIndicadores">Resolución 337 de 2006</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1PobGyAM4VmiO2nOXO8JLITB8HpbAtp0c" class="colorIndicadores">Resolución 148 de 2007</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1kjgqlfQbpa72fygVaaOus07LXA9nsoVK" class="colorIndicadores">Resolución 228 de 2007</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=107liKyXoLfEiF3M3kaJ9X13CL3VArQVX" class="colorIndicadores">Resolución 776 de 2008</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1jG6C8J_hIeITZ3-18iIYyXbVkRRphvxF" class="colorIndicadores">Resolución 122 de 2012</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=17pJRLowvKUL991wd5OCsThh95nOBOVle" class="colorIndicadores">Resolución 468 de 2012</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseBebidas" role="button" aria-expanded="false" aria-controls="collapseBebidas" style="cursor: pointer; color:black; text-align:left;">
                                       <span class="breadcrumb_ alimentos"> Bebidas alcohólicas</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseBebidas">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1KaGASuWU7Hk5XliY2n-JDR-xbVdATFeG" class="colorIndicadores">Decreto 4445 de 2005</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1aTByf8np5T2PqxTcp4k521gn1Yz2NHxV" class="colorIndicadores">Decreto 3515 de 2007</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1cO-VgoHx8dcDfHWXFs9yKISk7iRpbzE0" class="colorIndicadores">Decreto 1686 de 2012</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1eynM0gT0bLFdpLMLvwLf-WIKBthSnXBk" class="colorIndicadores">Decreto 1506 de 2014</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseLaboratorios" role="button" aria-expanded="false" aria-controls="collapseLaboratorios" style="cursor: pointer; color:black; text-align:left;">
                                       <span class="breadcrumb_ alimentos"> Laboratorios</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseLaboratorios">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1HrT6D4Iy_eZswumfPdYbFxN2-iioR84h" class="colorIndicadores">Resolución 1619 de 2015</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1FtsfDGm8jZ73_N3tYIMO2coJwT2qMj3n" class="colorIndicadores">Decreto 2323 de 2006</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseAceites" role="button" aria-expanded="false" aria-controls="collapseAceites" style="cursor: pointer; color:black; text-align:left;">
                                        <span class="breadcrumb_ alimentos">Aceites y grasas</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseAceites">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1fvJdr5o7SLRy6Vsurf-k0NMAqKnFGlef" class="colorIndicadores">Resolución 2154 De 2012</a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                            <td width="20%">
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#Bebidas" role="button" aria-expanded="false" aria-controls="Bebidas" style="cursor: pointer; color:black; text-align:left;">
                                       <span class="breadcrumb_ alimentos"> Bebidas Embriagantes</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="Bebidas">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1VM1SBJssq2jPdxzd1G8ie4NmvA_I16V5" class="colorIndicadores">Resolución 982 de 1994</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1lPbX4nYuL_v0iWUZStVegtI4llgYEsbl" class="colorIndicadores">Resolución 1082 de 1994</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseDerivados" role="button" aria-expanded="false" aria-controls="collapseDerivados" style="cursor: pointer; color:black; ">
                                        <span class="breadcrumb_ alimentos">Derivados lácteos</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseDerivados">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=159D2kAg8vd_MCw9AkcrSWREi-YHLz6J-" class="colorIndicadores">Resolución 2310 de 1986</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1sfOBM-D97Y7DEEDuOvH8lrj1A0cDpjRa" class="colorIndicadores">Resolución 1804 de 1989</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=12hqqS9JNSApmZsmjAkpn1tuUBmUmcEsk" class="colorIndicadores">Resolución 11961 de 1989</a>
                                        </li>
                                    </ul>
                                </div>

                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseSal" role="button" aria-expanded="false" aria-controls="collapseSal" style="cursor: pointer; color:black; ">
                                        <span class="breadcrumb_ alimentos">Sal</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseSal">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1JVqLhcpUsl-0-AVIX0Y4dmLz6jKqTiAF" class="colorIndicadores">Decreto 547 de 1996 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1iqCQgAuFajs-QqisbDJdDmNyUC4CZ270" class="colorIndicadores">Decreto 698 de 1998</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=17N9c0HuFPshV5UmnQ8hu5MYqzORJvDbg" class="colorIndicadores">Resolución 9553 de 198</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseMiel" role="button" aria-expanded="false" aria-controls="collapseMiel" style="cursor: pointer; color:black; ">
                                       <span class="breadcrumb_ alimentos"> Miel</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseMiel">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1BBeRS0lzNO9KrjIBW5ZHzgggT1EzdXmt" class="colorIndicadores">Resolución 1057 De 2010 </a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" align="left" data-toggle="collapse" href="#collapseSueros" role="button" aria-expanded="false" aria-controls="collapseSueros" style="cursor: pointer; color:black; ">
                                        <span class="breadcrumb_ alimentos">Lacto sueros</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseSueros">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=11ZrjJROhiUkrbmqJbuw2xZW7359nrWgU" class="colorIndicadores">Resolución 2997 de 2007</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=15kzXIR051spLoUQOR396LIX2lUxgCl1p" class="colorIndicadores">Resolución 1031 de 2010</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1j5bGnnrZhDBSCKJydbtvW2KTOmotrnQU" class="colorIndicadores">Resolución 1185 de 2011</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td width="20%">
                                <p>
                                    <h3 class="alinearIzquierda mb0" data-toggle="collapse" href="#collapseEnergizantes" role="button" aria-expanded="false" aria-controls="collapseEnergizantes" style="cursor: pointer; color:black; ">
                                        <span class="breadcrumb_ alimentos">Bebidas energizantes</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseEnergizantes">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1ZvDfNSmUf2hVqYZQobv-6L6gLBACZd3p" class="colorIndicadores">Resolución 4150 de 2009</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" data-toggle="collapse" href="#collapseLeche" role="button" aria-expanded="false" aria-controls="collapseLeche" style="cursor: pointer; color:black; ">
                                        <span class="breadcrumb_ alimentos">Leche</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseLeche">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1phnbd2REvygs4XqGaMMggaYzLlHyJ3JB" class="colorIndicadores">Decreto 616 de 2006 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1IoAK2fsGB4avkp5rcrYj10sVdvSDE2Ph" class="colorIndicadores">Decreto 1673 de 2010 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1VRzCcwf9n-nlL0ZHwSMan4HMOmNctSoL" class="colorIndicadores">Decreto 1880 de 2011 </a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda" data-toggle="collapse" href="#collapseMayonesa" role="button" aria-expanded="false" aria-controls="collapseMayonesa" style="cursor: pointer; color:black; ">
                                       <span class="breadcrumb_ alimentos"> Mayonesa</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseMayonesa">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1OAu2B01ql8KkUL20fhoHc8dgrX2sQpF-" class="colorIndicadores">Resolución 17882 de 1985</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1SKxU5XxMOS9ZWVZ_852gpOdWDzElZa4Y" class="colorIndicadores">Resolución 129 de 2003 </a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" data-toggle="collapse" href="#collapsePastas" role="button" aria-expanded="false" aria-controls="collapsePastas" style="cursor: pointer; color:black; ">
                                        <span class="breadcrumb_ alimentos">Pastas alimenticias</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapsePastas">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=171MYx2k_Uy8pbdJ6HTntSBJ6tPjFoGKn" class="colorIndicadores">Resolución 4393 De 1991 </a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" data-toggle="collapse" href="#collapseEspecias" role="button" aria-expanded="false" aria-controls="collapseEspecias" style="cursor: pointer; color:black; ">
                                        <span class="breadcrumb_ alimentos">Especias</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseEspecias">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1XziOHH7DMVCdZQw1Sw6gYbMyEbFYNqf9" class="colorIndicadores">Resolución 19021 de 1985</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1A2yD1LbZsSa3zuo7n7H1NESDq3Kjrk90" class="colorIndicadores">Resolución 4241 de 1991</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" data-toggle="collapse" href="#collapseOrganismos" role="button" aria-expanded="false" aria-controls="collapseOrganismos" style="cursor: pointer; color:black; ">
                                        <span class="breadcrumb_ alimentos">Organismos Genéticamente Modificados - OGM</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseOrganismos">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1nOJvnGc5NkRCeMH8xpMFfdWFxFPXeyPO" class="colorIndicadores">Ley 165 de 1994</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1tHs9quchN00t3aSGV1SaEfE22hzYpeS5" class="colorIndicadores">Ley 740 de 2002</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1kbL2SiUohkg1m1NC3GyqCWXiXfvZwvBK" class="colorIndicadores">Decreto 4525 de 2005</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1KAvXevFPHm5rPjdBn9O9zpuTSkjMmsvV" class="colorIndicadores">Resolución 227 de 2007</a>
                                        </li>
                                        <li>
                                            <a href=" " class="colorIndicadores">Resolución 4254 de 2011</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td width="20%">
                                <p>
                                    <h3 class="alinearIzquierda mb0" data-toggle="collapse" href="#collapseHidratantes" role="button" aria-expanded="false" aria-controls="collapseHidratantes" style="cursor: pointer; color:black; ">
                                        <span class="breadcrumb_ alimentos">Bebidas hidratantes</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseHidratantes">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=11CDHRzMu0b4EaP1ZTEvGoqY-6vEkzXBx" class="colorIndicadores">Decreto 2229 de 1994</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" data-toggle="collapse" href="#collapseProduccion" role="button" aria-expanded="false" aria-controls="collapseProduccion" style="cursor: pointer; color:black; ">
                                       <span class="breadcrumb_ alimentos"> Producción de cacao</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseProduccion">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1BAkLDpAdk1vjHGebnuLYmXp2lTgNIRkk" class="colorIndicadores">Resolución 1511 de 2011</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" data-toggle="collapse" href="#collapseAguaEnvasada" role="button" aria-expanded="false" aria-controls="collapseAguaEnvasada" style="cursor: pointer; color:black; ">
                                        <span class="breadcrumb_ alimentos">Agua envasada</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseAguaEnvasada">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1-1SPetH6PiBco-bbsGLQ4prekJZA0iFb" class="colorIndicadores">Resolución 12186 de 1991</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" data-toggle="collapse" href="#collapseFrutas" role="button" aria-expanded="false" aria-controls="collapseFrutas" style="cursor: pointer; color:black; ">
                                        <span class="breadcrumb_ alimentos">Frutas y hortalizas</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseFrutas">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1YmT6wJJM-3c0gIFT9b52uf0BeWccjoOA" class="colorIndicadores">Resolución 14712 de 1984 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1wTKweZB0YGGi4VZmqTBlKij1WYZN2dEy" class="colorIndicadores">Resolución 15790 de 1984 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1PRvARwsIxlDNPwKl39qi815ZTHblvKnf" class="colorIndicadores">Resolución 2155 de 2012</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=12RHTVwFl2Cw3CPQUOoCj-sD3MPO8zre6" class="colorIndicadores">Resolución 3929 de 2013 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1hv865LLKQt_IGSQp1YgE1KH7Cq6Ss_cY" class="colorIndicadores">Resolución 1155 de 2014</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" data-toggle="collapse" href="#collapseVinagre" role="button" aria-expanded="false" aria-controls="collapseVinagre" style="cursor: pointer; color:black; ">
                                       <span class="breadcrumb_ alimentos"> Vinagre</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapseVinagre">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1DiMIpJJsDjQTm8CvY2Qj5YoYoZPwAwLS" class="colorIndicadores">Resolución 775 de 2008</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    <h3 class="alinearIzquierda mb0" data-toggle="collapse" href="#collapsePanela" role="button" aria-expanded="false" aria-controls="collapsePanela" style="cursor: pointer; color:black; ">
                                        <span class="breadcrumb_ alimentos">Panela</span>
                                    </h3>
                                </p>
                                <div class="collapse" id="collapsePanela">
                                    <ul class="sinVinetas">
                                        <li>
                                            <a href="https://drive.google.com/open?id=1XHKci9oCPYHorm1YBwwOZRQ6U7HFVj_1" class="colorIndicadores">Resolución 779 de 2006</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1LyH60Z6L6t184ML8NClQNsSncxRAs-gN" class="colorIndicadores">Resolución 3462 de 2008</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1cvBqhghDIXF4Z1_OXR0a_7JsM2kkoKzu" class="colorIndicadores">Resolución 3544 de 2009</a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1qffL8XZrq4-4YnSqAlr2NRz0S2KhL_t_" class="colorIndicadores">Resolución 4121 de 2011 </a>
                                        </li>
                                        <li>
                                            <a href="https://drive.google.com/open?id=1mOHgY2xNR0Y48BWtY79SacxiYiHx4BW0" class="colorIndicadores">Resolución 4217 de 2013 </a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                    </table>

                </div>

            </div>



           <div class="row">
                <hr class="lineaAlimentos mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAlimentos bold140p">
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Documentos e investigaciones</p>
                    <img src="images/alimentos/IMG_ALIMENTOS_DOCUMENTOS.jpg" width="85" height="63"
                        alt="Agua docs" />
                </div>
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Mapas</p>
                    <img src="images/alimentos/IMG_ALIMENTOS_ MAPA.jpg" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Normatividad</p>
                    <a href="{{asset("alimentos_sanos_normatividad")}}">
                    
                        <img src="images/alimentos/alimentosNORMATIVIDAD.png" width="85" height="63" alt="Agua normas" />
                    </a>
                </div>
                <div class="centrado colorAlimentos">
                    <p class="colorAlimentos">Indicadores</p>
                   
                <a href="{{asset("alimentos_sanos_indicadores")}}">
                    <p class="colorAlimentos">                        
                        <img src="images/alimentos/IMG_ALIMENTOS_INDICADOR.jpg" width="85" height="63" />
                        </a>
                    </p>
                </div>
            </div>

        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection