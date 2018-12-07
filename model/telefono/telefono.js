$( document ).ready(function() {
	$("#telefono_teclado").val("");
	$("#excel").val("");
     telefonos();
		 
});



function guardar() {
        if ($("#telefono_teclado").val()!="") {
			input();
			$("#telefono_teclado").val("");
			$("#excel").val("");
        }else if($("#excel").val()!=""){
        	excel();
        	$("#telefono_teclado").val("");
			$("#excel").val("");
        }
}


function excel(){
	var inputFileImage = document.getElementById("excel");
        var file = inputFileImage.files[0];
        var data = new FormData();

        data.append('archivoExcel', file);
        var url = "../model/telefono/registrar_excel_model.php";
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
         }).done(function(res){ 
            alertify.success("se ha exportado con Éxito"); 
             $("#exampleModal").modal('hide');
             telefonos();
        });
  }

function input(){
	tel_teclado=$("#telefono_teclado").val(); 

	$.ajax({
		url: '../model/telefono/registrar_tel_model.php',
		type: 'POST',
		dataType: 'json',
		data: {'tel_teclado':tel_teclado},

	})
	.done(function(res) {
		if (res.InsertarTelefono==0) {
            telefonos();
			alertify.success("Numero registrado");
			$("#telefono_teclado").val("");

		}else{
			 alertify.error(res.InsertarTelefono);

		}
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}





 
 function telefonos() {
 	
    tabla_nombre = $("#tablaTelefono").dataTable({
    	"destroy":true,
    	"bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "../model/telefono/telefono_model.php",
            "type": "POST",
            "data": {"index": '1'}
        },
 
        "columns": [ 
            { "data": "id" },
            { "data": "tel" }  
        ],
        "oLanguage": {
            "sProcessing": "Procesando...",
            "sLengthMenu": 'Mostrar <select>' +
            	'<option value="10">5</option>' +
           		'<option value="100">100</option>' +
                '<option value="200">200</option>' +
                '<option value="300">300</option>' +
                '<option value="500">500</option>' +
                '<option value="600">600</option>' + 
                '<option value="-1">All</option>' +
                '</select> registros',
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": " _TOTAL_ registros",
            "sInfoEmpty": "Mostrando del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:", 
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