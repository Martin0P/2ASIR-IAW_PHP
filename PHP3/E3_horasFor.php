<?php
// For para contar las horas
for ($hora = 0; $hora < 24; $hora++) {
    if($hora ==1 ){
        echo "Fracciones de la " .$hora. ":<br>";
    }else{
        echo "Fracciones de las " .$hora. ":<br>";
    }
    
    for ($minu = 0; $minu < 60; $minu += 5) {
        $hora_format = sprintf("%02d", $hora);
        $minu_format = sprintf("%02d", $minu);
        
        echo "$hora_format:$minu_format<br>";
    }
    echo "<br>";
}
?>
