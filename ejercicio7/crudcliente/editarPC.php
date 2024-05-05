<?php

    include_once("../conexion.php");
    $message = '';
    $id = $_POST['Id'];
    $nombre = $_POST['tipoCuenta'];
    $idPersona = $_POST['idPersona'];
    $depar = $_POST['departamento'];
    $nroCuenta = $_POST['numeroCuenta'];
    $codigoCuenta= $_POST['codigoCuenta'];
    $saldo=$_POST['saldo'];
    $sql = "UPDATE cuenta SET 
            tipoCuenta='".$nombre."',
            idPersona='".$idPersona."',
            departamento='".$depar."',
            numeroCuenta='".$nroCuenta."',
            codigoCuenta='".$codigoCuenta."' WHERE idCuenta =".$id."";
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