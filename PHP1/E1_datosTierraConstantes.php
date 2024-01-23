<html>
    <head>
        <title> E1_datosTierra.php</title>
    </head>
    <body>
        <?PHP
        define ("radio",6378);
        define ("distancia",149597871);
        define ("pi2", 3.14159265);
        echo "El radio de la Tierra siguient el Ecuadoes es: <b>" .radio. " Km</b><br>";
        echo "La distancia de la Tierra al Sol es: <b>" .distancia. " Km</b><br>";
        echo "La longitud de la vuelta al Sol de la Tierra es: <b>" .(distancia*pi2*2). " Km</b><br>";
        echo "La longitud equivalente a vueltas a la Tierra es: <b>" .((distancia*pi2*2)/radio). " vueltas</b><br>";
        ?>
    </body>
</html>