<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E5_arraySuma</title>
</head>
<body>
    <h1>Declara Y Recore Vectores</h1>
    <?php
    echo "Declara array unidimensiona<br><br>";
    $vector=array(10,20,30,40,50);
    
    echo"Recorre array<br><br>";
    $num_elementos=count($vector);
    $suma=0;
    echo"Número de elementos del array: $num_elementos<br><br>";
    
    echo "Los elementos del array son: <br>";
    for ($cont= 0; $cont < $num_elementos; $cont++){
        echo"$vector[$cont]<br>";
        $suma+=$vector[$cont];
    }
    echo "<br><b>SUMA = $suma<b>";
    ?>
</body>
</html>