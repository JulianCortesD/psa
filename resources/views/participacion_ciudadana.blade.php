  @extends('layout')
@section('titulo')
    Conceptos Favorables
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/menu.css")}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/secAmbiente.css")}}" />
@endsection
@section('contenido')
    <div class="wrapper min-ancho">
        <div class="container-fluid">
            <div class="row mb-3">

                <div class="col-8">
                    <img src="images/aire/iconoHome.png" width="42" height="38" alt="Ir al home" />
                    <span class="breadcrumb_"> | Participación Ciudadana </span>
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

            <div class="row mb-3">
                    <div class="col-8 ">
                        <div class="row">
                            <div class=" d-inline-block" >
                                <img class="concept-title d-inline-block" src="{{asset("images/header/menu/IconoParticipacionCiudadana.svg")}}" alt="">
                            </div>
                            <div class="d-inline-block titulo-contenido px-5">
                                <label > Participación Ciudadana </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4" >
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
        </div>
    </div>

    <div class="wrapper min-ancho">
        <div class="container-fluid">
            <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 altura" src="{{asset("images/participacion/banner_ participacionc.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner ETOZ del Home.jpg")}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner PISA del Home.jpg")}}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/BannerHomeSemanaAmbiental.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner Autorregulacion Home.jpg")}}" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>



    <div class="wrapper">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-10 offset-1">
                    <div class="row">
                            <p style="text-align: justify;">
                                El Portal de Salud Ambiental de Bogotá propone a sus usuarios unas actividades de monitoreo, recolección y difusión
                                de la información acerca de salud ambiental en la ciudad. A través de este sitio web se podrá acceder a los avances,
                                logros de la gestión, publicaciones e iniciativas que impulsan el desarrollo del distrito y la integración de la comunidad
                                entorno a la protección del medio ambiente.
                                <br> <br>
                                El Portal quiere que la ciudadanía se integre a la gestión de la Salud Ambiental de Bogotá, para ello dispone de la
                                información necesaria, para acceder a los servicios, normatividad actual, orientaciones de trámites y acciones que se
                                pueden desarrollar en la ciudad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-10 offset-1">
                    <div class="row">
                        <img src="{{asset("images/menu/recomendaciones.png")}}" alt="recomendaciones">
                    </div>
                </div>
            </div>
                    <table width="825" border="0">
                      <tr>
                        <td width="60">
                        <span class="colorIndicadores">
                            <a href="https://drive.google.com/open?id=13DjygjVnAlqAULD3i1nOp5HT6tZNzNEO">
                              <img src="images/aire/IconoPDFparaAire.png" width="37" height="46" />
                                      </a>
                                      </span>
                                  </td>

                                  <td width="755" class="colorIndicadores">
                                      <span class="colorIndicadores">Manejo de Residuos</span>
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
                                </td>

                                <td width="755" class="colorIndicadores">
                                    <span class="colorIndicadores">Semana Ambiental</span>
                                </td>
                                </tr>

                                <tr>
                                <td>
                                    <span class="colorIndicadores">
                                    <a href="https://drive.google.com/open?id=1KlIZfShTzpj2iI4jyPZDC0wqVhhRLBJj">
                                        <img src="images/aire/IconoPDFparaAire.png" alt="" width="37" height="46" />
                                      </a>
                                      </span>
                                  </td>
                                </td>

                                <td width="755" class="colorIndicadores">
                                    <span class="colorIndicadores">Recomendaciones consumo de pescado</span>


                                </table>

@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
