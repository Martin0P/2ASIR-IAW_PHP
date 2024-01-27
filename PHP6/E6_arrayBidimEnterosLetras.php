<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Martín Olivares"> 
  <title>E6_arrayBidimEnterosLetras</title>
</head>
<body>
    <?php
    $a = 0;
    $b = 0;
    $c = 0;
    
    $numero = array(
        array(10, 20, 30),
        array(40, 50, 60),
        array(70, 80, 90)
    );
    
    $caracter = array(
        array("A", "B", "C"),
        array("D", "E", "F")
    );
    
    echo "Visualizamos con FOR anidado <br>";
    for ($a = 0; $a < 3; $a++) {
        for ($b = 0; $b < 3; $b++) {
            echo "" . $numero[$a][$b] . " ";
        }
        echo "<br>";
    }
    
    echo "<br>Visualizamos con WHILE <br>";
    while ($c < 2) {
        $d = 0;
        while ($d < 3) {
            echo "" . $caracter[$c][$d] . " ";
            $d++;
        }
        echo "<br>";
        $c++;
    }
    ?>
</body>
</html>