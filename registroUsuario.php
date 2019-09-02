<div class="modal fade" id="modalRegistrarUsuario" tabindex="-1" role="dialog" aria-labelledby="modalRegistroUsuarioCenter" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="modalRegistroUsuarioCenter">Registrar Usuario</h5>
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
								<div class="form-group">
							    	<label for="usuario" class="font-weight-bold">Usuario</label>
							    	<input type="text" name="usuario" class="form-control" id="usuario" placeholder="" required>
							  	</div>
							  	<div class="form-group">
							    	<label for="password" class="font-weight-bold">Contraseña</label>
							    	<input type="password" name="password" class="form-control" id="password" placeholder="" required>
							  	</div>
							  	<div class="form-group">
							    	<label for="confirm_password" class="font-weight-bold">Confirmar contraseña</label>
							    	<input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="" required>
							  	</div>
							  	<div class="form-group">
							    	<label for="correo" class="font-weight-bold">Correo</label>
							    	<input type="email" name="correo" class="form-control" id="correo" placeholder="" required>
							  	</div>
							  	<div class="form-check">
								  	<input class="form-check-input" type="checkbox" name="activo" value="1" id="activo">
								  	<label class="form-check-label" for="activo">
								    	Activo
								  	</label>
								</div>
							  	<div class="form-group">
							    	<input type="hidden" name="ejecutar" class="form-control" value="registrarUsuario">
							  	</div>
							  	<div class="modal-footer">
					        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					        		<input type="submit" class="btn btn-primary" name="registrarUsuario" value="Registrar">
					      		</div>
							</form>
						</div>
					</div>
				</div>
      		</div>
    	</div>
 	</div>
</div>
