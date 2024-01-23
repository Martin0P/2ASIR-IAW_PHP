<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E5_vectoresForeach</title>
</head>
<body>
        <?php
        $personas = array("Pepito" ,"Juanito" ,"Andresito","Pelipito" ,"Gerardito");
        echo "Contenido del vector de cadenas con Foreach: <br>";
        
        echo "<ul>";
        foreach($personas as $cadena){
            echo"<li>$cadena</li>";
        }
        echo"</ul>";
        ?>
</body>
</html>