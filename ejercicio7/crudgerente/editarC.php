<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">EDITAR CLIENTES</h1>
    <br>
    <form class="container" action="editarPC.php" method="POST">
        <?php
            include ('../conexion.php');
            $sql = "SELECT * FROM cuenta WHERE idCuenta =".$_GET['Id'];
            $resultado = $conexion->query($sql);
            $row = $resultado->fetch_assoc();
        ?>

        <input type="Hidden" class="form-control" name="Id" value="<?php echo $row['idCuenta']; ?>">
        <div class="mb-3">
        <label>Tipo de Cuenta</label>
        <input type="text" class="form-control" name="tipoCuenta" value="<?php echo $row['tipoCuenta']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Id Cliente</label>
            <input type="text" class="form-control" name="idPersona" value="<?php echo $row['idPersona']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Departamento</label>
            <input type="text" class="form-control" name="departamento" value="<?php echo $row['departamento']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nro de Cuenta</label>
            <input type="text" class="form-control" name="numeroCuenta" value="<?php echo $row['numeroCuenta']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Codigo Cuenta</label>
            <input type="text" class="form-control" name="codigoCuenta" value="<?php echo $row['codigoCuenta']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Saldo</label>
            <input type="text" class="form-control" name="saldo" value="<?php echo $row['saldo']; ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar</button>
            <a href="../admin.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>

</body>