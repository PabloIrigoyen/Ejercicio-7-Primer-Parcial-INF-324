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
          $sql = "SELECT departamento, SUM(CASE WHEN departamento='La Paz' THEN saldo ELSE 0 END) AS lp,
                  SUM(CASE WHEN departamento='Cochabamba' THEN saldo ELSE 0 END) AS cbba,
                  SUM(CASE WHEN departamento='Santa Cruz' THEN saldo ELSE 0 END) AS stc,
                  SUM(CASE WHEN departamento='Tarija' THEN saldo ELSE 0 END) AS trj,
                  SUM(CASE WHEN departamento='Sucre' THEN saldo ELSE 0 END) AS suc,
                  SUM(CASE WHEN departamento='Potosi' THEN saldo ELSE 0 END) AS pts,
                  SUM(CASE WHEN departamento='Oruro' THEN saldo ELSE 0 END) AS oru,
                  SUM(CASE WHEN departamento='Beni' THEN saldo ELSE 0 END) AS bn,
                  SUM(CASE WHEN departamento='Pando' THEN saldo ELSE 0 END)  AS pn FROM cuenta GROUP BY departamento DESC";
          $result = $conexion->query($sql);   
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {  
              ?>
              <tr>
              <td ><?php echo $row['departamento']?>&nbsp&nbsp</td>
              <?php if($row['departamento']=='La Paz'){
                ?>
                <td ><?php echo $row['lp']?>&nbsp&nbsp</td>
              <?php
              }
              ?>
              <?php
              if ($row['departamento']=='Cochabamba'){
                ?>
                <td ><?php echo $row['cbba']?>&nbsp&nbsp</td>
              <?php
              }
              ?>
              <?php
              if ($row['departamento']=='Santa Cruz'){
                ?>
                <td ><?php echo $row['stc']?>&nbsp&nbsp</td>
              <?php
              }
              ?>
              <?php
              if ($row['departamento']=='Tarija'){
                ?>
                <td ><?php echo $row['trj']?>&nbsp&nbsp</td>
              <?php
              }
              ?>
              <?php
              if ($row['departamento']=='Sucre'){
                ?>
                <td ><?php echo $row['suc']?>&nbsp&nbsp</td>
              <?php
              }
              ?>
              <?php
              if ($row['departamento']=='Potosi'){
                ?>
                <td ><?php echo $row['pts']?>&nbsp&nbsp</td>
              <?php
              }
              ?>
              <?php
              if ($row['departamento']=='Oruro'){
                ?>
                <td ><?php echo $row['oru']?>&nbsp&nbsp</td>
              <?php
              }
              ?>
              <?php
              if ($row['departamento']=='Beni'){
                ?>
                <td ><?php echo $row['bn']?>&nbsp&nbsp</td>
              <?php
              }
              ?>
              <?php
              if ($row['departamento']=='Pando'){
                ?>
                <td ><?php echo $row['pn']?>&nbsp&nbsp</td>
              <?php
              }
              ?>
              
              </tr>
              <?php        
            }
          }
          ?>            
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>

<?php
    include("templates/pie.php");
?>
