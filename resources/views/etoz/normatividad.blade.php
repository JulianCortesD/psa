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
                    <span class="breadcrumb_"> Zoonosis y Vectores |</span>
                    <span class="breadcrumb_ colorETOZ">Normatividad</span>

                    <div width="300px">
                        <img src="{{asset("images/Eventos zoonoticos/LOGO_ZOONOSIS.png")}}" height="93" alt="símbolo sección etoz" />
                    </div>

                </div>
                <div class="col-4">
                    <div class="row ocultar">
                        <div class="col-12 date-time-title">
                        <span>Bogotá hoy</span>
                        </div>
                    </div>
                    <div class="row ocultar">
                        <div class="col-12 date-time" >
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
            <div height="355">
              <img src="images/Eventos zoonoticos/Banner ETOZ del Home.jpg" width="100%" alt="Slider Alimentos" /></div>
            </div>

            <div class="row" style="text-align:justify;">
                <div class="contenidoSecAmb centradoDiv mt-3">

                    <h2 class="colorETOZ">
                    <img src="images/Eventos zoonoticos/NORMATIVIDAD.png" width="85" height="63" align="absbottom" />Normatividad</h2>
                    <p>Compilación de las normas expedidas por las diferentes organizaciones gubernamentales relacionadas las acciones integrales
                    de vigilancia sanitaria y epidemiológica, promoción de la salud y prevención de las enfermedades transmisibles de
                    origen zoonótico.
                    <u> </u>
                    </p>
                    <p>
                        <h2 align="center" class="colorETOZ">
                            Regulación transversal &nbsp; &nbsp; &nbsp;&nbsp; Regulación Especifica</h2>
                    </p>

                    <div align="center">
                    <table width="545" border="0">
                        <tr>
                        <td width="305">
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
                            <li></li>
                            </ul>
                        </td>
                        <td width="230">
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
                                <a href="https://drive.google.com/open?id=1receeV4qfRE_JSIoMWiyMDXe22Ys1gDD " class="colorIndicadores">Acuerdo 509 de 2012 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1SiLKIz1nQxJSAR3YqJN5mL1V_uvhqF-Z  " class="colorIndicadores">
                                Decreto 85 de 2013 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1usBbTHveBF5EjBW7gTVGTJ2NnjPu0DH1 " class="colorIndicadores">Acuerdo 524 de 2013 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1o0nFoCgf9bdT0d49raiXYR7e5EksI6jh  " class="colorIndicadores">Acuerdo 531 de 2013 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=10GNqFEu13ILUKmRILriIrQtxVS_ejJsg" class="colorIndicadores">Acuerdo 532 de 2013 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=10GNqFEu13ILUKmRILriIrQtxVS_ejJsg" class="colorIndicadores">Acuerdo 532 de 2013 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1yCqxA30qCKeXrMycn0oax9r4ung-GskP " class="colorIndicadores">Resolución 446 de 2018 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1Tx3-eWxzkyFLncG5OSHJ3HLenn-Qoz79" class="colorIndicadores">Resolución 482 de 2018 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=13SUxGxZmtJmpf-phjNkgxYXb-Z2eH77U " class="colorIndicadores">Decreto 242 de 2015 </a>
                            </li>
                            <li>
                                <a href="https://drive.google.com/open?id=1iiAjVEibBK2a3xk66AEBLYd0AOhQGIxy" class="colorIndicadores">Acuerdo 532 de 2013 </a>
                            </li>
                            </ul>
                        </td>
                        </tr>
                    </table>
                    </div>
                    <p align="left">&nbsp;</p>
                </div>

            </div>

            <div class="row">
                <hr class="lineaETOZ mt80" style="width: 100%;" />
            </div>

            <div class="logos colorETOZ bold140p">
                <div class="centrado">
                    <p class="colorETOZ">Documentos e investigaciones</p>
                    <a href="{{asset("etoz_documentos")}}">
                        <img src="images/Eventos zoonoticos/DOCUMENTOS.png" width="85" height="63" alt="Aire docs" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Mapas</p>
                    <img src="images/Eventos zoonoticos/MAPA.png" width="85" height="63" alt="Aire mapa" />
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Normatividad</p>
                    <a href="{{asset("etoz_normatividad")}}">
                        <img src="images/Eventos zoonoticos/NORMATIVIDAD.png" width="85" height="63" alt="Aire normas" />
                    </a>
                </div>
                <div class="centrado">
                    <p class="colorETOZ">Indicadores</p>
                    <a href="{{asset("etoz_indicadores")}}">
                        <img src="images/Eventos zoonoticos/INDICADORES.png" width="85" height="63" alt="Aire título" />
                    </a>
                </div>
            </div>

        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
