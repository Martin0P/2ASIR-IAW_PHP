<?php
include './E4_compraArticulosHeader.php';

$freno=15;
$rueda=7;
$aceite=4 ;

echo "Suponiendo que hemos comprado las siguientes unidades: <br>" ;
echo "numFrenos= " .$freno. "<br>";
echo "numAceite= " .$aceite. "<br>";
echo "numRuedas= " .$rueda. "<br><br><br>";

switch (true) {
    case ($freno == 0 && $rueda == 0 && $aceite == 0 ):
        echo "No Comprados: frenos, ruedas y aceite";
        echo "<br><br>La petición ha de contener todos los tipos de artículos!!";
        break;
    case ($freno == 0 && $rueda == 0 && $aceite == 1 ):
        echo "No Comprados: frenos y ruedas";
        echo "<br><br>La petición ha de contener todos los tipos de artículos!!";
    case ($freno == 0 && $rueda == 1 && $aceite == 0 ):
        echo "No Comprados: frenos y aceite";
        echo "<br><br>La petición ha de contener todos los tipos de artículos!!";
        break;
    case ($freno == 0 && $rueda == 1 && $aceite == 1 ):
        echo "No Comprados: frenos";
        echo "<br><br>La petición ha de contener todos los tipos de artículos!!";
        break;
    case ($freno == 1 && $rueda == 0 && $aceite == 0 ):
        echo "No Comprados: ruedas y aceite";
        echo "<br><br>La petición ha de contener todos los tipos de artículos!!";
        break;
    case ($freno == 1 && $rueda == 0 && $aceite == 1 ):
        echo "No Comprados: ruedas";
        echo "<br><br>La petición ha de contener todos los tipos de artículos!!";
        break;
    case ($freno == 1 && $rueda == 1 && $aceite == 0 ):
        echo "No Comprados: aceite";
        echo "<br><br>La petición ha de contener todos los tipos de artículos!!";
        break;

    default:
        echo "Se han comprado todos los artículos <br>";
        echo "Su petición es la siguiente:<br>";
        echo "Frenos= " .$freno. "<br>";
        echo "Aceite= " .$aceite. "<br>";
        echo "Ruedas= " .$rueda. "<br><br>";
        echo "Número de elementos solicitados: " .($freno+$aceite+$rueda). "<br>";
        echo "Subtotal: " .((p_freno*$freno)+(p_aceite*$aceite)+(p_rueda*$rueda)). "€";
        echo "<br>Total con el IVA: " .(((p_freno*$freno)+(p_aceite*$aceite)+(p_rueda*$rueda))+(((p_freno*$freno)+(p_aceite*$aceite)+(p_rueda*$rueda))*0.21)). "€";
    }
        include './E4_compraArticulosFooter.php';
        
    ?>