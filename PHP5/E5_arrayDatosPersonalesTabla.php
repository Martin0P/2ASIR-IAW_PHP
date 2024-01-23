<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Martín Olivares"> 
  <title>E5_arrayDatosPersonales</title>
</head>
<body>
    <table border="1">
        <h3>Array Datos Alumno Tabla</h3>
        <tr>
          <th colspan="2"><b>Datos Personales</b></th>
        </tr>
        <?php
        include './E5_datosPersonales.php';
        $datos = array();

        $datos[0]['nombre'] = $nombre_1;
        $datos[0]['apellidos'] = $apellidos_1;
        $datos[0]['edad'] = $edad_1;
        $datos[0]['telefono'] = $telefono_1;
        $datos[1]['nombre'] = $nombre_2;
        $datos[1]['apellidos'] = $apellidos_2;
        $datos[1]['edad'] = $edad_2;
        $datos[1]['telefono'] = $telefono_2;

        foreach ($datos as $persona) {
            foreach ($persona as $clave => $valor) {
                echo "<tr><td><b>$clave</b></td><td>$valor</td></tr>";
            }
        }
        ?>
    </table>
</body>
</html>
