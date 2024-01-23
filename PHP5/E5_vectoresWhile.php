<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E5_vectoresWhile</title>
</head>
<body>
        <?php
        $personas = array("","Pepito" ,"Juanito" ,"Andresito","Pelipito" ,"Gerardito","");
        echo "Contenido del vector de cadenas con WHILE-RESET-NEXT: <br>";
        
        reset($personas);
        echo "<ul>";
        while ($cadena= next($personas)){
            echo"<li>$cadena</li>";
        }
        echo"</ul>";
        ?>
</body>
</html>