<?php 

require_once("../model/login/security.php");
 ?>  
<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<h3 class="card-header text-center bg-dark text-white">Mi perfil</h3>
				<div class="card-header">
					<div class="text-center">
						<i class="fas fa-user-circle fa-8x"></i>
					</div>

					<div class="row">	
						<button class="form-control btn btn-primary">Bienvenid@</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<button type="button" class="btn btn-success " id="EditarPerfil" name="EditarPerfil"><i class="fa fa-pencil-square"></i> Editar</button>
				</div>
				<div class="col-md-4"></div>
				
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<div class="progress">
				   <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"   aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>		
			    </div>
			</div>
			
			<div class="row justify-content-center">
				<div class="col-md-10">
					
					<div class="form-group text-center">
						<h2>Mis datos</h2>
					</div>
 
					<input type="hidden" class="form-control bg-white" name="id" id="id">
					 
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
					  <div class="col-10">
					    <input type="text" class="form-control bg-white" name="nombre" id="nombre">
					  </div>
					</div>
 					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Usuario</label>
					  <div class="col-10">
					    <input type="text" class="form-control bg-white"  id="Usuario" name="Usuario">
					  </div>
					</div>  
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Contraseña</label>
					  <div class="col-10">

					  	<div class="input-group-prepend">
						   	 <button type="button" class="button fa fa-eye" id="MostrarPsw" name="MostrarPsw"></button>		 
						 	 <input type="password" class="form-control" id="Contrasena" name="Contrasena" placeholder="Escriba su nueva contraseña" ></button></input>			
						</div>
 
					  </div>
					</div> 
		 			 				
				</div>
			</div>


		</div>
	</div> 

<script src="../model/mi_perfil/miperfil.js"></script>