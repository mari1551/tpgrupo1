var ticket1 = document.getElementById("ticket1");
var ticket2 = document.getElementById("ticket2");
var ticket3 = document.getElementById("ticket3");
var select = document.getElementById("select_categoria");


ticket1.addEventListener('click',function(event){
    select.selectedIndex = 0;
    actualizarMensaje();
});
ticket2.addEventListener('click',function(event){
    select.selectedIndex = 1;
    actualizarMensaje();
});
ticket3.addEventListener('click',function(event){
    select.selectedIndex = 2;
    actualizarMensaje();
});


var inputnombre=document.getElementById("input_nombre");
var inputapellido=document.getElementById("input_apellido");
var inputemail=document.getElementById("input_email");
var inputcantidad=document.getElementById("input_cantidad");

var btnReset = document.getElementById("BotonBorrarForm");
btnReset.addEventListener('click',function(event){
    var inputnombre=document.getElementById("input_nombre");
    var inputapellido=document.getElementById("input_apellido");
    var inputemail=document.getElementById("input_email");
    var inputcantidad=document.getElementById("input_cantidad");
     
    inputnombre.value="";
    inputapellido.value="";
    inputemail.value="";
    inputcantidad.value="";
    select.selectedIndex=0;
});
inputcantidad.addEventListener('change',function(event){
    actualizarMensaje();
});
select.addEventListener('change',function(event){
    actualizarMensaje();
});

var btnResumen = document.getElementById("BotonResumenForm");
btnResumen.addEventListener('click',function(event){
    if(inputnombre.value==""||inputapellido.value==""||inputemail.value==""||inputcantidad.value==""){
        alert("Por favor ingresa los datos completos");
    }
    else{
        actualizarMensaje();
    }    
});

function actualizarMensaje() {
    var valorTicket=200;
    var descuento=0;
    var costo=0;
    var cantidad=inputcantidad.value;
    var opcion=select.selectedIndex;
    var mensaje = "";
   
    if (opcion == "0") {
        descuento=valorTicket*0.8;      
    } else if (opcion == "1") {
        descuento=valorTicket*0.5;
    } else if (opcion == "2") {
        descuento=valorTicket*0.15;
    } else if (opcion == "3") {
        descuento=0;
    }
    costo=(valorTicket-descuento)*cantidad;
    mensaje = "Total a pagar: $"+costo;
    var mensajeTotal = document.getElementById("caja_informacion");
    mensajeTotal.textContent = mensaje;       
    
}