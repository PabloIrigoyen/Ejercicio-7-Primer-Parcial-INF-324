<?php
    include ("../conexion.php");

    $Id = $_GET['Id'];
    $sql = "DELETE FROM persona WHERE idPersona ='$Id'";

    $query = mysqli_query($conexion,$sql);
    if ($query === TRUE) {
        header("Location:../admin.php");
    }

?>