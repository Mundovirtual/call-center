$( document ).ready(function() {
	cargarDatos(); 
	$("#mostrar_usr").val("");
	$("#mostrar_psw").val("");
		 
});

/*Aux importar*/
let importado="0";

let seleccion="";

function DB(){
	seleccion="1";
	alertify.success("Seleccionaste la base de datos");	
}

function EX(){
	seleccion="2";
	alertify.success("importa los datos Teléfonicos");	
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
		 
		 if (importado=="0") {
			alertify.error("No has subido un archivo"); 
			alertify.error("Selecciona una opción de envío");
			
		 }else if (importado=="1") {
		 	
		 }
	}
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
 
  ventana = "";
function enviar_DB(){	 	 
	$.ajax({
		url: '../model/enviarsms/enviarsms_model_all.php',
		type: 'POST',
		dataType: 'json',
		data: {'mostrar_ip':$("#mostrar_ip").val(),'mostrar_usr':$("#mostrar_usr").val(),'mostrar_psw':$("#mostrar_psw").val(),'tiempo':$("#tiempo").val(),'Mensaje_Enviar':
		$("#Mensaje_Enviar").val()},
		 beforeSend:function(){
             Pace.restart ();
         },
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
             importado="1";
             $("#exampleModal").modal('hide');
        });
		}
        
  }
 
