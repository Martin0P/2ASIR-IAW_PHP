<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Martín Olivares"> 
  <title>E6_matricesMediaEstaturaPorSexosTabla</title>
</head>
<body>
        <?php
        $num_h = 0;
        $num_m = 0;
        $sum_alt_h = 0;
        $sum_alt_m = 0;
        $med_alt_h = 0;
        $med_alt_m = 0;
        $cont = 0;


        $personas = array(
            array(172, 165, 179, 163, 170, 174),
            array("H", "M", "H", "M", "M", "H")
        );
        
        for ($altura = 0; $altura < count($personas[0]); $altura++) {
            if($personas[1][$altura] == "H"){
                $num_h++;
                $med_alt_h += $personas[0][$altura];
                echo"";
            }else{
                $num_m++;
                $med_alt_m += $personas[0][$altura];
            }
        }

        if($num_h > 0){
            $sum_alt_h += $med_alt_h;
            $med_alt_h /= $num_h;
        }
        if($num_m > 0){
            $sum_alt_m += $med_alt_m;
            $med_alt_m /= $num_h;
        }
        
        echo "<p>Contenido de la Matriz<br>=====================</p>";
        echo '<table border="1"><tr>';
        foreach ($personas[0] as $altura) {
                    echo "<td>$altura</td>";
                }
        echo'</tr><tr>';
        foreach ($personas[1] as $sexo) {
                    echo "<td>$sexo</td>";
                }
        echo'</tr></table>';
        echo "<br><p>Tabla Resultados<br>======================</p>";
        echo '<table border="1">';
        echo"<tr><td></td><td><b>Mujeres</b></td><td><b>Hombres</b></td></tr>";
        echo"<tr><td><b>Número</b></td><td><b>$num_m</b></td><td><b>$num_h</b></td></tr>";
        echo"<tr><td><b>Suma Alturas</b></td><td><b>$sum_alt_m</b></td><td><b>$sum_alt_h</b></td></tr>";
        echo"<tr><td><b>Media Alturas</b></td><td><b>$med_alt_m</b></td><td><b>$med_alt_h</b></td></tr>";
        echo'</table>';
        ?>
</body>
</html>