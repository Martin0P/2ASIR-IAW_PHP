<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E6_vecAsociativosNombresAbr</title>
</head>
<body>
<?php
$personas = array('nom0'=>'apellido0', 'nom1'=>'apellido1' ,'nom2'=>'apellido2', 'nom3'=>'apellido3', 'nom4'=>'apellido4');
echo "<b>Vectoer asociativo con FOREACH</b><br>";

foreach($personas as $clave=>$valor){
    echo"$clave >>>>>>>> $valor<br>";
}
?>
</body>
</html>