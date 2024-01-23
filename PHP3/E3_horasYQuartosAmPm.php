<?php
$cont=0;

//foreach ($periodos as $periodo) {
//  echo "HORAS $periodo<br>";
while ($cont<=1){
    $periodo = ($cont != 1) ? 'AM' : 'PM';
    echo"HORAS ".$periodo."<br>";
    for ($hora = 1; $hora <= 12; $hora++) {
        for ($minu = 0; $minu < 60; $minu += 15) {
            $hora_format = sprintf("%02d", $hora);
            $minu_format = sprintf("%02d", $minu);
            echo "$hora_format:$minu_format $periodo<br>";
        }
        echo "<br>";
    }
    $cont++;
}
?>
