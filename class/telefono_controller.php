<?php
include_once("conexion.php");  

class telefono{

	function index(){ 
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="SELECT * FROM `telefonos`";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysqli_close();
	}

	function insertar($telefono){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="INSERT INTO `telefonos`( `telefono`) VALUES ('$telefono')";  
		$resultado=mysqli_query($Conexion,$sql); 
 		 return  $resultado;
	}

   
 
 

}
 

 ?>