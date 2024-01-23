<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="Martín Olivares"> 
  <title>E3_SumaMultiplos5</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>Listado de Múltiplos</th>
    </tr>
    <?php
    $n_ini = 0;
    $n_fin = 15*5;
    $suma = 0;

    for ($num = $n_ini; $num <= $n_fin; $num+=5) {
      echo "<tr><td>" . $num . "</td></tr>";
      $suma += $num;
      
    }
    echo "<tr><td><b>Suma de los números es: " . $suma . "</b></td></tr>";
    ?>
  </table>
</body>
</html>
