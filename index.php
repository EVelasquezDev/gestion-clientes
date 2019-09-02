<?php
	session_start();
    if (!empty($_SESSION['usuario'])) {
        header('Location: ./clientes.php');
    }
?>

<?php $title = ''; ?>
<?php include('header.php') ?>
	<div class="container">
		<div class="row espaciado">
			<div class="col">
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-6 col-12">
				<div class="p-3">
					<form action="./post.php" method="POST">
						<div class="image-login text-center">
							<img src="./images/auto-carrera.png" class="img-fluid">
						</div>
						<!--  -->
						<h3 class="text-center"> Ingresar al sistema </h3>
						<div class="form-group">
							<label for="usuario">Usuario: </label>
							<input type="text" name="usuario" placeholder="Ingrese su usuario" id="usuario" required class="form-control">
						</div>
						
						<div class="form-group">
							<label for="password">Contraseña: </label>
							<input type="password" name="password" placeholder="Ingrese su contraseña" id="password" required class="form-control">
						</div>

						<div class="botones-login text-center">
							<button type="submit" name="login" class="btn btn-success"> Ingresar </button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row espaciado">
			<div class="col">
			</div>
		</div>
	</div>

<?php include('registroUsuario.php') ?>
<?php include('footer.php') ?>