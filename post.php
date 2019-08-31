<?php
	include './config/class.funciones.php';

	if (isset($_POST['registrar']) || isset($_POST['actualizar']) || isset($_POST['eliminar'])) {
		if ($_POST['ejecutar'] == 'registrarCliente') {
			$nombre = alltrim($_POST['nombres']) . " " . $_POST['apellidos'];
			$cedula = $_POST['nacionalidad'] . $_POST['cedula'];
			$fecha_nac = $_POST['fecha_nac'];
			$direccion = $_POST['direccion'];
			$telefono_pers = $_POST['telefono_pers'];
			$telefono_casa = $_POST['telefono_casa'];
			$correo = $_POST['correo'];
			$id_status = $_POST['status'];
			$id_ciudades = $_POST['ciudad'];
			$id = '';

			$funciones = new Funciones($nombre, $cedula, $fecha_nac, $direccion, $telefono_pers, $telefono_casa, $correo, $id_status, $id_ciudades);
			$funciones->registrarCliente();

		} else if ($_POST['ejecutar'] == 'modificarCliente') {
			$nombre = "";
			$cedula = "";
			$fecha_nac = "";
			$direccion = $_POST['direccion'];
			$telefono_pers = $_POST['telefono_pers'];
			$telefono_casa = $_POST['telefono_casa'];
			$correo = $_POST['correo'];
			$id_status = $_POST['status'];
			$id_ciudades = $_POST['ciudad'];
			$id = $_POST['id'];

			$funciones = new Funciones($nombre, $cedula, $fecha_nac, $direccion, $telefono_pers, $telefono_casa, $correo, $id_status, $id_ciudades);
			$funciones->modificarCliente($id);

		} else if ($_POST['ejecutar'] == 'eliminarCliente') {
			$nombre = "";
			$cedula = "";
			$fecha_nac = "";
			$direccion = "";
			$telefono_pers = "";
			$telefono_casa = "";
			$correo = "";
			$id_status = 0;
			$id_ciudades = $_POST['ciudad'];
			$id = $_POST['id'];

			$funciones = new Funciones($nombre, $cedula, $fecha_nac, $direccion, $telefono_pers, $telefono_casa, $correo, $id_status, $id_ciudades);
			$funciones->eliminarCliente($id);
		}
	}

	if (isset($_POST['registrarUsuario'])) {
		if ($_POST['password'] == $_POST['confirm_password']) {
			$nombre = $_POST['nombres'] . " " . $_POST['apellidos'];
			$usuario = $_POST['usuario'];
			$password = sha1($_POST['password']);
			$confirm_password = password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);
			$correo = $_POST['correo'];
			$activo = $_POST['activo'];

			$registroValidaciones = new RegistroValidaciones($nombre, $usuario, $password, $correo, $activo);
			$registroValidaciones->registrarUsuario();
		} else {
			echo '<script>
				alert("Las contraseñas no coinciden.")
				window.location.href="./index.php";
			</script>';
		}
		
	}

	if (isset($_POST['login'])) {
		$nombre = '';
		$correo = '';
		$activo = '';
		$usuario = FILTER_VAR($_POST['usuario'], FILTER_SANITIZE_STRING);
		$password = sha1($_POST['password']);

		$registroValidaciones = new RegistroValidaciones($nombre, $usuario, $password, $correo, $activo);
		$registroValidaciones->validarUsuario($usuario, $password);
	}
?>