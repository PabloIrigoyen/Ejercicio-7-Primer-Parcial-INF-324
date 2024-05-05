<?php
    include("templates/cabecera.php");
     require 'conexion.php';
     session_start();
?>

<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
	<h3>LISTA CLIENTES</h3>
  <br>
	  <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crudgerente/crear.php" role="button">Agregar Nuevo Cliente</a>
    </div><br>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Fecha de Nacimiento</th>
          <th>Departamento</th>
          <th>Dirreccion</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            $sql = "SELECT * FROM  persona p, cliente c where p.idPersona=c.idPersona";

            $result = mysqli_query($conexion,$sql);
            while ($mostrar = mysqli_fetch_array($result)) {  
        ?>
        <tr>
        <td ><?php echo $mostrar['idPersona']?>&nbsp&nbsp</td>
            <td ><?php echo $mostrar['nombre']?>&nbsp&nbsp</td>
            <td ><?php echo $mostrar['apellidos']?>&nbsp&nbsp</td>
            <td ><?php echo $mostrar['fechaNacimiento']?>&nbsp&nbsp</td>
            <td ><?php echo $mostrar['departamento']?>&nbsp&nbsp</td>
            <td ><?php echo $mostrar['direccion']?>&nbsp&nbsp</td>
             <td>
              <a href="crudgerente/eliminar.php?Id=<?php echo $mostrar['idPersona']; ?>" class="btn btn-danger">Eliminar</a>
              <a href="crudgerente/editar.php?Id=<?php echo $mostrar['idPersona']; ?>" class="btn btn-warning">Editar</a>
            </td>
        </tr>
        <?php 
         }
          ?>
      </tbody>
    </table>
  </div>
</body>
</html>

<?php
    include("templates/pie.php");
?>