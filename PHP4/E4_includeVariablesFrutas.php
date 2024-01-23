<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="Martín Olivares"> 
  <title>E4_DatosPersonales</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>Variable</th>
      <th>Valor</th>
    </tr>
    <?php
    include './E4_varsFrutas.php';
    echo "<tr><td>Fruta</td>";
    echo "<td>$fruta</td></tr>";
    echo "<tr><td>Tamaño</td>";
    echo "<td>$tamaño</td></tr>";
    echo "<tr><td>Color</td>";
    echo "<td>$color</td></tr>";
    echo "<tr><td>Posición</td>";
    echo "<td>$posicion</td></tr>";
    ?>
  </table>
</body>
</html>