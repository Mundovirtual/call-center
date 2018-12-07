<?php
include_once("conexion.php");  

class admin{

	function index(){ 
			$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT * FROM `usuario` limit 1";
	 		$resultado=mysqli_query($Conexion,$sql); 
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();

	}
 
	function editar($id,$nombre,$usuario,$psw){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="UPDATE `usuario` SET `Nombre`='$nombre',`usuario`='$usuario',`psw`='$psw' WHERE `id`='$id'"; 
		$resultado=mysqli_query($Conexion,$sql);
 		return  $resultado;
 		$Conexion->mysql_close();
	}


	function existe($usr,$psw){
			$con=new Conectar();
	 		$Conexion=$con->conexion();
	 		$sql="SELECT `id`, `Nombre`, `usuario`, `psw` FROM `usuario` WHERE `usuario`='$usr' and `psw`='$psw'";
	 		$resultado=mysqli_query($Conexion,$sql); 
	 		return  mysqli_fetch_all($resultado);
	 		$Conexion->mysql_close();
	}
 
  

}
 

 ?>