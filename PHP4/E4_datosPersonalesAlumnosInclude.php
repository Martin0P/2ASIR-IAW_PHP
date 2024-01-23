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
      <th colspan="2">Datos Personales Alumnos</th>
    </tr>
    <?php
    include './E4_datosPersonalesAlumnos.php';
    echo "<tr><td>Nombre</td>";
    echo "<td>$nombre_1</td></tr>";
    echo "<tr><td>Apellidos</td>";
    echo "<td>$apellidos_1</td></tr>";
    echo "<tr><td>Edad</td>";
    echo "<td>$edad_1</td></tr>";
    echo "<tr><td>Tlf Móvil</td>";
    echo "<td>$telefono_1</td></tr>";
    echo "<tr><td colspan='2'>=============</td></tr>";
    echo "<tr><td>Nombre</td>";
    echo "<td>$nombre_2</td></tr>";
    echo "<tr><td>Apellidos</td>";
    echo "<td>$apellidos_2</td></tr>";
    echo "<tr><td>Edad</td>";
    echo "<td>$edad_2</td></tr>";
    echo "<tr><td>Tlf Móvil</td>";
    echo "<td>$telefono_2</td></tr>";
    echo "<tr><tdtd colspan='2>=============</td></tr>";
    ?>
  </table>
</body>
</html>
