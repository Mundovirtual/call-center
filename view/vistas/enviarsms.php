<?php 
	require_once("../model/login/security.php"); 
 ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">
				Enviar mensajes
			</h1>
		</div>
	</div>
 	
 	<div class="row">
 		<div class="col-md-6">
 			<div class="input-group mb-2">
			  <div class="input-group-prepend">
			    <div class="input-group-text">
			      <input type="radio" name="opciones" id="opciones"  value="1" onclick="DB()">
			    </div>
			  </div>
			  <input type="text" class="form-control" readonly="true" value="Base de datos">
			</div>	
 		</div>

 		<div class="col-md-6">
 			<div class="input-group mb-2">
				  <div class="input-group-prepend">
				    <div class="input-group-text">
				      <input type="radio" name="opciones" id="opciones"  value="2" onclick="EX()">
				    </div>
				  </div>
				  <input type="text" class="form-control" readonly="true" value ="Importar desde excel">
				 
			</div>
		</div>
 	</div>
 
	  

	<form id="FormularioMsj">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
			    <label><h3>IP</h3></label>
			    <div id="InsertarIP"></div>
			   
 
			  </div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
			    <label><h3>Usuario</h3></label>
			    <input type="text" class="form-control border-success" id="mostrar_usr" name="mostrar_usr" readonly="true" >
			</div>
			
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label><h3>Contraseña</h3></label>
			    <div class="col-10">
					<div class="input-group-prepend">
						<button type="button" class="button fa fa-eye " id="MostrarPsw_button" name="MostrarPsw_button"></button>		 
						<input type="password" class="form-control border-success" id="mostrar_psw" name="mostrar_psw" readonly="true">			
					</div>
			    </div>
	    	</div>			
		</div> 
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
			    <label for="exampleFormControlTextarea1"><h3>Mensaje</h3></label>
			    <textarea class="form-control border-success" id="Mensaje_Enviar" name="Mensaje_Enviar" rows="3"></textarea>
			  </div>			 
		</div>
	
	</form>
		
		<div class="col-md-2">
			 <button  type="reset" class="btn btn-success"> <i class="fas fa-eraser"></i> Limpiar</button>
		</div>
		<div class="col-md-2">
			 <button  type="button" class="btn btn-primary" onclick="enviarsms()"><i class="fas fa-location-arrow"></i> enviar</button>
		</div>
	
	</div> 
</div>



<!-- Modal IMPOrtar -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Importar telefonos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="datos_Tel" name="datos_Tel">
        	 
		  <div class="input-group mb-3">
			  <div class="input-group-prepend"> 
			    <span class="input-group-text"><i class="fas fa-file-excel fa-2x"></i></span>
			  </div>
			  <div class="custom-file">
			    <input type="file"  id="excel" name="excel" accept=".xlsx,.xlsm,.csv" > 
			  </div>
			</div>

        </form>

 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        <button type="button" class="btn btn-primary" onclick="cargarExcel()">Importar</button>
      </div>
    </div>
  </div>
</div>	
 <script src="../model/enviarsms/enviarsms.js"></script> 