<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="Martín Olivares"> 
  <title>E3_SumaMultiplos5</title>
</head>
<body>
  <table border="1">
    <?php
    $a = 50;
    $b = 5;
    $suma = 0;
    $cont = 0;
    
    if($a>$b){
        echo "A=$a<br>B=$b<br><br>";
        $temp = $a;
        $a = $b;
        $b = $temp;
        echo "Hay que intercambiar A y B, pues no se cumple que A es menor a B<br>";
        echo "NUEVOS VALORES<br>";
        echo "A=$a<br>B=$b<br><br>";
        } 
        
    if ($a>0 && $b>0){
        echo"<tr><th>Listado de Números</th>";
        echo "<th>Suma Acumulada</th></tr>";
        
        for ($num = $a; $num <= $b; $num+=5) {
            echo "<tr><td>" . $num . "</td>";
            echo "<td>" .$suma. "</td></tr>";
            $suma += $num;
            $cont++;
        }
        
        echo "<tr><td colspan='2'><b>Múltiplos Generados: " . $cont . "</b></td></tr>";
    } else {
        echo "<b>Valor de A o B es negativo </b>";
    } 
    ?>    
  </table>
</body>
</html>