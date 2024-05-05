<?php
    include("templates/cabeceraCliente.php");
     require 'conexion.php';
     session_start();
?>

<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
	<h3>LISTA CUENTAS</h3>
  <br>
	  <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crudcliente/crearC.php" role="button">Agregar Nueva Cuenta</a>
    </div><br>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tipo de Cuenta</th>
          <th>Nombre del Titular</th>
          <th>Departamento</th>
          <th>NroCuenta</th>
          <th>Saldo</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            include ("conexion.php");
           
            $usuario= $_SESSION['nombre'];
           
            $result = mysqli_query($conexion,"SELECT * FROM  cuenta as A INNER JOIN persona as B ON (B.idPersona=A.idPersona) and B.nombre='$usuario'");
            while ($mostrar = mysqli_fetch_array($result)) {  
        ?>
        <tr>
        <?php 
         $sqlp="SELECT nombre, apellidos FROM persona WHERE idPersona =$mostrar[idPersona]";
         $result2 = mysqli_query($conexion,$sqlp);
         $mostrar2 = mysqli_fetch_array($result2);
        ?>
        <td ><?php echo $mostrar['idCuenta']?>&nbsp&nbsp</td>
            <td ><?php echo $mostrar['tipoCuenta']?>&nbsp&nbsp</td>
            <td ><?php echo $mostrar2['nombre']; echo " ";  echo $mostrar2['apellidos']?>&nbsp&nbsp</td>
            <td ><?php echo $mostrar['departamento']?>&nbsp&nbsp</td>
            <td ><?php echo $mostrar['numeroCuenta']?>&nbsp&nbsp</td>
            <td ><?php echo $mostrar['saldo']?>&nbsp&nbsp</td>
             <td>
              <a href="crudcliente/eliminarC.php?Id=<?php echo $mostrar['idCuenta']; ?>" class="btn btn-danger">Eliminar</a>
              <a href="crudcliente/editarC.php?Id=<?php echo $mostrar['idCuenta']; ?>" class="btn btn-warning">Editar</a>
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