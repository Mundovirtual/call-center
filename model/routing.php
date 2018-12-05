 <?php 
  
	class enrutador{
		public function cargarVista($vista){
 		 
			switch ($vista) {
			   
			    case "2": 
			        require_once"vistas/registros.php";			         
			        break;
			    case "3": 
			        require_once "vistas/enviarsms.php";			         
			        break;
		        case "4": 
		        	require_once "vistas/miperfil.php";			         
		        break;
		        case "5": 
		        	require_once "vistas/ip.php";			         
		        break;
		     
			    default:
			    	require_once "vistas/registros.php";
			    	break;	 
			}

		}
		
		public function validarGET($variable){ 
			if (empty($variable)) { 
				 include_once("vistas/registros.php");

			}
			else{
				return true;
			}
		} 
	}


?>