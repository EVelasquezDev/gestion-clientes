<?php

	define('NOMBREWEB', 'Gestion Clientes');

	class ConexionDB extends mysqli {
		private $HOST_DB = "127.0.0.1";
		private $USER_DB = 'root';
		private $PASS_DB = '';
		private $NAME_DB = 'gestclidb';

		public function __construct() {
			parent::__construct($this->HOST_DB, $this->USER_DB, $this->PASS_DB, $this->NAME_DB);

			$this->set_charset('UTF-8');

			$this->connect_errno ? die ('Ocurrió un error al conectar con la DB' . mysqli_connect_errno()) : $mensaje_conex = '';

			echo $mensaje_conex;
		}
	}
?>