<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 align="center">Registro de telefonos</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10"> 
		</div>
		<div class="col-md-2">
			 <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
			 <i class="fas fa-plus"></i> Importar
			</button>
		</div>
	</div>


 

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				  <thead>
				   
				  </thead>
				  <tbody>
				    <tr>
				     
				      <td>9000119355</td> 
				      <td>9000119356</td> 
				      <td>9000119357</td> 
				      <td>9000119358</td> 
				      <td>9000119355</td>  
				    </tr>
				     
				  </tbody>
				</table>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar telefonos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="form-group row">
		    <label for="colFormLabel" class="col-sm-2 col-form-label fas fa-plus-circle"> Telefono</label>
		    <div class="col-sm-10">
		      <input type="tel" class="form-control" id="" placeholder="492 666 55 66">
		    </div>
		  </div>
		  <div class="input-group mb-3">
			  <div class="input-group-prepend"> 
			    <span class="input-group-text"><i class="fas fa-file-excel fa-2x"></i></span>
			  </div>
			  <div class="custom-file">
			    <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01">
			    <label class="custom-file-label">importar de excel o txt</label>
			  </div>
			</div>

 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>	