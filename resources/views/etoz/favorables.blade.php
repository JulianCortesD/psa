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
                    <span class="colorMedicamentos"> | Medicamentos seguros y dispositivos médicos|</span>
                    <span class="colorMedicamentos">|Favorable</span>
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
                        <img src="{{asset("images/medicamentos/LogoMedicamentos.png")}}" width="480" height="93" alt="símbolo sección medicamentos" />
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
                    <img src="images/medicamentos/BannersMedicamentosParte_interna.png" width="100%" />
                </div>
            </div>

            <div class="row" style="text-align:justify;">
                <div class="contenidoSecAmb centradoDiv">
                    <span class="cursiva">.</span>

                    <h2 class="colorMedicamentos">&nbsp;</h2>
                    <h1 class="seccion fondoMedicamentos sinSaltoLinea">
                        <img src="images/medicamentos/Exelencia sanitaria  morado.png" width="79" height="90" align="absbottom" />Establecimientos con concepto favorable</h1>
                    <p>&nbsp;</p>
                    <p align="justify">Consulte aquí los establecimientos farmacéuticos ubicados en la ciudad de Bogotá, que cumplen al 100% con la norma
                        sanitaria y cuentan con concepto  favorable por parte de la Secretaria de Salud, emitido en la ultima visita de Inspeccion
                        Vigilancia y Control realizada durante el periodo enero-diciembre 2018</p>
                    <table width="883" border="0">
                        <tr>
                        <td width="46">
                            <a href="https://drive.google.com/open?id=1lLZpwz-oAyBJrjNUinYIkuRM2M7YzTPK">
                            <img src="images/medicamentos/IconoPDFMedicamentos.png" width="38" height="44" />
                            </a>
                        </td>
                        <td width="827" class="colorIndicadores">Farmacéuticos Mayoristas</td>
                        </tr>
                        <tr>
                        <td>
                            <a href="https://drive.google.com/open?id=19p2KpOQYolUoDSy9XEJgTcuFLRVcokPH">
                            <img src="images/medicamentos/IconoPDFMedicamentos.png" alt="" width="38" height="44" />
                            </a>
                        </td>
                        <td class="colorIndicadores">Farmacéuticos Minoristas</td>
                        </tr>
                        <tr>
                        <td>
                            <a href="https://drive.google.com/open?id=1qkRZFmbMCfb7psvnKxZ1B9Ot4p1atVf9">
                            <img src="images/medicamentos/IconoPDFMedicamentos.png" alt="" width="38" height="44" />
                            </a>
                        </td>
                        <td class="colorIndicadores">Distribuidores de cosméticos</td>
                        </tr>
                        <tr>
                        <td>
                            <a href="https://drive.google.com/open?id=1_6FsLTk3V9SBKSgtSMu3G_LYLgGRJ_vd">
                            <img src="images/medicamentos/IconoPDFMedicamentos.png" alt="" width="38" height="44" />
                            </a>
                        </td>
                        <td class="colorIndicadores">Droguerias que manejan medicamentos de control especial (MECE)</td>
                        </tr>
                    </table>
                    <p align="justify">&nbsp;</p>
                    <p align="justify">&nbsp;</p>
                </div>
            </div>  

            <div class="row">
                <hr class="lineaCambioC mt80" style="width: 100%;" />
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
