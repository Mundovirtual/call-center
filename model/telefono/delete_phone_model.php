<?php 

require_once("../../class/telefono_controller.php");
$telefonos= new telefono(); 


if (isset($_POST['iddel'])) {
	$msj="";

	$id=$_POST['iddel'];

	 $delete=$telefonos->eliminar($id);
	
	if ($delete=='1') {
		$msj="0";
	}else{
		$msj="Ha ocurrido un error inesperado";
	}
		
	echo  json_encode(array( 'Eliminar'=>$msj)); 


}


 ?>