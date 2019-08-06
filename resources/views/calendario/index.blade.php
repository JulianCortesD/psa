@extends('layout')
@section('titulo')
    Noticias
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/news.css")}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/calendar.css")}}" />
@endsection
@section('contenido')

    <div class="wrapper min-ancho">
        <div class="container-fluid">

            <div class="row">
                <div class="col-10 offset-1">

                    <div class="row justify-content-center">
                        <div class="mt-3 mb-3 container-calendar">
                            <div style="height: 340px; width: 600px;">
                                <label>Calendario de eventos Salud Ambiental</label>
                                <div class="col-10 offset-1" >
                                    <div id='calendar'></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-body mt-3 mb-3 card-calendar" >
                        <i class="fas fa-calendar-alt"> 22.08.2019</i>
                        <p align="justify">Línea:Medicamentos y Dispositivos Médicos</p>
                        <p  align="center">CAPACITACIÓN EN NORMATIVIDAD A FARMACEUTAS.</p>
                        <p  align="center">Objetivo:Socializar la normatividad vigente y reglamentaciones de procedimientos institucionales a propietarios y empleados de los establecimientos farmacéuticos.
                        <p  align="center">Requisitos:Profesionales y técnicos pertenecientes al gremio farmacéutic</p>
                        <p  align="center">Lugar:Auditorio del Hemocentro Secretaría Distrital de Salud de Bogotá Cra. 32#12-81</p>
                        <p  align="center">Contacto:medicamentossegurosbogota@saludcapital.gov.co</p>
                        <br>
                        <i class="fas fa-calendar-alt"> 29.08.2019</i>
                        <p align="justify">Línea:Aire, Ruido y Radiación Electromagnética</p>
                        <p  align="center">DÍA INTERNACIONAL CONTRA EL RUIDO “SOMOS TODOS OÍDOS”</p>
                        <p  align="center">Objetivo: Concientizar a la población bogotana acerca de la contaminación auditiva generados por  aparatos electrónicos y sus consecuencias en la salud.</p>
                        <p  align="center">Requisitos: La población en general</p>
                        <p  align="center">Lugar:En todas las Subredes de Servicios de Salud del Distrito</p>
                        <p  align="center">Contacto: acgalvez@saludcapital.goc.co</p>
                        <br>
                        <i class="fas fa-calendar-alt"> 22.08.2019</i>
                        <p align="justify">Línea:Cambio Climático </p>
                        <p  align="center">“IX SIMPOSIO DETECCIÓN  TEMPRANA DEL CÁNCER: CÁNCER DE PIEL”</p>
                        <p  align="center">Objetivo: la Liga contra el cáncer – Seccional Bogotá, la Faculta de Medicina de la Universidad de los Andes y la Fundación Santa Fe  de Bogotá se unen para llevar a cabo este Simposio, con el propósito de dar información veraz al público sobre un tema de vital importancia en la agenda de la  salud pública de Colombia, como es el cáncer de piel</p>
                        <p  align="center">Requisitos: Población general,  familiares de pacientes, aseguradores, médicos generales, enfermeras, especialistas y estudiantes de carreras en el área de la salud.</p>
                        <p  align="center">Lugar:Centro de Prácticas, Facultad  de Medicina de la  Universidad de los Andes, CP 201 </p>
                        <p  align="center">Contacto:a1peralta@saludcapital.gov.co</p>
                        <br>
                        <i class="fas fa-calendar-alt"> 13.08.2019</i>
                        <p align="justify">Línea:Productos Químicos, Industria y Belleza</p>
                        <p  align="center">CAPACITACIÓN PARA ESTABLECIMIENTOS ACREDITADOS EN EL SECTOR BELLEZA</p>
                        <p  align="center">Objetivo:Socialización de la estrategia de autorregulación</p>
                        <p  align="center">RequisitosEstablecimientos acreditados en el sector belleza</p>
                        <p  align="center">Lugar:Aula Magistral Secretaría Distrital de Salud de Bogotá Cra. 32#12-81</p>
                        <p  align="center">Contacto:LAPenaranda@saludcapital.gov.co</p>
                        <br>
                        <i class="fas fa-calendar-alt"> 16.08.2019</i>
                        <p align="justify">Línea:Productos Químicos, Industria y Belleza</p>
                        <p  align="center">TALLER PROYECTO PREVENCIÓN INTEGRAL EN SALUD AMBIENTAL - PISA </p>
                        <p  align="center">Objetivo:Socialización de riesgo químico “Manejo de Sustancias Químicas, Hojas de Seguridad, Etiquetado y  Almacenamiento”.</p>
                        <p  align="center">Requisitos:Empresas y establecimientos vinculadas al proyecto PISA.</p>
                        <p  align="center">Lugar:Auditorio del Hemocentro Secretaria Distrital de Salud de Bogotá Cra. 32#12-81</p>
                        <p  align="center">Contacto:am1gomez@saludcapital.gov.co</p>
                        <br>
                        <i class="fas fa-calendar-alt"> 22.08.2019</i>
                        <p align="justify">Línea:Productos Químicos, Industria y Belleza</p>
                        <p  align="center">CAPACITACIÓN EN NORMATIVIDAD A FARMACEUTAS.</p>
                        <p  align="center">Objetivo:Socialización de riesgos químico “Manejo de Sustancia Químicas, Hojas de Seguridad Etiquetado y  Almacenamiento”.</p>
                        <p  align="center">Requisitos:Empresas y establecimientos vinculadas al proceso PISA</p>
                        <p  align="center">Lugar:Requisitos:Aula Magistral Secretaria Distrital de Salud de Bogotá Cra. 32#12-81</p>
                        <p  align="center">Contacto:am1gomez@saludcapital.gov.co</p>
                        <br>



                    </div>

                </div>
            </div>
        </div>
    </div>




