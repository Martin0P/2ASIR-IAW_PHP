<?php
for ($hora = 1; $hora <= 12; $hora++) {
    for ($minu = 0; $minu < 60; $minu += 5) {
        $hora_format = sprintf("%02d", $hora);
        $minu_format = sprintf("%02d", $minu);

        // Determinar si es AM o PM
        $periodo = ($hora < 12) ? 'AM' : 'PM';

        echo "$hora_format:$minu_format $periodo<br>";
    }
}