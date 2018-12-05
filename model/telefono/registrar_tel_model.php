<?php 
	require_once("../../class/telefono_controller.php");
	require_once("../../PHPexcel/Classes/PHPExcel/IOFactory.php");
	require_once("../../class/conexion.php");
	$telefonos= new telefono(); 
	 
	$msj="";
	$Aux="0";

	 if (isset($_POST['tel_teclado'])) {
	 	 $telefono_input=filter_var($_POST['tel_teclado'],FILTER_SANITIZE_NUMBER_INT);
	   
	 	 if (strlen($telefono_input)!=10) {  
	 	 	$Aux="1";
	 	 	 $msj="Ingrese un número valido";
	 	 } 
	 	 elseif($Aux=="0"){
	 	 	 $insertar=$telefonos->insertar($telefono_input); 
	 		 if ($insertar==1) {
	 	 		$msj="0";
	 	 	}else{
	 	 		$msj="Número duplicado";
	 	 	}  

	 	 }
	 	echo  json_encode(array( 'InsertarTelefono'=>$msj)); 
	 }
 
	 
	 
 	 
 ?>