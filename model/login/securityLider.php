 <?php
	 
session_start();  
 if (!isset($_SESSION['Lider']) and $_SESSION['Lider']!="Lider") {

	header("location:../principal/miperfil.php");
	session_destroy();
}  
 
?>
