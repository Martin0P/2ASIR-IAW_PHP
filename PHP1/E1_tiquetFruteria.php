<?php
    define("PRECIO_JUDIAS", 3.50);
    define("PRECIO_PATATAS", 0.4);
    define("PRECIO_TOMATES", 1);
    define("PRECIO_MANZANAS", 1.2);
    define("PRECIO_UVAS", 2.5);
    
    $peso_judias = 1.21;
    $peso_patatas = 1.73;
    $peso_tomates = 2.08;
    $peso_manzanas = 2.15;
    $peso_uvas = 0.77;
    
    $coste_judias = PRECIO_JUDIAS * $peso_judias;
    $coste_patatas = PRECIO_PATATAS * $peso_patatas;
    $coste_tomates = PRECIO_TOMATES * $peso_tomates;
    $coste_manzanas = PRECIO_MANZANAS * $peso_manzanas;
    $coste_uvas = PRECIO_UVAS * $peso_uvas;
    
    echo "PRODUCTO - PRECIO Euros*Kg - Peso - Precio concepto <br><br>";
    echo "JUDIAS--------" .PRECIO_JUDIAS. "€ -----" .$peso_judias. "Kg -------" .number_format($coste_judias, 2). "€ <br>" ;
    echo "PATATAS-------" .PRECIO_PATATAS. "€ -----" .$peso_patatas. "Kg -------" .number_format($coste_patatas, 2). "€ <br>" ;
    echo "TOMATES-------" .PRECIO_TOMATES. "€ -----" .$peso_tomates. "Kg -------" .number_format($coste_tomates, 2). "€ <br>" ;
    echo "MANZANAS------" .PRECIO_MANZANAS. "€ -----" .$peso_manzanas. "Kg -------" .number_format($coste_manzanas, 2). "€ <br>" ;
    echo "UVAS----------" .PRECIO_UVAS. "€ -----" .$peso_uvas. "Kg -------" .number_format($coste_uvas, 2). "€ <br>" ;
    echo "<br>";
    echo "TOTAL: " .$coste_judias+$coste_manzanas+$coste_patatas+$coste_tomates+$coste_uvas. "€ <br>";
    echo "Gracias por su compra.";
?>

