@extends('layout')
@section('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/indicator.css")}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/secAmbiente.css")}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/questions.css")}}" />
@endsection
@section('contenido')
    <div class="wrapper">
        <div class="container-fluid">
        <div class="row mb-3">
                <div class="col-8">
                    <div class="row">
                        <div class=" d-inline-block" >
                            <img class="concept-title d-inline-block"  src="{{asset("images/contactenos/IconoPreguntasFrecuentes.svg")}}" alt="">
                        </div>
                        <div class="d-inline-block titulo-contenido px-5">
                            <label > Preguntas Frecuentes</label>
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
                <div class="col-8 mr-2 fluid-left">

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
                <div class="col-10 offset-1 mt-3">
                    <img class="d-block altura mt-2" src="{{asset("images/preguntas/LogoAireRuidoREM1.png")}}" width="50%" alt="" >
                    <div class="card">
                        <div class="card-header ask-aire">
                            Aire, Ruido y REM
                        </div>
                        <div class="card-body panel-questions">
                            <blockquote class="blockquote mb-0">
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-1">¿Qué se entiende por contaminación atmosférica? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-2">¿Qué efectos en la salud produce la contaminación del aire en Bogotá? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-3">¿Qué contaminantes se encuentran presentes en el aire? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-4">¿Qué es el índice de calidad del aire? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-5">¿Cuáles son las zonas de mayor contaminación en Bogotá? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-6">¿Qué se entiende por contaminación del aire extramural? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-7">¿Qué se entiende por olor ofensivo? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-8">¿Qué sustancias generan olores ofensivos? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-9">¿Qué efectos en la salud produce la contaminación del aire en Bogotá? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-10">¿Qué efectos en la salud pueden generar los malos olores? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-11">¿Qué es el humo ambiental de tabaco o HTA? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-12">¿Qué normativa en Colombia reglamenta el consumo de Tabaco? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-13">¿Se puede fumar en espacios cerrados en Bogotá? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-14">¿Se puede fumar en espacios como terrazas, jardines, balcones o aleros?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-15">¿Se pueden implementar zonas de fumadores?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-18">¿Qué es el ruido?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-19">¿Cómo se clasifica el ruido?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-20">¿Qué tipo de regulación existe en Bogotá para controlar y prevenir la contaminación auditiva?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-21">¿Qué efectos genera el ruido en la salud?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-22">¿Qué niveles sonoros se consideran aceptables para las personas?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-23">¿A quién debo acudir si el establecimiento realiza prácticas donde se afecta el espacio público o se superan los límites permitidos de ruido?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-24">¿Qué son los campos electromagnéticos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-25">¿Qué tipo de infraestructura eléctrica y de comunicaciones generan los campos electromagnéticos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-26">¿Qué efectos en salud generan los Campos Electromagnéticos (CEM)?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-27">¿Qué normatividad contempla la instalación de bases de telefonía celular en Bogotá?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-28">¿Qué riesgos para la salud pueden producir los teléfonos celulares y sus estaciones base?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-aire" data-response="ask-aire-29">¿Qué autoridades en el Distrito Capital vigilan el cumplimiento de la instalación de bases de telefonía celular?</p>
                            </blockquote>
                        </div>
                    </div>
                    <img class="d-block altura mt-3" src="{{asset("images/preguntas/LogoAlimentosSanos1.png")}}" width="50%" alt="" >
                    <div class="card">
                        <div class="card-header ask-alimentos">
                            Alimentos sanos y seguros
                        </div>
                        <div class="card-body panel-questions">
                            <blockquote class="blockquote mb-0">
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-alimentos" data-response="ask-alimentos-1">¿Qué competencia tiene la Secretaría Distrital de Salud en la vigilancia de alimentos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-alimentos" data-response="ask-alimentos-2">¿Dónde puedo quejarme si sospecho que los alimentos suministrados en un establecimiento comercial están alterados o contaminados; y/o se expenden bebidas alcohólicas falsificadas o adulteradas?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-alimentos" data-response="ask-alimentos-3">¿Dónde puedo obtener el Concepto Técnico Sanitario para mi establecimiento de alimentos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-alimentos" data-response="ask-alimentos-4">¿Qué debo hacer en caso de contraer una enfermedad transmitida por alimentos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-alimentos" data-response="ask-alimentos-5">¿Dónde me otorgan el permiso para el transporte de alimentos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-alimentos" data-response="ask-alimentos-6">¿Qué hacer en caso de la presencia de una enfermedad transmitida por alimentos (ETA)?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-alimentos" data-response="ask-alimentos-7">¿Qué requisitos se deben cumplir para ser un laboratorio de análisis fisicoquímico y microbiológico de alimentos autorizado que presta servicios a terceros?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-alimentos" data-response="ask-alimentos-8">¿Cómo inscribo mi establecimiento de expendio y almacenamiento de carnes y/o productos cárnicos comestibles?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-alimentos" data-response="ask-alimentos-9">¿Qué requisitos debo tener en cuenta para abrir un negocio de alimentos? </p>
                            </blockquote>
                        </div>
                    </div>

                    <img class="d-block altura mt-3" src="{{asset("images/preguntas/LogoAguaSaneamiento1.png")}}" width="50%" alt="" >
                    <div class="card">
                        <div class="card-header ask-agua">
                            Agua y saneamiento básico
                        </div>
                        <div class="card-body panel-questions">
                            <blockquote class="blockquote mb-0">
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-1">¿Qué establecimientos son vigilados por el componente de saneamiento básico?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-2">¿Cuáles son las enfermedades que pueden estar asociadas al consumo de agua?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-3">¿Cuáles son los índices de morbilidad y mortalidad de enfermedades que pueden estar asociadas al consumo de agua?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-4">¿Qué aspectos se evalúan en los juguetes? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-5">¿Qué normativa en Colombia reglamenta los hogares geriátricos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-6">¿Cuáles son los establecimientos vigilados por la Secretaria Distrital de Salud que tienen laboratorio de tanatopraxia o arreglo de cuerpos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-7">¿Cuántos acueductos comunitarios y otros sistemas de abastecimiento tiene Bogotá?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-8">¿Cuáles son los resultados de muestreos realizados para la medición de la calidad del agua de los acueductos comunitarios?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-9">¿La Secretaria de Salud da autorización para el traslado de cuerpos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-10">¿Cuáles son los resultados de muestreos realizados para la medición de la calidad del agua del acueducto de Bogotá?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-11">¿Qué requisitos se necesitan para abrir un hogar geriátrico en Bogotá D.C.? </p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-12">¿Cuándo debo solicitar la visita para obtener el concepto sanitario de un hogar geriátrico?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-13">¿Cuáles son los puntos que se monitorean en la red de distribución de la Empresa de Acueducto y Alcantarillado de Bogotá?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-agua" data-response="ask-agua-14">¿Cuál es la normatividad relacionada con el lavado de tanques?</p>
                            </blockquote>
                        </div>
                    </div>

                    <img class="d-block altura mt-3" src="{{asset("images/preguntas/LogoCambioClimatico1.png")}}" width="50%"alt="" >
                    <div class="card">
                        <div class="card-header ask-clima">
                            Cambio Climático
                        </div>
                        <div class="card-body panel-questions">
                            <blockquote class="blockquote mb-0">
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-clima" data-response="ask-clima-1"> ¿Qué repercusiones tiene el cambio climático en la salud?</p>
                            </blockquote>
                        </div>
                    </div>

                    <!-- <img class="d-block altura mt-3" src="{{asset("images/preguntas/LogoEspacioyMovilidad1.png")}}" width="50%" alt="" >
                    <div class="card">
                        <div class="card-header ask-espacio">
                            Espacio y Movilidad
                        </div>
                        <div class="card-body panel-questions">
                            <blockquote class="blockquote mb-0">

                            </blockquote>
                        </div>
                    </div> -->

                    <img class="d-block altura mt-3" src="{{asset("images/Preguntas/LogoMedicamentos1.png")}}" width="50%" alt="" >
                    <div class="card">
                        <div class="card-header ask-medicamentos">
                            Medicamentos y dispositivos médicos
                        </div>
                        <div class="card-body panel-questions">
                            <blockquote class="blockquote mb-0">
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-1">¿Cuál es la manera adecuada de descartar los medicamentos que ya no uso, están vencidos, me quedan sobrantes o tengo sus empaques y/o envases vacíos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-2">¿Qué NO debo depositar en los puntos azules?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-3">¿Dónde encuentro los contenedores o puntos azules?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-4">¿Qué requisitos existen para la apertura y funcionamiento de una tienda naturista?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-5">¿Qué requisitos existen para la apertura y funcionamiento de una Droguería?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-6">¿Qué es un evento adverso?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-7">¿Qué es un evento adverso serio?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-8">¿Qué es un evento adverso inesperado?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-9">¿Qué es un evento adverso no serio?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-10">¿Qué es un fármaco?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-11">¿Qué es un medicamento?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-12">¿Qué es un evento adverso a medicamento (EAM)?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-13">¿Cómo y a qué entidad se reportan los eventos adversos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-14">¿Qué es el uso adecuado de medicamentos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-15">¿Qué es automedicación?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-16">¿Qué es auto prescripción?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-17">¿Qué reportar?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-18">¿Por qué es importante reportar?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-19">¿Qué es una intoxicación con medicamentos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-20">¿Si en mi institución o establecimiento NO se presentaron eventos adversos a medicamentos debo reportarlo?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-21">¿Qué hacer en caso de una intoxicación con medicamentos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-22">¿Qué es un problema relacionado con medicamentos (PRM)?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-23">¿Qué es una Reacción Adversa a los Medicamentos (RAM)?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-medicamentos" data-response="ask-medicamentos-24">¿Qué se necesita para hacer un reporte de EAM (evento adverso a medicamento) y PRM (problema relacionado con medicamentos)?</p>
                            </blockquote>
                        </div>
                    </div>

                    <img class="d-block altura mt-3" src="{{asset("images/preguntas/LogoSeguridadQuimica1.png")}}" width="50%" alt="" >
                    <div class="card">
                        <div class="card-header ask-quimicos">
                            Productos Químicos, Industria y belleza
                        </div>
                        <div class="card-body panel-questions">
                            <blockquote class="blockquote mb-0">
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-1">¿Cuáles son los requisitos para la apertura y funcionamiento de una peluquería o sala de belleza?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-2">¿Cuáles son los requisitos para la apertura de un centro de estética que ofrezca servicios personales en estética?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-3">¿Qué productos cosméticos requieren notificación sanitaria obligatoria?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-4">¿Cuáles son los procedimientos, servicios o aparatología restringidos en el campo de la estética o cosmetología?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-5">¿Cuál es el mecanismo para la puesta de una queja relacionada con establecimientos de estética facial, corporal y ornamental?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-6">¿Cuáles son los procedimientos estéticos que deben ser habilitados y requieren la intervención de un médico?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-7">¿Qué información existe acerca de los aspectos de bioseguridad a tener en cuenta en un establecimiento que ofrezca servicios de belleza?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-8">¿Cuál es la diferencia entre servicios personales en estética y servicios de salud estética?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-9">¿En qué tipo de establecimientos se pueden ofrecer y realizar los servicios personales en estética?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-10">¿Cómo se puede verificar la legalidad o los registros sanitarios de los productos que se utilizan en el sector belleza?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-11">¿Cuáles son los requisitos para la apertura y funcionamiento de un establecimiento que quiera realizar únicamente servicios de masaje?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-12">¿Cuáles son los sectores productivos o los tipos de establecimientos vigilados por la línea de Seguridad Química de la Secretaría Distrital de Salud - SDS?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-13">¿Cómo puedo colocar una queja de un establecimiento de comercio donde se llevan a cabo procesos con sustancias químicas o maquinaria que pueda estar afectando la salud de la comunidad debido a los olores generados o ruido?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-14">¿La Secretaría Distrital de Salud verifica el adecuado almacenamiento de los aceites usados en los talleres de mecánica y demás establecimientos relacionados?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-15">¿Qué competencia tiene la Secretaría Distrital de Salud en lo relacionado con los problemas ambientales evidenciados durante una visita de inspección sanitaria, tales como emisiones, vertimientos o inadecuada gestión externa de residuos peligrosos?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-quimicos" data-response="ask-quimicos-16">¿Qué normativa sanitaria deben cumplir las lavanderías?</p>
                            </blockquote>
                        </div>
                    </div>

                    <img class="d-block altura mt-3" src="{{asset("images/preguntas/LOGO_ZOONOSIS1.png")}}" width="50%" alt="" >
                    <div class="card">
                        <div class="card-header ask-zoonosis">
                            Zoonosis y Vectores
                        </div>
                        <div class="card-body panel-questions">
                            <blockquote class="blockquote mb-0">
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-zoonosis" data-response="ask-zoonosis-1">¿Qué competencia tiene la Secretaría Distrital de Salud en la vigilancia de establecimientos que desarrollan actividades con o para animales?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-zoonosis" data-response="ask-zoonosis-2">¿Ante quién pongo quejas sobre el actuar de un profesional en medicina veterinaria?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-zoonosis" data-response="ask-zoonosis-3">¿A quién debo acudir si el animal de compañía adquirido en un establecimiento de comercio está enfermo o falleció?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-zoonosis" data-response="ask-zoonosis-4">¿Qué otra opción existe para adquirir un animal de compañía?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-zoonosis" data-response="ask-zoonosis-5">¿Cuáles son los deberes del propietario, tenedor o poseedor de un animal?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-zoonosis" data-response="ask-zoonosis-6">¿Cuáles son las conductas consideradas como crueles para con los animales y sancionadas por la ley?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-zoonosis" data-response="ask-zoonosis-7">¿A quién debo acudir si evidencio situaciones que atentan contra el bienestar de los animales?</p>
                                <p data-toggle="modal" data-target="#exampleModal" data-line="ask-zoonosis" data-response="ask-zoonosis-8">¿Cuáles son las instituciones encargadas de hacer los procedimientos adecuados cuando se presentan animales en vía pública?</p>
                            </blockquote>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="text-align: justify;">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>

<!-- Contenido de respuestas -->

<div hidden>
    <div id="ask-aire-1">
        La contaminación atmosférica se entiende como una o más sustancias químicas en concentraciones suficientemente elevadas en el aire que pueden tener efectos perjudiciales en la salud de los seres humanos, animales, vegetación o a los materiales. Tales sustancias o condiciones físicas (como el calor excesivo o el ruido) son consideradas contaminantes del aire .
    </div>
    <div id="ask-aire-2">
        <p> El conjunto de partículas y contaminantes tóxicos que permanecen en el aire generan una serie de efectos dañinos en la salud de las personas; siendo más vulnerables los menores de 14 años, los adultos mayores y los individuos con afecciones pulmonares. Los efectos en salud de los contaminantes más comunes presentes en la atmósfera son: </p>
        <p> • El material particulado PM10 y PM2,5 es responsable de la reducción de la función pulmonar dando como resultado la aparición de diversas enfermedades respiratorias como bronquitis crónica, exacerbación del asma, infecciones respiratorias y enfermedad pulmonar obstructiva crónica. Además, puede causar muerte prematura, cardiopatías y cáncer de pulmón. </p>
        <p> • El ozono puede causar diversos problemas respiratorios como asma y exacerbar las enfermedades pulmonares como el enfisema y la bronquitis. Además, produce irritación de los ojos, nariz y garganta y dolor de cabeza. </p>
        <p> • El Dióxido de nitrógeno (NO2) exacerba los síntomas de bronquitis en niños asmáticos. </p>
    </div>
    <div id="ask-aire-3">
        Los seis contaminantes más comunes del aire son: La contaminación por partículas o material particulado, el ozono a nivel del suelo, monóxido de carbono, óxidos de azufre, óxidos de nitrógeno y el plomo.
    </div>
    <div id="ask-aire-4">
        El Índice de Calidad del Aire (ICA) es un valor dentro del rango de 0 a 500 que permite categorizar los niveles de contaminación del aire y su posible afectación de los mismos para el estado de salud humana. Dicho valor se calcula utilizando la ecuación determinada por la metodología establecida por la US-EPA (Sigla en inglés de la Agencia de Protección Ambiental de los Estados Unidos) de la cantidad de contaminantes hallados en un período
        de exposición determinado a través de las estaciones de monitoreo que conforman un Sistema de Vigilancia de Calidad del Aire. Los niveles se miden de acuerdo a la normativa específica para cada uno de los contaminantes.
    </div>
    <div id="ask-aire-5">
        En el caso del PM10, las zonas con mayor concentración simulada anual se encuentran en el suroccidente de la ciudad, específicamente entre las localidades de Kennedy, Bosa, Ciudad Bolívar y Tunjuelito, con promedios anuales superiores a 60 μg/m³. En cuanto a las concentraciones anuales por localidades, se estimó que Kennedy es la localidad con el mayor promedio anual de concentraciones de PM10, el cual se encuentra por encima de 50 μg/m³, le siguen Fontibón, Bosa y Tunjuelito con promedios anuales de concentración entre 45 μg/m3 y 50 μg/m³. Para PM2.5, las zonas con mayor concentración simulada anual se encuentran en el suroccidente de la ciudad, específicamente entre las localidades de Kennedy, Bosa, Ciudad Bolívar y Tunjuelito, con promedios anuales superiores a 27,5 μg/m³.  En cuanto a las concentraciones anuales por localidades, se estimó que Kennedy es la localidad con el mayor promedio anual de concentraciones de PM2.5, el cual se encuentra entre de 22,5 y 25,0 μg/m³, le siguen Bosa y Tunjuelito con promedios anuales de concentración entre 20,0 μg/m3 y 22,5 μg/m³ .
    </div>
    <div id="ask-aire-6">
        Hace referencia a la contaminación del aire en espacios al aire libre, a cielo abierto, es decir, por fuera de cualquier infraestructura que comprenda techo y paredes. La contaminación del aire extramural ocurre cuando los niveles de concentración de los contaminantes medidos en el aire, indican que son tan elevados que logran impactar negativamente la salud humana y/o el medio ambiente. El término contaminación del aire extramural se relaciona con la mala calidad del aire urbano, de las ciudades o en sus alrededores.
    </div>
    <div id="ask-aire-7">
        Hace referencia a la contaminación del aire en espacios cerrados, interiores o que comprenden infraestructura de techo y paredes sin importar su tipo de material. Por lo general la contaminación intramural tiene como causa el empleo de tecnologías rudimentarias que ocasionan procesos de combustión ineficientes en actividades como cocinar principalmente, alumbrar y obtener calefacción. Otra causa de contaminación del aire intramural tiene que ver con el uso de sustancias químicas presentes en productos de
        aseo y limpieza o en componentes de los materiales de construcción que también afectan la salud.
    </div>
    <div id="ask-aire-8">
        Es el olor generado por sustancias o actividades industriales, comerciales o de servicio, que produce fastidio, aunque no cause daño a la salud humana.
    </div>
    <div id="ask-aire-9">
        Azufre Total Reducido (TRS), Sulfuro de hidrógeno (H 2 S), Amoniaco (NH 3) Ácido Sulfhídrico, Sulfuro de dimetilo, Dicloruro de azufre, Mercaptanos, Amoniaco, Metilamina, Acetaldehido, Ácido Butirico, Etilacrilato, Clorofenol, Estireno, Trimetilamina, Índole, Skatole.
    </div>
    <div id="ask-aire-10">
        Pese a que no se ha podido establecer una relación directa entre los malos olores y la toxicidad que pueda afectar la salud humana, sí se puede determinar un efecto de estímulo – respuesta dada las reacciones fisiológicas del sistema nervioso central o periférico ante la percepción de malos olores. Las reacciones pueden ir desde la simple sensación de desagrado hasta la presencia de cefalea (dolores de cabeza), mareos, inapetencia o irritabilidad; esto dependiendo de factores individuales o intrínsecos y/ o el tiempo de exposición a los malos olores. Al exponerse continúa o crónicamente a un mismo olor, se puede experimentar un fenómeno conocido como fatiga olfativa, la cual puede ser de corto o largo plazo según el tiempo que se requiera para recuperar la sensibilidad olfativa.
    </div>
    <div id="ask-aire-11">
        Se conoce como Humo de Tabaco Ambiental (H.T.A.) a la emisión gaseosa exhalada por los pulmones de quien fuma o vapea, y al humo que se genera al tiempo que se enciende o consume la sustancia al fumar. El humo del tabaco contiene más de 4000 productos químicos, de los cuales se sabe que al menos 250 son nocivos, y más de 50 causan cáncer, estar expuesto a este humo se conoce como fumar pasivamente y al no existir niveles seguros de exposición se afirma que aún en cantidades bajas del contaminante producirían
        efectos nocivos a la salud, siendo la tercera causa prevenible de muerte, después de fumar activamente y del alcoholismo.
    </div>
    <div id="ask-aire-12">
        El tabaco es una de las mayores amenazas para la salud pública que ha tenido que afrontar el mundo. Mata a más de 7 millones de personas al año, de las cuales más de 6 millones son consumidores directos y alrededor de 890.000 son no fumadores expuestos al humo ajeno. El consumo de tabaco es un factor de riesgo importante de cardiopatía coronaria, accidente cerebrovascular y vasculopatía periférica. A pesar de que se conocen bien los daños para la salud cardiaca que provoca el tabaco y de la disponibilidad de soluciones para reducir la morbimortalidad que ocasiona, amplios sectores de la población desconocen que es una de las principales causas de las enfermedades cardiovasculares.
    </div>
    <div id="ask-aire-13">
        En cuanto al control sobre el consumo de tabaco, en Colombia se cuenta con una variedad de políticas que regulan e implementan medidas de control sobre el mercado en el ámbito nacional, con el fin de reducir de manera continua y sustancial la prevalencia del consumo de tabaco; En 2006 se adopta el Convenio Marco de la OMS mediante la Ley 1109 de 2006, sin embargo es La Ley 1335 del 2009 la que consolida y engloba en gran medida las políticas de control de tabaco, y precisamente señala las <em>"Disposiciones por medio de las cuales se previenen daños a la salud de los menores de edad, la población no fumadora y se estipulan políticas públicas para la prevención del consumo del tabaco y el abandono de la dependencia del tabaco del fumador y sus derivados en la población colombiana"</em>
    </div>
    <div id="ask-aire-14">
        En cuanto al control sobre el consumo de tabaco, en Colombia se cuenta con una variedad de políticas que regulan e implementan medidas de control sobre el mercado en el ámbito nacional, con el fin de reducir de manera continua y sustancial la prevalencia del consumo de tabaco; En 2006 se adopta el Convenio Marco de la OMS mediante la Ley 1109 de 2006, sin embargo es La Ley 1335 del 2009 la que consolida y engloba en gran medida las políticas de control de tabaco, y precisamente señala las <em>"Disposiciones por medio de las cuales se previenen daños a la salud de los menores de edad, la población no fumadora y se estipulan políticas públicas para la prevención del consumo del tabaco y el abandono de la dependencia del tabaco del fumador y sus derivados en la población colombiana"</em>.
        <br>
        Por otro lado, el control policivo frente al consumo de tabaco, es regulado mediante la Ley 1801 de 2016, conocido como el código nacional de policía y convivencia, en el cual se sanciona el consumo en lugares no autorizados y la venta a menores de edad.
    </div>
    <div id="ask-aire-15">
        No está permitido fumar en espacios cerrados abiertos al público, así estos delimiten un   área de fumadores con aislamiento total del establecimiento e incluyan extractores en espacios cerrados (Artículo 19, ley 1335 de 2009), de modo que el consumo de tabaco en dichas áreas no es autorizado y es susceptible de ser sancionado mediante lo dispuesto en la ley 1801 de 2016. La creación de zonas de fumadores va en contra de las medidas de salud pública de promoción y prevención frente al no consumo de tabaco, así como las medidas relativas a la cesación tabáquica, que se establecen en el Convenio Marco para el Control de Tabaco (CMCT), del cual Colombia hace parte desde el año 2008.
    </div>
    <div id="ask-aire-16">
        No. Según lo descrito en el Artículo 19 de la Ley 1335 de 2009, se prohíbe el consumo de tabaco y sus derivados en los siguientes lugares: en áreas cerradas de los lugares de trabajo y/o de los lugares públicos, tales como bares, restaurantes, centros comerciales, tiendas, ferias, festivales, parques, estadios, cafeterías, discotecas, cibercafés, hoteles, ferias, pubs, casinos, zonas comunales y áreas de espera, en donde se realicen eventos de manera masiva, entre otras.
    </div>
    <div id="ask-aire-17">
        No. La expedición de la Ley 1335 de 2009, se encuentra sustentada en la garantía efectiva del derecho a la salud de las personas, dicha norma fue diseñada con el fin de proteger a la población no fumadora y a los menores de edad, así como para desestimular el consumo de tabaco y contribuir al abandono de la dependencia del fumador. En este sentido, resulta relevante referir el artículo 19 de la Ley 1335 de 2009, en el cual se prohíbe el consumo de productos de tabaco, en los lugares señalados dentro del artículo en mención.
    </div>
    <div id="ask-aire-18">
        Aquel sonido complejo que tiene numerosas fluctuaciones aleatorias, distribuidas a lo largo de un amplio margen de frecuencias, por lo cual se determina como un sonido no deseado por ser de carácter desarmónico o estridente.
    </div>
    <div id="ask-aire-19">
       <p>  Se puede clasificar como: <br> </p>
       <p>  ●	Ruido continuo: Se produce por una fuente que opera del mismo modo sin interrupción.  </p>
       <p>  ●	Ruido Intermitente: Se genera por ciclos donde el nivel aumenta y disminuye rápidamente, por ejemplo: un avión.  </p>
       <p>  ●	Ruido Implosivo: Un ruido de impacto como una explosión. </p>
       <p>  ●	Ruido de baja frecuencia: posee una energía acústica significante en el margen de frecuencias de 8 a 100 Hz, típico en motores diésel de trenes, barcos y plantas de energía </p>
    </div>
    <div id="ask-aire-20">
        Se cuenta con la Resolución 627 de 2006 la cual establece las disposiciones legales y técnicas frente a la emisión de ruido y ruido ambiental, permitiendo a las autoridades ambientales la elaboración de mapas de ruido, vigilar los niveles de emisión de ruido, sectorizar y estandarizar los niveles máximos permitidos tanto en el día como en la noche, así mismo, la Ley 768 de 2002 establece la elaboración y ejecución de planes de descontaminación por ruido.
    </div>
    <div id="ask-aire-21">
        Los aspectos a considerar para la afectación de la salud por el ruido son: La duración, el tiempo y la frecuencia. Los principales efectos en salud son los auditivos como la discapacidad, dolor y fatiga auditiva, mientras que los extraditados como la perturbación del sueño, efectos cardiovasculares, respuestas hormonales, rendimiento laboral y escolar, molestia, interferencia con el comportamiento e interferencia con la comunicación oral.
    </div>
    <div id="ask-aire-22">
        Un nivel perjudicial de ruido puede ser, por ejemplo, la exposición a más de 85 decibelios (dB) durante ocho horas o 100 dB durante 15 minutos
    </div>
    <div id="ask-aire-23">
        Cuando los establecimientos abiertos al público o en eventos privados se producen ruido excesivo que afecta la tranquilidad y genera molestias a las personas, la policía está autorizada para desactivar la fuente generadora de ruido, además podrá sellar
        temporalmente y definitivamente los establecimientos que excedan los niveles de ruido permitidos según la normatividad vigente.
    </div>
    <div id="ask-aire-24">
        <p> Es el campo de fuerza que se crea en torno a una corriente eléctrica; está compuesto por dos campos eléctrico y magnético.  <br> </p>
        <p> ●	Los campos eléctricos se originan de la diferencia de voltaje: entre más elevado sea el voltaje, más fuerte será el campo resultante.  </p>
        <p> ●	Los campos magnéticos se originan en las corrientes eléctricas: una corriente más fuerte da como resultado un campo más fuerte </p>
    </div>
    <div id="ask-aire-25">
        La electricidad que surge de cualquier toma de corriente lleva asociados campos electromagnéticos de frecuencia baja, dentro de los que se encuentran redes eléctricas, de alta, media o baja tensión, transformadores eléctricos, estaciones y subestaciones de energía. Por otro lado, diversos tipos de ondas de radio de frecuencia más alta se utilizan para transmitir información, ya sea por medio de antenas de televisión, estaciones de radio o estaciones base de telefonía móvil, así como las subestaciones de energía, transformadores y líneas de tensión,  aquí se pueden catalogar las estaciones radioeléctricas, estaciones base de telecomunicación móvil, entre otros.
    </div>
    <div id="ask-aire-26">
        Algunas personas han atribuido un conjunto difuso de síntomas a la exposición de baja intensidad a campos electromagnéticos en el hogar. Los síntomas notificados incluyen dolores de cabeza, ansiedad, náuseas, fatiga, pérdida de la libido, enfermedad de depresión y conducta suicida. En la actualidad, la evidencia científica no admite la existencia de una asociación causal entre la aparición de esta sintomatología y la exposición a campos electromagnéticos. Al menos, alguno de estos problemas puede deberse a otros factores medioambientales como el ruido, la contaminación del aire o factores propios y genéticos del individuo.
    </div>
    <div id="ask-aire-27">
        En Bogotá se cuenta con el Acuerdo 339 de 2008 y el Decreto 397 de 2017, que dicta los parámetros para la ubicación de antenas de telecomunicaciones y la estructura que las soporta.
    </div>
    <div id="ask-aire-28">
        Los teléfonos móviles nos permiten estar permanentemente localizables. Estos dispositivos de ondas de radio de baja potencia transmiten y reciben señales de una red de estaciones base de baja potencia fija; cada estación base proporciona cobertura a una zona determinada. Dependiendo del número de llamadas que gestionan, la distancia entre las estaciones base pueden ser desde sólo unos pocos cientos de metros en las grandes ciudades a varios kilómetros en las zonas rurales. Las estaciones base de telefonía móvil normalmente se instalan en lo alto de edificios o en torres, a alturas de entre 15 y 50 metros. Los niveles de las transmisiones desde una determinada estación base son variables y dependen del número de llamadas y de la distancia a la estación base de quienes emiten las llamadas. Las antenas emiten un haz muy estrecho de ondas de radio que se propaga de forma casi paralela al suelo. En consecuencia, al nivel del suelo y en regiones que normalmente son de acceso público las intensidades de los campos de radiofrecuencia son muy inferiores a los niveles considerados peligrosos. Sólo se superarían los niveles recomendados si una persona se acercara a menos de un metro o dos de las antenas. Hasta que los teléfonos móviles empezaron a usarse de forma generalizada, la población estaba expuesta principalmente a emisiones de radiofrecuencia de estaciones de radio y televisión. Incluso hoy en día, las torres de telefonía apenas aumentan el nivel de exposición total que experimentamos, ya que la intensidad de las señales en los lugares de acceso público es normalmente similar o inferior a la de las estaciones de radio y televisión distantes. Sin embargo, el usuario de un teléfono móvil está expuesto a campos de radiofrecuencia mucho más intensos que los del entorno general. Los teléfonos móviles se utilizan a muy poca distancia de la cabeza; por lo tanto, en lugar de estudiar el efecto del calentamiento en todo el cuerpo, se debe determinar la distribución de la energía que absorbe la cabeza del usuario. Se ha calculado mediante complejos modelos y mediciones computarizadas basadas en modelos de cabezas que, al parecer, la energía absorbida procedente de un teléfono móvil no supera los límites actualmente recomendados
    </div>
    <div id="ask-aire-29">
        La administración distrital a través la Secretaría Distrital de Planeación, se encarga de vigilar la correcta localización, instalación y cumplimiento de las normas urbanísticas, arquitectónicas y técnicas de estaciones radioeléctricas utilizadas en la prestación de los servicios públicos de TIC en Bogotá D.C. Así mismo, la autoridad ambiental definirá la autorización respecto a las necesidades del plan de manejo ambiental que esta requiera en un polígono que encierra el área de influencia, con fines de mitigación y restauración ecológica, respecto a los posibles efectos que sobre el área aledaña pudieran producirse y
        en cuanto a la instalación en espacio público le corresponde al Departamento Administrativo de la Defensoría del Espacio Público – DADEP, generar el concepto técnico correspondiente.
    </div>

    <div id="ask-alimentos-1">
        La Secretaría Distrital de Salud, a través de las Subredes Integradas de Servicios de Salud, realiza la inspección, vigilancia y control sanitario, en los establecimientos de comercio que preparan, almacenan, comercializan y expenden alimentos, con el fin de verificar el cumplimiento de la normatividad sanitaria vigente. Como resultado de esta vigilancia se emite concepto sanitario al establecimiento acorde a las condiciones sanitarias evidenciadas en el momento de la visita.
    </div>
    <div id="ask-alimentos-2">
        <p>Puede acercarse a las Subredes Integradas de Servicios de Salud, de acuerdo a la localidad como se establece a continuación:</p>
        <table style="border-collapse: collapse;" border="1">
            <thead>
                <tr >
                    <td width="123" >
                        <p><strong>SUBRED</strong></p>
                    </td>
                    <td width="123">
                        <p><strong>LOCALIDAD</strong></p>
                    </td>
                    <td width="123">
                        <p><strong>GERENTE</strong></p>
                    </td>
                    <td width="211">
                        <p><strong>DIRECCION&nbsp;Y TELEFONO</strong></p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="4" width="123">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Sur Occidente</p>
                    </td>
                    <td width="123">
                        <p>Fontib&oacute;n</p>
                    </td>
                    <td rowspan="4" width="123">
                        <p>&nbsp;</p>
                        <p>Victoria Eugenia Mart&iacute;nez Puello.</p>
                    </td>
                    <td rowspan="4" width="211">
                        <p>&nbsp;</p>
                        <p>Correspondencia : Calle 9 # 39-46</p>
                        <p>Tel&eacute;fono: 4860033 ext 10302</p>
                        <p>Vigilancia sanitaria Oficina</p>
                        <p>Kr 106 # 15 A-36</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Bosa</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Kennedy</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Puente Aranda</p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="6" width="123">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Centro Oriente</p>
                     </td>
                    <td width="123">
                        <p>Rafael Uribe</p>
                    </td>
                    <td rowspan="6" width="123">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Martha Yolanda Ruiz Vald&eacute;s</p>
                    </td>
                    <td rowspan="6" width="211">
                        <p>&nbsp;</p>
                        <p>Correspondencia Diagonal 34 # 5-43</p>
                        <p>Correspondencia y Oficina de Vigilancia Calle 22 Sur # 8 A-58</p>
                        <p>Oficina de Vigilancia Tel&eacute;fono 2091480 ext 9020</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Antonio Nari&ntilde;o</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Candelaria</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Los M&aacute;rtires</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Santaf&eacute;</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>San Crist&oacute;bal</p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="4" width="123">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Sur</p>
                    </td>
                    <td width="123">
                        <p>Ciudad Bol&iacute;var</p>
                    </td>
                    <td rowspan="4" width="123">
                        <p>&nbsp;</p>
                        <p>Claudia Helena Prieto Vanegas</p>
                    </td>
                    <td rowspan="4" width="211">
                        <p>&nbsp;</p>
                        <p>Calle 71 Sur&nbsp; # 18 I -86 Barrio Vista Hermosa</p>
                        <p>Telefono 7300000 ext 72415</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Usme</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Tunjuelito</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Nazaret</p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="6" width="123">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Norte</p>
                    </td>
                    <td width="123">
                        <p>Usaqu&eacute;n</p>
                    </td>
                    <td rowspan="6" width="123">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Yidney Isabel Garc&iacute;a Rodr&iacute;guez</p>
                    </td>
                    <td rowspan="6" width="211">
                        <p>&nbsp;</p>
                        <p>Oficina Vigilancia en Salud Ambiental Calle 94 C # 57-40</p>
                        <p>Tel cel 3003238661</p>
                        <p>&nbsp;</p>
                        <p>Correspondencia Calle 66 # 15-41 Ventanilla de radicaci&oacute;n</p>
                        <p>Atenci&oacute;n al usuario 3499080</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Chapinero</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Barrios Unidos</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Teusaquillo</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Suba</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Engativ&aacute;</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p>En las  Subredes Integradas de Servicios de Salud  también puede tramitar:</p>
        <p> 	Atención y recepción de quejas</p>
        <p> 	Solicitud de visitas a establecimientos para la emisión de conceptos sanitarios </p>
        <p> 	Inspección a vehículos de alimentos  </p>
        <p> 	Inspección a vehículos de carnes y productos cárnicos comestibles   </p>
        <p> 	Todas las actividades e inquietudes relacionadas con Salud Pública </p>
    </div>
    <div id="ask-alimentos-3">
        <p> Es importante que tenga en cuenta que si la actividad comercial que desarrolla el establecimiento es de proceso y/o distribución de alimentos o planta de sacrificio de animales de especies mayores o menores se comunique con el Instituto de Vigilancia de Alimentos y Medicamentos INVIMA quien tiene la competencia de otorgar el concepto Técnico Sanitario PBX 2948700. </p>
        <p> Si la actividad comercial que se realiza en el establecimiento es de preparación, almacenamiento, comercialización o expendio de alimentos, debe dirigirse a la Subred integrada de servicios de salud, de acuerdo con la localidad  donde se encuentra ubicado el establecimiento y radicar su solicitud  </p>
        <table style="border-collapse: collapse;" border="1">
            <thead>
                <tr>
                    <td width="123">
                        <p><strong>SUBRED</strong></p>
                    </td>
                    <td width="123">
                        <p><strong>LOCALIDAD</strong></p>
                    </td>
                    <td width="123">
                        <p><strong>GERENTE</strong></p>
                    </td>
                    <td width="211">
                        <p><strong>DIRECCION&nbsp;Y TELEFONO</strong></p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="4" width="123">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Sur Occidente</p>
                    </td>
                    <td width="123">
                        <p>Fontib&oacute;n</p>
                    </td>
                    <td rowspan="4" width="123">
                        <p>&nbsp;</p>
                        <p>Victoria Eugenia Mart&iacute;nez Puello.</p>
                    </td>
                    <td rowspan="4" width="211">
                        <p>&nbsp;</p>
                        <p>Correspondencia : Calle 9 # 39-46</p>
                        <p>Tel&eacute;fono: 4860033 ext 10302</p>
                        <p>Vigilancia sanitaria Oficina</p>
                        <p>Kr 106 # 15 A-36</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Bosa</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Kennedy</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Puente Aranda</p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="6" width="123">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Centro Oriente</p>
                    </td>
                    <td width="123">
                        <p>Rafael Uribe</p>
                    </td>
                    <td rowspan="6" width="123">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Martha Yolanda Ruiz Vald&eacute;s</p>
                    </td>
                    <td rowspan="6" width="211">
                        <p>&nbsp;</p>
                        <p>Correspondencia Diagonal 34 # 5-43</p>
                        <p>Correspondencia y Oficina de Vigilancia Calle 22 Sur # 8 A-58</p>
                        <p>Oficina de Vigilancia Tel&eacute;fono 2091480 ext 9020</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Antonio Nari&ntilde;o</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Candelaria</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Los M&aacute;rtires</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Santaf&eacute;</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>San Crist&oacute;bal</p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="4" width="123">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Sur</p>
                    </td>
                    <td width="123">
                        <p>Ciudad Bol&iacute;var</p>
                    </td>
                    <td rowspan="4" width="123">
                        <p>&nbsp;</p>
                        <p>Claudia Helena Prieto Vanegas</p>
                    </td>
                    <td rowspan="4" width="211">
                        <p>&nbsp;</p>
                        <p>Calle 71 Sur&nbsp; # 18 I -86 Barrio Vista Hermosa</p>
                        <p>Telefono 7300000 ext 72415</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Usme</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        Tunjuelito</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        Nazaret</p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="6" width="123">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Norte</p>
                    </td>
                    <td width="123">
                        <p>Usaqu&eacute;n</p>
                    </td>
                    <td rowspan="6" width="123">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Yidney Isabel Garc&iacute;a Rodr&iacute;guez</p>
                    </td>
                    <td rowspan="6" width="211">
                        <p>&nbsp;</p>
                        <p>Oficina Vigilancia en Salud Ambiental Calle 94 C # 57-40</p>
                        <p>Tel cel 3003238661</p>
                        <p>&nbsp;</p>
                        <p>Correspondencia Calle 66 # 15-41 Ventanilla de radicaci&oacute;n</p>
                        <p>Atenci&oacute;n al usuario 3499080</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Chapinero</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Barrios Unidos</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Teusaquillo</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Suba</p>
                    </td>
                </tr>
                <tr>
                    <td width="123">
                        <p>Engativ&aacute;</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="ask-alimentos-4">
        <p> •	Si sospecha que usted o su familia tienen una enfermedad transmitida por alimentos debe asistir de inmediato a su servicio médico de urgencias. </p>
        <p> •	Si tiene restos de los alimentos consumidos, no los bote, debe conservarlos en la nevera. Estos pueden ser necesarios para analizarlos en el laboratorio. </p>
        <p> •	Si los alimentos fueron consumidos en un establecimiento comercial debe anotar el nombre y dirección del lugar. </p>
    </div>
    <div id="ask-alimentos-5">
        <p> La Secretaría Distrital de Salud se permite informar que, a partir del 1 de abril de 2015, la inspección a vehículos transportadores de alimentos y bebidas en el Distrito Capital, se realizará únicamente en las Subredes Integradas de Servicios de Salud que a continuación se detallan: </p>
        <p> <b> Subred Sur Occidente </b> </p>
        <p> USS Fontibón: Dirección: carrera 106 No. 15 A - 32 piso 3 detrás del Éxito de Zona Franca.  </p>
        <p> Teléfono: 4860033 Ext. 8520 </p>
        <p> USS Pablo VI Bosa: Dirección: calle 68 B sur No. 78 H – 51 piso 2 a dos cuadras del cementerio de Bosa, barrio San Pablo Primer Sector.  </p>
        <p> Teléfono: 4860033 Ext. 8520 - 7799800 Ext. 20120 / 20150 </p>
        <p> <b> Subred Centro Oriente </b> </p>
        <p> USS Centro Oriente: Dirección: carrera 7 No. 30D – 44 sur o calle 22 8A – 58 sur. </p>
        <p> Teléfono: 2091480 Ext. 9020 </p>
        <p> <b> Subred Norte </b> </p>
        <p> USS Usaquén: Dirección: calle 165 No. 7 – 38 piso 1 UPA Servita, al lado del Hospital Simón Bolívar, barrio Servita.  </p>
        <p> Teléfono: 6719760 </p>
        <p> Es importante recordar:</p>
        <p> Para que se realice la inspección del vehículo, debe ir cargado, excepto cuando va a solicitar por primera vez la inspección.</p>
        <p> Debe presentar la siguiente documentación: </p>
        <p> Fotocopia de la tarjeta de propiedad del vehículo. </p>
        <p> Original y copia de: certificación de capacitación en el tema de manejo higiénico de alimentos y certificado médico de las personas manipuladoras de alimentos en vehículo.</p>
        <p> Para más información sobre el tema dirigirlas a los correos: </p>
        <p> mhernandez@saludcapital.gov.co, mcpsanchez@saludcapital.gov.co</p>

    </div>
    <div id="ask-alimentos-6">
        <p> Las ETA son producidas por ingerir accidental, incidental o intencionalmente de agua o alimentos contaminados, mal preparados o deficientemente conservados, generando cantidades suficientes de agentes químicos y microbiológicos (o sus toxinas), que afectan al organismo, debido a la deficiencia de Buenas Prácticas de Manufactura BPM en el proceso, preparación elaboración, transporte o comercialización de los alimentos y agua. </p>
        <p> Cuando la enfermedad se origina al consumir un alimento que contiene gran cantidad de bacterias, virus, hongos, parásito, se reproducen en el cuerpo, ocasionando náuseas, vómitos, dolor de cabeza, diarrea, fiebre y otros síntomas como vértigo, sudoración profusa, asfixia, poca coordinación de los movimientos y a veces convulsiones debido a que estas sustancias pueden atacar el sistema nervioso. </p>
        <p> La intoxicación alimentaria se produce también cuando se consumen alimentos contaminados con sustancias químicas como plaguicidas, herbicidas etc. </p>
        <p> <b>Recomendaciones para un adecuado manejo de los alimentos</b>  (Común para todos los alimentos)</p>
        <p> <b>Es importante tener en cuenta:</b>  </p>
        <p> •	Lavarse las manos antes de entrar en contacto con los alimentos y después de ir al baño.</p>
        <p> •	Lavar muy bien los utensilios y equipos que se vayan a utilizar.</p>
        <p> •	Cocinar bien los alimentos y no prepararlos con demasiada anticipación a su consumo.</p>
        <p> •	Usar agua potable.</p>
        <p> •	Los alimentos preparados o precocidos deben ser refrigerados si no se consumen en un periodo corto de tiempo.</p>
        <p> •	Evitar el contacto de alimentos crudos con cocidos durante la preparación y/o almacenamiento.</p>
        <p> •	Los pescados, mariscos, carnes, y pulpa de fruta se deben almacenar a temperatura de congelación.</p>
        <p> •	Los derivados lácteos, huevos, frutas y verduras deben almacenarse a temperatura de refrigeración.</p>
        <p> •	No almacenar alimentos junto a combustibles, insecticidas, detergentes, etc.</p>
        <p> •	Los alimentos deben almacenarse protegidos de insectos, roedores, polvo, etc.</p>
        <p> •	Almacenar las basuras en recipientes con tapa o bolsas cerradas.</p>
        <p> •	No permitir la presencia de animales en sitios de elaboración de alimentos.</p>
        <p> •	Evite al máximo comprar en ventas ambulantes.</p>
        <p> •	Nunca compre alimentos que sospeche hayan sido transportados junto con productos peligrosos: venenos, plaguicidas, desperdicios, abonos.</p>
        <p> No olvide: </p>
        <p> En lo posible mantener refrigerados los alimentos sospechosos, para que puedan ser analizados posteriormente por la autoridad Sanitaria. </p>
        <p> Llame inmediatamente a la <b>Línea 123</b>  (urgencias en salud). </p>

    </div>
    <div id="ask-alimentos-7">
        <p> Lo más importante es recordar que el consumo de bebidas alcohólicas debe hacerse con moderación. El consumo excesivo de alcohol etílico ocasiona efectos dañinos sobre la salud de las personas. Puede llevar al alcoholismo y hasta causar la muerte por consumo crónico. </p>
        <p> Cuando se consumen bebidas alcohólicas adulteradas o falsificadas, aumentan los riesgos sobre la salud. Por lo tanto, es importante verificar la autenticidad de la bebida antes de ingerirla. Se deben revisar los siguientes aspectos:</p>
            <p> •	En el rotulado verificar el nombre del producto, que aparezca la empresa fabricante o importadora responsable del producto, con nombre y ubicación, y que tenga escrito el número de Registro Sanitario. </p>
            <p> •	Verificar que el contenido neto declarado en el rotulo o etiqueta coincida con la capacidad del envase adquirido. Así mismo, debe expresar claramente el grado alcohólico contenido. </p>
            <p> •	El estado de envases, empaques, etiquetas, contra-etiquetas, tapas, bandas, sellos de seguridad y estampillas deben encontrarse en buenas condiciones; el deterioro, rotura, oxidación, destrucción, obviamente ya hace parte al producto no aceptable. </p>
            <p> •	Observar que la etiqueta tenga bien definidas sus características litográficas y no presente deterioro. </p>
            <p> •	Observar cuidadosamente la tapa, tratar de verificar que sea autentica (no debe perder su pintura fácilmente, por ejemplo, con la uña). La botella debe estar perfectamente cerrada y la banda de seguridad intacta. </p>
            <p> •	Al momento de abrir la botella, en el caso de que traiga dispensador, verificar su estado. Cualquier anomalía como perforaciones, es evidencia de una posible adulteración </p>
            <p> •	Verificar la presencia de estampilla de impuestos en las bebidas nacionales. Adicionalmente la de aduana en los importados. Esto aumenta la seguridad acerca de la procedencia autentica de la bebida. </p>
            <p> •	Posteriormente, deben ser evaluadas las características sensoriales como aspecto del producto, apariencia, color, etc. Si se observa turbidez, presencia de partículas extrañas en suspensión, elementos extraños (vidrios, elementos metálicos, etc.), separación de fases, merma en el volumen nominal, cambio de coloración, indican posibles alteraciones y/o fraudulencia del producto. </p>
            <p> •	En el caso de los licores deben tener aspecto brillante, color característico y estar limpios de partículas en suspensión. </p>
            <p> •	Deben tenerse precauciones especiales al ingerir bebidas alcohólicas en, establecimientos abiertos al público, tales como bares, tabernas, discotecas, etc. </p>
            <p> •	Debe exigirse la botella cerrada para revisión, antes de ingerir cualquier trago. </p>
            <p> •	Por ningún motivo se debe ofrecer bebidas alcohólicas a los niños, en determinadas condiciones, un solo trago puede causar trastornos graves en la salud del menor. </p>
            <p> No olvide: </p>
            <p> Al momento del consumo: Verifique el aroma y sabor de la bebida. Ante cualquier anormalidad absténgase de consumirlo. </p>
            <p> El consumo de bebidas alcohólicas está contraindicado cuando se consumen determinados medicamentos. Verifique esta información en el empaque del medicamento o directamente con su médico. </p>
            <p> El consumo de bebidas alcohólicas está contraindicado con algunas actividades cotidianas como el conducir; esta combinación pone en peligro la salud y la vida del ciudadano. </p>
            <p> Tenga en cuenta que en todo recipiente de bebida alcohólica nacional o extranjera deberá imprimirse en el extremo inferior de la etiqueta y ocupando al menos la décima parte de ella la leyenda: " El exceso de alcohol es perjudicial para la salud " conforme a lo dispuesto en el artículo 16 de la Ley 30 de 1986. </p>
    </div>
    <div id="ask-alimentos-8">
        Los Laboratorios de análisis fisicoquímico y microbiológico de alimentos interesados deben cumplir con los estándares de calidad relacionados en la Resolución 1619 de 2015 del Ministerio de Salud y Protección Social.
    </div>
    <div id="ask-alimentos-9">
        <p>  Las personas naturales y/o jurídicas propietarias de establecimientos en funcionamiento y dedicados a las actividades de expendio y almacenamiento de carne y productos cárnicos comestibles en la ciudad de Bogotá, pueden realizar su inscripción en el siguiente enlace: </p>
        <p> <a href="www.saludcapital.gov.co/DSP/Paginas/Inscripcion_Establecimientos_Expendio_carnes.aspx">www.saludcapital.gov.co/DSP/Paginas/Inscripcion_Establecimientos_Expendio_carnes.aspx</a>  </p>
    </div>
    <div id="ask-alimentos-10">
        <p> Todo establecimiento debe cumplir con las condiciones sanitarias que se describen en la Ley 9 de 1979, que está compuesta por títulos de carácter general como los de protección del medio ambiente, suministro de agua, y salud ocupacional, así como algunos específicos como el título V denominado Alimentos, en el que se establecen las normas específicas a las que están sujetos los establecimientos industriales y comerciales en los que se realicen actividades que se relacionan con alimentos. </p>
        <p> También deben cumplir con los requisitos sanitarios establecidos en la Resolución 2674 de 2013. Esta norma indica específicamente en el capítulo VIII  las condiciones sanitarias que deben cumplir los restaurantes y establecimientos gastronómicos.   </p>
    </div>

    <div id="ask-agua-1">
        <p> Dentro de las acciones de inspección, vigilancia y control se debe propender por garantizar las condiciones higiénicas y sanitarias de cada uno de los siguientes establecimientos:  </p>
        <table width="603" style="border-collapse: collapse;" border="1">
            <tbody>
                <tr>
                    <td rowspan="3" width="338">
                        <p><strong>Establecimientos de alto riesgo f&iacute;sico:</strong></p>
                        <p>&nbsp;</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hoteles, moteles y residencias.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Establecimientos con servicios de alto impacto: prost&iacute;bulo - cabinas de videos - swhinger - whisker&iacute;as - salas de masaje er&oacute;tico - saunas y turcos LGBTI - y establecimientos afines.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cementerios y hornos crematorios.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Carrozas y/o veh&iacute;culos f&uacute;nebres</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Osarios.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Salas de velaci&oacute;n.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Agencias funerarias.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Anfiteatro Universidad</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Funerarias y Salas de velaci&oacute;n</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Funerarias con Laboratorio de Tanatopraxia.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Instituto de Medicina Legal</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Salas de retenidos.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Establecimientos Penitenciarios y carcelarios.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Centros de rehabilitaci&oacute;n de menores.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Albergues y hogares de paso.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hogares geri&aacute;tricos, centros gerontol&oacute;gicos, comedores ancianos y centros d&iacute;a.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Batallones</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Estaciones de polic&iacute;a.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Establecimientos que desarrollan simult&aacute;neamente actividades deportivas, actividades recreativas y de esparcimiento (clubes).</p>
                    </td>
                    <td width="265">
                        <p><strong>Establecimientos educativos:</strong></p>
                        <p>&nbsp;</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Establecimientos educativos, jardines infantiles con m&aacute;s de 100 usuarios por jornada.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Establecimientos educativos, jardines infantiles con menos de 100 usuarios por jornada</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidades</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; comunitarios de bienestar familiar (madres comunitarias).</p>
                    </td>
                </tr>
                <tr>
                    <td width="265">
                        <p><strong>Residuos s&oacute;lidos y l&iacute;quidos:</strong></p>
                        <p>&nbsp;</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bodegas de almacenamiento de material reciclable.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Relleno sanitario Do&ntilde;a Juana</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td width="265">
                        <p><strong>Establecimientos de bajo riesgo f&iacute;sico:</strong></p>
                        <p>&nbsp;</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gimnasios y centros de acondicionamiento f&iacute;sico</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Saunas, turcos, jacuzzi, spa.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Parques recreativos, polideportivos, salones comunales, teatros y cinemas.</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Centros comerciales</p>
                        <p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Establecimientos de venta de juguetes.</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="ask-agua-2">
        <p> Aunque existen muchas enfermedades asociadas al consumo de agua, la Secretaria Distrital de Salud vigila las de mayor interés en salud pública y que son consideradas como trazadoras o significativas, entre estas se encuentran</p>
        <p> •	Hepatitis A </p>
        <p> •	Enfermedad Diarreica Aguda (EDA) </p>
        <p> •	Mortalidad por EDA en menores de 5 años </p>
        <p> •	Morbilidad según el perfil epidemiológico institucional de los hospitales de la red pública Distrital </p>
    </div>
    <div id="ask-agua-3">
        Los índices de morbilidad y mortalidad de enfermedades que pueden estar asociadas al consumo de agua se realizan a través del área de vigilancia epidemiológica mediante el seguimiento de reportes al sistema de vigilancia SIVIGILA, así como las consultas y atenciones de la red pública hospitalaria a través del Registro Individual de Prestación de Servicios de Salud RIPS.
    </div>
    <div id="ask-agua-4">
        <p> En los juguetes, sus componentes y accesorios, se verifican las siguientes condiciones: </p>
        <p> Aspectos de higiene: Los juguetes deben garantizar condiciones de higiene tales que a través de ellos no se genere un riesgo de infección, enfermedad o contagio por malas condiciones de higiene durante su almacenamiento, exhibición y comercialización: El lugar de almacenamiento y exhibición debe estar libre de humedad y los juguetes deberán encontrarse en adecuadas condiciones de higiene y limpieza. </p>
        <p> Requisitos de etiquetado o rotulado: Verificar en la etiqueta o empaque del producto la información mínima requerida. </p>
        <p> •	La información debe ser legible, visible y en idioma español </p>
        <p> •	La etiqueta debe contener la identificación del fabricante. </p>
        <p> •	La etiqueta debe contener la identificación del importador o comercializador autorizado. </p>
        <p> •	Debe estar registrado el número de lote del juguete. </p>
        <p> •	Se debe indicar la edad mínima del usuario recomendada. </p>
        <p> •	Registrarse información sobre las advertencias y precauciones de empleo relacionadas con el juguete. </p>
        <p> •	En caso de ser necesario se registran las indicaciones de uso del juguete, los cuidados, los riesgos que puede ocasionar su uso y la forma de evitarlos. </p>
        <p> Certificado de conformidad: Preguntar al comercializador si el proveedor de los juguetes (fabricante, importador o distribuidor) le entregó los certificados de conformidad de los juguetes y si no indicarle que debe solicitarlo, según lo definido en la resolución 3388 de 2008. </p>
    </div>
    <div id="ask-agua-5">
        <p> La normativa que regula los hogares geriátricos en Colombia es la siguiente: </p>
        <p> Ley 1315 de 2009 Por medio de la cual se establecen las condiciones mínimas que dignifiquen la estadía de los adultos mayores en los centros de protección, centros de día e instituciones de atención. </p>
        <p> Acuerdo 312 de 2008 por medio del cual se regula el funcionamiento de los hogares geriátricos y gerontológicos que prestan servicios a las personas mayores en el Distrito Capital y se dictan otras disposiciones." - Concejo de Bogotá, D.C. </p>
        <p> Ley 1171 de 2007 Por medio de la cual se establecen unos beneficios a las personas adultas mayores. </p>
        <p> Ley 1251 de 2008, Por la cual se dictan normas tendientes a procurar la protección, promoción y defensa de los derechos de los adultos mayores. </p>
        <p> Resolución 110 de 1995, Por la cual se adoptan las condiciones mínimas para el funcionamiento de los establecimientos que ofrecen algún tipo de atención al anciano en el Distrito Capital.- Secretaria distrital de Salud. </p>
        <p> Acuerdo 254 de 2006 por medio del cual se establecen los lineamientos de la política pública para el envejecimiento y las personas mayores en el distrito capital y se dictan otras disposiciones - Concejo de Bogotá, D.C. </p>
        <p> Acuerdo 314 de 2008 por el cual se reglamenta la actividad física, cultural y educativa en los establecimientos geriátricos y gerontológicos del distrito a través de programas intergeneracionales y se dictan otras disposiciones - Concejo de Bogotá, D.C. </p>
        <p> Decreto 1538/05. Accesibilidad a edificios abiertos al público. </p>
        <p> Decreto 345 de 2010, Por medio del cual se adopta la Política Pública Social para el Envejecimiento y la Vejez en el Distrito Capital </p>
    </div>
    <div id="ask-agua-6">
        <p> La Secretaria Distrital de Salud realiza la vigilancia dentro del Distrito Capital a 20 establecimientos que cuentan con laboratorio de tanatopraxia; para la prestación de servicios, siempre que se requiera el servicio se debe verificar que estos cuenten con concepto sanitario favorable, lo cual garantiza que cumplen con todas las normas higiénicas sanitarias y locativas.  </p>
        <p> Los establecimientos son:  </p>
        <table  style="border-collapse: collapse;" border="1">
            <tbody style="border-collapse: collapse;" border="1">
                <tr>
                    <td width="199">
                        <p>Coopserfun Los Olivos</p>
                    </td>
                    <td width="200">
                        <p>Funerales Las Orquideas</p>
                    </td>
                    <td width="200">
                        <p>Consorcio Exequial Capillas de La Fe</p>
                    </td>
                </tr>
                <tr>
                    <td width="199">
                        <p>Funeraria Cristo Rey LTDA</p>
                    </td>
                    <td width="200">
                        <p>Funeraria Gaviria S.A</p>
                    </td>
                    <td width="200">
                        <p>Inversiones y planes de la paz</p>
                    </td>
                </tr>
                <tr>
                    <td width="199">
                        p>Compa&ntilde;&iacute;a de Ser</p>
                    </td>
                    <td width="200">
                        <p>Funerarios LTDA</p>
                    </td>
                    <td width="200">
                        <p>Funeraria La Vera Cruz</p>
                    </td>
                </tr>
                <tr>
                    <td width="199">
                        <p>Salas de Velaci&oacute;n Santa Lucia</p>
                    </td>
                    <td width="200">
                        <p>Funerales G&aacute;mez</p>
                    </td>
                    <td width="200">
                        <p>Funeraria Tequendama</p>
                    </td>
                </tr>
                <tr>
                    <td width="199">
                        <p>Servicios Exequiales Sta.Fe de Bt&aacute;</p>
                    </td>
                    <td width="200">
                        <p>Funerales Monte Sacro</p>
                    </td>
                    <td width="200">
                        <p>Funeraria Colonial</p>
                    </td>
                </tr>
                <tr>
                    <td width="199">
                        <p>Funeraria La Inmaculada</p>
                    </td>
                    <td width="200">
                        <p>Funeraria Lourdes</p>
                    </td>
                    <td width="200">
                        <p>Funeraria Santa Marta</p>
                    </td>
                </tr>
                <tr>
                    <td width="199">
                        <p>Funeraria Acevedo</p>
                    </td>
                    <td width="200">
                        <p>Funeraria F&aacute;tima</p>
                    </td>
                    <td width="200">
                        <p>&nbsp;</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="ask-agua-7">
        <p> El Distrito cuenta con 74 acueductos comunitarios y otros sistemas de abastecimientos, ubicados en las localidades de Sumapaz, Usme, Chapinero, Ciudad Bolívar, Suba, San Cristóbal y Usaquén. </p>
        <p> Tabla 1. Número de acueductos comunitarios y otros sistemas de abastecimiento por localidad. Bogotá. 2015 </p>
        <table width="224" style="border-collapse: collapse;" border="1">
            <tbody>
                <tr>
                    <td width="112">
                        <p><strong>Localidad</strong></p>
                    </td>
                    <td width="112">
                        <p><strong>N&uacute;mero de sistemas</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="112">
                        <p>Chapinero</p>
                    </td>
                    <td width="112">
                        <p>3</p>
                    </td>
                </tr>
                <tr>
                <td width="112">
                    <p>San Crist&oacute;bal</p>
                </td>
                <td width="112">
                    <p>2</p>
                </td>
                </tr>
                <tr>
                    <td width="112">
                        <p>Suba</p>
                    </td>
                    <td width="112">
                        <p>19</p>
                    </td>
                </tr>
                <tr>
                    <td width="112">
                        <p>Ciudad Bol&iacute;var</p>
                    </td>
                    <td width="112">
                        <p>10</p>
                    </td>
                </tr>
                <tr>
                    <td width="112">
                        <p>Sumapaz</p>
                    </td>
                    <td width="112">
                        <p>14</p>
                    </td>
                </tr>
                <tr>
                    <td width="112">
                        <p>Usme</p>
                    </td>
                    <td width="112">
                        <p>10</p>
                    </td>
                </tr>
                <tr>
                    <td width="112">
                        <p>Usaqu&eacute;n</p>
                    </td>
                <td width="112">
                    <p>16</p>
                </td>
                </tr>
            </tbody>
        </table>
        <p> Fuente: Secretaria distrital de Salud. Vigilancia Sanitaria y ambiental. Bogotá. 2015 </p>
    </div>
    <div id="ask-agua-8">
        <p> El resultado de la vigilancia de la calidad de agua en los acueductos comunitarios se mide mediante el Índice de Riesgo de la Calidad del Agua para Consumo Humano (IRCA), el cual muestra el grado de riesgo de ocurrencia de enfermedades relacionadas con el no cumplimiento de las características físicas, químicas y microbiológicas del agua, este se califica en una escala de 0 a 100, siendo 0 la calificación sin riesgo y 100 la inviable sanitariamente. Estos resultados son reportados al Sistema de Información de la Vigilancia de la Calidad del Agua para Consumo Humano SIVICAP. Para obtener mayor información del comportamiento del IRCA en los acueductos comunitarios, se puede dirigir al indicador distrital Índice de riesgo para la calidad del agua potable (IRCA) otros sistemas de abastecimiento en Bogotá D.C. </p>
        <p> <u>Ver indicador: Índice de riesgo para la calidad del agua potable IRCA de otros sistemas de abastecimiento en Bogotá D.C.</u>  </p>
    </div>
    <div id="ask-agua-9">
        <p> Respecto al traslado de cuerpos la secretaria de salud también expide un certificado sanitario a los vehículos que realizan este tipo de servicios, por lo cual, al momento de contratar dicho servicio se debe verificar que el vehículo cuente con esta documentación vigente. </p>
        <p> Verifique también en este sitio web  los vehículos certificados. </p>
    </div>
    <div id="ask-agua-10">
        <p> El resultado de la vigilancia de la calidad de agua a <b>la empresa de Acueducto y Alcantarillado de Bogotá</b> se mide mediante el Índice de Riesgo de la Calidad del Agua para Consumo Humano (IRCA), el cual muestra el grado de riesgo de ocurrencia de enfermedades relacionadas con el no cumplimiento de las características físicas, químicas y microbiológicas del agua, <b>este se califica en una escala de 0 a 100, siendo 0 la calificación sin riesgo y 100 la inviable sanitariamente</b>. Estos resultados son reportados al Sistema de Información de la Vigilancia de la Calidad del Agua para Consumo Humano SIVICAP. Durante el periodo 2012 a 2014 el IRCA de la EAAB ha están dentro del rango sin riesgo: de 0 a 5%, lo cual muestra la buena calidad del agua suministrada a la gran mayoría (98%) de la población del Distrito.</p>
        <p> Ver indicador: Índice de riesgo para la calidad del agua potable IRCA para la Empresa de Acueducto y Alcantarillado de Bogotá EAAB. </p>
    </div>
    <div id="ask-agua-11">
        <p> Estos requisitos se encuentran establecidos dentro de la siguiente normatividad: </p>
        <p> Resolución 110 de 1995 (por la cual se adoptan las condiciones mínimas para el funcionamiento de los establecimientos que ofrecen algún tipo de atención al anciano en el Distrito Capital). </p>
        <p> Ley 1315 de 2009 (Por medio de la cual se establecen las condiciones mínimas que dignifiquen la estadía de los adultos mayores en los centros de protección, centros de día e instituciones de atención). </p>
        <p> Ley 9 del 1979 (Por la cual se dictan Medidas Sanitarias). </p>
    </div>
    <div id="ask-agua-12">
        <p> Es importante tener en cuenta que, para solicitar esta visita, el hogar geriátrico debe estar en funcionamiento. </p>
        <p> La solicitud se realiza directamente a la Unidad Prestadora de Servicios de Salud Fontibón ubicada en la Kra 106 15ª 32 o por vía telefónica al 4860033 Ext. 10002 </p>
    </div>
    <div id="ask-agua-13">
        <p> Para el año 2015 se tenían 245 puntos concertados con la Empresa de Acueducto de Bogotá  EAAB de los cuales se han materializado 166 así, 50 Tanques, 112 piletas de muestreo, así como 4 plantas de tratamiento de agua potable.</p>
    </div>
    <div id="ask-agua-14">
        <p> Los decretos 1843/91, 1575/07 y las resoluciones 2190/91, 4143/93 reglamentan las condiciones para el mantenimiento, lavado y desinfección de tanques de almacenamiento domiciliario de agua potable; Además se refieren a la periodicidad y al control de las empresas que realizan actividades de lavado y desinfección, quienes deben contar concepto sanitario favorable dado por la Secretaria de Salud Distrital, y que una vez prestado el servicio deben certificar mediante análisis de laboratorio las condiciones fisicoquímicas y microbiológicas del agua de cada uno de los tanques intervenidos.</p>
    </div>

    <div id="ask-clima-1">
        Los efectos del cambio climático sobre la salud se clasifican en enfermedades y defunciones relacionadas con la temperatura, con fenómenos meteorológicos extremos (inundaciones, vendavales, fenómenos de remoción en masa, etc.), con la contaminación atmosférica, enfermedades transmitidas por el agua y los alimentos, enfermedades zoonóticas, en especial las transmitidas por vectores y roedores; efectos de la falta de alimentos y agua, efectos sobre la salud mental, la nutrición y las infecciones. La intensidad con la que los efectos del cambio climático influyen sobre la salud humana se encuentran directamente relacionados con la vulnerabilidad de las poblaciones, que a su vez depende del grado de desarrollo económico, densidad demográfica, disponibilidad de alimentos, nivel y distribución de los ingresos, condiciones ambiéntales locales, la calidad y disponibilidad de atención en salud.
    </div>

    <div id="ask-medicamentos-1">
        <p> La manera adecuada de hacerlo es en un contenedor o “PUNTO AZUL” en el cual se hace la recolección de medicamentos vencidos o parcialmente consumidos por el usuario final (ej. pacientes), con el fin de darles una disposición ambientalmente adecuada y previniendo con ello riesgos en Salud Pública como los atribuidos a la falsificación de los mismos. </p>
        <p> La Industria Farmacéutica (laboratorios nacionales y multinacionales) a través de la Corporación Punto Azul en cumplimiento con la Resolución 371 de 2009, gestionan el programa de pos consumo de medicamentos, por tal motivo los contenedores reciben el nombre mencionado. Encuentre el punto azul más cercano en el siguiente link:  </p>
        <p> <a href="http://puntoazul.com.co/donde-estamos-3/">http://puntoazul.com.co/donde-estamos-3/</a></p>
    </div>
    <div id="ask-medicamentos-2">
        <p> •	Residuos biosanitarios tales como: jeringas, algodones, gasas, agujas, baja lenguas, etc.  </p>
        <p> •	Elementos corto punzantes como agujas, cuchillas, entre otros.  </p>
        <p> •	Residuos domésticos o de otra clase (basura común), entre otros. </p>
       <p> Encuentre el punto azul más cercano en el siguiente link:</p>
       <p><a href=" http://puntoazul.com.co/donde-estamos-3/"> http://puntoazul.com.co/donde-estamos-3/</a> </p>
    </div>
    <div id="ask-medicamentos-3">
        <p>Los contenedores se encuentran ubicados en las principales cadenas de droguerías y almacenes de grandes superficies de Colombia, para mayor precisión puede dirigirse al siguiente link y consultar cual es el punto más cercano para usted: </p>
        <p><a href="http://puntoazul.com.co/donde-estamos-3/">http://puntoazul.com.co/donde-estamos-3/</a></p>
    </div>
    <div id="ask-medicamentos-4">
        <p> Las tiendas naturistas para su apertura y funcionamiento deben cumplir como mínimo con las condiciones esenciales de higiene sanidad, locativas, personal y la documentación legal establecida en las Resoluciones 126 de 2009 y 662 de 2011 y con los requisitos establecidos en el Código Nacional de Policía, Ley 1801 de 2016 Artículo 87, del mismo modo, adherirse a las demás normas que involucren aspectos que se relacionen con la comercialización minorista de productos naturales. Además, deben solicitar una visita de inspección, vigilancia y control sanitario en las Subredes Integradas de Servicios de Salud E.S.E o en el siguiente link: <a href="http://conceptosanitario.saludcapital.gov.co/pages/index.php">http://conceptosanitario.saludcapital.gov.co/pages/index.php</a>, y anexar la documentación estipulada en el artículo 5 de la Resolución 126 de 2009. </p>
        <p> El personal encargado de la venta de los productos deberá contar con un entrenamiento específico y con una certificación de estudios en el que conste que ha aprobado como mínimo noveno grado de educación media. </p>
    </div>
    <div id="ask-medicamentos-5">
        <p> Estos establecimientos deben cumplir con los requisitos establecidos en el Decreto 1950 de 1964, Decreto 780 de 2016, Resolución 1403 de 2007, Código Nacional de Policía Ley 1801 de 2016 Artículo 87 y demás reglamentación vigente.</p>
        <p> Para la apertura de una droguería se deben cumplir con los requisitos mencionados en el siguiente link: </p>
        <p><a href="http://autorregulacion.saludcapital.gov.co/droguerias">http://autorregulacion.saludcapital.gov.co/droguerias</a></p>
    </div>
    <div id="ask-medicamentos-6">
        <p>Es cualquier suceso médico desafortunado que puede presentarse durante el tratamiento con un medicamento, pero que no tiene necesariamente relación causal con el mismo, está definición se encuentra contemplada en el Decreto 780 de 2016 Artículo 2.5.3.10.3.</p>
    </div>
    <div id="ask-medicamentos-7">
        <p>Se considera como un evento adverso serio cuando su desenlace es la muerte o una amenaza a la vida, o cuando genera o prolonga una hospitalización, causa discapacidad, interrupción del embarazo o malformaciones.</p>
    </div>
    <div id="ask-medicamentos-8">
        <p>Es aquel del cual no se tiene un conocimiento previo hasta la fecha de su ocurrencia por no haber sido consignado en la información de seguridad de un medicamento.</p>
    </div>
    <div id="ask-medicamentos-9">
        <p>Es un Evento no intencionado, diferente a los que pudieron haber llevado a la muerte o al deterioro serio de la salud del paciente, operador o todo aquel que se vea implicado directa o indirectamente, como consecuencia de la utilización de un dispositivo o aparato de uso médico.</p>
    </div>
    <div id="ask-medicamentos-10">
        <p>Cualquier sustancia administrada a la especie humana para la profilaxis, el diagnóstico o el tratamiento de una enfermedad o para modificar una o más funciones fisiológicas.</p>
    </div>
    <div id="ask-medicamentos-11">
        <p>Es el preparado farmacéutico obtenido a partir de principios activos, con o sin sustancias auxiliares, presentado bajo forma farmacéutica, que se utiliza para la prevención, alivio, diagnóstico, tratamiento, curación o rehabilitación de la enfermedad, así como los alimentos que posean una acción o se administren con finalidad terapéutica o se anuncien con propiedades medicinales. Los envases, rótulos, etiquetas y empaques hacen parte integral del medicamento, por cuanto estos contribuyen a garantizar su calidad, estabilidad y uso adecuado, está definición se encuentra contemplada en el Decreto 780 de 2016 Artículo 2.7.2.3.2.1.3.</p>
    </div>
    <div id="ask-medicamentos-12">
        <p>Cualquier episodio médico desafortunado que puede presentarse durante el tratamiento con un medicamento, pero que no tiene necesariamente relación causal con el medicamento, por ejemplo: episodios diarreicos durante la administración de un medicamento.</p>
    </div>
    <div id="ask-medicamentos-13">
        <p>Los reportes de eventos adversos se deben realizar en la plataforma INVIMA en la página <a href="www.invima.gov.co">www.invima.gov.co</a> en el ítem farmacovigilancia, si se presentan dificultades con el uso de dicha plataforma comunicarse al correo <b>reportefv@invima.gov.co</b> . Si los eventos son serios deben reportarse en las 72 horas después de ocurrido el evento. Los eventos no serios se deberán reportar los primeros cinco días después del mes vencido.</p>
    </div>
    <div id="ask-medicamentos-14">
        <p>Es el proceso continuo, estructurado y diseñado por el Estado, que será desarrollado e implementado por cada institución, y que busca asegurar que los medicamentos sean usados de manera apropiada, segura y efectiva, según lo contemplado por el Decreto 780 de 2016 Artículo 2.5.3.10.3.</p>
    </div>
    <div id="ask-medicamentos-15">
        <p>Selección y uso de los medicamentos, que no requieren prescripción, por parte de las personas, con el propósito de tratar enfermedades o síntomas que ellos mismos pueden identificar.</p>
    </div>
    <div id="ask-medicamentos-16">
        <p>Uso indiscriminado e irracional de los medicamentos que deben estar sujetos a la supervisión médica.</p>
    </div>
    <div id="ask-medicamentos-17">
        <p>Todo cambio no deseado o esperado en su salud a pesar de seguir las instrucciones del uso que le hace su médico acerca del uso de los medicamentos; debe realizar el reporte de estos efectos; inclusive si usted no está seguro que el medicamento sea el causante de los síntomas.</p>
    </div>
    <div id="ask-medicamentos-18">
        <p>Sus reportes permiten cuantificar los EAM (evento adverso a medicamento) y PRM (problema relacionado con medicamentos) que ocurren en su comunidad y detectar RAM (reacciones adversas a medicamentos) no reconocidas anteriormente. Además, genera información sobre el uso de medicamentos en la población, creando datos locales que faciliten la toma de decisiones a nivel regional, nacional e internacional en pro de la salud de la comunidad.</p>
    </div>
    <div id="ask-medicamentos-19">
        <p>Es la manifestación de efectos dañinos para la salud de las personas por el uso de medicamentos, esto puede darse cuando se utilizan dosis superiores a las terapéuticas o por condiciones fisiológicas particulares.</p>
    </div>
    <div id="ask-medicamentos-20">
        <p>Si debe hacer el reporte en cero en la plataforma del INVIMA (<a href="www.invima.gov.co">www.invima.gov.co</a> en el ítem farmacovigilancia), los primeros cinco días hábiles después del mes vencido.</p>
    </div>
    <div id="ask-medicamentos-21">
        <p>Acuda a consulta médica ante cualquier caso de uso inadecuado de medicamentos, del que se sospeche un daño para la salud del paciente.</p>
    </div>
    <div id="ask-medicamentos-22">
        <p> Aquellas situaciones que en el proceso de uso de medicamentos causan o pueden causar la aparición de un resultado negativo asociado a la medicación. Ejemplos:</p>
        <p> </p>
        <p> •	Administración errónea del medicamento.</p>
        <p> •	Características personales.</p>
        <p> •	Conservación inadecuada.</p>
        <p> •	Contraindicación.</p>
        <p> •	Dosis, pauta y/o duración no adecuada.</p>
        <p> •	Duplicidad.</p>
        <p> •	Errores en la dispensación.</p>
        <p> •	Errores en la prescripción.</p>
        <p> •	Incumplimiento.</p>
        <p> •	Interacciones.</p>
        <p> •	Otros problemas de salud que afectan al tratamiento.</p>
        <p> •	Problema de salud insuficientemente tratado.</p>
    </div>
    <div id="ask-medicamentos-23">
        <p> Según la OMS, es una “reacción nociva y no deseada que se presenta tras la administración de un fármaco, a dosis utilizadas habitualmente en la especie humana, para prevenir, diagnosticar o tratar una enfermedad, o para modificar cualquier función biológica”. Ejemplos: </p>
        <p>  </p>
        <p> •	Aparición de dolor de cabeza posterior al inicio del medicamento. </p>
        <p> •	Diarrea por uso de antibióticos. </p>
        <p> •	Flebitis por la administración endovenosa de medicamentos. </p>
        <p> •	Erupción cutánea posterior a la administración de un medicamento </p>
    </div>
    <div id="ask-medicamentos-24">
        <p> Para notificar que usted presentó una sospecha de reacción al medicamento, debe tener en cuenta que es importante tener la mayor información de este así: </p>
        <p>  </p>
        <p> •	Nombre del medicamento. </p>
        <p> •	Cantidad formulada. </p>
        <p> •	Fábricas y depósitos de pintura. </p>
        <p> •	Con qué frecuencia lo tomó. </p>
        <p> •	Por qué se lo formularon. </p>
        <p> •	Fecha de inicio y terminación de toma del medicamento. </p>
        <p> •	Si tiene la caja o empaque donde viene el medicamento tenerlo a la mano. </p>
    </div>

    <div id="ask-quimicos-1">
        <p> Los requisitos para la apertura y funcionamiento de una peluquería o sala de belleza (que no incluya servicios de estética), y en general de un establecimiento de comercio, están establecidos en la Ley1801 de 2016, por medio de la cual se expide el Código Nacional de Policía y Convivencia. </p>
        <p> Como parte de los requisitos de operación, el establecimiento deberá cumplir con lo establecido en la Ley 9 de 1979 y las normas sanitarias vigentes que para el caso de la peluquería o sala de belleza son las siguientes: </p>
        <p> Resolución 2117 de 2010: Por la cual se establecen los requisitos para la apertura y funcionamiento de los establecimientos que ofrecen servicio de estética ornamental tales como, barberías, peluquerías, escuelas de formación de estilistas y manicuristas, salas de belleza y afines y se dictan otras disposiciones. </p>
        <p> Resolución 2827 de 2006: Por la cual se adopta el Manual de bioseguridad para establecimientos que desarrollen actividades cosméticas o con fines de embellecimiento facial, capilar, corporal y ornamental (Peluquería). </p>
        <p> Para mayor información visitar el link: <a href="http://autorregulacion.saludcapital.gov.co/salonesbelleza">http://autorregulacion.saludcapital.gov.co/salonesbelleza</a> </p>
        <p> Una vez abierto al público, el propietario o representante legal del establecimiento podrá solicitar la visita higiénico sanitaria en la oficina de atención de la Subred adscrita a la Secretaría Distrital de Salud, que tenga jurisdicción sobre su localidad o en el siguiente link: <a href="http://conceptosanitario.saludcapital.gov.co/pages/index.php">http://conceptosanitario.saludcapital.gov.co/pages/index.php</a>, con el fin de otorgarle el concepto sanitario respectivo.  </p>
        <p><a href="{{asset("oficinas")}}">Ver ubicación</a></p>
    </div>
    <div id="ask-quimicos-2">
        <p> En primer lugar, los requisitos generales para la apertura y operación de cualquier establecimiento de este tipo están establecidos en la Ley 1801 de 2016, por medio de la cual se expide el Código Nacional de Policía y Convivencia. </p>
        <p> Como parte de los requisitos de operación, el establecimiento que presta servicios estéticos (no invasivos o de salud) deberá cumplir la Ley 9 de 1979 y las normas sanitarias vigentes que para el caso de servicios de estética personal (sin incluir peluquería, ni servicios de salud estética) se encuentran en la siguiente normatividad: </p>
        <p> Ley 711 de 2001: Por la cual se reglamenta el ejercicio de la ocupación de la cosmetología y se dictan otras disposiciones en materia de salud estética. </p>
        <p> Resolución 2263 de 2004: Por la cual se establecen los requisitos para la apertura y funcionamiento de los centros de estética y similares y se dictan otras disposiciones. </p>
        <p> Resolución 3924 de 2005: Por la cual se adopta la Guía de inspección para la apertura y funcionamiento de los centros de estética y similares y se dictan otras disposiciones. Particularmente, esta resolución presenta en uno de sus anexos un cuadro con las tecnologías que no son de competencia de las esteticistas. </p>
        <p> Resolución 2827 de 2006: Por la cual se adopta el Manual de bioseguridad para establecimientos que desarrollen actividades cosméticas o con fines de embellecimiento facial, capilar, corporal y ornamental. </p>
        <p> Para los establecimientos que prestan adicionalmente servicios de salud estética, se deberá dar cumplimiento al Decreto 1011 de 2006 y normas reglamentarias, por el cual se establece el Sistema Obligatorio de Garantía de Calidad de la Atención de Salud del Sistema General de Seguridad Social en Salud. </p>
        <p> Una vez abierto al público, el propietario o representante legal del establecimiento podrá solicitar la visita higiénico sanitaria en la oficina de atención de la Subred adscrita a la Secretaría Distrital de Salud, que tenga jurisdicción sobre la localidad, con el fin de otorgarle el concepto sanitario respectivo.</p>
        <p><a href="{{asset("oficinas")}}">Ver ubicación</a></p>
        <p> O puede solicitar la visita higiénico sanitaria ingresando los datos en el siguiente link: <a href="http://conceptosanitario.saludcapital.gov.co/pages/index.php">http://conceptosanitario.saludcapital.gov.co/pages/index.php</a> </p>
    </div>
    <div id="ask-quimicos-3">
        <p> Todos los productos requieren de Notificación Sanitaria Obligatoria a excepción de las materias primas que se utilicen en la fabricación de los mismos y aquellos productos naturales que no sufran transformación química ni física, por ejemplo: arcillas y lodos volcánicos, etc., siempre y cuando no se vendan con usos específicos y con marca. Si requiere mayor información puede consultar la Decisión 516 de 2002 de la Comunidad Andina </p>
    </div>
    <div id="ask-quimicos-4">
        <p> La Resolución 2263 de 2004, por la cual se establecen los requisitos para la apertura y funcionamiento de centros de estética y similares estableció que los establecimientos en los que se aplican técnicas con finalidad terapéutica, intervenciones quirúrgicas, microcirugías (tatuaje), procedimientos invasivos (piercing), implantes o preparaciones cosméticas, deberán cumplir en todo momento con la reglamentación vigente en lo relacionado con los prestadores de servicios de salud. </p>
        <p> Para el caso de la cosmetología y/o la estética facial y corporal, la Resolución 3924 de 2005, en su Apéndice II, establece los procedimientos y aparatología que no son de la competencia de la esteticista/cosmetóloga: </p>
        <p> -Tecnología IPL (Intense pulsed light/ Luz pulsada intensa). </p>
        <p> -Rayos ultravioletas (UVA-UVB-UVC). </p>
        <p> -Tecnología Láser. </p>
        <p> -Presión negativa- succión (vacumterapia/endermología). </p>
        <p> -Cámaras hiperbáricas. </p>
        <p> -Electro acupuntura. </p>
        <p> -Electrolipólisis. </p>
        <p> -Celulipólisis. </p>
        <p> -Electroridólisis. </p>
        <p> -Dióxido de Carbono (carboxiterapiasubdérmica). </p>
        <p> -Pistolas de mesoterapia. </p>
        <p> -Microdermabrasión. </p>
        <p> -Dermoabrasión. </p>
        <p>Adicionalmente, es importante informar que mediante concepto técnico emitido por el Ministerio de Salud y Protección social (Radicado 201824000044831), relacionado con la Resolución 3924 de 2005, se indicó que respecto a la tecnología AFT <em> “(…) se considera que el establecimiento en el cual funcione, debe contar con la participación de al menos un profesional de la medicina, quien es el responsable de la valoración del usuario y del procedimiento que incluye el uso seguro del equipo. Este profesional debe cumplir con lo previsto en la Resolución 203 de 2014, en lo que respecta a la habilitación de su consultorio como profesional independiente.” </em> </p>
    </div>
    <div id="ask-quimicos-5">
        <p> Cualquier queja, reclamo, sugerencia o solicitud de información relacionada con la prestación de servicios de estética facial, corporal y ornamental, podrá efectuarla directamente en la oficina de atención de la subred correspondiente, según la localidad en la que se encuentre el establecimiento o procedimiento motivo de su inquietud. También podrá realizarlo a través de la opción de servicio al ciudadano/ Sistema Distrital de Quejas y Soluciones <a href="https://bogota.gov.co/sdqs/">(https://bogota.gov.co/sdqs/)</a> .  </p>
        <p><a href="{{asset("oficinas")}}">Ver ubicación</a></p>
    </div>
    <div id="ask-quimicos-6">
        <p> Existen servicios que requieren la intervención de un profesional de la medicina, tales como procedimientos con fines estéticos dirigidos al mejoramiento de la imagen corporal, en los que se incluyen servicios en los que se realicen los siguientes tipos de procedimientos: </p>
        <p> •	Procedimientos que impliquen solución de continuidad de la piel. </p>
        <p> •	Procedimientos que impliquen la inoculación de cualquier substancia intradérmica, subcutánea o parenteral. </p>
        <p> •	Procedimientos que impliquen la formulación de cualquier principio activo farmacológico parenteral, oral o tópico. </p>
        <p> •	Procedimientos, técnicas o actividades con finalidad terapéutica, intervenciones quirúrgicas, procedimientos invasivos, implantes o preparaciones cosméticas”. </p>
        <p> Los anteriores servicios y procedimientos hacen parte de los denominados servicios de salud estética los cuales se encuentran reglamentados por el Decreto 1011 de 2006, por el cual se establece el Sistema Obligatorio de Garantía de Calidad de la Atención de Salud del Sistema General de Seguridad Social en Salud. Esto significa que estos servicios deberán habilitarse, cumpliendo con lo establecido por el Decreto 1011 de 2006 y sus normas reglamentarias tal como la Resolución 2003 de 2014: <em> “Por la cual se definen los procedimientos y condiciones de inscripción de los Prestadores de Servicios de Salud y de habilitación de servicios de salud”. </em></p>
    </div>
    <div id="ask-quimicos-7">
        <p>Como punto de partida puede consultar el documento denominado: Conductas básicas en bioseguridad – manejo integral del Ministerio de Salud del año 1997. Para el caso específico del sector belleza, el Ministerio de la Protección Social ha expedido la Resolución 2827 de 2006, por la cual se adopta el Manual de bioseguridad para establecimientos que desarrollen actividades cosméticas o con fines de embellecimiento facial, capilar, corporal y ornamental (Peluquería). </p>
    </div>
    <div id="ask-quimicos-8">
        <p> Debido a que el término “estética” se relaciona con procedimientos tanto del área de salud como de los servicios personales, es necesario diferenciar los procedimientos estéticos que hacen parte de uno u otro sector, cuáles son sus alcances y cuál es la reglamentación aplicable a cada uno de ellos. </p>
        <p> Los servicios personales en estética o belleza son aquellos realizados en establecimientos comerciales (barberías, peluquerías, salas de belleza, centros de estética, spa, etc.) o educativos (instituciones de educación para el trabajo y desarrollo humano o instituciones de educación superior) por personas que cuentan con idoneidad al recibir una acreditación para desempeñar la respectiva ocupación u oficio. </p>
        <p> En Colombia, los servicios personales en estética o belleza se dividen básicamente en dos categorías, los cuales están reglamentados por las siguientes normas: </p>
        <p>   •	Estética ornamental (Peluquería): Resolución 2117 de 2010 y Resolución 2827 de 2006. </p>
        <p>   •	Estética y/o cosmetología Facial y/o corporal: Ley 711 de 2001, Resolución 2263 de 2004, Resolución 3924 de 2005, Resolución 2827 de 2006. </p>
        <p> De otra parte, los servicios de salud estética son servicios que requieren la intervención de un profesional de la medicina, en los cuales se realizan procedimientos con fines estéticos dirigidos al mejoramiento de la imagen corporal; incluye los servicios en los que se realicen los siguientes tipos de procedimientos:</p>
        <p>  •	Procedimientos que impliquen solución de continuidad de la piel. </p>
        <p>  •	Procedimientos que impliquen la inoculación de cualquier substancia intradérmica, subcutánea o parenteral. </p>
        <p>  •	Procedimientos que impliquen la formulación de cualquier principio activo farmacológico parenteral, oral o tópico. </p>
        <p>  •	Procedimientos, técnicas o actividades con finalidad terapéutica, intervenciones quirúrgicas, procedimientos invasivos, implantes o preparaciones cosméticas. </p>
        <p>  Estos servicios se encuentran reglamentados por el Decreto 1011 de 2006 y la Resolución 2003 de 2014. </p>
    </div>
    <div id="ask-quimicos-9">
        <p> Los servicios personales en estética y/o cosmetología se pueden ofrecer en diferentes tipos de establecimientos o espacios, tales como: </p>
        <p> •	Centros de estética. </p>
        <p> •	Institutos de belleza. </p>
        <p> •	Institutos de educación (con fines académicos). </p>
        <p> •	Eventos publicitarios, demostraciones, shows, ferias y demás afines </p>
        <p> •	Complementariamente en: Gimnasios, piscinas, saunas, spa, hotel, resorts y demás afines. </p>
        <p> Se debe tener en cuenta que la realización de estos servicios implicará el cumplimiento de la normatividad sanitaria vigente y en el caso de mezclar actividades diferentes en servicios complementarios, se deberá dar cumplimiento a cada norma sanitaria aplicable a cada tipo de actividad o establecimiento implicado; Ley 9 de 1979 y Ley 1801 de 2016 (Art. 87), Resoluciones 2117 de 2010, 2263 de 2004, 3924 de 2005 y 2827 de 2006.</p>
    </div>
    <div id="ask-quimicos-10">
        <p> El desarrollo de los servicios de belleza correspondientes a servicios personales de estética facial, corporal y ornamental (peluquería) se relacionan con la utilización de tres grupos de productos básicos los cuales son: </p>
        <p> •	Cosméticos (Peluquería y estética). </p>
        <p> •	Aparatología estética (Estética facial y corporal). </p>
        <p> •	Productos de aseo, higiene y limpieza o productos de desinfección y esterilización (Peluquería y estética). </p>
        <p>Para cualquiera de estos productos existe un régimen de registros sanitarios para su producción, procesamiento, envase, empaque, almacenamiento, expendio, comercialización, mantenimiento, uso, importación y exportación. Por lo tanto, se recomienda que consulte la legalidad de estos productos verificando el registro sanitario o la notificación sanitaria obligatoria, consultando de una forma rápida y actualizada en la página web del INVIMA: <a href="www.invima.gov.co">www.invima.gov.co</a>, en el menú: <em>“ITEMS DE INTERÉS”</em> , enlace:<em> “Consulte el Registro Sanitario”.</em></p>
        <p> También puede dirigirse personalmente al INVIMA, ubicado en la Carrera 10 # 64 – 28, Bogotá D.C. comunicarse al teléfono: 2948700 o a la línea gratuita: 018000122220, donde le atenderán su duda acerca de registros o notificaciones sanitarias.</p>
    </div>
    <div id="ask-quimicos-11">
        <p> En primer lugar, los requisitos generales para la apertura y operación de cualquier establecimiento de este tipo están establecidos en la Ley 1801 de 2016, por medio de la cual se expide el Código Nacional de Policía y Convivencia. </p>
        <p> Como parte de los requisitos de operación, el establecimiento deberá cumplir con lo establecido en la Ley 9 de 1979 y las normas sanitarias vigentes que para el caso son las siguientes: </p>
        <p> Se entiende que los servicios de masaje con fines de relajación o estéticos hacen parte del campo de ejercicio de los servicios personales en estética, que han sido definidos en la Ley 711 de 2001 como <em>“Prácticas y actividades de embellecimiento corporal”</em> , por la cual se reglamenta el ejercicio de la ocupación de la cosmetología y se dictan otras disposiciones en materia de salud estética y la Resolución 2263 de 2004, por la cual se establecen los requisitos para la apertura y funcionamiento de los centros de estética y similares y se dictan otras disposiciones. </p>
        <p> Estas dos normas definen entonces, el campo de ejercicio de la estética y/o cosmetología, incluyendo los siguientes procedimientos, entre otros: </p>
        <p> •	Tratamientos cosméticos faciales y corporales. </p>
        <p> •	Masaje manual estético (Facial y corporal). </p>
        <p> •	Uso de aparatología estética. </p>
        <p> •	Drenaje linfático manual. </p>
    </div>
    <div id="ask-quimicos-12">
        <p> La línea de Seguridad Química de la SDS adelanta intervenciones a establecimientos dedicados a la transformación fisicoquímica de las propiedades de las materias primas destinadas a la elaboración de bienes y productos intermedios o terminados, y a los prestadores de servicios a la industria y la comunidad en general que almacenen, manejen o comercialicen sustancias químicas, ubicados en Bogotá D.C., a excepción de aquellas industrias en donde tiene lugar la producción y procesamiento de alimentos o de materias primas relacionadas, la fabricación de medicamentos, dispositivos médicos, cosméticos o productos para el aseo de uso doméstico, cuya competencia para la vigilancia recae en el Instituto para la Vigilancia de Medicamentos y Alimentos (INVIMA). </p>
        <p> Los sectores o industrias vigiladas son: </p>
        <p> Industria extractiva, superficial, canteras y fábricas de ladrillo </p>
        <p> Depósitos de material de construcción y ferreterías </p>
        <p> Industrias manufactureras </p>
        <p> Empresas de servicios automotrices (mantenimiento de vehículos y distribuidoras de combustibles) </p>
        <p> Lavanderías </p>
        <p> Empresas gestoras de residuos peligrosos </p>
        <p> Empresas de servicios personales de belleza (estética ornamental, facial y/o corporal) </p>
        <p> Estudios de tatuaje, micropigmentación o piercing </p>
    </div>
    <div id="ask-quimicos-13">
        <p> Cuando un establecimiento genere posibles afectaciones a la salud de los trabajadores o a la población adyacente a las instalaciones donde se encuentre un establecimiento comercial, debido al desarrollo de actividades económicas que involucren el uso de sustancias químicas, generación de residuos peligrosos o empleo de maquinaria o equipos, puede poner la queja por medio del Sistema Distrital de Quejas y Soluciones – SDQS – en el link <a href="http://www.bogota.gov.co/sdqs">http://www.bogota.gov.co/sdqs</a> o radicando una carta donde se exponga la situación presentada en la Secretaría Distrital de Salud – SDS – en la Carrera 32 No. 12 – 81 o en la Unidad de Servicios de Salud de la Subred integrada de servicios de salud de la localidad donde se encuentre ubicada la empresa objeto de la petición. </p>
        <p> Es importante que en la queja presentada se detalle la dirección exacta de las instalaciones que posiblemente estén ocasionando las afectaciones, y se describan con la mayor precisión las condiciones o deficiencias del establecimiento que den lugar a la problemática expuesta. </p>
    </div>
    <div id="ask-quimicos-14">
        <p> Dado que la vigilancia y control de estos aspectos están reglamentados por la Resolución 1188 de 2003, y que con base en la misma, la competencia para estas acciones está dada por la autoridad ambiental; en Bogotá le corresponde a la Secretaría Distrital de Ambiente verificar las condiciones establecidas y garantizar el cumplimiento de las disposiciones del Manual de normas y procedimientos para la gestión de los aceites usados en el Distrito Capital, y en consecuencia adoptar las medidas de prevención y corrección necesarias y de ser el caso la imposición de las sanciones correspondientes. </p>
        <p> Sin embargo, la autoridad sanitaria (Secretaría Distrital de Salud) podrá reportar el incumplimiento de dicha norma a la autoridad competente mediante oficio, en el que se describa la situación evidenciada durante la visita de inspección sanitaria. </p>
    </div>
    <div id="ask-quimicos-15">
        <p> Durante una visita de inspección sanitaria se puede constatar el incumplimiento de disposiciones que no se encuentran dentro de la competencia de la autoridad sanitaria, como por ejemplo las relacionadas con impactos para el ambiente generados por el desarrollo de las actividades económicas. </p>
        <p>  En ese caso, se efectúa la verificación de las condiciones con base en la normativa ambiental y se registran los hallazgos encontrados, de tal manera que se entrega el respectivo informe a la autoridad competente que para el Distrito Capital es la Secretaría Distrital de Ambiente, quién recibirá la notificación correspondiente sobre cualquier evento relacionado con disposición inadecuada de residuos, aguas residuales, emisiones incontroladas de gases de combustión, entre otras, para que así se tomen las acciones pertinentes. </p>
    </div>
    <div id="ask-quimicos-16">
        <p> Como cualquier otro establecimiento abierto al público, las lavanderías deben cumplir con las disposiciones establecidas en la Ley 9 de 1979 que, en lo relacionado con dicha actividad económica, se refiere a: </p>
        <p> •	La distribución adecuada el espacio (zonas específicas para distintos usos y actividades). </p>
        <p> •	La separación física, delimitación o demarcación de áreas de trabajo y de almacenamiento de sustancias químicas y materiales. </p>
        <p> •	La adecuación de pisos impermeables, sólidos y antideslizantes que se mantengan en buenas condiciones y secos. </p>
        <p> •	La inclinación y canalización suficientes para el completo escurrimiento de los líquidos generados en el proceso, evitando la disposición de vertimientos en drenajes del alcantarillado. </p>
        <p> •	La iluminación suficiente, en cantidad y calidad, para prevenir y garantizar adecuadas condiciones de visibilidad y seguridad. </p>
        <p> •	La existencia de ventilación que garantice el suministro de aire limpio y fresco, en forma permanente y en cantidad suficiente. </p>
        <p> •	El buen estado y el mantenimiento de la maquinaria y equipo utilizados, de tal manera que sean operados siempre en forma segura. </p>
        <p> •	El empleo de personal capacitado, métodos, equipos y materiales adecuados y suficientes para la prevención y extinción de incendios. </p>
        <p> •	Almacenamiento seguro de sustancias químicas como el percloroetileno o el combustible para la caldera. </p>
        <p> •	Uso de protección respiratoria, máscara con filtro para vapores orgánicos, durante el proceso de limpieza. </p>
        <p> •	La señalización, control de proceso, protección personal y demás medidas necesarias para prevenir accidentes y evitar efectos a la salud. </p>
        <p> •	Implementación de prácticas para la prevención y manejo de emergencias. </p>
        <p>Así mismo, al tratarse de un establecimiento donde se lleva a cabo el almacenamiento y manipulación de sustancias químicas peligrosas, se deben tener en cuenta otros aspectos definidos en la Ley 55 de 1993, <em>“Por la cual se aprueba el convenio 170 y la recomendación 177 de la OIT sobre la seguridad en la utilización de productos químicos en el trabajo”</em>, en la cual se define el cumplimiento de los siguientes factores:</p>
        <p> •	La clasificación, etiquetado y rotulado de los productos utilizados. </p>
        <p> •	La demarcación de áreas donde se opere con sustancias nocivas. </p>
        <p> •	La información clara y precisa de las medidas preventivas y de emergencia para casos de contaminación del ambiente o de intoxicación. </p>
        <p> •	Existencia de diques de contención para los combustibles utilizados, como el A.C.P.M alimentado a la caldera. </p>
        <p> •	Implementación de medidas elementales de contención de derrames de combustibles y sustancias químicas utilizadas. </p>
        <p> •	Suministro y socialización de las hojas de seguridad de las sustancias. </p>
    </div>

    <div id="ask-zoonosis-1">
        <p>En concordancia con la Ley 9a de 1979 y el Decreto 780 de 2016,la Secretaria Distrital de Salud realiza las visitas de Inspección, Vigilancia y Control sanitario de los establecimientos médico veterinarios y aquellos que prestan servicios para animales (pet´s shop, peluquerías, spa, ventas de concentrado, entre otros). Estas intervenciones son realizadas a través de las oficinas de Salud Ambiental de las cuatro Subredes Integradas de Servicios de Salud; como resultado de la vigilancia se emite concepto técnico sanitario al establecimiento acorde con las condiciones sanitarias evidenciadas en el momento de la visita.</p>
    </div>
    <div id="ask-zoonosis-2">
        <p> En caso de evidenciar una mala práctica por parte de un profesional médico veterinario o médico veterinario zootecnista, podrá interponer la queja radicando el requerimiento directamente en las oficinas de COMVEZCOL ubicadas en la Calle 101 # 71A – 52. Se sugiere siempre contar con el acervo probatorio de la presunta mala práctica en la que incurrió el profesional con el fin de que haga parte de la investigación que se llevará a cabo. </p>
        <p> Antes de consultar cualquier servicio médico veterinario, verifique siempre que el establecimiento cuenta con los servicios de un profesional en medicina veterinaria debidamente registrado ante el Consejo Profesional de Medicina Veterinaria y Zootecnia de Colombia - COMVEZCOL.,  </p>
        <p> Si tiene alguna inquietud sobre el profesional que le atiende solicite la presentación de la tarjeta profesional y verifique la información en el  siguiente link: </p>
        <p> <a href="http://consejoapp.com.co/consultas.php?v=2">http://consejoapp.com.co/consultas.php?v=2</a> </p>
    </div>
    <div id="ask-zoonosis-3">
        <p> En estos casos se sugiere acudir a la Superintendencia de Industria y Comercio para interponer la respectiva queja pues el acto de comercializar se constituye en una transacción comercial donde quien vende tiene la responsabilidad de entregar en óptimas condiciones el bien vendido en este caso un animal.  </p>
        <p> En el marco de la Ley 1480 de 2011 “Por medio de la cual se expide el Estatuto del Consumidor y se dictan otras disposiciones". <b> Igualmente es importante anotar que por ningún motivo deben comprarse animales en vía pública</b>, dado que en este caso nadie le responderá por el animal o en su defecto por el dinero entregado por tratarse de una actividad que no se encuentra permitida por la legislación colombiana. <b>Recuerde</b> de usted depende que esta actividad se realice.  </p>
    </div>
    <div id="ask-zoonosis-4">
        <p> Antes de tomar la decisión de llevar un animal de compañía a casa, recuerda que “los animales no son objetos, son sujetos y sienten” y que “los animales de compañía no son juguetes”, antes de llevar a casa uno, pregúntate: </p>
        <p> ¿Tengo el tiempo para dedicarle? </p>
        <p> ¿Tengo los medios económicos suficientes? </p>
        <p> ¿Tengo el espacio requerido? </p>
        <p> ¿Puedo adquirir el compromiso para 10 ó 15 años? </p>
        <p> ¿Cuál es la especie que más se adecua a la forma de vida de mi familia? ¿Perro o gato? </p>
        <p> ¿Todos los miembros de la familia están de acuerdo en tenerlo? </p>
        <p> ¿Hay problemas de salud en la familia, alergias, discapacidades físicas? </p>
        <p> ¿Puedes llevarlo a vivir en el sitio donde habitan? </p>
        <p> ¿Estoy dispuesto a cumplir con las normas de convivencia en sociedad? </p>
        <p> ¿Soy capaz de afrontar los problemas que se presenten (emergencias de salud, inconvenientes de comportamiento)? </p>
        <p> ¿Qué va a suceder con él en vacaciones? </p>
        <p>Recuerda que la adopción es otra opción por eso <b>“No compres, adopta”</b> . Para adoptar un perro o gato, acércate a la Unidad de Cuidado Animal en la Carrera 106 A # 67-02 Barrio El Muelle (Engativá) ó puede comunicarse con el Instituto Distrital de Protección y Bienestar Animal al teléfono: 6477117 o al correo electrónico:proteccionanimal@alcaldiabogota.gov.co, en donde podrán brindarle mayor información sobre el proceso de adopción. </p>
    </div>
    <div id="ask-zoonosis-5">
        <p> Según lo estipulado en la Ley 84 de 1989, en el capítulo 2, artículo 4 y 5 toda persona está obligada a respetar y abstenerse de causar daño o lesión a cualquier animal. Igualmente debe denunciar todo acto de crueldad cometido por terceros de que tenga conocimiento. Además, son también deberes del propietario, tenedor o poseedor de un animal, entre otros: </p>
        <p> •	Mantener el animal en condiciones locativas apropiadas en cuanto a movilidad, luminosidad, aireación, aseo e higiene. </p>
        <p> •	Suministrarle bebida, alimento en cantidad y calidad suficientes, así como medicinas y los cuidados necesarios para asegurar su salud, bienestar y para evitarle daño, enfermedad o muerte. </p>
        <p> •	Suministrarle abrigo apropiado contra la intemperie, cuando la especie de animal y las condiciones climáticas así lo requieran. </p>
        <p> •	Cuando se trata de animales domésticos o domesticados, en cautividad o confinamiento las condiciones descritas deberán ser especialmente rigurosas, de manera tal que los riesgos de daño, lesión, enfermedad o muerte sean mínimas. </p>
    </div>
    <div id="ask-zoonosis-6">
        <p> La ley 84 de 1989 en el capítulo 3, artículo 6, literales de la A a la Z describe las conductas consideradas como crueles con los animales. Ver: <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-84-de-1989.pdf">http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-84-de-1989.pdf</a> </p>
        <p> Conjuntamente en la ley 1774 de 2016 en el artículo 4, se modifica el artículo 10 de la ley 84 de 1989 en lo referente a las penas y agravantes impuestas por actos dañinos y de crueldad, también adiciona al Código penal el Título XI-A de los delitos contra los animales. Ver: <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-1774-de-2016.pdf">http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-1774-de-2016.pdf</a> </p>
    </div>
    <div id="ask-zoonosis-7">
        <p> Si se trata de situaciones que afectan el bienestar de los animales, de conformidad con la entidad encargada de atender, investigar y sancionar en primera instancia es la inspección de policía correspondiente a la localidad donde se ubique el establecimiento de comercio o la persona infractora de la ley “Ley 84 de 1989 y la Ley 1774 de 2016”. La autoridad que deberá atender el requerimiento bien sea por oficio o por denuncia.</p>
        <p> Por otra parte y conforme a lo descrito en el Decreto 546 de 2016, en el Distrito el Instituto Distrital de Protección y Bienestar Animal debe igualmente atender a dichos casos, por lo que ante casos de maltrato o vulneración de bienestar animal puede comunicarse al teléfono: 6477117 o al correo electrónico:proteccionanimal@alcaldiabogota.gov.co.</p>
    </div>
    <div id="ask-zoonosis-8">
        <p> En aquellos casos en que se evidencie la presencia de caninos y felinos callejeros en su barrio podrá solicitar ante la Inspección de Policía de la localidad en la que se encuentran los animales o ante el Instituto Distrital de Protección y Bienestar Animal, que se adelante la recolección o reubicación de los mismos. Para interponer su requerimiento, puede usted comunicarse con el Instituto Distrital de Protección y Bienestar Animal al teléfono: 6477117 o al correo electrónico:proteccionanimal@alcaldiabogota.gov.co. </p>
        <p> Lo anterior teniendo en cuenta que de conformidad a lo descrito en el Titulo XIII, Capítulo IIIde la Ley 1801 de 2016, las autoridades tomarán las medidas necesarias para despejar las vías de animales abandonados, que serán conducidos al coso o se entregarán a asociaciones sin ánimo de lucros encargados de su cuidado. Se crearán los cosos o depósitos animales, en cada uno de los municipios del país, y, en el caso del distrito capital de Bogotá, uno en cada una de sus localidades. El coso o depósito de animales será un inmueble dotado con los requisitos necesarios para el alojamiento adecuado de los animales que en él se mantengan. Este inmueble comprenderá una parte especializada en especies menores, otra para especies mayores y otra para fauna silvestre, esta última supervisada por la entidad administrativa del recurso. </p>
        <p> Sumado a lo anterior el Decreto 546 de 2016, mediante el cual se conforma el Instituto Distrital de Protección y Bienestar Animal, define que dicha entidad es igualmente responsable en la atención de la fauna domestica callejera.  </p>
    </div>

</div>


@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.text() // Extract info from data-* attributes
        // var respuesta = $('#'+button.data('response'));

        $('#exampleModal').find('.modal-header').addClass(button.data('line'));
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text( recipient);
        modal.find('.modal-body').text('');
        $('#'+button.data('response')).clone().appendTo(modal.find('.modal-body'));
        // setTimeout(() => {
        //     modal.find('.modal-body').append(respuesta);
        // });

    })
</script>

@endsection
