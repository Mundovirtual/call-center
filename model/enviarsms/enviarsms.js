$( document ).ready(function() {
	cargarDatos(); 
	$("#mostrar_usr").val("");
	$("#mostrar_psw").val("");
		 
});

 
let seleccion="";

function DB(){
	seleccion="1";
	alertify.success("Seleccionaste la base de datos");	
}

function EX(){
	seleccion="2"; 
	$("#exampleModal").modal('show');
 
}
	 

function enviarsms(){
	if (seleccion=="") {
		alertify.error("Selecciona una opción de envío");
	}
	else if (seleccion=='1') {
		enviar_DB();	
	}
	else if (seleccion=='2') {
		 
		   enviarSMSEXCEl();
	}
}


function enviarSMSEXCEl(){
	$.ajax({
		url: '../model/enviarsms/enviarsms_model_excel.php',
		type: 'POST',
		dataType: 'json',
		data: {'mostrar_ip':$("#mostrar_ip").val(),'mostrar_usr':$("#mostrar_usr").val(),'mostrar_psw':$("#mostrar_psw").val(),'Mensaje_Enviar':
		$("#Mensaje_Enviar").val()},
		     beforeSend: function(){ 
   				$("#csscargando").show();
				$("#FormularioOcultar").fadeOut(1000);
		   },
		   complete: function(){
		      	$("#csscargando").hide(1000);
				$("#FormularioOcultar").fadeIn();
		   }
	})

	.done(function(respuesta) {
	  	 Pace.start();

		 if (respuesta.Enviar !='0') {
		 	alertify.error(respuesta.Enviar );
		 	 
		 }
		 else{		 	 
		 		  	
		 	alertify.success(respuesta.enviandos.length+ "Mensajes enviados");
		 	alertify.success(respuesta.errores.length+" Mensajes fallidos");
		 
		 } 
	}) 
}





 

function cargarDatos(){
	$.ajax({
		url: '../model/enviarsms/enviarsms_model_all.php',
		type: 'POST',
		dataType: 'json',
		data: {"cargar": 'index'},
	})
	.done(function(respuesta) { 		 
		$("#InsertarIP").html(respuesta.Insertar);
	}) 
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
 
 
function enviar_DB(){	 	 
	$.ajax({
		url: '../model/enviarsms/enviarsms_model_all.php',
		type: 'POST',
		dataType: 'json',
		data: {'mostrar_ip':$("#mostrar_ip").val(),'mostrar_usr':$("#mostrar_usr").val(),'mostrar_psw':$("#mostrar_psw").val(),'tiempo':$("#tiempo").val(),'Mensaje_Enviar':
		$("#Mensaje_Enviar").val()},
		     beforeSend: function(){ 
   				$("#csscargando").show();
				$("#FormularioOcultar").fadeOut(1000);
		   },
		   complete: function(){
		      	$("#csscargando").hide(1000);
				$("#FormularioOcultar").fadeIn();
		   }
	})

	.done(function(respuesta) {
	  	 Pace.start();

		 if (respuesta.Enviar !='0') {
		 	alertify.error(respuesta.Enviar );
		 	 
		 }
		 else{		 	 
		 		  	
		 	alertify.success(respuesta.enviandos.length+ "Mensajes enviados");
		 	alertify.success(respuesta.errores.length+" Mensajes fallidos");
		 
		 } 
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
}
 

function cargarExcel(){
	var inputFileImage = document.getElementById("excel");
		if ($("#excel").val()=="") {
			alertify.error("Selecciona un archivo"); 
			$("#exampleModal").modal('show');
		}else{
			var file = inputFileImage.files[0];
        var data = new FormData();

        data.append('archivoExcel', file);
        var url = "../model/enviarsms/enviarsms_model_excel.php";
        $.ajax({
            url: url,
            type: 'POST',
            contentType: false,
            data: data,
            processData: false,
            cache: false,
            beforeSend:function(){
             Pace.restart ();
         },
        }).done(function(data){
             alertify.success("Teléfonos importados"); 
             $("#excel").val(""); 
             $("#exampleModal").modal('hide');
        });
		}
        
  }
 
 