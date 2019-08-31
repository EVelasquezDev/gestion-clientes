<?php
	include_once './config/class.funciones.php' 
?>

<!DOCTYPE html>
<html lang="ES">
<head>
	<title> Gestión de Clientes <?php echo $title; ?> </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<div class="container-fluid">
		<header id="header" class="">
			<div class="row">
				<div class="col">
					
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			 	<a class="navbar-brand" href="../"><?php echo NOMBREWEB; ?></a>
			  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			  	</button>

			  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    	<ul class="navbar-nav ml-auto">
			    		<?php if(!empty($_SESSION['nombre'])): ?>
			    		<li>
			    			<a class="nav-link" href="#">
			    				<?php echo $_SESSION['nombre']; ?>
			    			</a>
			      		</li>
			      		<li class="nav-item dropdown">
			        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          			Clientes
			        		</a>
			        		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			        			<a class="dropdown-item" href="./clientes.php">Lista de Clientes</a>
				          		<button class="dropdown-item" data-toggle="modal" data-target="#modalRegistrar">Registrar Cliente</button>
				          		<!-- <button class="dropdown-item" data-toggle="modal" data-target="#modalModificar">Modificar Cliente</button>
				          		<button class="dropdown-item" data-toggle="modal" data-target="#modalEliminar">Eliminar Cliente</button>
				          		<div class="dropdown-divider"></div> -->
				          		<!-- <a class="dropdown-item" id="modalBuscar">Buscar Clientes</a> -->
			        		</div>
			      		</li>
			      		<li>
			      			<a class="nav-link" href="./salir.php">
			          			Salir
			        		</a>
			      		</li>
			      	<?php else: ?>
						
			      	<?php endif; ?>
			    	</ul>
			  	</div>
			</nav>
		</header>
	</div>
	<?php include('./registrar.php') ?>