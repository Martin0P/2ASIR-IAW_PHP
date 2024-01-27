<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E6_vectoresListForeach</title>
</head>
<body>
    <h3>Vectoer Asociativos-Foreach()</h3>
    <?php
    $personas = ['Luís' => 'López', 'Ana' => 'García', 'Daniel' => 'Pérez', 'Héctor' => 'Sánchez', 'Adrián' => 'Sala'];
    echo "Recorre el vector creado: <br>";

    echo "<ul>";
    foreach($personas as $clave=>$cadena){
        echo"<li>$clave => $cadena</li>";
    }
    echo"</ul>";
    ?>
</body>
</html>