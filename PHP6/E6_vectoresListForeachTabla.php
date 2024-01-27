<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E6_vectoresListForeachTabla</title>
</head>
<body>
    <table border="1">
    <tr>
      <th><b>Nombre</b></th>
      <th><b>Apellido</b></th>
    </tr>
    <?php
    $personas = ['Luís' => 'López', 'Ana' => 'García', 'Daniel' => 'Pérez', 'Héctor' => 'Sánchez', 'Adrián' => 'Sala'];
    
    foreach($personas as $clave=>$cadena){
        echo"<tr><th>$clave</th>";
        echo"<th>$cadena</th></tr>";
    }
    ?>
    </table>
</body>
</html>