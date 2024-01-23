<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E5_vectoresUnordenList_2</title>
</head>
<body>
    <ul>
        <?php
        $vector=array(10,20,30,40,50,60,70,80,90,100);
        $num_elementos=count($vector);

        for ($cont= 0; $cont < $num_elementos; $cont++){
            echo"<li>Elemento $cont vale: $vector[$cont] </li>";
        }
        ?>
    </ul>
</body>
</html>