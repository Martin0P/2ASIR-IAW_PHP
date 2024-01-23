<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="Martín Olivares"> 
  <title>E3_SumaMuestraTabla</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>Listado de Números</th>
    </tr>
    <?php
    $n_ini = 200;
    $n_fin = 500;
    $suma = 0;

    for ($num = $n_ini; $num <= $n_fin; $num++) {
      echo "<tr><td>" . $num . "</td></tr>";
      $suma += $num;
    }
    echo "<tr><td><b>Suma de los números es: " . $suma . "</b></td></tr>";
    ?>
  </table>
</body>
</html>
