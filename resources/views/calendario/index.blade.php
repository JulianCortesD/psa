@extends('layout')
@section('titulo')
    Noticias
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/news.css")}}" />
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/calendar.css")}}" />
=======
>>>>>>> c491aa3a333c86b3bd696afa412f2ffcdc41df46
@endsection
@section('contenido')
    
    <div class="wrapper min-ancho">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-10 offset-1">
                    
<<<<<<< HEAD
                    <div class="row justify-content-center">
                        <div class="mt-3 container-calendar">
                            <div style="height: 340px; width: 600px;">
                                <label>Calendario de eventos Salud Ambiental</label>
                                <div class="col-10 offset-1" >
                                    <div id='calendar'></div>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="card card-body mt-3 mb-3 card-calendar" >
                        <i class="fas fa-calendar-alt"> 23.07.2019</i>
                        <p align="justify">Línea:Seguridad Química</p>
                        <p  align="center">Taller mensual  proyecto  PISA  “Aspectos ambiental  y Cumplimiento de la Normatividad”.</p>
                        <br>
                        <i class="fas fa-calendar-alt"> 24.07.2019</i>
                        <p align="justify">Línea: Agua y Saneamiento</p>
                        <p  align="center">IVC  promoción y prevención prostitución y comunidad  LGBTI  “Dueños de Establecimientos”.</p>
                        <br>
                        <i class="fas fa-calendar-alt"> 31.07.2019</i>
                        <p align="justify">Línea:Seguridad Química</p>
                        <p  align="center" >Evento Acoplasticos  Café & Polímeros "Economía Circular y Sostenibilidad".</p>
                        

                    </div>
=======
                    <div class="row">
                        <div class="mt-3 container-calendar">
                            <label>Calendario de eventos Salud Ambiental</label>
                            <div class="col-10 offset-1" >
                                <div id='calendar'></div>
                            </div>
                        </div>  
                    </div>
>>>>>>> c491aa3a333c86b3bd696afa412f2ffcdc41df46
                    
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
        defaultDate: '2019-07-22',
        editable: true,
        lang: 'es',
<<<<<<< HEAD
        height: 'parent',
        eventLimit: true, // allow "more" link when too many events
        events: [
            {
            title: ' IVC  promoción y prevención prostitución y comunidad  LGBTI  “Dueños de Establecimientos”.',
            start: '2019-07-24'
            },
            {
            title: 'Taller mensual  proyecto  PISA  “Aspectos ambiental  y Cumplimiento de la Normatividad”.',
            start: '2019-07-23'
            },
            {
            title: 'Evento Acoplasticos  Café & Polímeros "Economía Circular y Sostenibilidad".',
            start: '2019-07-31'
            },
            /* {
=======
        eventLimit: true, // allow "more" link when too many events
        events: [
            /* {
            title: 'All Day Event',
            start: '2019-06-01'
            },
            {
            title: 'Long Event',
            start: '2019-06-07',
            end: '2019-06-10'
            },
            {
            groupId: 999,
            title: 'Repeating Event',
            start: '2019-06-09T16:00:00'
            },
            {
>>>>>>> c491aa3a333c86b3bd696afa412f2ffcdc41df46
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
        ]
        });
    
        calendar.render();
    
        calendar.setOption('locale','es');
    });      
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.js"></script>
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection