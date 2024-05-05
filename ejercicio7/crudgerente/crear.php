<?php
    include("../templates/cabecera.php");
    include("../conexion.php");
  $message = '';

  if (!empty($_POST['idPersona'])) {

        $id=$_POST['idPersona'];
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $fecha=$_POST['fechaNacimiento'];
        $depar=$_POST['departamento'];
        $dirreccion=$_POST['direccion'];
        $idC=$_POST['idCliente'];
        $contra=$_POST['contrasena'];
        $sql = "INSERT INTO persona (idPersona,nombre,apellidos,fechaNacimiento,departamento,direccion) VALUES ('$id','$nombre','$apellidos','$fecha','$depar','$dirreccion')";
        $resultado = mysqli_query($conexion, $sql);
        $sql1 = "INSERT INTO cliente (idCliente,idPersona,contrasena) VALUES ('$idC','$id','$contra')";
        $resultado1 = mysqli_query($conexion, $sql1);
        if ($resultado==TRUE AND $resultado1==TRUE) {
         $message = 'Se registro exitosamente';
         echo $message;
       } else {
         $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
         echo $message;
       }
  
  }

?>
<hml>

      <body background="imagenes/fondo2.jpg">
          <center><h3>Nuevo Cliente</h3></center>
          <form action="crear.php" method="POST" style="text-align:center">
            <input name="idPersona" type="text" placeholder="Id">
            <input name="nombre" type="text" placeholder="Nombre">
            <input name="apellidos" type="text" placeholder="Apellido">
            <input name="fechaNacimiento" type="text" placeholder="Fecha de Nacimiento">
            <input name="departamento" type="text" placeholder="Departamento">
            <input name="direccion" type="text" placeholder="Direccion">
            </br>
            <input name="idCliente" type="text" placeholder="Id Cliente">
            <input name="contrasena" type="text" placeholder="Password">
            <?php if(!empty($message)): ?>
             <p > <?= $message ?></p>
            <?php endif; ?>
            <input type="submit" value="Submit">
          </form>

      </body>

</hml>