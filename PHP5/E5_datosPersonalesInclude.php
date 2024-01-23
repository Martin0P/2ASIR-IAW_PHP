<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E5_arraySuma</title>
</head>
<body>
    <table border="1">
    <tr>
      <th><b>Nombre1</b></th>
      <th><b>Apellidos1</b></th>
      <th><b>Edad1</b></th>
      <th><b>Móvil1</b></th>
      <th><b>Nombre2</b></th>
      <th><b>Apellidos2</b></th>
      <th><b>Edad2</b></th>
      <th><b>Móvil2</b></th>
    </tr>
    <?php
    include './E5_datosPersonales.php';
    echo "<tr><td>$nombre_1</td>";
    echo "<td>$apellidos_1</td>";
    echo "<td>$edad_1</td>";
    echo "<td>$telefono_1</td>";
    echo "<td>$nombre_2</td>";
    echo "<td>$apellidos_2</td>";
    echo "<td>$edad_2</td>";
    echo "<td>$telefono_2</td></tr>";
    ?>
</body>
</html>
