<?php  
	require_once("../../class/telefono_controller.php");
	$telefonos= new telefono();
  
	if (isset($_POST['index']) and $_POST['index']==1) {
				$telefono=$telefonos->index(); 
			 	$tabla="";
				$i=1;
				foreach ($telefono as $key ) {
					
					$tabla.='{
									  "id":"'.$i.'",
									  "tel":"'.$key['1'].'"
								},';
				 
				 	$i++;		 
	  
		}

		$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo  '{"data":['.$tabla.']}'; 

	}
















 ?>

