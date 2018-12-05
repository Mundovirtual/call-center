 


$( document ).ready(function() {
	 CargarTabla();
});


id_editar=""; 

function editar(id,ip,usr,psw){ 
	id_editar=id; 
	$("#editar_ip").val(ip);
	$("#editar_usuario").val(usr);
	$("#psw_editar").val(atob(psw));
 }



function editar_ip(){ 
	ip_editar=$("#editar_ip").val();
	usr_editar=$("#editar_usuario").val();
	psw_editar=$("#psw_editar").val();

	$.ajax({
		url: '../model/ip/ip_model.php',
		type: 'POST',
		dataType: 'json',
		data: {'editar': 'editar','id_editar':id_editar,'ip_editar':ip_editar,'user_editar':usr_editar,'psw_editar':btoa(psw_editar)},
	})
	.done(function(respuesta) {
		if (respuesta.Enviar='0') {
			$("#modal_editar_ips").modal('hide');
			alertify.success("Dato actualizado");
			CargarTabla();
		}else{
			alertify.error(respuesta.Enviar);
		}
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}

function insertar_ip(){  
	ip_insertar=$("#registrar_ip").val();
	usr_insertar=$("#registrar_usuario").val();
	psw_insertar=btoa($("#registrar_psw").val());
 
	 $.ajax({
		url: '../model/ip/ip_model.php',
		type: 'POST',
		dataType: 'json',
		data: {'insertar': 'insertar','ip_insertar':ip_insertar,'user_insertar':usr_insertar,'psw_insertar':psw_insertar},
	})
	.done(function(respuesta) { 
		if (respuesta.Insertar=='0') {
			alertify.success("Dato registrado");
			$("#modal_registrar_ips").modal('hide');
			CargarTabla();
			$("#registrar_ip").val();
			$("#registrar_usuario").val();
			$("#registrar_psw").val();
		}else{
			alertify.error(respuesta.Insertar);
		}
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}




	//controlador boton password
$( "#MostrarPsw" ).on( "click", function() { 

    if ($('#mostrar_psw').attr('type') == 'text') {

          $('#mostrar_psw').attr('type', 'password');

    } 
    else {

      $('#mostrar_psw').attr('type', 'text');

    } 

});


	//controlador boton password
$( "#MostrarPswEditar" ).on( "click", function() {  
if ($('#psw_editar').attr('type') == 'text') {
    		
          $('#psw_editar').attr('type', 'password');

    } else {

      $('#psw_editar').attr('type', 'text');

  }
});

idEliminar=""; 

function Eliminar(id){ 
	idEliminar=id;  
 }



function Eliminarip(){  
	$.ajax({
		url: '../model/ip/ip_model.php',
		type: 'POST',
		dataType: 'json',
		data: {'eliminar': 'eliminar','id_eliminar':idEliminar},
	})
	.done(function(respuesta) {
		if (respuesta.Eliminar=='0') {
			alertify.success("Registro Eliminado");
			$("#modal_eliminar_ips").modal('hide');
			CargarTabla();


		}else{
			alertify.error(respuesta.Eliminar);
		}
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}


var tabla_nombre;
 function CargarTabla() {
 	
    tabla_nombre = $("#tabla_ip").dataTable({
    	"destroy":true,
    	"bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "../model/ip/ip_model.php",
            "type": "POST",
            "data": {"index": 'index'}
        },
        "columns": [ 
            { "data": "id" },
            { "data": "ip" },
            { "data": "usr" },
            { "data": "psw" }, 
            { "data": "Editar" },
            { "data": "Eliminar" } 
        ],
        "oLanguage": {
            "sProcessing": "Procesando...",
            "sLengthMenu": 'Mostrar <select>' +
           		'<option value="5">5</option>' +
                '<option value="10">10</option>' +
                '<option value="20">20</option>' +
                '<option value="30">30</option>' +
                '<option value="40">40</option>' +
                '<option value="50">50</option>' +
                '<option value="-1">All</option>' +
                '</select> registros',
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Filtrar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Por favor espere - cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
}