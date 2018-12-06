 <?php
	 
	session_start();  
 if (!isset($_SESSION['Juez']) and $_SESSION['Juez']!="Juez") {

	header("location:../principal/miperfil.php");
	session_destroy();
}  
 
?>
