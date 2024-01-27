<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Martín Olivares"> 
  <title>E6_matricesJugadores</title>
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


        $jugadores = array(
            array("Lionel Messi", "Cristiano Ronaldo", "Neymar"),
            array("Kylian Mbappé", "Robert Lewandowski", "Mohamed Salah"),
            array("Kevin De Bruyne", "Sergio Ramos", "Virgil van Dijk")
        );
        
        for ($a = 0; $a < 3; $a++) {
            for ($b = 0; $b < 3; $b++) {
                echo "Fila $a -Columna $b<br>";
                echo "<ul><li>" .$jugadores[$a][$b]. "</li></ul>";
            }
        }        
        ?>
</body>
</html>