<?php
include_once("conexion.php");  

class ip{

	function index(){ 
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="SELECT * FROM `ip`";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}

	function insertar($ip,$usr,$psw){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="INSERT INTO `ip`(`ip`, `usr`, `psw`) VALUES('$ip','$usr','$psw')"; 
		$resultado=mysqli_query($Conexion,$sql);
 		return  $resultado;
 		$Conexion->mysql_close();
	}

  
	function editar($id,$ip,$usr,$psw){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="UPDATE `ip` SET `ip`='$ip',`usr`='$usr',`psw`='$psw' WHERE `id`='$id'";
		$resultado=mysqli_query($Conexion,$sql);
 		return  $resultado;
 		$Conexion->mysql_close();
	}
	function eliminar($id){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="DELETE FROM `ip` WHERE `id`='$id' ";
		$resultado=mysqli_query($Conexion,$sql);
		return $resultado; 
 		$Conexion->mysql_close();
	}
 
 

}
 

 ?>