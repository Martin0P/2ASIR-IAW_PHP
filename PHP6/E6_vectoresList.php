<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E6_vectoresList</title>
</head>
<body>
<?php
$personas = [
    1 => 'Luís López',
    2 => 'Ana García',
    3 => 'Daniel Pérez',
    4 => 'Héctor Sánchez',
    5 => 'Adrián Sala'
];
echo "<b>Vectoer Asociativos</b><br>";
echo "Recorre vector con while-list(clave=>valor)<br>";

for ($clave = 1; $clave <= count($personas); $clave++) {
    echo "$clave - $personas[$clave]<br>";
}
?>
</body>
</html>