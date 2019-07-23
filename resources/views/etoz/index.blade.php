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
                    <span class="breadcrumb_"> | Zoonosis y Vectores | </span>
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
                        <img src="{{asset("images/Eventos zoonoticos/LOGO_ZOONOSIS.png")}}" width="568" height="93" alt="símbolo sección etoz" />
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
                    <img src="images/Eventos zoonoticos/Banner ETOZ del Home.png" width="944" alt="Slider Cambio climático" />
                </div>
            </div>

            <div class="contenidoSecAmb centradoDiv">

                <p>&nbsp;</p>
                <h1 class=" seccion fondoEtoz sinSaltoLinea">
                <span class="Izquieda">
                    <img src="images/Eventos zoonoticos/IMG_ZOONOSIS_NORMATIVIDAD.jpg" width="85" height="63" alt="Cambio climático docs"
                    />
                </span>Normatividad</h1>
                <p>&nbsp; </p>

                <h2 align="center" class="colorETOZ">Regulación transversal</h2>
                <table class="centradoDiv" border="0">
                <tr class="alinearVerticalInicial" width="100%">
                    <td width="153">
                    <ul class="sinVinetas">
                        <li>
                        <a href="https://drive.google.com/open?id=1_M17u3d737D1Xur0634IrvgjZQeu56CW  " class="colorIndicadores">Ley 09 de 1979 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=13CMTGARKvotilOL0mNR8ejBodyzpVT74 " class="colorIndicadores">Decreto 2257 de 1986 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1AIjC7SbnFWziuyw_8LDDwxdnHHjsLeGR " class="colorIndicadores">Reglamento sanitario internacional 2005 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1HScdGhbI_pqBszlQpfq19MU4CDS9x-IM " class="colorIndicadores">Decreto 3518 de 2006 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1tqKgZxyPdUr3u1RgVYSNy1L8_YCPcvI8" class="colorIndicadores">Resolución 518 de 2015 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1qqDI10DnNTRNNKarCBeK9Wvumuzytdqj" class="colorIndicadores">Decreto 3518 de 2006</a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1Xfx2o0RU8QPr9DAIzuYkWhNJgHHzXA5C " class="colorIndicadores">Decreto 780 de 2016 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1P67vteDNIGSTCv7I64tSutK7RHiCjkzE " class="colorIndicadores">Decreto 596 de 2011 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1Mgv65-fsP-F34KUhUbaPLnNBkkF8UqPe" class="colorIndicadores">Ley 1801 de 2016 </a>
                        </li>

                    </ul>
                    </td>
                </tr>
                </table>


                <h2 align="center" class="colorETOZ">Regulación Especifica</h2>
                <table class="centradoDiv" border="0">
                <tr class="alinearVerticalInicial" width="100%">
                    <td width="153">
                    <ul class="sinVinetas">
                        <li>
                        <a href="https://drive.google.com/open?id=1azuaX683ovzeIv8m-7X51YuNsTe-E_Dz " class="colorIndicadores">Ley 84 de 1989 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1gxhOwPNj8wkqJ-xUgfrGeOn6e601UQq1 " class="colorIndicadores">Sentencia T-035 de 1997 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1yDe43H0Z6EkGw3R6zfiopWLoNyQIx1hm " class="colorIndicadores">Resolución 2601 de 2003</a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1LP5OY9VCYUBQHgG8r-9PkxZsMkLJK2ao " class="colorIndicadores">Decreto 596 de 2011 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1tqKgZxyPdUr3u1RgVYSNy1L8_YCPcvI8" class="colorIndicadores">Resolución 518 de 2015 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1qqDI10DnNTRNNKarCBeK9Wvumuzytdqj" class="colorIndicadores">Decreto 3518 de 2006</a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1Xfx2o0RU8QPr9DAIzuYkWhNJgHHzXA5C " class="colorIndicadores">Decreto 780 de 2016 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1P67vteDNIGSTCv7I64tSutK7RHiCjkzE " class="colorIndicadores">Decreto 596 de 2011 </a>
                        </li>
                        <li>
                        <a href="https://drive.google.com/open?id=1Mgv65-fsP-F34KUhUbaPLnNBkkF8UqPe" class="colorIndicadores">Ley 1801 de 2016 </a>
                        </li>

                    </ul>
                    </td>
                </tr>
                </table>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                <h1 class="seccion fondoCambioC sinSaltoLinea">&nbsp;</h1>
            </div>

            <div class="row">
                <hr class="lineETOZ mt80" style="width: 100%;" />
            </div>

            <div class="logos colorETOZ bold140p">
                <div class="centrado">
                    <p class="colorETOZ">Documentos e investigaciones</p>
                    <img src="images/Eventos zoonoticos/DOCUMENTOS.png" width="85" height="63" alt="Aire docs" />
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Mapas</p>
                    <img src="images/Eventos zoonoticos/MAPA.png" width="85" height="63" alt="Aire mapa" />
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Normatividad</p>
                    <img src="imagesEventos zoonoticos/oNORMATIVIDAD.png" width="85" height="63" alt="Aire normas" />
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Indicadores</p>
                    <img src="images/Eventos zoonoticos/INDICADORES.png" width="85" height="63" alt="Aire título" />                    </a>
                </div>
            </div>        
            
        </div>    
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
