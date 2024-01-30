<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E7_funcionSumaYPpal</title>
</head>
<body>
    <?php
    echo "Asignamos Valores a las variables<br>";
    $a=10;
    $b=20;
    echo '$a= ' .$a. '<br>$b=' .$b. '<br>';
    function suma($a, $b){
        $suma=($a+$b);
        return $suma;
    }

    echo 'A continuación hacemos la llamada a la función<br>';
    echo "La suma de $a y $b es " .suma($a, $b);
    ?>
</body>
</html>