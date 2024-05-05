<?php
    include ("../conexion.php");

    $Id = $_GET['Id'];
    $sql = "DELETE FROM cuenta WHERE idCuenta ='$Id'";

    $query = mysqli_query($conexion,$sql);
    if ($query === TRUE) {
        header("Location:../cuentasC.php");
    }

?>