 <?php
	 
session_start();  
if (!isset($_SESSION['activo']) or empty($_SESSION['activo'])) {
	header("location:../index.php");
	exit;
}
  
?>
