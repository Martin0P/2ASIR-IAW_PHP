<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E5_arraySumaMediaTabla</title>
</head>
<body>
    <h3>Suma Y Media de array como tabla</h3>
    <table border="1">
    <tr>
      <th><b>Posición</b></th>
      <th><b>Valor</b></th>
    </tr>
    <?php
    $vector=array(100,200,300,400,500);
    $num_elementos=count($vector);
    $suma=0;
    
    for ($cont= 0; $cont < $num_elementos; $cont++) {
      echo "<tr><td>" . $cont . "</td>";
      echo "<td>" .$vector[$cont]. "</td></tr>";
      $suma+=$vector[$cont];
    }
    echo "<tr><td> <b>SUMA</b> </td>";
    echo "<td><b>" .$suma. "</b></td></tr>";
    echo "<tr><td> <b>Meia</b> </td>";
    echo "<td><b>" .($suma/$num_elementos). "</b></td></tr>";
    ?>
</body>
</html>