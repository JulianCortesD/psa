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
                    <span class="breadcrumb_"> | Productos químicos, industria y belleza| </span>
                    <span class="colorSeguridadquimica">Normatividad</span>
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
                        <img src="{{asset("images/quimica/LogoSeguridadQuimica.png")}}" width="568" height="93" alt="símbolo sección medicamentos" />
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
                    <img src="images/quimica/Banner peluqueria parte interna.png" alt="Slider aire" width="945" />
                </div>
            </div>

            <div class="row" style="text-align:justify;">
                <div class="contenidoSecAmb centradoDiv">
                    <h2 class="colorSeguridadquimica">
                        <img src="images/quimica/espacioNORMATIVIDAD.jpg" width="85" height="63" align="absbottom" />Normatividad </h2>
                    <p>Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas con la implementación
                        de procesos de vigilancia y control en las actividades de la industria y del sector belleza</p>
                </div>
                <h2 align="center" class="colorSeguridadquimica">Regulación transversal</h2>
                <div align="center">

                    <table width="90%" border="0">
                        <tr class="alinearVerticalInicial">

                        <td width="30%">
                            <ul class="sinVinetas">
                            <li>
                                <a href="https://drive.google.com/open?id=18WpIgrqS_OCI9_4pdgK_KqRJnO_UanBQ " class="colorIndicadores">Ley 09 de 1979 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1-w3KFHQEivYuJPHjFXV0k7FJOLBBxOqF " class="colorIndicadores">Decreto 1594 de 1984 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=16YsHJ1dg2wKDvMTz6YVQix7wnXT_q4Oa " class="colorIndicadores">Decreto 948 de 1995 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1iI6OXY5BttGPOf49zDR9bBrSraqEkhYN " class="colorIndicadores">Ley 253 de 1996 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1vXCFb-aAdx48fcqATczcO6efav2isnZ3" class="colorIndicadores">Ley 430 de 1998 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1mLZ8TtxnVgs8oOtK4m4jhUvJZXg3FWGP " class="colorIndicadores">Acuerdo 230 de 2006</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=19J4xbMQDqnNrapuzD23Oab1LD7Vyct1l" class="colorIndicadores">Resolución 705 de 2007 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1UpV5NOlIqm-JCJYk6ke346Ndz0FI5P_j  " class="colorIndicadores">Decreto 483 de 2007 </a>
                            </li>


                            </ul>
                        </td>

                        <td width="35%">
                            <ul class="alinearIzquierda">
                            <ul class="sinVinetas">

                                <li>
                                <a href="https://drive.google.com/open?id=19J4xbMQDqnNrapuzD23Oab1LD7Vyct1l " class="colorIndicadores">Acuerdo 341 de 2008 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1__AFgQQVs2-ThDOmGTiAHMo4QmNZYICf " class="colorIndicadores">Resolución 1956 de 2008 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1zKYFb88VX7CxFjUe4qcpmERwRwe4X6m9 " class="colorIndicadores">Ley 1335 de 2009 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=14sti1XcYcBCWUjSfDBVeua7G-8S3woWL " class="colorIndicadores">Decreto 2372 de 2010 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1UzHkds0juuyCEhz7vQNS3weUAMGKX4gh " class="colorIndicadores">Decreto 3930 de 2010 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1X_JHYasXFJbKKBlhN_rhNyRdjGqe1Z9K " class="colorIndicadores">Resolución 1457 de 2010 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1zI-dBCkT22DiUi-z2Tme7R0dQJb-xxiT" class="colorIndicadores">Resolución 7189 de 2010 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1Xxe2nrUGPx9v76VPRl_3-azmbaJVW4Ee" class="colorIndicadores">Ley 1575 de 2012 </a>
                                </li>

                            </ul>
                        </td>

                        <td width="35%">
                            <h3 class="alinearIzquierda mb0">
                            <ul class="sinVinetas">

                                <li>
                                <a href="https://drive.google.com/open?id=1GCSSHeYWMIfckwjakwHIhNuGshV9F4Dk " class="colorIndicadores">Resolución 2876 de 2013 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1JokCl37a3tT5EfU6gYSAKyzMWcNRiQwE " class="colorIndicadores">Decreto 442 de 2015 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1UrCcojALqV4MFr9r6g289OoM184AyjcY " class="colorIndicadores">Decreto 485 de 2015 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1Q18nNe4lNzAXrTmttNEyx6UeOhw9N6Zg " class="colorIndicadores">Decreto 1072 de 2015 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=16xi4QmFA8_Jo3mU13tUOOXtNt8ag1O2j " class="colorIndicadores">Decreto 595 de 2015 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1nFMSSfRuzWU_-GlFtPy47xAaBY5EALe8 " class="colorIndicadores">Decreto 1076 de 2015 </a>
                                </li>
                                <li>
                                <a href "https://drive.google.com/open?id=18jF3H0ChbnOXM7HXn6fPILlhWuz6XaqZ " class="colorIndicadores">Decreto 1079 de 2015 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1Y1iOUWzNwa_R9y34mEvz340IIXtWVQbv " class="colorIndicadores">Decreto 780 de 2016 </a>
                                </li>
                                <li>
                                <a href="https://drive.google.com/open?id=1QEYP4xyWhyNoGU0hD6Vpv-6Y-jBkfcX7 " class="colorIndicadores">Ley 1801 de 2016 </a>
                                </li>
                            </ul>
                        </td>

                    </table>

                    <h2 align="center" class="colorSeguridadquimica">Regulación Específica</h2>
                    <table width="100%" border="0">
                        <tr class="alinearVerticalInicial">

                        <td width="20%">
                            <h3 class="alinearIzquierda mb0">Manipulación, almacenamiento y expendio de productos químicos</h3>
                            <ul class="sinVinetas">
                            <li>
                                <a href="https://drive.google.com/open?id=1v_IcrxvUulj1bM29K6YRItGuKtJ3oWGT " class="colorIndicadores">Convenio 170 OIT de 1990 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1JG9sfVkl6DsyyLa2CLXk_qUj3xQ8Y5_l " class="colorIndicadores">Recomendación OIT 177 de 1990 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1QeJgqCfY5206Cl80NJ1mgiClSCx3-c_K " class="colorIndicadores">Ley 55 de 1993 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1Y4zZZTcxD6qfrefJXaRQiLYczzRAYNZ1 " class="colorIndicadores">Acuerdo 286 de 2007 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1eaHDlf8k9UrD6-zfkPe32ZeZVdXoY5yt" class="colorIndicadores">Acuerdo 570 de 2014 </a>
                            </li>

                            </ul>
                        </td>
                        <td width="20%">
                            <h3 class="alinearIzquierda mb0">Uso, manipulación y/o almacenamiento de residuos peligrosos</h3>
                            <ul class="sinVinetas">
                            <li>
                                <a href="https://drive.google.com/open?id=1x5_NqaGd1zKfP55CdW_j78gQwvpMyFxG " class="colorIndicadores">Resolución 2309 de 1986 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1mDSu3hV6atXlJBzx6bo2W7bphlrE3Lxa " class="colorIndicadores">Resolución 415 de 1998 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=18ACvsncofxDWgI3N8h58bc1sCHKr5T1w " class="colorIndicadores">Resolución 1164 de 2002 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1g2PptNAn_yQtafqcMMbbzjY80M8Hq3f3 " class="colorIndicadores">Resolución 1188 de 2003 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1EswF7iu0f3xM-P_PtezfplPXb-kisr6m " class="colorIndicadores">Resolución 1446 de 2005 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1f1E6EdyeW7vqicgBLVFrN56uKmWbi3cZ " class="colorIndicadores">Decreto 4741 de 2005 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1DX5l5A-hrp1NqxAk5gOB48i0zkGv6uw5" class="colorIndicadores">Resolución 1402 de 2006 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1mTa66tXA6BZdjczDKrPemxbx57NB-4jY" class="colorIndicadores">Resolución 228 de 2007 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1bUoQ8-wprLWa9YmueUeqmuS8uKmc4EW " class="colorIndicadores">Resolución 372 de 2009 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=12IkPlhkuPucDCs4F1Wn-Ze2pZoUHNhUC " class="colorIndicadores">Decreto 351 de 2014 </a>
                            </li>

                            </ul>

                        </td>
                        <td width="20%">
                            <h3 class="alinearIzquierda mb0">Uso, manipulación, almacenamiento, aplicación y expendio de plaguicidas o productos agroquímicos</h3>
                            <ul class="sinVinetas">
                            <li>
                                <a href="https://drive.google.com/open?id=1mftz7O_2TMKIK9uknf5o1Q4S-fnV3ld-" class="colorIndicadores">Código internacional distribución y utilización de plaguicidas </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1Npu5WY7qlDAWbXguV_5tPI5Rl2EJVu8J " class="colorIndicadores">Decreto 1843 de 1991 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1RyN99yEE9UQTyU50Owbkj5neiVYiWZKw " class="colorIndicadores">Resolución 10834 de 1994 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1N1TkHKrYgOKVHbVCQPMnA4uHctbqFht5 " class="colorIndicadores">Resolución 4143 de 1993 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1y2jSNGCpAnC3MXCyCnv23-bb79B6tvL2 " class="colorIndicadores">Decreto 1840 de 1994 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=13GG_ECDxYL5dKjaU0iIQjNoZeceYtEN2 " class="colorIndicadores">Resolución 3079 de 1995 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1npDTCNOvCDrOf-8pcCa6jOm4tKmokxlF " class="colorIndicadores">Resolución 1056 de 1996 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1-_kWE1pN6sAnIs2BeQlGQ6CDjxigIkvN " class="colorIndicadores">Decreto 1443 de 2004 </a>
                            </li>
                            </ul>

                        </td>
                        <td width="20%">
                            <h3 class="alinearIzquierda mb0">Servicios personales de belleza (estética facial, corporal y ornamental)</h3>
                            <ul class="sinVinetas">
                            <li>
                                <a href="https://drive.google.com/open?id=10Wi91uf4S1bi1Ko-OJ5ghUombw755tCY " class="colorIndicadores">Circular 001 de 1996 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1tOBYGlY6USsc8zAJz6-xRb0zp-Az3q_f " class="colorIndicadores">Ley 711 de 2001 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1sDPCQu6RE9k6B_u9mC-JX8-8EeFX0lTb " class="colorIndicadores">Decisión 516 de 2002 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=13hC3w_dHjS1sY3oCdkqUritPOQvXkAYx" class="colorIndicadores">Decreto 1294 de 2004 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1ofmZsSI1QFgvxbGZatYOXEpLJ_nW6-UR" class="colorIndicadores">Resolución 2263 de 2004 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=10IQAMmBqySmgFHRA406Uz7JvrPuROLrj " class="colorIndicadores">Decreto 1076 de 2015 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/drive/u/1/folders/1W3FCmt9_DyKMux9NEX7LNpNARrMdWN4Z?ogsrc=32" class="colorIndicadores">Resolución 797 de 2004 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1jhc1u1pqA5EG7BEXFPu_B_6R2PBSskFi " class="colorIndicadores">Resolución 3924 de 2005 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1dS4auFKlKMTQUMiegpCT38n-Kwlai859" class="colorIndicadores">Resolución 2827 de 2006 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1gkOY_oORERSH3Wozq8pAvOO-dIg8cSje " class="colorIndicadores">Resolución 723 de 2010 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1C7QBQjC1Mt4EMUKPyrb2SvmPFnOFmSc-" class="colorIndicadores">Resolución 2117 de 2010 </a>
                            </li>
                            </ul>
                        </td>
                        <td width="20%">
                            <h3 class="alinearIzquierda mb0">Actividades o servicios específicos</h3>
                            <ul class="sinVinetas">

                            <li>
                                <a href="https://drive.google.com/open?id=1h-woAZz0DXFNiRjv7MlPzl-o_UfsCOvY " class="colorIndicadores">- Resolución 2190 de 1991</a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1ilMr5kGQyTGJBez30H_Iwcg2aUMRMEpl " class="colorIndicadores">- Resolución 3388 de 2008 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1C1GZD9NCRxCqHznhoVvm8B-rcoPhgsuX " class="colorIndicadores">- Resolución 482 de 2009 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1LFHqra3Tv_h65FWo-s4kQlNgm6fTIbgS " class="colorIndicadores">- Resolución 1842 de 2009 </a>
                            </li>
                            </ul>
                        </td>
                        <td width="20%">
                            <h3 class="alinearIzquierda mb0">Uso, manipulación, almacenamiento y expendio de combustibles</h3>
                            <ul class="sinVinetas">
                            <li>
                                <a href="https://drive.google.com/open?id=1bZNLdPpeGiETIjt_5VAC-SV2rxGyNq7A " class="colorIndicadores">Resolución 80505 de 1997 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=11KVSbqDAQ_QLJXJ61WOueJekEEfbPS1U" class="colorIndicadores">Decreto 1521 de 1998 </a>
                            </li>
                            </ul>
                        </td>
                        </tr>
                    </table>

                </div>
            </div>  

            <div class="row">
                <hr class="lineaQuimica mt80" style="width: 100%;" />
            </div>

            <div class="logos colorSeguridadquimica bold140p">
                <div class="centrado">
                    <p class="colorSeguridadquimica">Documentos e investigaciones</p>
                    <a href="SeguridadQuimica_Documentos.html">
                    <img src="images/quimica/espacioDOCUMENTOS.jpg" width="85" height="63" alt="Aire docs" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Mapas</p>
                    <img src="images/quimica/espacioMAPA.jpg" width="85" height="63" alt="Aire mapa" />
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Normatividad</p>
                    <a href="SeguridadQuimica_Normatividad.html">
                    <img src="images/quimica/espacioNORMATIVIDAD.jpg" width="85" height="63" alt="Aire normas" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorSeguridadquimica">Indicadores</p>
                    <a href="SeguridadQuimica_Indicadores.html">
                    <img src="images/quimica/espacioINDICADORES.jpg" width="85" height="63" alt="Aire título" />
                    </a>
                </div>
                </div>        
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
