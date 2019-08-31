<?php
    if (empty($_GET['id'])) {
        header('location:clientes.php');
    } else {
        $id = $_GET['id'];
    }
?>

<?php $title = ' - Información cliente'; ?>
<?php include('header.php') ?>
<?php $conexion = new ConexionDB() ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 py-3">
          <h4 class="text-center">Información Cliente</h4>
          <div class="table-responsive">
              <table class="table">
                  <tbody>
                      <?php 
                          $funciones = Funciones::nadaDato(); 
                          $resultado = $funciones->consultarCliente($id);
                      ?>
                      <?php while ($row = $resultado->fetch_array()): ?>
                          <tr>
                              <th>Id:</th>
                              <td><?php echo $row['id']; ?></td>
                          </tr>
                          <tr>
                              <th>Cédula:</th>
                              <td><?php echo $row['cedula']; ?></td>
                          </tr>
                          <tr>
                              <th>Nombre:</th>
                              <td><?php echo $row['nombre']; ?></td>
                          </tr>
                          <tr>
                              <th>Fecha de nacimiento:</th>
                              <td><?php echo $row['fecha_nac']; ?></td>
                          </tr>
                          <tr>
                              <th>Dirección:</th>
                              <td><?php echo $row['direccion']; ?></td>
                          </tr>
                          <tr>
                              <th>Teléfono personal:</th>
                              <td><?php echo $row['telefono_pers']; ?></td>
                          </tr>
                          <tr>
                              <th>Teléfono habitación:</th>
                              <td><?php echo $row['telefono_casa']; ?></td>
                          </tr>
                          <tr>
                              <th>Correo:</th>
                              <td><?php echo $row['correo']; ?></td>
                          </tr>
                          <tr>
                              <th>Ciudad:</th>
                              <td><?php echo $row['id_ciudades']; ?></td>
                          </tr>
                          <tr>
                              <th>Status:</th>
                              <td><?php echo $row['id_status']; ?></td>
                          </tr>
                          <tr>
                              <th></th>
                              <td>
                                <?php
                                  echo '
                                      <a class="btn btn-info" href="./clientes.php">Lista de Clientes</a>
                                      <a class="btn btn-warning" href="./modificar.php?id=' . $row['id'] .'" name="modificar">Modificar Cliente</a>
                                    ';
                                  ?>
                              </td>
                          </tr>
                      <?php endwhile; ?>
                  </tbody>
              </table>
              
          </div>
		    </div>
	  </div>
</div>
<?php include('footer.php') ?>