<?php 
 header($_SERVER['SERVER_PROTOCOL'] . '200 OK');
require_once("../../class/administrador_controller.php");

	if (isset($_POST['usuario']) and isset($_POST['pass'])) {
		$msj="";
		$aux="0";


		 $login=new admin();
		 $usr=filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
		 $pass=filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

		 $validar=$login->existe($usr,$pass);
  
		 if (empty($validar)) {
		  	 $msj="Datos Inválidos ..."; 
		  	 $aux="1";
		 }else if($aux=='0'){
		 		session_start();
				$_SESSION['id'] =$validar[0];
				$_SESSION['usr'] = "06222018";  
		 }
		 echo  json_encode(array( 'aux'=> $aux,'msj'=>$msj)); 
	}

 ?>