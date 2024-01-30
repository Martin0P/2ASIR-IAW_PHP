<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E7_funcionSumaYPpal</title>
</head>
<body>
    <?php
    echo "<b> Estamos en Programa Principal</b><br>";
    echo "El valor de los parámetros lo establecemos desde él.<br>";
    $numeros = array(10, 20, 30, 40);
    
    
    echo "Hacemos la llamada a la función.<br><br>";
    function media(){
        $num_args = func_num_args();
        $args = func_get_args();
        $suma = array_sum($args);
        $media = $suma / $num_args;

        return $media;
    }
    
    echo "<b>Función Media Aritmética</b><br>";
    echo "Número de argumentos utilizados: " . count($numeros). "<br>";
    echo '<br>Valor de los argumentos utilizados:<br>===================================<br>';
    foreach($numeros as $clave=>$numero){
        echo"Prámetro $clave ==> Valor: $numero <br>";
    }
    echo "<h1>La media de dichos argumentos es: " . media(...$numeros) . "</h1>";
    echo "Ahora estoy en en Ppal";
    ?>
</body>
</html>