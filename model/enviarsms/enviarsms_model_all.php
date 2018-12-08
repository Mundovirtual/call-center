<?php  
 	 
	require_once("../../class/ip_cpntroller.php");
	require_once("../../class/telefono_controller.php");
 

	$mostrar=new ip();
	$url=[];
	if (isset($_POST['cargar'])) {

		$vertabla=$mostrar->index();
		$head='<select class="form-control" id="mostrar_ip" name="mostrar_ip"><option onclick="limpiar()">Seleccione</option>';
	 	$body="";

   		foreach ($vertabla as $key) {
			$body.='<option onclick="MostrarIp('."'".$key['1']."','".$key['2']."','".base64_decode($key['3'])."'".')">'.$key['1'].'</option>';
		}

		$foot="</select>";
		 
		echo  json_encode(array( 'Insertar'=> $head.$body.$foot)); 
	}
 
	if (isset($_POST['mostrar_ip']) and  isset($_POST['mostrar_usr']) and isset($_POST['mostrar_psw'])  and isset($_POST['Mensaje_Enviar'])) {
		$ip=$_POST['mostrar_ip'];
		$user=$_POST['mostrar_usr'];
		$psw=$_POST['mostrar_psw']; 
		$mensaje=filter_var($_POST['Mensaje_Enviar'],FILTER_SANITIZE_STRING);
		$msj="";
		$Aux="0";

		if (!filter_var($ip,FILTER_VALIDATE_IP)) {
			$msj="Ip: Seleccione una ip";
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
		}elseif ($Aux=='0') {
			$msj=0;
			$msj="0";
			$mostrar=new telefono();
			$EnviarSMS=$mostrar->index();
		 
			$MensajeUrl= urlencode($mensaje);


			 
			 foreach ($EnviarSMS as $key) {
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
				  		echo "cURl Error #:".$err;
				  }else{
				  		echo "Mensaje entregado satisfactoriamente al numero ".$key['1']."  ".$response."<br>";
				  }
		} 
	 
	 
 	 	//echo  json_encode(array( 'Enviar'=> $msj,'arrayUrl'=>$url)); 
 	 
	}



 
 }


 ?>
