<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Martín Olivares"> 
  <title>E6_matricesMediaEstaturaPorSexos</title>
</head>
<body>
    <?php
    $num_h = 0;
    $num_m = 0;
    $med_alt_h = 0;
    $med_alt_m = 0;
    $cont = 0;
    
    
    $personas = array(
        array(172, 165, 179, 163, 170, 174),
        array("H", "M", "H", "M", "M", "H")
    );
    
    for ($altura = 0; $altura < 6; $altura++) {
        if($personas[1][$altura] == "H"){
            $num_h++;
            $med_alt_h += $personas[0][$altura];
        }else{
            $num_m++;
            $med_alt_m += $personas[0][$altura];
        }
    }
    
    if($num_h > 0){
        $med_alt_h /= $num_h;
    }
    if($num_m > 0){
        $med_alt_m /= $num_h;
    }
    echo "Número de Hombres de la muestra:<br>$num_h<br>";
    echo "Número de Mujeres de la muestra:<br>$num_m<br>";
    echo "La media de altura de los Hombres (en cm) es:<br>" .round($med_alt_h,0). "<br>";
    echo "La media de altura de los Mujeres (en cm) es:<br>" .round($med_alt_m,0). "<br>";
    ?>
</body>
</html>