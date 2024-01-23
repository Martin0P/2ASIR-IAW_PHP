<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E5_vectoresUnordenListRange</title>
</head>
<body>
    <ul>
        <?php
        $vector = range(10, 100, 10); // Crea un vector con valores de 10 a 100 en incrementos de 10
        $num_elementos=count($vector);

        for ($cont= 0; $cont < $num_elementos; $cont++){
            echo"<li>Elemento $cont vale: $vector[$cont] </li>";
        }
        ?>
    </ul>
</body>
</html>