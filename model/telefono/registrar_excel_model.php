<?php 
	set_time_limit(4800);  
	require_once("../../class/telefono_controller.php");
	require_once("../../PHPexcel/Classes/PHPExcel/IOFactory.php");
	require_once("../../class/conexion.php");
	$telefonos= new telefono();  
	$errores=0;
	$insertados=0; 
	
	 if (isset($_FILES['archivoExcel'])) {
	 	 	$excelArchivo=$_FILES['archivoExcel'];
  
			$ruta = '../../Upload/';	 
			
			$nombre=$excelArchivo["name"];
			$ruta_temporal=$excelArchivo["tmp_name"];		
			$destino=$ruta.$nombre;	
		 
		 	if (is_readable($destino)) {
			   unlink($destino);
			}  
			
			move_uploaded_file($ruta_temporal, $destino);
  			
			//Variable con el nombre del archivo
			$nombreArchivo =$destino;
			// Cargo la hoja de cálculo
			$objPHPExcel = PHPExcel_IOFactory::load($nombreArchivo);
			
			//Asigno la hoja de calculo activa
			$objPHPExcel->setActiveSheetIndex(0);
			//Obtengo el numero de filas del archivo
			$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
		 	 
			 for ($i = 0; $i <= $numRows; $i++) {

					$tel=$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();

					if (strlen($tel)==10) {
						$insertar=$telefonos->insertar(filter_var($tel,FILTER_SANITIZE_NUMBER_INT)); 
						if ($insertar==1) {
							$insertados++; 
						}
						 
					}else{
						$errores++;				 
					}
					 
				}
 
				 echo  json_encode(array( 'error'=> $errores,'insert'=>$insertados));  
		 	}

    	  
			
 			 
	 
 	 
 ?>