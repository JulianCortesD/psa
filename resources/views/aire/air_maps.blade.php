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
                  <span class="breadcrumb_"> | Aire, ruido y radiación electromagnética |</span>
                    <span class="breadcrumb_ aire"> Mapas</span>
                    <div width="300px">
                        <img src="{{asset("images/aire/LogoAireRuidoREM.png" )}}" width="100%" alt="" />
                    </div>

                </div>
                <div class="col-4">
                    <div class="row ">
                        <div class="col-12 date-time-title">
                        <span>Bogotá hoy</span>
                        </div>
                    </div>
                    <div class="row">
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
                                <img src="{{asset("images/news/climaactual.svg")}}" alt="clima actual" class="img-clima-actual">
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
                   <a href="https://drive.google.com/open?id=1pPWUpFKRV1rh4eoH413mjKgoRphWf9eu">
                            <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner restaurante 1a del Home.png")}}" alt="Sixth slide">
                        </a>
                </div>
            </div>
                <div class="contenidoSecAmb centradoDiv">
                    <br></br>
                        <div>
                            <h3>
                            <img src="images/aire/aireMAPA.png" alt="Calidad aire" width="85" height="63" align="absbottom" />
                            <span class="colorAire"><b>Mapas</b></span></h3>
                        </div><br></br>

                        <h3 class="colorAire mt 40"><b>Calidad del aire</b></h3>
                        <p align="justify">Aquí podrá observar la ubicación geográfica de las acciones de vigilancia ambiental, sintomatología y enfermedades
                            respiratorias posiblemente asociadas con la exposición a contaminación del aire en Bogotá.  </p>
                        <table border="0">
                            <tr>
                            <td width="62">
                                <a href="https://drive.google.com/open?id=1G0BIQyHxqz4-zeOFfZFP1VVibediul0w">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td width="824" class="colorIndicadores">
                                <div align="justify">
                                <span class="colorIndicadores">Sibilancias en adulto mayor vs. Zonas de exposición de contaminación del aire en Bogotá, año 2018 </span>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <a href="https://drive.google.com/open?id=18WyB8wz7dO6KycrVDq8m2I99pMDImW9A">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td class="colorIndicadores">
                                <span class="colorIndicadores">Tos en adulto mayor vs. Zonas de exposición de contaminación del aire en Bogotá, año 2018. </span>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <a href="https://drive.google.com/open?id=1c52y1H4GswXIzI09DHrlM5xhJCfDvm2G">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td class="colorIndicadores">Ausentismo escolar en menores de 5 años vs. Zonas de exposición de contaminación del aire en Bogotá, año 2018</td>
                            </tr>
                            <tr>
                            <td>
                                <a href="https://drive.google.com/open?id=1aRqJLxttAaMhxsurCpvDa8_GFEWJSI5z">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td class="colorIndicadores">Sibilancias en menores de cinco años vs. Zonas de exposición de contaminación del aire en Bogotá, año 2018</td>
                            </tr>
                            <tr>
                            <td>
                                <a href="https://drive.google.com/open?id=1LmySFKWVwMJbg2aj_92zsOpMnQvfcxem">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td class="colorIndicadores">Tos en menores de 5 años vs. Zonas de exposición de contaminación de aire en Bogotá, año 2018.
                                <strong> </strong>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <a href="https://drive.google.com/open?id=1kicBfTUJO80nChSatAQZsjPjIW8cyEF_">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td class="colorIndicadores">Ausentismo escolar en niños de 5 a 14 años vs. Zonas de exposición de contaminación de aire, año 2018. </td>
                            </tr>
                            <tr>
                            <td>
                                <a href="https://drive.google.com/open?id=1j2OSgnlVqLk_IQWtXDERBcu379aF4fuF">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td class="colorIndicadores">Sibilancias en niños de 5 a 14 años vs. Zonas de exposición de contaminación de aire en Bogotá, año 2018</td>
                            </tr>
                            <tr>
                            <td>
                                <a href="https://drive.google.com/open?id=1DAiT0pmhXbNQvwBzFITWcrLN-Hk4ncCh">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td class="colorIndicadores">Tos en niños de 5 a 14 años vs. Zonas de exposición de contaminación de aire en Bogotá, año 2018. </td>
                            </tr>
                            <tr>
                            <td>
                                <a href="https://drive.google.com/open?id=1-D6rxgnGurLjQTpdMkCKsA6HeyTPvbXw">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td height="20" class="colorIndicadores">Quejas atendidas por exposición a contaminación del aire, Bogotá, año 2018.      </td>
                            </tr>
                        </table>
                        <br></br>
                        <div align="center"></div>
                        <h3 class="colorAire mt 40"><b>Espacios libres de humo</b></h3>
                        <p align="justify">Aquí podrá encontrar la &ldquo;ubicación geográfica&rdquo; de las acciones de vigilancia, inspección y control a establecimientos
                            públicos que garanticen ambientes 100% libres de humo de tabaco y la frecuencia de casos relacionados con la exposición
                            al humo de tabaco. </p>
                        <table width="805" border="0">
                            <tr>
                            <td width="48">
                                <a href="https://drive.google.com/open?id=1W1lt8WQ6R3VEtHtWL8zILQ43b7cVSF1s">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td width="747" height="50" class="colorIndicadores">Quejas atendidas por exposición a contaminación de tabaco, Bogotá, año 2018. </td>
                            </tr>
                        </table>

                        <table width="805" border="0">
                            <tr>
                            <td width="48">
                                <a href="https://drive.google.com/open?id=1Icp8dINl8D7u87Gacylj5e8Vk37Y5xeg">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td width="755" height="50" class="colorIndicadores">Tabaco en el hogar en menores de 5 años Vs. Zonas de exposición de contaminación de aire Bogotá, año 2018. </td>
                            </tr>
                        </table>

                         <table width="805" border="0">
                            <tr>
                            <td width="48">
                                <a href="https://drive.google.com/open?id=1R_YAxx-1MSvW_DxwrvgA3q2aUUb_cmut">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td width="755" height="50" class="colorIndicadores">Mujeres que fumaron durante el embarazo en menores de 5 años Vs. zonas de exposición de contaminación de aire Bogotá, Año 2018. </td>
                            </tr>
                        </table>

                         <table width="805" border="0">
                            <tr>
                            <td width="48">
                                <a href="https://drive.google.com/open?id=1ScpQZwge52wo-WTtfo2KEOlSBwA_uz_a">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td width="747" height="50" class="colorIndicadores">Tabaco en el hogar niños de 5 a 14 años Vs. Zonas de exposición de contaminación de aire Bogotá, año 2018.   </td>
                            </tr>
                        </table>

                         <table width="805" border="0">
                            <tr>
                            <td width="48">
                                <a href="https://drive.google.com/open?id=1-QzFpuPMeySvwPe_JR_KgolGbG3Kx2-9">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td width="747" height="50" class="colorIndicadores">Mujeres que fumaron durante el embarazo niños de 5 a 14 años Vs. Zonas de exposición de contaminación de aire Bogotá, Año 2018  </td>
                            </tr>
                        </table>
                        <table width="805" border="0">
                            <tr>
                            <td width="48">
                                <a href="https://drive.google.com/open?id=1PVI71gwbewiIA2uT8d80yI0NkPsepdm3">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td width="747" height="50" class="colorIndicadores">Tabaquismo pasivo en menores de 5 años Vs. Zonas de exposición de contaminación de aire Bogotá, Año 2018  </td>
                            </tr>
                        </table>

                        <table width="805" border="0">
                            <tr>
                            <td width="48">
                                <a href="https://drive.google.com/open?id=14AB28HasUoq_uD1nvatAe0oGREpTkHJc">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td width="747" height="50" class="colorIndicadores">Tabaquismo pasivo niños de 5 a 14 años Vs. Zonas de exposición de contaminación de aire Bogotá, Año 2018  </td>
                            </tr>
                        </table>

                        <table width="805" border="0">
                            <tr>
                            <td width="48">
                                <a href="https://drive.google.com/open?id=1kZ2cHIDM7D2Y2nHzq4QuS1lUldfF2_uV">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td width="747" height="50" class="colorIndicadores">Tabaquismo pesado en adulto mayor Vs. Zonas de exposición de contaminación de aire Bogotá, Año 2018  </td>
                            </tr>
                        </table>

                        <table width="805" border="0">
                            <tr>
                            <td width="48">
                                <a href="https://drive.google.com/open?id=1oPbks8ceDgY3w0VpkQ8lFyDSy7Ye6vH9">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td width="747" height="50" class="colorIndicadores">Establecimientos con incumplimientos de tabaco ley 1335 de 2009 Bogotá, año 2018 </td>
                            </tr>
                        </table>

                        <p align="justify"></p>
                        <h3 class="colorAire mt 40"><b>Ruido</b></h3>
                        <p>Contempla las ubicaciones geográficas de las acciones de vigilancia ambiental, sanitaria y los eventos de interés en
                            salud pública relacionados con la exposición a ruido en Bogotá. </p>
                        <table width="858" border="0">
                            <tr>
                            <td width="49">
                                <a href="https://drive.google.com/open?id=1UpexBJL--vGqvYj-LmQAIE2yBxnvtzfG">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td width="799" class="colorIndicadores">Quejas atendidas por exposición a contaminación de ruido. Bogotá, año 2018. </td>
                            </tr>
                            <tr>
                            <td>
                                <a href="https://drive.google.com/open?id=1pxkNPQ03t0HBqWVaGOa1ZMpfCiSFFp52">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td class="colorIndicadores">Distribución de casos de buenos y malos dormidores según el ICSP Bogotá, año 2018.
                                <strong> </strong>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <a href="https://drive.google.com/open?id=1OrN6tTtwH6UNAHllzCB3I5QmJ8d1mRi-">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td class="colorIndicadores">Distribución de casos de buenos y malos dormidores en población, según EPWORTH Bogotá, año 2018</td>
                            </tr>
                            <tr>
                            <td>
                                <a href="https://drive.google.com/open?id=1LjfMAGCBnm_XKlIiT9vFrH3g3RE48YBa">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td class="colorIndicadores">Distribución de casos de buenos y malos dormidores en población, según el ICSP. Bogotá, año 2018</td>
                            </tr>
                        </table>
                        <br></br>
                        <h3 class="colorAire mt 40"><b>Radiación electromagnética</b></h3>
                        <p>Muestran las ubicaciones geográficas de las acciones de vigilancia ambiental, sanitaria y eventos de interés en salud
                            pública relacionados con la exposición a radiación electromagnética en Bogotá. </p>
                        <table width="797" border="0">
                            <tr>
                            <td width="47">
                                <a href="https://drive.google.com/open?id=1XAzim0s5fpr_cJeR0OTPvFTvDdYeYaVV">
                                <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                </a>
                            </td>
                            <td width="615" height="50" class="colorIndicadores">Quejas atendidas por exposición a contaminación de radiación electromagnética en Bogotá. Año 2018. </td>
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
                     <a href="{{asset("aire_documentos")}}">
                    <img src="images/aire/IMG_AIRE_DOCUMENTOS.jpg" width="85" height="63" alt="Agua docs"/>
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Mapas</p>
                    <a href="{{asset("aire_mapas")}}">
                    <img src="images/aire/aireMAPA.png" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Normatividad</p>
                    <a href="{{asset("aire_normatividad")}}">
                    <img src="images/aire/IMG_AIRE_NORMATIVIDAD.jpg" width="85" height="63" alt="Agua normas" />
                </div>
                <div class="centrado colorAire">
                    <p class="colorAire">Indicadores</p>
                    <a href="{{asset("aire_indicadores")}}">
                    <img src="images/aire/aireINDICADORES.png" width="85" height="63" alt="Agua título" />
                </div>
            </div>
        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
