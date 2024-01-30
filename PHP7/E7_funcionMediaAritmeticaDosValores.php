<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E7_funcionSumaYPpal</title>
</head>
<body>
    <?php
    echo "<b>Programa Principal</b><br>";
    echo "El valor de los parámetros lo establecemos desde él.<br>";
    $a=10;
    $b=20;
    echo "Hacemos la llamada a la función.<br><br>";
    function media($a, $b){
        $media=($a+$b)/2;
        return $media;
    }
    echo "<b>Función Media Aritmética de Dos valores</b><br>";
    echo "Número de argumentos utilizados: 2<br>";
    echo '<br>Valor de los argumentos utilizados:<br>===================================<br>';
    echo "Argumento 1: $a <br>Argumento 2: $b <br>Ahora estoy en en Ppal";
    echo "<h1>La media de dichos argumentos es: " . media($a, $b). "</h1>";
    ?>
</body>
</html>