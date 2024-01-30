<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E7_funcionSumaYPpal</title>
</head>
<body>
    <?php
    echo "<b> Programa Principal</b><br>";
    echo "Creamos el vector de valores.<br>";
    $numeros = array(10, 20, 30);
    
    
    echo "Hacemos la llamada a la función con dicho vector.<br><br>";
    function media_array(){
        $num_args = func_num_args();
        $args = func_get_args();
        $suma = array_sum($args);
        $media = $suma / $num_args;

        return $media;
    }
    
    echo "<b>Función Media Aritmética</b><br>";
    echo "Número de argumentos utilizados: " . count($numeros). "<br>";
    echo '<br>Valor de los argumentos utilizados:<br>===================================<br>';
    print_r($numeros);
    echo "<h1>La media de dichos argumentos es: " . media_array(...$numeros) . "</h1>";
    ?>
</body>
</html>