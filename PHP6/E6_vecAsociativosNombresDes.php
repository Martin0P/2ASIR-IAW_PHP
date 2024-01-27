<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E6_vecAsociativosNombresDes</title>
</head>
<body>
<?php
$personas = array(
    'nom5' => 'apellido5',
    'nom6' => 'apellido6',
    'nom7' => 'apellido7',
    'nom8' => 'apellido8',
    'nom9' => 'apellido9'
);
echo "<b>Vectoer asociativo con FOREACH</b><br>";

foreach($personas as $clave=>$valor){
    echo"$clave >>>>>>>> $valor<br>";
}
?>
</body>
</html>