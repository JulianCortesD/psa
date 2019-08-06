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
                <span class="colorMedicamentos">Más Información</span>
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

            <div class="row" style="text-align:justify;">
                <div class="contenidoSecAmb centradoDiv">
                    <div align="justify">
                        <p>&nbsp;</p>
                        <h2 class="colorMedicamentos bold140p"><b> Objetivo General</b> </h2>
                        <p align="justify" style="font-size: 16px;">

                        <p>Contribuir en la defensa de los derechos de las personas a que le sean suministrados medicamentos, dispositivos
                        médicos y productos farmacéuticos de calidad, realizando una gestión integral de los mismos en procura de un ambiente
                        sano.
                        </p>
                    </div>

                    <h2 class="colorMedicamentos bold140p"><b> Objetivos Específicos</b></h2>
                    <p align="justify" style="font-size: 16px;">
                       <p align="justify">Promover en los habitantes de la ciudad una cultura de uso racional de medicamentos, dispositivos médicos y productos
                        farmacéuticos.</p>
                    <p>Fomentar la gestión integral de los medicamentos, dispositivos médicos y productos farmacéuticos en condiciones seguras
                        y ambientalmente saludables. </p>
                    <p>Vigilar la comercialización de medicamentos, dispositivos médicos y productos farmacéuticos de calidad en condiciones
                        técnicas y sanitarias adecuadas. </p>
                    <p>Fortalecer los procesos de regulación y control de los productos de la medicina alternativa y terapias complementarias
                        en Bogotá D.C. </p>
                    <p>Promover el fortalecimiento de las instituciones encargadas de la gestión de la salud ambiental en los temas referidos
                        a medicamentos, dispositivos médicos y productos farmacéuticos. </p>

                          <h2 class="colorMedicamentos bold140p"><b> Ejes Temáticos</b> </h2>
                     <p align="justify" style="font-size: 16px;">

                    <p>Promoción del uso racional de medicamentos, dispositivos médicos y demás productos farmacéuticos. </p>
                    <p >Manejo integral de medicamentos, dispositivos médicos y demás productos farmacéuticos. </p>
                    <p >Vigilancia de la salud ambiental sobre medicamentos, dispositivos médicos y demás productos farmacéuticos. </p>
                    <p >Gestión para el conocimiento y la regulación de alternativas farmacoterapéuticas. </p>
                    <p >Fortalecimiento de la capacidad institucional para la gestión de medicamentos, dispositivos médicos y demás productos farmacéuticos.</p>

                     <h2 class="colorMedicamentos mt 40"><b>Objetivo de la Inspección, Vigilancia y Control de Establecimientos Farmacéuticos distribuidores minoristas y mayoristas entre otros</b>

                     <p align="justify" style="font-size: 16px;">

                       <p>Vigilar la comercialización de medicamentos, dispositivos médicos entre otros, en los establecimientos competencia
                        de la línea de Medicamentos seguros, los cuales deberán contar con las condiciones sanitarias adecuadas para su consumo y promover en los habitantes de la ciudad una cultura de uso racional de medicamentos propendiendo por su gestión integral en condiciones seguras y ambientalmente saludables.</p>
                        <p>En el componente de I.V.C (inspección, vigilancia y control sanitario), de la línea de medicamentos seguros se realizan las siguientes intervenciones:  </p>
                        <p> I.V.C. de establecimientos Farmacéuticos Distribuidores minoristas y mayoristas (Droguerías y Farmacias-Droguerías,Farmacias Homeopáticas, Agencias de Especialidades Farmacéuticas y Depósitos de Drogas), Tiendas Naturistas, Distribuidores de cosméticos, distribuidores de productos odontológicos, laboratorios dentales y ópticas entre otros.</p>
                        <p> Realización de Actividades Educativas a droguistas y comunidad general</p>
                        <p> Se vigilan durante las visitas a los establecimientos competencia de la Línea de medicamentos Seguros
                        los siguientes productos: Medicamentos Alopáticos, Medicamentos Homeopáticos,Productos Fitoterapéuticos
                         Suplementos Dietarios, Alimentos, Dispositivos médicos y Cosméticos </p></ul>

                    <p align="right">
                        <a href="{{asset("medicamentos")}} " align="right" class="verMas colorMedicamentos">
                            Volver
                        </a>
                    </p>
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
