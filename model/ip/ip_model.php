<?php 
require_once("../../class/ip_cpntroller.php");

	$mostrar=new ip();

	/*Mostrar ips*/

	if (isset($_POST['index'])) {
		$vertabla=$mostrar->index(); 
		 	$tabla="";
			$i=1;
			foreach ($vertabla as $key ) {
			 
			$Editar='<button type=\"button\" id=\"modal_editar\" onclick=\"editar('."'".$key['0']."','".$key['1']."','".$key['2']."','".$key['3']."'".')\" class=\"btn btn-success fas fa-edit\" data-toggle=\"modal\" data-target=\"#modal_editar_ips\" value=\"'.$key['0'].'\"></button>';
			 	 

			$Eliminar=  '<button type=\"button\" id=\"modal_eliminar\" onclick=\"Eliminar('."'".$key['0']."'".')\" class=\"btn btn-danger fas fa-trash-alt\" data-toggle=\"modal\"  data-target=\"#modal_eliminar_ips\"></button>';

			 
 			 	$tabla.='{
								  "id":"'.$i.'",
								  "ip":"'.$key['1'].'",
								  "usr":"'.$key['2'].'",
								  "psw":"'.$key['3'].'", 
								  "Editar":"'.$Editar.'",
								  "Eliminar":"'.$Eliminar.'" 
							},';
			 
			 	$i++;	
	}

	$tabla= substr($tabla,0, strlen($tabla)-1); 
	echo '{"data":['.$tabla.']}'; 



		  
	}

	/*==================================REGISTRAR=====================================================*/
if (isset($_POST['insertar']) and isset($_POST['ip_insertar']) and isset($_POST['user_insertar']) and isset($_POST['psw_insertar'])) {
	 
	$ip=sanitizar($_POST['ip_insertar']);
	$usr=sanitizar($_POST['user_insertar']);
	$psw=sanitizar($_POST['psw_insertar']);
	$msj="";
	$Aux="0";

	if (!filter_var($ip,FILTER_VALIDATE_IP)) {
		$msj="Ingrese una ip valida";
		$Aux="1";
	}elseif(strlen($usr)<4){
		$msj="Usuario: longitud minima 4 caracteres";
		$Aux="1";
	}elseif(strlen($psw)<4){
		$msj="Contraseña: longitud minima 4 caracteres";
		$Aux="1";
	}elseif ($Aux=='0') {
		  $nuevo=$mostrar->insertar($ip,$usr,$psw);
		   if ($nuevo==1) {
			 	$msj="0";
			 }else{
			 	$msj="Ya existe un registro";
			 }  
	}
	echo  json_encode(array( 'Insertar'=>$msj)); 
}








	/*====================================EDITAR================================================*/
if (isset($_POST['editar']) and isset($_POST['id_editar']) and isset($_POST['ip_editar']) and isset($_POST['user_editar']) and isset($_POST['psw_editar'])) { 
	$id= sanitizar($_POST['id_editar']);
	$ip= sanitizar($_POST['ip_editar']);
	$usr= sanitizar($_POST['user_editar']);
	$psw= sanitizar($_POST['psw_editar']);

	$msj="";
	$Aux="0";

	if (!filter_var($ip,FILTER_VALIDATE_IP)) {
		$msj="Ingrese una ip valida";
		$Aux="1";
	}elseif(strlen($usr)<4){
		$msj="Usuario: longitud minima 4 caracteres";
		$Aux="1";
	}elseif(strlen($psw)<4){
		$msj="Contraseña: longitud minima 4 caracteres";
		$Aux="1";
	}elseif ($Aux=='0') {
		  $update=$mostrar->editar($id,$ip,$usr,$psw);
		   if ($update==1) {
			 	$msj="0";
			 }else{
			 	$msj="Ha ocurrido un error inesperado";
			 }  
	}
	echo  json_encode(array( 'Mensaje'=>$msj)); 

}


/*===========================ELIMINAR==================================================*/
if (isset($_POST['eliminar']) and isset($_POST['id_eliminar'])) {
	$id=$_POST['id_eliminar'];
	$eliminar=$mostrar->eliminar($id);
	if ($eliminar=='1') {
		$msj="0";
	}else{
		$msj="Ha ocurrido un error inesperado";
	}
		echo  json_encode(array( 'Eliminar'=>$msj)); 
}




 	function sanitizar($text){ 		
 		$variable=filter_var($text, FILTER_SANITIZE_STRING);
 		return htmlspecialchars($variable);
 	}



?>