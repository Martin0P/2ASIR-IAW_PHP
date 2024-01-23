<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E5_vectoresUnordenList_1</title>
</head>
<body>
    <ul>
        <?php
        $vector[0]=10;
        $vector[1]=20;
        $vector[2]=30;
        $vector[3]=40;
        $vector[4]=50;
        $vector[5]=60;
        $vector[6]=70;
        $vector[7]=80;
        $vector[8]=90;
        $vector[9]=100;
        $num_elementos=count($vector);

        for ($cont= 0; $cont < $num_elementos; $cont++){
            echo"<li>Elemento $cont vale: $vector[$cont] </li>";
        }
        ?>
    </ul>
</body>
</html>