<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="Martín Olivares"> 
  <title>E3_SumaMuestraTablaAcumulados</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>Listado de Números</th>
      <th>Suma</th>
    </tr>
    <?php
    $n_ini = 1;
    $n_fin = 500;
    $suma = 0;

    for ($num = $n_ini; $num <= $n_fin; $num++) {
      echo "<tr><td>" . $num . "</td>";
      echo "<td>" .$suma. "</td></tr>";
      $suma += $num;
      
    }
    echo "<tr><td colspan='2'><b>Suma de los números es: " . $suma . "</b></td></tr>";
    ?>
  </table>
</body>
</html>
