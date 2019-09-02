<?php
	include 'class.configuracion.php';

	class Funciones  {
		protected $nombre;
		protected $cedula;
		protected $fecha_nac;
		protected $direccion;
		protected $telefono_pers;
		protected $telefono_casa;
		protected $correo;
		protected $id_status;
		protected $id_ciudades;
		protected $id;

		function __construct($nombre, $cedula, $fecha_nac, $direccion, $telefono_pers, $telefono_casa, $correo, $id_status, $id_ciudades, $id = '') {
			$this->nombre = $nombre;
			$this->cedula = $cedula;
			$this->fecha_nac = $fecha_nac;
			$this->direccion = $direccion;
			$this->telefono_pers = $telefono_pers;
			$this->telefono_casa = $telefono_casa;
			$this->correo = $correo;
			$this->id_status = $id_status;
			$this->id_ciudades = $id_ciudades;
			$this->id = $id;
		}

		static function nadaDato() {
			// Instancia de esta misma clase
			return new self('', '', '', '', '', '', '', '', '');
		}

		function mostrarClientes() {
			$conexion = new ConexionDB();
			$query = "SELECT * FROM clientes";
			$respuesta = $conexion->query($query);

			return $respuesta;
			$respuesta->free();
			mysqli_close($conexion);
		}

		function registrarCliente() {
			$conexion = new ConexionDB();

			$query = "INSERT INTO clientes(nombre, cedula, fecha_nac, direccion, telefono_pers, telefono_casa, correo, id_status, id_ciudades) VALUES ('$this->nombre', '$this->cedula', '$this->fecha_nac', '$this->direccion', '$this->telefono_pers', '$this->telefono_casa', '$this->correo', '$this->id_status', '$this->id_ciudades')";

			if ($conexion->query($query) === true) {
				echo "<script>
					alert('Cliente registrado satisfactoriamente.');
					window.location.href='./clientes.php';
				</script>";
			} else {
				echo "<script>
					alert('Ocurrió un error al registrar el cliente, intente nuevamente');
					window.location.href='./clientes.php';
				</script>";
			}
			$respuesta->free();
			mysqli_close($conexion);
		}

		function consultarCliente($id) {
			$conexion = new ConexionDB();
			$query = "SELECT * FROM clientes WHERE id = $id";
			$respuesta = $conexion->query($query);

			return $respuesta;
			$respuesta->free();
			mysqli_close($conexion);
		}

		function modificarCliente($id) {
			$conexion = new ConexionDB();
			$query = "UPDATE clientes SET direccion = '$this->direccion', telefono_pers = '$this->telefono_pers', telefono_casa = '$this->telefono_casa', correo = '$this->correo', id_status = '$this->id_status', id_ciudades = '$this->id_ciudades' WHERE id = $id";

			if ($conexion->query($query) === true) {
				echo "<script>
					alert('Cliente actualizado satisfactoriamente.');
					window.location.href='./clientes.php';
				</script>";
			} else {
				echo "<script>
					alert('Ocurrió un error al actualizar el cliente, intente nuevamente.');
					window.location.href='./clientes.php';
				</script>";
			}
			$respuesta->free();
			mysqli_close($conexion);
		}

		function eliminarCliente($id) {
			$conexion = new ConexionDB();
			$query = "UPDATE clientes SET id_status = 0 WHERE id = $id";

			if ($conexion->query($query) === true) {
				echo "<script>
					alert('Cliente eliminado satisfactoriamente.');
					window.location.href='./clientes.php';
				</script>";
			} else {
				echo "<script>
					alert('Ocurrió un error al eliminar el cliente, intente nuevamente.');
					window.location.href='./clientes.php';
				</script>";
			}
			$respuesta->free();
			mysqli_close($conexion);
		}

		function filtrarClientes($filtro, $cadena) {
			$conexion = new ConexionDB();
			$query = "SELECT * FROM clientes WHERE $filtro LIKE '%$cadena%'";
			$respuesta = $conexion->query($query);

			return $respuesta;
			$respuesta->free();
			mysqli_close($conexion);
		}
	}

	class RegistroValidaciones {
		protected $nombre;
		protected $usuario;
		protected $password;
		protected $correo;
		protected $activo;

		function __construct($nombre, $usuario, $password, $correo, $activo, $id = '') {
			$this->nombre = $nombre;
			$this->usuario = $usuario;
			$this->password = $password;
			$this->correo = $correo;
			$this->activo = $activo;
			$this->id = $id;
		}

		static function nadaDato() {
			// Instancia de esta misma clase
			return new self('', '', '', '', '');
		}

		function registrarUsuario() {
			$conexion = new ConexionDB();

			echo $this->nombre;
			echo $this->usuario;
			echo $this->password;
			echo $this->correo;
			echo $this->activo;


			$query = "INSERT INTO usuarios(nombre, usuario, password, correo, activo) VALUES ('$this->nombre', '$this->usuario', '$this->password', '$this->correo', '$this->activo')";

			if ($conexion->query($query) === true) {
				echo "<script>
					alert('Usuario registrado satisfactoriamente.');
					window.location.href='./index.php';
				</script>";
			} else {
				echo "<script>
					alert('Ocurrió un error al registrar el usuario, intente nuevamente');
					window.location.href='./index.php';
				</script>";
			}
			$respuesta->free();
			mysqli_close($conexion);
		}

		function validarUsuario($usuario, $password) {
			$conexion = new ConexionDB();
			$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
			$respuesta = $conexion->query($query);
			
			if ($respuesta->num_rows > 0) {
				while ($row = $respuesta->fetch_assoc()) {
					$id = $row['id'];
					$nombre = $row['nombre'];
					$usuarioa = $row['usuario'];
					$activo = $row['activo'];
					
					session_start();
					$_SESSION['id'] = $id;
					$_SESSION['nombre'] = $nombre;
					$_SESSION['usuario'] = $usuario;
					$_SESSION['activo'] = $activo;

					header('Location: ./clientes.php');
				}
			} else {
				echo "<script>
					alert('Usuario o contraseña incorrecta');
					window.location.href='./index.php';
				</script>";
			}
			return $respuesta;
			$respuesta->free();
			mysqli_close($conexion);
		}
	}
?>