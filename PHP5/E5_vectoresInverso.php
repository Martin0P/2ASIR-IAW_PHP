<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E5_vectoresInverso</title>
</head>
<body>
        <?php
        $personas = array("","Pepito" ,"Juanito" ,"Andresito","Pelipito" ,"Gerardito","");
        echo "Contenido del vector de cadenas con WHILE-END-PREV: <br>";
        
        end($personas);
        echo "<ul>";
        while ($cadena= prev($personas)){
            echo"<li>$cadena</li>";
        }
        echo"</ul>";
        ?>
</body>
</html>