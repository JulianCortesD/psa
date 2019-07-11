$(function() {
    calendar();
    reloj();
    if ( $('#rootwizard').length ) {
      $('#rootwizard').bootstrapWizard();
    }    
    submenus();
});

function submenus() {
  $('.dropdown-submenu').on("click", function(e) {
    console.log('kk bb')
    var submenu = $(this);
    $('.dropdown-submenu .dropdown-menu').removeClass('show');
    submenu.find('a').next('.dropdown-menu').addClass('show');
    e.stopPropagation();
  });

  $('.dropdown').on("hidden.bs.dropdown", function() {
      // hide any open menus when parent closes
      $('.dropdown-menu.show').removeClass('show');
  });
}

function reloj(){ 
    var momentoActual = new Date(); 
    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    var f=new Date();
    var fecha = f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
    hora = momentoActual.getHours(); 
    minuto = momentoActual.getMinutes(); 
    segundo = momentoActual.getSeconds(); 

    horaImprimible = fecha + " - " + hora + " : " + minuto + " : " + segundo;

    $('#reloj').text(horaImprimible);
    setTimeout(reloj,1000);
}

function calendar() {
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
    
        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'interaction', 'dayGrid' ],
          defaultDate: '2019-06-12',
          editable: false,
          lang: 'es',
          eventLimit: true, // allow "more" link when too many events
          events: [
            {
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
            }
          ]
        });
    
        calendar.render();
    
        calendar.setOption('locale','es');
      });
}