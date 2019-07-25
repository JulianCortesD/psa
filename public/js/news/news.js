$(function() {
    reloj();
    if ( $('#rootwizard').length ) {
      $('#rootwizard').bootstrapWizard();
    }    
    submenus();

    $("#ocultar-contenedor").hover(function(){
      $(".ocultar").hide();
    }, function(){
        $(".ocultar").show();
    });
});

function submenus() {
  $('.dropdown-submenu').on("click", function(e) {
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
