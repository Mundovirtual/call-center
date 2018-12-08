<?php 

//require_once("../model/login/security.php");
 ?> 
 <div class="container-fluid">
 	<!--==========================TITLE===========================================-->
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Ip's
			</h3>
		</div>
	</div>

</dir>

<div class="row align-items-end">
	<div class="col-md-10">
	</div>
 	 <div class="col-md-2">
 	 	<button type="button" class="btn btn-success fa fa-plus" href="#modal_registrar_ips" data-toggle="modal" >Registrar</button>
 	  </div>
		
	 
</div>


	<!--==========================TABLE===========================================-->
	<div class="container-fluid row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10"> 
			<table class="table" id="tabla_ip">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Ip</th>
			      <th scope="col">Usuario</th> 
			      <th scope="col">Contraseña</th> 
			      <th scope="col">editar</th>
			      <th scope="col">Eliminar</th>

			    </tr>
			  </thead>
			  <tbody>
			    
			  </tbody>
			</table>

		</div>
		<div class="col-md-1">
		</div>
	</div>	
</div>
<!--==========================MODAL REGISTRAR===========================================-->
<div class="modal fade" id="modal_registrar_ips" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Registrar Ip
				</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				 <form id="formularioRegistrar">
					  <div class="form-group">
					    <label>Ip's</label>
					    <input type="text" class="form-control" id="registrar_ip" name="registrar_ip" placeholder="192.168.0.0">
					  </div>
					  <div class="form-group">
					    <label>Usuario</label>
					    <input type="text" class="form-control" id="registrar_usuario" name="registrar_usuario" placeholder="Admin">
					  </div>


					<div class="form-group">
						<label>Contraseña</label>
						<div class="col-10">
							<div class="input-group-prepend">
								<button type="button" class="button fa fa-eye" id="MostrarPsw" name="MostrarPsw"></button>		 
								<input type="password" class="form-control" id="registrar_psw" name="registrar_psw" placeholder="contraseña">			
							</div>

						</div>
					</div> 
 
				 </form>
			</div>
			<div class="modal-footer">	
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					cerrar
				</button>						 
				<button type="button" class="btn btn-primary" id="registrar_ips" onclick="insertar_ip()">
					Guardar
				</button> 
				
			</div>
		</div>
		
	</div>
	
</div>
<!--==========================MODAL editar===========================================--> 
<div class="modal fade" id="modal_editar_ips" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Editar Ip
				</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				 <form id="formularioRegistrar">
					  <div class="form-group">
					    <label>Ip's</label>
					    <input type="text" class="form-control" id="editar_ip" name="editar_ip" placeholder="192.168.0.0">
					  </div>
					  <div class="form-group">
					    <label>Usuario</label>
					    <input type="text" class="form-control" id="editar_usuario" name="editar_usuario" placeholder="Admin">
					  </div>
					 <div class="form-group">
						<label>Contraseña</label>
						<div class="col-10">
							<div class="input-group-prepend">
								<button type="button" class="button fa fa-eye" id="MostrarPswEditar" name="MostrarPswEditar"></button>		 
								<input type="password" class="form-control" id="psw_editar" name="psw_editar" placeholder="contraseña">			
							</div>

						</div>
					</div> 
					  
				 </form>
			</div>
			<div class="modal-footer">	
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					cerrar
				</button>						 
				<button type="button" class="btn btn-primary" id="editar_ips" onclick="editar_ip()">
					Guardar
				</button> 
				
			</div>
		</div>
		
	</div>
	
</div>


 
<div class="modal fade" id="modal_eliminar_ips" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Editar" align="center"><i class="fas fa-trash-alt"></i>Eliminar</h5>	      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">	      		
	<h1>Estás a punto de eliminar</h2>

	Quiere proceder?
      	
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" onclick="Eliminarip()">Guardar</button>
      </div>
    </div>
  </div>
</div> 
 <script src="../model/ip/ip.js"></script> 