<?php

    include_once("../conexion.php");
    $message = '';
    $id = $_POST['Id'];
    $nombre = $_POST['Nombre'];
    $apellidos = $_POST['apellidos'];
    $fecNac = $_POST['fechaNacimiento'];
    $depar = $_POST['departamento'];
    $dir= $_POST['direccion'];
    $sql = "UPDATE persona SET 
            nombre='".$nombre."',
            fechaNacimiento='".$fecNac."',
            departamento='".$depar."',
            direccion='".$dir."' WHERE idPersona =".$id."";
    $resultado = $conexion->query($sql);
    if ($resultado==TRUE) {
        $message = 'Se registro exitosamente';
        echo $message;
        header("../cuentasG.php");
    } else {
        $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
        echo $message;
    }
?>