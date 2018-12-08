	$( document ).ready(function() {
		deshabilitarInput();
	    index();
	});

	/*======================VER=======================================*/
	function index(){
		$.ajax({
			url: '../model/mi_perfil/miperfil_model.php',
			type: 'POST',
			dataType: 'json',
			data: {"index": 'index'},
		})
		.done(function(respuesta) {
			$("#id").val(respuesta.idUser);
			$("#nombre").val(respuesta.Nombre);
			$("#Usuario").val(respuesta.Usr);
			$("#Contrasena").val(atob(respuesta.Psw)); 

		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	}

	/*======================EDITAR=======================================*/
	  
	$("#EditarPerfil").click(function() {  
			
		habilitarInput(); 
		$('#Contrasena').attr('type', 'text');

		
		if ($("#EditarPerfil").text()=='Guardar') { 
				id_editar=$("#id").val();
				nombre_editar=$("#nombre").val();
				usuario_editar=$("#Usuario").val();
				psw_editar=btoa($("#Contrasena").val());    

				$.ajax({
					url: '../model/mi_perfil/miperfil_model.php',
					type: 'POST',
					dataType: 'json',
					data: {'id': id_editar,'nombre':nombre_editar,'usuario':usuario_editar,'psw':psw_editar},
				})
				.done(function(respuesta) {
					if (respuesta.Editar=="0") {

						alertify.success('Dato actualizado');
						$("#EditarPerfil").text('Editar');  
						deshabilitarInput();

					}else{

						habilitarInput();
						$("#EditarPerfil").text('Guardar');
						alertify.error(respuesta.Editar);

					}
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});   
					 
				}
				else{
					$("#EditarPerfil").text('Guardar');
				} 



		
	});



		function habilitarInput(){

			$("#nombre").prop( "disabled", false ); 
			$('#Usuario').prop('disabled', false);
			$('#Contrasena').prop('disabled', false); 
			$('#Contrasena').attr('type', 'password');
	 
		}

		function deshabilitarInput(){ 
			$("#nombre").prop( "disabled", true ); 
			$('#Usuario').prop('disabled', true);
			$('#Contrasena').prop('disabled', true); 
			$("#EditarPerfil").text('Editar');
			$('#Contrasena').attr('type', 'password');
		}

	//controlador boton password
	$( "#MostrarPsw" ).on( "click", function() { 

	    if ($('#Contrasena').attr('type') == 'text') {
	          $('#Contrasena').attr('type', 'password');
	    } else {
	      $('#Contrasena').attr('type', 'text');
	    } 
	});
