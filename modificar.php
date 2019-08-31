<?php
    if (empty($_GET['id'])) {
        header('location:clientes.php');
    } else {
        $id = $_GET['id'];
    }
?>

<?php $title = ' - Modificar cliente'; ?>
<?php include('header.php') ?>
<?php $conexion = new ConexionDB() ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 py-3">
          <h4 class="text-center">Formulario de actualización de cliente</h4>
				<form action="./post.php" method="POST">
					<?php 
                          $funciones = Funciones::nadaDato(); 
                          $resultado = $funciones->consultarCliente($id);
                      ?>
                      <?php while ($row = $resultado->fetch_array()): ?>
					<?php
						echo '
							<div class="form-group">
						    	<input type="hidden" name="id" class="form-control" id="iden" placeholder="" required value='. $id . '>
						  	</div>
							<div class="form-group">
						    	<label for="nombres" class="font-weight-bold">Nombre</label>
						    	<input type="text" name="nombres" class="form-control" id="nombres" placeholder="" required disabled value='. $row['nombre'] . '>
						  	</div>
						  	<div class="form-row">
						  		<div class="form-group col-2">
						  			<label for="nacionalidad" class="font-weight-bold">N°</label>
								    <select name="nacionalidad" id="nacionalidad" class="form-control" required disabled>
								    	<option selected>'. substr($row['cedula'],0,2) .' </option>
								    </select>
								</div>
								<div class="form-group col">
							    	<label for="cedula" class="font-weight-bold">Cédula</label>
							    	<input type="text" name="cedula" class="form-control" id="cedula" placeholder="" required disabled value='. substr($row['cedula'],2,strlen($row['cedula'])) .'>
							  	</div>
						  	</div>
						  	<div class="form-group">
						    	<label for="fecha_nac" class="font-weight-bold">Fecha de nacimiento</label>
						    	<input type="date" name="fecha_nac" class="form-control" id="fecha_nac" placeholder="" required disabled value='. $row['fecha_nac'] .'>
						  	</div>
						  	<div class="form-group">
						    	<label for="correo" class="font-weight-bold">Correo</label>
						    	<input type="email" name="correo" class="form-control" id="correo" placeholder="" required value='. $row['correo'] .'>
						  	</div>
						  	<div class="form-group">
						    	<label for="direccion" class="font-weight-bold">Dirección</label>
						    	<textarea name="direccion" class="form-control" id="direccion" rows="3" required>' .$row['direccion'] .'</textarea>
						  	</div>
						  	<div class="form-group">
						    	<label for="telefono_personal" class="font-weight-bold">Teléfono Personal</label>
						    	<input type="" name="telefono_pers" class="form-control" id="telefono_personal" placeholder="" required value='. $row['telefono_pers'] .'>
						  	</div>
						  	<div class="form-group">
						    	<label for="telefono_casa" class="font-weight-bold">Teléfono Casa</label>
						    	<input type="" name="telefono_casa" class="form-control" id="telefono_casa" placeholder="" required value='. $row['telefono_casa'] .'>
						  	</div>
				      		<div class="form-row">
						  		<div class="form-group col-2">
						  			<label for="status" class="font-weight-bold">Status</label>
								    <select name="status" id="status" class="form-control" required>
								    	<option selected>'. $row['id_status'] .'</option>
								    	<option>1</option>
								    </select>
								</div>
								<div class="form-group col">
							    	<label for="ciudad" class="font-weight-bold">Ciudad</label>
								    <select name="ciudad" id="ciudad" class="form-control" required>
								    	<option selected>'. $row['id_ciudades'] .'</option>
								    	<option>2</option>
								    </select>
							  	</div>
						  	</div>
						  	<div class="form-group">
							    	<input type="hidden" name="ejecutar" class="form-control" value="modificarCliente">
							  	</div
						  	<div class="text-center mb-3">
			        			<input type="submit" name="actualizar" class="btn btn-success" value="Actualizar">
			        			<a type="button" href="./clientes.php" class="btn btn-secondary">Lista de clientes</a>
						  	</div>
				      	';
		      		?>
		      		<?php endwhile; ?>
				</form>
		    </div>
	  </div>
</div>
<?php include('footer.php') ?>