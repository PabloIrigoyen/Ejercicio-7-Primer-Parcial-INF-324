<?php
    include("templates/cabecera.php");
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
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Departamento</th>
          <th>Monto</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          $sql = "SELECT SUM(saldo) AS total FROM cuenta WHERE departamento = 'La Paz'";
          $result = $conexion->query($sql);
          $row = $result->fetch_assoc();      
          $total = $row["total"];
          
          ?>
            <td >La Paz</td>
            <td ><?php echo $total?>&nbsp&nbsp</td>
             
        </tr>
        <tr>
          <?php
          $sql = "SELECT SUM(saldo) AS total FROM cuenta WHERE departamento = 'Cochabamba'";
          $result = $conexion->query($sql);
          $row = $result->fetch_assoc();      
          $total = $row["total"];
          
          ?>
            <td >Cochabamba</td>
            <td ><?php if($total>0){echo $total;}else{echo "0";}?>&nbsp&nbsp</td>
             
        </tr>
        <tr>
        <?php
          $sql = "SELECT SUM(saldo) AS total FROM cuenta WHERE departamento = 'Santa Cruz'";
          $result = $conexion->query($sql);
          $row = $result->fetch_assoc();
          $total = $row["total"];
          
        ?>
            <td >Santa Cruz</td>
            <td ><?php echo $total?>&nbsp&nbsp</td>
             
        </tr>
        <tr>
        <?php
          $sql = "SELECT SUM(saldo) AS total FROM cuenta WHERE departamento = 'Tarija'";
          $result = $conexion->query($sql);
          $row = $result->fetch_assoc();      
          $total = $row["total"];
          
          ?>
            <td >Tarija</td>
            <td ><?php echo $total?>&nbsp&nbsp</td>
             
        </tr>
        <tr>
        <?php
          $sql = "SELECT SUM(saldo) AS total FROM cuenta WHERE departamento = 'Sucre'";
          $result = $conexion->query($sql);
          $row = $result->fetch_assoc();      
          $total = $row["total"];
          
          ?>
            <td >Sucre</td>
            <td ><?php echo $total?>&nbsp&nbsp</td>
             
        </tr>
        <tr>
        <?php
          $sql = "SELECT SUM(saldo) AS total FROM cuenta WHERE departamento = 'Potosi'";
          $result = $conexion->query($sql);
          $row = $result->fetch_assoc();      
          $total = $row["total"];
          
        ?>
            <td >Potosi</td>
            <td ><?php echo $total?>&nbsp&nbsp</td>
             
        </tr>
        <tr>
        <?php
          $sql = "SELECT SUM(saldo) AS total FROM cuenta WHERE departamento = 'Oruro'";
          $result = $conexion->query($sql);
          $row = $result->fetch_assoc();      
          $total = $row["total"];
          
          ?>
            <td >Oruro</td>
            <td ><?php echo $total?>&nbsp&nbsp</td>
             
        </tr>
        <tr>
        <?php
          $sql = "SELECT SUM(saldo) AS total FROM cuenta WHERE departamento = 'Beni'";
          $result = $conexion->query($sql);
          $row = $result->fetch_assoc();      
          $total = $row["total"];
          
          ?>
            <td >Beni</td>
            <td ><?php echo $total?>&nbsp&nbsp</td>
             
        </tr>
        <tr>
        <?php
          $sql = "SELECT SUM(saldo) AS total FROM cuenta WHERE departamento = 'Pando'";
          $result = $conexion->query($sql);
          $row = $result->fetch_assoc();      
          $total = $row["total"];
          
          ?>
            <td >Pando</td>
            <td ></td>
             
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>

<?php
    include("templates/pie.php");
?>