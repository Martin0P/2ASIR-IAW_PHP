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
    $a = 5;
    $b = 50;
    $suma = 0;
    $cont = 0;
        switch (true) {
            case ($a>0 && $b>0):
                echo"<tr><th>Listado de Números</th>";
                echo "<th>Suma Acumulada</th></tr>";
                for ($num = $a; $num <= $b; $num+=5) {
                    echo "<tr><td>" . $num . "</td>";
                    echo "<td>" .$suma. "</td></tr>";
                    $suma += $num;
                    $cont++;
                }
                echo "<tr><td colspan='2'><b>Múltiplos Generados: " . $cont . "</b></td></tr>";               
                break;
            case ($a<0 && $b>0):
                echo "<b>No podemos usar números negativos</b><br>";
                echo "<b>Has puesto A negativo</b><br>";
                echo "<b>VALORES INTRODUCIDOS</b><br>";
                echo "<b>A=" .$a. "</b><br>";
                echo "<b>B=" .$b. "</b><br>"; 
                break;
            case ($a>0 && $b<0):
                echo "<b>No podemos usar números negativos</b><br>";
                echo "<b>Has puesto B negativo</b><br>";
                echo "<b>VALORES INTRODUCIDOS</b><br>";
                echo "<b>A=" .$a. "</b><br>";
                echo "<b>B=" .$b. "</b><br>"; 
                break;
            default:
                echo "<b>No podemos usar números negativos</b><br>";
                echo "<b>Has puesto A y B negativos</b><br>";
                echo "<b>VALORES INTRODUCIDOS</b><br>";
                echo "<b>A=" .$a. "</b><br>";
                echo "<b>B=" .$b. "</b><br>"; 
                
        }
    ?>    
  </table>
</body>
</html>