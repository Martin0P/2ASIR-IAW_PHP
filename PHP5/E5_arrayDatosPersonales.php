<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="autor" content="Martín Olivares"> 
  <title>E5_arrayDatosPersonales</title>
</head>
<body>
    <?php
    include './E5_datosPersonales.php';
    $datos=array();
    
    $datos[]=$nombre_1;
    $datos[]=$apellidos_1;
    $datos[]=$edad_1;
    $datos[]=$telefono_1;
    $datos[]=$nombre_2;
    $datos[]=$apellidos_2;
    $datos[]=$edad_2;
    $datos[]=$telefono_2;
    
    $num_elementos=count($datos);
    echo "<b>Los Datos del array son: </b><br>";
    for ($cont= 0; $cont < $num_elementos; $cont++){
        echo"$datos[$cont]<br>";
    }
    ?>
</body>
</html>
