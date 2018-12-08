<?php 
	session_start();

	set_time_limit(4800);  
	require_once("../../PHPexcel/Classes/PHPExcel/IOFactory.php");
	require_once("../../class/conexion.php");
/*Importar desde excel*/
	
	$errores=[];
	$enviados=[];
	$telefonos=[];


	 if (isset($_FILES['archivoExcel'])) {
	 	 	$excelArchivo=$_FILES['archivoExcel'];
  
			$ruta = '../../Upload/';	 
			
			$nombre=$excelArchivo["name"];
			$ruta_temporal=$excelArchivo["tmp_name"];		
			$destino=$ruta.$nombre;	
		 
		 	if (is_readable($destino)) {
			   unlink($destino);
			}  
			
			move_uploaded_file($ruta_temporal, $destino);
  			
			//Variable con el nombre del archivo
			$nombreArchivo =$destino;
			// Cargo la hoja de cálculo
			$objPHPExcel = PHPExcel_IOFactory::load($nombreArchivo);
			
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow(); 

			 for ($i = 0; $i <= $numRows; $i++) {

					$tel=$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();

					if (strlen($tel)==10) {
						$telefonos[]= filter_var($tel,FILTER_SANITIZE_NUMBER_INT); 
   						}
				
		 	}
	  	$_SESSION['telefonos']=$telefonos; 
}
 
/*Enviar msj*/
if (isset($_POST['mostrar_ip']) and  isset($_POST['mostrar_usr']) and isset($_POST['mostrar_psw'])  and isset($_POST['Mensaje_Enviar'])) { 
		$ip=$_POST['mostrar_ip'];
		$user=$_POST['mostrar_usr'];
		$psw=$_POST['mostrar_psw']; 
		$mensaje=filter_var($_POST['Mensaje_Enviar'],FILTER_SANITIZE_STRING);
		$msj="";
		$Aux="0";

		if (!filter_var($ip,FILTER_VALIDATE_IP)) {
			$msj="Ip: Selecciona una ip";
			$Aux="1";
		}elseif(strlen($user)<3){
			$msj="Usuario: Usuario no valido";
			$Aux="1";
		}elseif(strlen($psw)<3){
			$msj="Contraseña: Contraseña no valida";
			$Aux="1";
		}else if (strlen($mensaje)<3) {
			$msj="Mensaje: Mínimo 3 caracteres ";
			$Aux="1";	 
		}else if(empty($_SESSION['telefonos'])){
			$msj="No has seleccionado los Números teléfonicos";
			$Aux="1";
		}
		elseif ($Aux=='0') { 
			$msj="0"; 
		 
			$MensajeUrl= urlencode($mensaje);


			 
			foreach ($_SESSION['telefonos'] as $key) {
				$enviando= "https://".$ip."/sendsms?username=".$user."&password=".$psw."&phonenumber=".$key['1']."&message=".$MensajeUrl;
	  		 
				 $ch = curl_init();
				  curl_setopt_array($ch, array(
				  	CURLOPT_URL=>$enviando,
				  	CURLOPT_RETURNTRANSFER =>true,
				  	CURLOPT_ENCODING=>"",
				  	CURLOPT_MAXREDIRS=>10,
				  	CURLOPT_TIMEOUT=>30,
				  	CURLOPT_HTTP_VERSION=>CURL_HTTP_VERSION_1_1, 
				  	CURLOPT_CUSTOMREQUEST=>"GET",
				  	CURLOPT_SSL_VERIFYHOST=>0,
				  	CURLOPT_SSL_VERIFYPEER=>0,
				  ));

				  $response=curl_exec($ch);
				  $err=curl_error($ch);

				  if ($err) {
				  		$errores[]="cURl Error #:".$err."<br>";
				  }else{
				  		$enviados[]= $response."<br>";
				  }
	 
		}
			 
	}
		echo  json_encode(array( 'Enviar'=> $msj,'enviandos'=>$enviados,'errores'=>$errores)); 
		 
}
?>