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
                    <span class="breadcrumb_"> | Aire, ruido y radiación electromagnética |</span>
                    <span class="breadcrumb_ aire"> Normatividad</span>
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
                        <div>
                            <h3>
                            <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" alt="Calidad aire" width="85" height="63" align="absbottom" />
                            <span class="colorAire">Normatividad</span>
                            </h3>
                        </div>
                    
                        <h2 class="centrado colorAire mt40">Regulación Transversal</h2>
                    
                        <div align="center">
                            <table width="20%" border="0">
                            <tr class="alinearVerticalInicial">
                                <td>
                                <h3>Normatividad General</h3>
                                <ul class="sinVinetas">
                                    <li>
                                    <a href="https://drive.google.com/open?id=1kLVXd_dLamrCFZeoY34IJFuBf4gJkTNm" class="colorIndicadores">Síntesis marco legal </a>
                                    </li>
                                    <li>
                                    <a href="https://drive.google.com/open?id=1_DpbXff8OOmF7zmCMC0GXABhMWZFX7Gt" class="colorIndicadores">Ley 09 de 1979 </a>
                                    </li>
                                    <li>
                                    <a href="https://drive.google.com/open?id=13jHenDS7ziUxSE6YdkQ2A6Usw0hwL82T" class="colorIndicadores">Ley 675 de 2001 </a>
                                    </li>
                                    <li>
                                    <a href="https://drive.google.com/open?id=1m5fGx45ZcrTxsBbr3zpkZlvVlFd0X9xb" class="colorIndicadores">Ley 715 de 2001 </a>
                                    </li>
                                    <li>
                                    <a href="https://drive.google.com/open?id=1R7vjUGyQa69JQTebM6K9n2OwxujrCavg" class="colorIndicadores">Conpes 3344 de 2005 </a>
                                    </li>
                                    <li>
                                    <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/decreto-3518-de-2006_1.pdf"
                                        class="colorIndicadores">Decreto 3518 de 2006 </a>
                                    </li>
                                    <li>
                                    <a href="https://drive.google.com/open?id=1NnF1XsmWnzp3lAGdHsP-x7OWBkBXGhCm " class="colorIndicadores">Conpes 3550 de 2008 </a>
                                    </li>
                                    <li>
                                    <a href="https://drive.google.com/open?id=1R04QG8sMNfAnr60QF2ZGQyPF71zHKjxz" class="colorIndicadores">Decreto 596 de 2011 </a>
                                    </li>
                                    <li>
                                    <a href="https://drive.google.com/open?id=1Mgv65-fsP-F34KUhUbaPLnNBkkF8UqPe" class="colorIndicadores">Ley 1801 de 2016 </a>
                                    </li>
                                </ul>
                                </td>
                            </tr>
                            </table>
                    
                        </div>
                        <h2 class="centrado colorAire mt40">Regulación Específica</h2>
                        <table width="100%" border="0">
                            <tr class="alinearVerticalInicial">
                            <td>
                                <h3>Calidad del Aire</h3>
                                <ul class="sinVinetas">
                                <li>
                                    <a href="drive.google.com/open?id=11kU7QdHb9cOrUb11JnP3_N4GFMruPkx0" class="colorIndicadores">Resolución 187 de 2007 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1HVtf0AmWgH3kOCl6BjT9mTNXUxIxFMDR" class="colorIndicadores">Resolución 610 de 2010 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1TgtC0ukYlfdZuSPtgOMDA4ydKMZkAG43" class="colorIndicadores">Decreto 98 de 2011 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1va7qFn1iB6NDn3GPIQpzBbAaHeWoZSgX" class="colorIndicadores">Decreto 623 de 2011 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=16xi4QmFA8_Jo3mU13tUOOXtNt8ag1O2j" class="colorIndicadores">Decreto 595 de 2015 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1v3GO3NAAa8xUsuNvFlGoVoS1KTzulW4n " class="colorIndicadores">Decreto 1076 de 2015 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1PfTBvlLXhrEWaHnfHtQLS0RWkBXAzeto" class="colorIndicadores">Resolución 2410 de 2015 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1lK8WRBvGDejqbkH2rakfH2WV5frvsIc7 " class="colorIndicadores">Guía internacional de la OMS </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1lK8WRBvGDejqbkH2rakfH2WV5frvsIc7" class="colorIndicadores">Guía internacional de la OMS </a>
                                </li>
                                </ul>
                            </td>
                            <td>
                                <h3>Humo del Tabaco</h3>
                                <ul class="sinVinetas">
                                <li>
                                    <a href="https://drive.google.com/open?id=1oZyJCheDRvR5Lb-lVKzJ6DVNocsdLNey" class="colorIndicadores">Acuerdo 03 de 1983 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=11GVY2GGLQiwjVBL_KHl8ULtG0C1XQ-Ha" class="colorIndicadores">Resolución 543 de 2001 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1GNWBP3rMUwBr4_uSUGa8S_hSFZ1ihBlps" class="colorIndicadores">Ley 1109 de 2006 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1N_qF7aycABLT1vVL89BR5jFECjbysp6M" class="colorIndicadores">CIRCULAR EXTERNA 80 DE 2008</a>
                                </li>
                                <li>
                                    <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/resolucion-01956-de-2008.pdf"
                                    class="colorIndicadores">Circular externa 80 de 2008 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1AtPWHDAOF46SKLxwyZzHNJu-IvxE0O9P" class="colorIndicadores">Resolución 1956 de 2008 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1j5BIFtclqKcxMe2zXsG6VqRJBQaT5CX6" class="colorIndicadores">Acuerdo 376 de 2009 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1rRsaPHuDVsmsGvZ-EBnos2UmACRRQ8gm" class="colorIndicadores">Ley 1335 de 2009</a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=17V1xgVTCEWf5ebD3D-biUZRogquiAMxS" class="colorIndicadores">Resolución 5572 de 2009 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1Y-ZJZB7ea1wmPEzJH9IakO67YzkE6qHf" class="colorIndicadores">Circular externa 031 de 2010 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1OPl1CH26EOqBsOiisOI7yeJMtLEHwVOq" class="colorIndicadores">Circular externa 41 de 2011 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1B6sqoNIz39rmTlx5XEptgyxSLPKAHyNl" class="colorIndicadores">Circular externa 005 de 2012 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1LIN4CSGLbZ5K_c4D7tPUyiZk0Qzc9wvw" class="colorIndicadores">Circular externa 011 de 2012 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1E4vmtDEZ375T8FXBRiJK9ebouIVFB-lg" class="colorIndicadores">Convenio OMS para el control del Tabaco </a>
                                </li>
                    
                                </ul>
                            </td>
                            <td>
                                <h3>Monóxido de Carbono</h3>
                                <ul class="sinVinetas">
                                <li>
                                    <a href="https://drive.google.com/open?id=1oXXfq-VmBtYvieIIhJYx3fd_5LxI5hp4" class="colorIndicadores">Circular externa 00009 de 2006</a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1iCif_v2hPex53ZV1L-6n653U5ThTWFSR " class="colorIndicadores">Directiva 015 de 2007 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1zBqkbebHZAOo2LhlOOHHt2C3Evdgkade f" class="colorIndicadores">Directiva 019 de 2009 </a>
                                </li>
                                </ul>
                    
                                <h3>Olores Ofensivos</h3>
                                <ul class="sinVinetas">
                                <li>
                                    <a href="https://drive.google.com/open?id=10Rlt7L_GzjHiDO4OKkO24gqZYB3b1I7z" class="colorIndicadores">Resolución 1541 de 2013 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1LcNnh0CKaoBGgLGYWtpxhlWdTB-AMtNQ" class="colorIndicadores">Resolución 2087 de 2014 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1pmvMc_6LQLlP_kL5o5sn8jyaSocLqqwa" class="colorIndicadores">Norma Técnica 6012-1 de 2013 </a>
                                </li>
                                </ul>
                    
                                <h3>Radiaciones Electromagnéticas</h3>
                                <ul class="sinVinetas">
                                <li>
                                    <a href="https://drive.google.com/open?id=1sYgKtjodBOjfl3LqUcZUA3jZrG_aFxkV" class="colorIndicadores">Ley 99 de 1993 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1sYgKtjodBOjfl3LqUcZUA3jZrG_aFxkV" class="colorIndicadores">Circular 01 de 2005 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1gRJ7xHeo3RClH7gyWxcA10L3VZ-GY73E" class="colorIndicadores">Decreto 195 de 2005 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/drive/u/1/folders/1yCXW167TuWxKFL8MZ4hhxyhjN79WR51?ogsrc=32" class="colorIndicadores">Decreto 676 de 2011 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1g2gh2UOYWT_LGV6CNNMzouIpOv6fudL3" class="colorIndicadores">Acuerdo 399 de 2008 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1_vIGDkBeXzvxlnWLil1cJteMSZGu657n" class="colorIndicadores">Notas OMS </a>
                                </li>
                    
                                </ul>
                            </td>
                            <td>
                                <h3 align="left">Contaminacíón por Ruido</h3>
                                <ul class="sinVinetas">
                                <li>
                                    <a href="https://drive.google.com/open?id=1jLL5reH0-W4FIYpDLnnFIUV2TxVJVo5C" class="colorIndicadores">Resolución 8321 DE 1983</a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1djeXpVkjzjQeDyfCJb_VfCCO3RgiAFgG" class="colorIndicadores">Decreto 948 de 1995</a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1-JeBTPInnQhcJd1VXl-T9G9CGhh2_PIG" class="colorIndicadores">Resolución 0627 de 2006 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1QD7Nve1N5DddnusT4uqzVEkpj_bTUqU-" class="colorIndicadores">Resolución 6918 de 2010</a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1S7bDOLfG3jGGWPEpjOn166EU7ryZBVf" class="colorIndicadores">Resolución 6919 de 2010</a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1jCbxsZHsF4X3TajSuGkpp12SkRnBih0X" class="colorIndicadores">Decreto 1076 de 2015</a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/drive/u/1/folders/1W3FCmt9_DyKMux9NEX7LNpNARrMdWN4Z?ogsrc=32" class="colorIndicadores">Guía ruido urbano OMS </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1uhxxYS69ThaCg08w6jj_MNOCI4rrGTtJ" class="colorIndicadores">Ley 715 de 2001 </a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/open?id=1A1l_w3WRP2usQi6jTup46fj20Dn1hbn6" class="colorIndicadores">Ley 769 DE 2002 </a>
                                </li>
                    
                                </ul>
                            </td>
                            </tr>
                        </table>
                        <p>&nbsp;</p>
                    
                    
                </div>     
            </div>  
            
            <div class="row">
                <hr class="lineaAire mt80" style="width: 100%;" />
            </div>

            <div class="logos colorAire bold140p">
                <div class="centrado colorAire">
                    <p class="colorAire">Documentos e investigaciones</p>
                    <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Agua docs"
                    />
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Mapas</p>
                    <img src="images/aire/aireMAPA.png" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Normatividad</p>
                    <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Agua normas" />
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Indicadores</p>
                    <img src="images/aire/aireINDICADORES.png" width="85" height="63" alt="Agua título" />
                </div>
            </div>
        </div>  
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
