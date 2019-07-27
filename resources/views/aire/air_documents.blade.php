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
                    <span class="breadcrumb_ aire"> Documentos e investigaciones</span>
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

                        <h1 class="centrado colorAire mt20">&nbsp;</h1>
                        <h1 class="colorAire">
                            <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" align="absbottom" />Documentos e investigaciones</h1>
                        <p class="colorIndicadores">Compendio de documentos e investigaciones relacionados con la contaminación del aire, contaminación auditiva, exposición
                            al humo de tabaco y contaminación por radiación electromagnética en Bogotá.</p>
                        <p class="contenidoSecAmb">&nbsp;</p>
                        <table width="825" border="0">
                            <tr>
                            <td width="60">
                                <span class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1bclr5qWNU0TRHf5YfFvH1XbYpvMuGhRE">
                                    <img src="images/aire/IconoPDFparaAire.png" width="37" height="46" />
                                </a>
                                </span>
                            </td>

                            <td width="755" class="colorIndicadores">
                                <span class="colorIndicadores">Informe anual de calidad del aire en Bogotá. Año 2017</span>
                            </td>
                            </tr>

                            <tr>
                            <td>
                                <span class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=195hzPDOJBzwpxkv91RaArnmrNktW7V3U">
                                    <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                                </span>
                            </td>
                            <td class="colorIndicadores">
                                <span class="colorIndicadores">Informe de la semana ambiental. Año 2018</span>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <span class="colorIndicadores">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </span>
                            </td>

                            <td class="colorIndicadores">
                                <span class="colorIndicadores">Informe de la Jornada de profundización contra el Ruido. Año 2018</span>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <span class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1C-7xnCDYhusvnuLZMnfUpdqk4-xok-HX">
                                    <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                                </span>
                            </td>
                            <td class="colorIndicadores">
                                <span class="colorIndicadores">Informe de la jornada de profundización en radiaciones electromagnéticas. Año 2018</span>
                            </td>
                            </tr>
                            <tr>
                            <td class="colornegro">
                                <span class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1Al6DHInDgmxVAkP0oe4csUOq6zJNZosD">
                                    <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                                </span>
                            </td>
                            <td class="colorIndicadores">
                                <span class="colorIndicadores">Infografía &ldquo;Calidad del sueño&rdquo;. Año 2019</span>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <span class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1H0eoDOKZmHERZ3sZeKCBrDmiS2HHWk-K">
                                    <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                                </span>
                            </td>
                            <td class="colorIndicadores">
                                <span class="colorIndicadores">Infografía &ldquo;Día sin carro y sin moto&rdquo;. Año 2019</span>
                            </td>
                            <tr>
                            <td class="colornegro">
                                <span class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=1T_zR4583up7QFeyVzqDUL6rnSXW1XMmq">
                                    <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                                </span>
                            </td>
                            <td class="colorIndicadores">
                                <span class="colorIndicadores">Infografía &ldquo;Dia mundial sin tabaco&rdquo;. Año 2019</span>
                            </td>
                            </tr>
                            <tr>
                            <td class="colornegro">
                                <span class="colorIndicadores">
                                <a href="https://drive.google.com/open?id=17Ccg8IDvK7k-RQFCyEOlcC8-vZdHNBN-">
                                    <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                                </span>
                            </td>
                            <td class="colorIndicadores">
                                <span class="colorIndicadores">Infografía &ldquo;Efectos en salud de la radiación electromagnética&rdquo;. Año 2019</span>
                            </td>
                            </tr>

                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                        </table>
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
