$( document ).ready(function() {
	cargarDatos(); 
	$("#mostrar_usr").val("");
	$("#mostrar_psw").val("");
		 
});

function cargarDatos(){
	$.ajax({
		url: '../model/enviarsms/enviarsms_model.php',
		type: 'POST',
		dataType: 'json',
		data: {"cargar": 'index'},
	})
	.done(function(respuesta) { 
		 
		$("#InsertarIP").html(respuesta.Insertar);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});	
}
  
pswMostrar="";
 
function MostrarIp(ip,usr,psw){ 
	$("#mostrar_usr").val(usr);
	$("#mostrar_psw").val(psw);
	pswMostrar=psw;
}

function limpiar(){
	$("#mostrar_usr").val("");
	$("#mostrar_psw").val("");
}


	//controlador boton password
$("#MostrarPsw_button" ).on( "click", function() { 
	

    if ($('#mostrar_psw').attr('type') == 'text') {     
          $('#mostrar_psw').attr('type', 'password'); 
 		  
    } 
    else { 
      $('#mostrar_psw').attr('type', 'text'); 
    } 

});
 
function enviar(){
	 	 
	$.ajax({
		url: '../model/enviarsms/enviarsms_model.php',
		type: 'POST',
		dataType: 'json',
		data: {'mostrar_ip':$("#mostrar_ip").val(),'mostrar_usr':$("#mostrar_usr").val(),'mostrar_psw':$("#mostrar_psw").val(),'tiempo':$("#tiempo").val(),'Mensaje_Enviar':
	$("#Mensaje_Enviar").val()},
	})
	.done(function(respuesta) {
	  
		  if (respuesta.Enviar !='0') {
		 	alertify.error(respuesta.Enviar );
		 }
		 else{
		 	alertify.success("Enviando.....");
		 	   
		 	$.each(respuesta.arrayUrl, function(i, item) {
		 		console.log(item);
			     window.open(item);			     
			});
		 } 
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
} 

     