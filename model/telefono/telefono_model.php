<?php  
	require_once("../../class/telefono_controller.php");
	$telefonos= new telefono();
  
	if (isset($_POST['index']) and $_POST['index']==1) {
				$telefono=$telefonos->index(); 
			 	$tabla="";
				$i=1;


				foreach ($telefono as $key ) {
					
				$Eliminar='<button type=\"button\" class=\"btn btn-danger fas fa-trash-alt\" data-toggle=\"modal\"  data-target=\"#EliminarHackaton\" onclick=\"eliminarTEl('."'".$key['0']."'".')\"></button>';

					$tabla.='{
									  "id":"'.$i.'",
									  "tel":"'.$key['1'].'",
									  "eliminar":"'.$Eliminar.'"
								},';
				 
				 	$i++;		 
	  
		}

		$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo  '{"data":['.$tabla.']}'; 

	}
















 ?>

