<?php
    session_start();
    $varusuario = $_SESSION['usuario'];
    if ($varusuario == null || $varusuario == '') {
        header('Location: ./index.php');
    }
    
    $title = ' - Información cliente';
    include('header.php');
    $conexion = new ConexionDB();

    if (empty($_GET['id'])) {
        header('location:clientes.php');
    } else {
        $id = $_GET['id'];
    }

    $funciones = Funciones::nadaDato(); 
    $resultado = $funciones->eliminarCliente($id);
?>