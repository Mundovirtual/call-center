<?php  
require_once("../../class/ip_cpntroller.php");
require_once("../../class/telefono_controller.php");
	$mostrar=new ip();

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
		$time=$_POST['tiempo'];
		$mensaje=$_POST['Mensaje_Enviar'];
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
			/*$msj="0";
			$mostrar=new telefono();
			$EnviarSMS=$mostrar->index();
		 
			$MensajeUrl= urlencode($mensaje);
			foreach ($EnviarSMS as $key) {
				$enviando= "https://".$ip."/sendsms?username=".$user."&password=".$psw."&phonenumber=".$key['1']."&message=".$MensajeUrl;
			 	header('Location:'.$enviando.'.');
			  

			}*/
			$url[0]="https://docs.presta-module.com/fr/listado-de-todas-las-url/"; 
			$url[1]="https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS/Errors/CORSDidNotSucceed?utm_source=devtools&utm_medium=firefox-cors-errors&utm_campaign=default";
			$url[2]="localhost/phpmyadmin/sql.php?db=hacky&table=proyecto&pos=0";
			$url[3]="https://es.ccm.net/faq/537-php-como-direccionar-a-otra-pagina-web";
			$url[4]="";
			$url[5]="";
			$url[6]="";
			$url[7]="";
			$url[8]="";
			$url[9]="";
			$url[10]="";
			$url[11]="";
			$url[12]="";
			$url[13]="";
			$url[14]="";
			$url[15]="";
			$url[16]="";
			$url[17]="";
			$url[18]="";
			$url[19]="";
			$url[20]=

		}
 		echo  json_encode(array( 'Enviar'=> $msj)); 

	}

 
 
 ?>