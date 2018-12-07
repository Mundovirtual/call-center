<?php
   
require_once("../../class/administrador_controller.php");

	$mostrar=new admin();

	if (isset($_POST['index'])) {
		
		$view=$mostrar->index(); 
		  echo  json_encode(array( 'idUser'=>$view[0][0],'Nombre'=>$view[0][1],'Usr'=>$view[0][2],'Psw'=>$view[0][3]));  
	}

	/*==================================Editar=====================================================*/

	if (isset($_POST['id']) and isset($_POST['nombre']) and isset($_POST['usuario']) and isset($_POST['psw'])) {
		$id= sanitizar($_POST['id']);
		$Nombre= sanitizar($_POST['nombre']);
		$Usuario= sanitizar($_POST['usuario']);
		$Psw= sanitizar($_POST['psw']);
		$msj="";
		$Aux="0";

		if (strlen($Nombre)<10) {
			$msj="Nombre: Longitud minima de 10 caracteres"; 
			$Aux="1";
		}elseif(!is_string($Nombre)){
			$msj="Nombre: Números no permitidos"; 
			$Aux="1";
		}elseif (strlen($Usuario)<4) {
			 $msj="Usuario: Longitud minima de 4 caracteres ";
			 $Aux="1";
		}elseif (strlen($Psw)<4) {
			 $msj="Contraseña: Longitud minima de 4 caracteres";
			 $Aux="1";
		}elseif ($Aux=="0") {
			 $update=$mostrar->editar($id,$Nombre,$Usuario,$Psw);  
			 if ($update==1) {
			 	$msj="0";
			 }else{
			 	$msj="Ha ocurrido un error inesperado";
			 }
		}
	 	echo  json_encode(array( 'Editar'=>$msj)); 
 	 
	}


 	function sanitizar($text){ 		
 		$variable=filter_var($text, FILTER_SANITIZE_STRING);
 		return htmlspecialchars($variable);
 	}



?>