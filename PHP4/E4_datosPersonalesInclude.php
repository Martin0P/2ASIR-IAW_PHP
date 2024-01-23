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
      <th colspan="2">Datos Personales</th>
    </tr>
    <?php
    include './E4_datosPersonales.php';
    echo "<tr><td>Nombre</td>";
    echo "<td>$nombre</td></tr>";
    echo "<tr><td>Apellidos</td>";
    echo "<td>$apellidos</td></tr>";
    echo "<tr><td>Edad</td>";
    echo "<td>$edad</td></tr>";
    echo "<tr><td>Tlf Móvil</td>";
    echo "<td>$telefono</td></tr>";
    ?>
  </table>
</body>
</html>
