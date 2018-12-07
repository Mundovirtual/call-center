 <?php
	 
session_start();  
if (!isset($_SESSION['usr']) or !isset($_SESSION['id']) and $_SESSION['usr']!='06222018') {
	header("location:../index.php");
	exit;
	session_destroy(); 
}

  
?>
