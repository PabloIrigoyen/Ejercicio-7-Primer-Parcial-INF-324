<?php
    include("../templates/cabecera.php");
    include("../conexion.php");
  $message = '';

  if (!empty($_POST['idPersona'])) {

        $id=$_POST['idCuenta'];
        $tipoCuenta=$_POST["tipoCuenta"];
        $idCliente=$_POST["idPersona"];
        $depar=$_POST['departamento'];
        $nroCuenta=$_POST['numeroCuenta'];
        $codigoCuenta=$_POST['codigoCuenta'];
        $saldo=$_POST['saldo'];
        $sql = "INSERT INTO cuenta (idCuenta,tipoCuenta,idPersona,departamento,numeroCuenta,codigoCuenta,saldo) VALUES ('$id','$tipoCuenta','$idCliente','$depar','$nroCuenta','$codigoCuenta','$saldo')";
        $resultado = mysqli_query($conexion, $sql);
        if ($resultado==TRUE) {
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
          <center><h3>Nuevo Cuenta</h3></center>
          <form action="crearC.php" method="POST" style="text-align:center">
            <input name="idCuenta" type="text" placeholder="Id">
            <input name="tipoCuenta" type="text" placeholder="Tipo de Cuenta">
            <input name="idPersona" type="text" placeholder="Id del Cliente">
            <input name="departamento" type="text" placeholder="Departamento">
            <input name="numeroCuenta" type="text" placeholder="Nro Cuenta">
            <input name="codigoCuenta" type="text" placeholder="Codigo de la Cuenta">
            <input name="saldo" type="text" placeholder="Saldo en Bs">
            <?php if(!empty($message)): ?>
             <p > <?= $message ?></p>
            <?php endif; ?>
            <input type="submit" value="Submit">
          </form>

      </body>

</hml>