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

	<form id="FormularioMsj">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
			    <label><h3>IP</h3></label>
			    <div id="InsertarIP"></div>
			   
 
			  </div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
			    <label><h3>Usuario</h3></label>
			    <input type="text" class="form-control border-success" id="mostrar_usr" name="mostrar_usr" readonly="true" >
			</div>
			
		</div>
		<div class="col-md-3">
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
		<div class="col-md-3">
			<div class="form-group">
			    <label><h3>Tiempo *</h3></label>
			    <input type="text" class="form-control border-success" id="tiempo" placeholder="En segundos" name="tiempo">
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
		<div class="col-md-12 align-items-end">
			 <button  type="button" class="btn btn-primary" onclick="enviar()">enviar</button>
		</div>
	
	</div>
	<div class="row">
		<div class="col-md-12 align-content-center">
			<h1 class="align-items-center">progress</h1>
			<div class="progress">
			  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
			</div>
		</div>
	</div>
</div>

 <script src="../model/enviarsms/enviarsms.js"></script> 