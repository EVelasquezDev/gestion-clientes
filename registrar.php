<div class="modal fade" id="modalRegistrar" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarCenter" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="modalRegistrarCenter">Registrar Cliente</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
      		<div class="modal-body">
      			<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-12">
							<!-- <h4 class="text-center">Formulario de registro de cliente</h4> -->
							<form action="./post.php" method="POST">
								<div class="form-group">
							    	<label for="nombres" class="font-weight-bold">Nombres</label>
							    	<input type="text" name="nombres" class="form-control" id="nombres" placeholder="" required>
							  	</div>
							  	<div class="form-group">
							    	<label for="apellidos" class="font-weight-bold">Apellidos</label>
							    	<input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="" required>
							  	</div>
							  	<div class="form-row">
							  		<div class="form-group col-2">
							  			<label for="nacionalidad" class="font-weight-bold">N°</label>
									    <select  name="nacionalidad" id="nacionalidad" class="form-control" required>
									    	<option selected>V-</option>
									    	<option>E-</option>
									    </select>
									</div>
									<div class="form-group col">
								    	<label for="cedula" class="font-weight-bold">Cédula</label>
								    	<input type="text" name="cedula" class="form-control" id="cedula" placeholder="" required>
								  	</div>
							  	</div>
							  	<div class="form-group">
							    	<label for="fecha_nac" class="font-weight-bold">Fecha de nacimiento</label>
							    	<input type="date" name="fecha_nac" class="form-control" id="fecha_nac" placeholder="" required>
							  	</div>
							  	<div class="form-group">
							    	<label for="correo" class="font-weight-bold">Correo</label>
							    	<input type="email" name="correo" class="form-control" id="correo" placeholder="" required>
							  	</div>
							  	<div class="form-group">
							    	<label for="direccion" class="font-weight-bold">Dirección</label>
							    	<textarea name="direccion" class="form-control" id="direccion" rows="3" required></textarea>
							  	</div>
							  	<div class="form-group">
							    	<label for="telefono_personal" class="font-weight-bold">Teléfono Personal</label>
							    	<input type="" name="telefono_pers" class="form-control" id="telefono_pers" placeholder="" required>
							  	</div>
							  	<div class="form-group">
							    	<label for="telefono_casa" class="font-weight-bold">Teléfono Casa</label>
							    	<input type="" name="telefono_casa" class="form-control" id="telefono_casa" placeholder="">
							  	</div>
							  	<div class="form-row">
							  		<div class="form-group col-2">
							  			<label for="status" class="font-weight-bold">Status</label>
									    <select name="status" id="status" class="form-control" required>
									    	<option selected>1</option>
									    	<option>0</option>
									    </select>
									</div>
									<div class="form-group col">
								    	<label for="ciudad" class="font-weight-bold">Ciudad</label>
									    <select name="ciudad" id="ciudad" class="form-control" required>
									    	<option selected>1</option>
									    	<option>2</option>
									    </select>
								  	</div>
							  	</div>
							  	<div class="form-group">
							    	<input type="hidden" name="ejecutar" class="form-control" value="registrarCliente">
							  	</div>
							  	<div class="modal-footer">
					        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					        		<input type="submit" class="btn btn-primary" name="registrar" value="Registrar">
					      		</div>
							</form>
						</div>
					</div>
				</div>
      		</div>
    	</div>
 	</div>
</div>