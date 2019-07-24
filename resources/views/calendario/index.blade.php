@extends('layout')
@section('titulo')
    Noticias
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/news.css")}}" />
@endsection
@section('contenido')
    
    <div class="wrapper min-ancho">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-10 offset-1">
                    
                    <div class="row">
                        <div class="mt-3 container-calendar">
                            <label>Calendario de eventos Salud Ambiental</label>
                            <div class="col-10 offset-1" >
                                <div id='calendar'></div>
                            </div>
                        </div>  
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
        defaultDate: '2019-07-22',
        editable: true,
        lang: 'es',
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