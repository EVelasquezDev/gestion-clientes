<?php

	session_start();
    $varusuario = $_SESSION['usuario'];
    if ($varusuario == null || $varusuario == '') {
        header('Location: ./index.php');
    }

	if (empty($_GET['filtrar'])) {
		header('location: clientes.php');
	} else {
		$filtro = $_GET['filtro'];
		$cadena = $_GET['cadena'];
	}
?>

<?php $title = ' - Filtro'; ?>
<?php include('header.php') ?>
<?php $conexion = new ConexionDB() ?>
	
	<div class="container-fluid">

		<div class="row justify-content-center">
			<div class="col-md-12 col-lg-10 py-3">
				<div class="row">
					<div class="col py-2">
						<h3 class="text-center">Lista de clientes</h3>
						<form action="./buscar.php" method="GET">
							<div class="form-row">
						  		<div class="form-group col-lg-2 col-sm-2">
						  			<label for="campoFiltro">Filtro</label>
								    <select name="filtro" id="campoFiltro" class="form-control" required>
								    	<option selected value="nombre">Nombre</option>
								    	<option value="cedula">Cédula</option>
								    	<option value="correo">Correo</option>
										<option value="id_status">Status</option>
								    </select>
								</div>
								<div class="form-group col-lg-9 col-sm-8">
							    	<label for="cadena">Cadena</label>
							    	<input type="text" name="cadena" class="form-control" id="cadena" placeholder="" required>
							  	</div>
							  	<div class="form-group col-lg-1 col-sm-2">
							  		<label for="filtrar">Acción</label>
									<input type="submit" class="btn btn-primary" name="filtrar" value="Filtrar">
							  	</div>
							</div>
						  </form>
					</div>
				</div>
				
				<div class="table-responsive">
					<table class="table table-striped">
					  	<thead>
					    	<tr>
					      	<th scope="col">Cédula</th>
					      	<th scope="col">Nombres</th>
					      	<th scope="col">Correo</th>
					      	<th scope="col">Ciudad</th>
					      	<th scope="col">Status</th>
					      	<th scope="col">Acciones</th>
					    	</tr>
					  	</thead>
					  	<tbody>
					  		<?php 
					  			$funciones = Funciones::nadaDato(); 
					  			$resultado = $funciones->filtrarClientes($filtro, $cadena);
					  		?>

					  		<?php while ($row = $resultado->fetch_array()): ?>
								<tr>
									<td> <?php echo $row['cedula']; ?> </td>
									<td> <?php echo $row['nombre']; ?> </td>
									<td> <?php echo $row['correo']; ?> </td>
									<td> <?php echo $row['id_ciudades']; ?> </td>
									<td> <?php echo $row['id_status']; ?> </td>
									<td>
										<?php 
										echo '
											<a href="ver.php?id=' . $row['id'] . '" name="ver">
												<i class="fas fa-user-check"></i>
											</a>
											<a href="modificar.php?id=' . $row['id'] . '" name="modificar">
												<i class="fas fa-user-edit"></i>
											</a>
											<a href="eliminar.php?id=' . $row['id'] . '" name="eliminar">
												<i class="fas fa-user-times"></i>
											</a>
										';
										?>
									</td>
								</tr>
					  		<?php endwhile; ?>
					  	</tbody>
					</table>
				</div>

				<nav aria-label="Paginación" class="my-2">
				  	<ul class="pagination justify-content-center">
				    	<li class="page-item disabled">
				      		<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
				    	</li>
				    	<li class="page-item"><a class="page-link" href="#">1</a></li>
				    	<li class="page-item disabled">
				      		<a class="page-link" href="#">Next</a>
				    	</li>
				  	</ul>
				</nav>
			</div>
		</div>
	</div>

<?php include('footer.php') ?>