 <?php
	 
session_start();  
 if (!isset($_SESSION['Hacker']) and $_SESSION['Hacker']!="Hacker") {

	header("location:../principal/miperfil.php");
	session_destroy();
}  
 
?>
