<?php
  $url_base="http://localhost/primerparcial324/";
?>

<!doctype html>
<html lang="en">

<head>
  <title>Administrador del Sitio Web</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../style.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"></script>

  <script src="https://kit.fontawesome.com/adf4b83af6.js" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
  <header >
    <!-- place navbar here -->
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link" href="<?php echo $url_base;?>ejercicio7">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>ejercicio7/cuentasG.php">Cuentas</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>ejercicio7/clientes.php">Clientes</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>ejercicio7/sumaMonto.php">Monto por Departamento</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>ejercicio7/cerrar.php">Cerrar Sesion</a>
           
        </div>
    </nav>

  </header>
  <main class="container">
</br>