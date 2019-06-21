$(function() {
    reloj();
    $('#rootwizard').bootstrapWizard();
});

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