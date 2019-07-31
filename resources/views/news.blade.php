@extends('layout')
@section('titulo')
    Noticias
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/news.css")}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/indicator.css")}}" />
@endsection
@section('contenido')
    <div class="wrapper min-ancho">
        <div class="container-fluid">
                <div >
                    <a href="https://twitter.com/AmbienteBogota" class="redes pl-1 pt-2" style="margin-top: 90px">
                        <img  src="{{asset("images/redessociales/Twitter.svg")}}" alt="" style="height: 80%">
                    </a>
                    <a href="https://www.facebook.com/AmbienteBogota/" class="redes pl-2 pt-2" style="margin-top: 150px">
                        <img  src="{{asset("images/redessociales/IconoFacebook.svg")}}" alt="" style="height: 95%">
                    </a>
                    <a href="https://www.youtube.com/channel/UCjboPXY4C2F3rnqP7k4_9cQ" class="redes pl-1 pt-2" style="margin-top: 210px">
                        <img  src="{{asset("images/redessociales/IconoYouTube.svg")}}" alt="" style="height: 70%">
                    </a>
                </div>
            <div id="carouselExampleIndicators" class="carousel slide carousel-news" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 altura" src="{{asset("images/carousel/Banner restaurante 1a del Home.jpg")}}" alt="">
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
    <div class="wrapper min-ancho">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-8">
                    <div class="row">
                        <div class=" d-inline-block" >
                            <img class="concept-title d-inline-block"  src="{{asset("images/contactenos/IconoOficinasdeAtencion.svg")}}" alt="">
                        </div>
                        <div class="d-inline-block titulo-contenido px-5">
                            <label > Noticias y publicaciones </label>
                        </div>
                    </div>
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
                <div class="col-4 offset-8" >
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
                <div class="col-6" >
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <section class="content">
                                <div class="content-inside">
                                    <div class="header-content row col-sm-12">
                                        <span style="text-align: justify;">
                                            AUMENTA EL NÚMERO EXPENDIOS DE CARNE AUTORIZADOS
                                            POR LA SECRETARÍA DISTRITAL DE SALUD
                                        </span>
                                    </div>
                                    <div class="row cont-inside">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-10-justify-content-center" style="padding:10px;">
                                                    <p>Junio 27 de 2019</p> <br>
                                                    <img src="{{asset("images/news/expendiocarnes.jpg")}}" class="rounded float-left" style="margin-right: 10px;">
                                                    <p style="text-align:justify; margin-left: 5px;">
                                                            De los cerca de 9.700 establecimientos que venden y almacenan productos cárnicos en Bogotá, 4.039 han hecho durante 2019 ante la Secretaría Distrital de Salud (SDS) la solicitud de autorización sanitaria para su funcionamiento. De estos, 1.050 expendios han sido aprobados por ajustarse a los estándares sanitarios. Sin embargo, los que no cumplan con este requisito se exponen a sanciones, que contemplan incluso la clausura.
                                                            <br> La autorización sanitaria hace parte de la campaña de autorregulación ‘Negocios Saludables, Negocios Rentables’ que ha implementado la SDS para que los propietarios de establecimientos comerciales tomen conciencia de cumplir con las normas sanitarias y adelanten en línea, de manera ágil y sencilla, los trámites necesarios para funcionar.
                                                            <br> El mayor número de solicitudes de autorización corresponde a las localidades de Kennedy (709), Ciudad Bolívar (435), Suba (268), Bosa (266), Rafael Uribe Uribe
                                                            (241) y Fontibón (218).

                                                            <br> Los expendios de carnes con autorización sanitaria garantizan que los productos son adecuados para el consumo. Todos los establecimientos de este tipo deben inscribirse y estar autorizados por la Secretaría Distrital de Salud. Entre otros requisitos deben cumplir con:
                                                            <br> •	Mantener los productos cárnicos en cadena de frío con las temperaturas correspondientes de refrigeración y congelación.
                                                            <br> •	No tener la carne expuesta al medio ambiente.
                                                            <br> •	Tener capacidad de almacenamiento para el volumen que comercializa.
                                                            <br> •	Almacenar de forma separada las carnes de diferentes especies (avícolas, porcinos, bovinos) y de otros alimentos.
                                                            <br> •	Contar con soportes que garanticen que los productos provienen de plantas autorizadas e inspeccionadas por el Instituto Nacional de Vigilancia de Medicamentos y Alimentos (Invima).
                                                            <br> Los trámites de inscripción y solicitud de la autorización sanitaria se realizan a través de la web www.saludcapital.gov.co, en el enlace ‘Negocios Saludables, Negocios Rentables’.
                                                    </p>
                                                    <p style="text-align:justify; margin-left: 5px;"><span class="col-10-justify-content-center" style="padding:10px;"><img src="{{asset(("images/news/IconoMegusta.svg"))}}" class="rounded float-left"></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div>
                                                    <img src="{{asset("images/news/IconoMegusta.svg")}}" alt="megusta" class="iconoNew">
                                                </div>
                                                <div>
                                                    <img src="{{asset("images/news/IconoCompartir.svg")}}" alt="copmartir" class="iconoNew">
                                                </div>
                                                <div>
                                                    <img src="{{asset("images/news/IconoComentar.svg")}}" alt="comentar" class="iconoNew">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-6" >
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <section class="content">
                                <div class="content-inside">
                                    <div class="header-content row col-sm-12">
                                        <span style="text-align: justify;">
                                            ENCUENTRO DE FÁRMACO VIGILANCIA
                                        </span>
                                    </div>
                                    <div class="row cont-inside">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-10-justify-content-center" style="padding:10px;">
                                                    <p>Febrero 15 de 2019</p> <br>
                                                    <img  src="{{asset("images/news/encuentrofarmaco.jpg")}}" class="rounded float-left" style="margin-right: 10px;">
                                                    <p style="text-align:justify; margin-left: 5px;">
                                                            Con la participación de más de 200 asistentes se realizóen el auditorio principal de la Secretaría Distritalde Salud (SDS) el Encuentro de Fármacovigilancia, el evento estuvo dirigido a establecimientos farmacéuticos minoristas, el propósito fundamental fue brindar capacitación y sensibilizar a los asistentes en laimportancia del reportede eventosadversosrelacionados con el uso demedicamentos.
                                                            <br> Los farmaceutas minoritarios o las farmacias de barrio como también se les conoce, cobran gran importancia por su cercanía con la comunidad y el acontecer diario de enfermedades o brotes que se puedan presentar en este contexto, es por esto que la SDS busca mantener una comunicación constante para la capacitación en el manejo adecuado de la ficha de reporte de eventos que por venta, consumo o reacciones alérgicas puedan ocurrir.
                                                            <br> <em>“Todos en algún momento somos pacientes”o “todos en algún momento consumimos algún tipo de medicamento”</em>
                                                            <br> Estas fueron dos de las premisas del encuentro con las cuales se pretendía recordar el compromiso que las farmacias tienen con la salud y la atención al usuario, ya que en cualquier momento se puede estar del otro lado de la vitrina, es por esto que la Línea de Medicamentos Seguros tieneprogramadas diferentes jornadas de actualización teniendo en cuenta los tipos de establecimientos, grupos y gremios.

                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div>
                                                    <img src="{{asset("images/news/IconoMegusta.svg")}}" alt="megusta" class="iconoNew">
                                                </div>
                                                <div>
                                                    <img src="{{asset("images/news/IconoCompartir.svg")}}" alt="copmartir" class="iconoNew">
                                                </div>
                                                <div>
                                                    <img src="{{asset("images/news/IconoComentar.svg")}}" alt="comentar" class="iconoNew">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                    <div class="col-6" >
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <section class="content">
                                    <div class="content-inside">
                                        <div class="header-content row col-sm-12">
                                            <span style="text-align: justify;">
                                                OPERATIVO DE VIGILANCIA EN EXPENDIOS AVÍCOLAS DE CORABASTO
                                            </span>
                                        </div>
                                        <div class="row cont-inside">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-10-justify-content-center" style="padding:10px;">
                                                        <p>Febrero 15 de 2019</p> <br>
                                                        <img  src="{{asset("images/news/operativo.jpg")}}" class="rounded float-left" style="margin-right: 10px;">
                                                        <p style="text-align:justify; margin-left: 5px;">
                                                            Con el objetivo de verificar la  adecuada manipulación, almacenamiento y comercialización de alimentos en Bogotá,   la Secretaría Distrital de Salud el pasado mes de febrero realizóvisitade inspección, vigilancia y control(IVC) en los expendios cárnicos y procesadoras de productos avícolas del sector de Corabastos.
                                                            <br> En el operativo que inició a las tres de la mañana se inspeccionaron plantas de beneficio,  expendios y vehículos trasportadores de productos cárnicos, aplicando las medidas sanitarias de decomiso y desnaturalizaciónde los productos en uno de los establecimientos por mal almacenamiento, pues estaban expuestosa la manipulación directa del consumidor y al ambiente, en conjunto con la Policía Nacional se tomó la medida de sellamiento del mismo establecimiento. Esta actividad  fue coordinada  por la Secretaria Distrital de Salud, con la participación delINVIMA y las Subredes Integradas de Servicios de Salud Sur y Norte.
                                                            <br> La pérdida de la cadena de frío y la exposición  directa al consumidor, trae como consecuencia la contaminación de los productos cárnicos, afectando la salud delosBogotano. La Secretaria Distrital de Salud continuará realizando este tipo de operativos en diferentes puntos de la ciudad mediante la inspección, vigilancia y control de estos y otros alimentos, verificando su inocuidad y previniendo las enfermedades transmitidas por los mismos.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <div>
                                                        <img src="{{asset("images/news/IconoMegusta.svg")}}" alt="megusta" class="iconoNew">
                                                    </div>
                                                    <div>
                                                        <img src="{{asset("images/news/IconoCompartir.svg")}}" alt="copmartir" class="iconoNew">
                                                    </div>
                                                    <div>
                                                        <img src="{{asset("images/news/IconoComentar.svg")}}" alt="comentar" class="iconoNew">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="col-6" >
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <section class="content">
                                    <div class="content-inside">
                                        <div class="header-content row col-sm-12">
                                            <span style="text-align: justify;">
                                                RECONOCIMIENTO A 7 RESTAURANTES POPULARES POR SU CALIDAD Y CUMPLIMIENTO SANITARIO
                                            </span>
                                        </div>
                                        <div class="row cont-inside">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-10-justify-content-center" style="padding:10px;">
                                                        <p>Junio 27 de 2019</p> <br>
                                                        <img  src="{{asset("images/news/restaurantes.jpg")}}" style="width:203px; margin-right: 10px;" class="rounded float-left" >
                                                        <p style="text-align:justify; margin-left: 5px;">
                                                            las cosas secretas de lorena---La Secretaría Distrital de Salud (SDS) entrega hoy la distinción ‘Restaurantes1A’ a 7 establecimientos populares de la ciudad que se destacan por cumplir con las normas sanitarias y contar con menús balanceados y variados, buenos niveles de calidad y de atención y una adecuada manipulación de alimentos.
                                                            <br> Los restaurantes populares son reconocidos por ofrecer almuerzos ejecutivos o ‘corrientazos’. El programa ‘Restaurantes 1A’ busca que los propietarios implementen buenas prácticas sanitarias y de alimentación adecuada y así los clientes tengan confianza que los productos que consumen son de calidad y seguros para su salud.
                                                            <br> Para ser un ‘Restaurante 1A’, el establecimiento debe tener al menos un año de funcionamiento, vender como mínimo 30 servicios al día (desayunos, almuerzos, cenas), que el costo no sea mayor a $ 11.00, no ser de venta callejera ni estar ubicado en plazoletas de centros comerciales o pertenecer a una cadena de restaurantes y tener afiliados a los empleados al Sistema General de Seguridad Social en Salud.
                                                            <br> Así mismo, el reconocimiento se otorga a los restaurantes que cumplen con la normatividad sanitaria vigente para estos establecimientos, análisis microbiológico óptimo para jugos y ensaladas, platos balanceados nutricionalmente y con bajo contenido de sal y azúcar.
                                                            <br> Durante 2018, 25 restaurantes que cumplieron con todos los requerimientos fueron distinguidos por un año. Adicionalmente, la SDS les brindó asesoría técnica de gastronomía y de mercadeo para mejorar el servicio a sus clientes.
                                                            <br> El día de hoy 7 establecimientos se suman para recibir la distinción en el año 2019, esperando a final de este año realizar otro evento de distinción con los restaurantes que se encuentran en proceso.
                                                            <br>Los restaurantes a los que se les otorgará el reconocimiento como ‘Restaurantes 1A’ son:                                                     <img src="{{asset("images/news/iconomegusta.svg")}}" alt="megusta" class="iconoNew" /></p>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                    <div class="row justify-content-end">
                                        <div></div>
                                        <div>
                                        <img src="{{asset("images/news/conozcala.png")}}" alt="calidad aire">
                                        </div>
                                        <div></div>
                                       <div>
                                           <img src="{{asset("images/news/IconoCompartir.svg")}}" alt="copmartir" class="iconoNew">
                                       </div>
                                        <div></div>
                                            <div>
                                                <img src="{{asset("images/news/IconoCompartir.svg")}}" alt="copmartir" class="iconoNew">
                                              </div>
                                                    <div>
                                                        <img src="{{asset("images/news/IconoComentar.svg")}}" alt="comentar" class="iconoNew">
                                                    </div>
                                                </div>
                                            </div>
                                      </div>
                                 </div>
                             </div>
                       </div>
                    </div>
                </div>
           </div>
       </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