@endsection
@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [  'dayGrid' ],
            defaultDate: '2019-08-22',
            editable: true,
            lang: 'es',
            height: 'parent',
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                title: 'CAPACITACIÓN EN NORMATIVIDAD A FARMACEUTAS".',
                start: '2019-08-22'
                },
                {
                title: 'DÍA INTERNACIONAL CONTRA EL RUIDO “SOMOS TODOS OÍDOS”".',
                start: '2019-08-29'
                },
                {
                title: '“IX SIMPOSIO DETECCIÓN  TEMPRANA DEL CÁNCER: CÁNCER DE PIEL”".',
                start: '2019-08-22'
                },
                {
                title: 'CAPACITACIÓN PARA ESTABLECIMIENTOS ACREDITADOS EN EL SECTOR BELLEZA".',
                start: '2019-08-13'
                },
                {
                title: 'TALLER PROYECTO PREVENCIÓN INTEGRAL EN SALUD AMBIENTAL - PISA ".',
                start: '2019-08-16'
                },
            

                /* {
                groupId: 999,
                title: 'Repeating Event',
                start: '2019-06-16T16:00:00'
                },
                {
                title: 'Conference',
                start: '2019-06-11',
                end: '2019-06-13'
                },
                {
                title: 'Meeting',
                start: '2019-06-12T10:30:00',
                end: '2019-06-12T12:30:00'
                },
                {
                title: 'Lunch',
                start: '2019-06-12T12:00:00'
                },
                {
                title: 'Meeting',
                start: '2019-06-12T14:30:00'
                },
                {
                title: 'Happy Hour',
                start: '2019-06-12T17:30:00'
                },
                {
                title: 'Dinner',
                start: '2019-06-12T20:00:00'
                },
                {
                title: 'Birthday Party',
                start: '2019-06-13T07:00:00'
                },
                {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2019-06-28'
                } */
            ],
            eventRender: function(){
                
                if ($('#calendar > div.fc-toolbar.fc-header-toolbar > div.fc-left > h2').text().indexOf('agosto') !== -1) {
                    $('.card-calendar').css("display", "block");
                } else {
                    $('.card-calendar').css("display", "none");
                }
            }
        });

        calendar.render();

        calendar.setOption('locale','es');
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.js"></script>
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
