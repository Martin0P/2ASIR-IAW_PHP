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
    $n_ini = 1;
    $n_fin = 15;
    $num = 1;
    $suma = 0;

    for ($cont = $n_ini; $cont <= $n_fin; $cont++) {
      $num*=5;
      echo "<tr><td>" . $num . "</td></tr>";
      $suma += $num;
      
    }
    echo "<tr><td><b>Suma de los números es: " . $suma . "</b></td></tr>";
    ?>
  </table>
</body>
</html>