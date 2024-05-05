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
    <form class="container" action="editarP.php" method="POST">
        <?php
            include ('../conexion.php');
            $sql = "SELECT * FROM persona WHERE idPersona =".$_GET['Id'];
            $resultado = $conexion->query($sql);
            $row = $resultado->fetch_assoc();
        ?>

        <input type="Hidden" class="form-control" name="Id" value="<?php echo $row['idPersona']; ?>">
        <div class="mb-3">
        <label>Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="<?php echo $row['nombre']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de Nacimiento</label>
            <input type="text" class="form-control" name="fechaNacimiento" value="<?php echo $row['fechaNacimiento']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Departamento</label>
            <input type="text" class="form-control" name="departamento" value="<?php echo $row['departamento']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion" value="<?php echo $row['direccion']; ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar</button>
            <a href="../admin.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>

</body>