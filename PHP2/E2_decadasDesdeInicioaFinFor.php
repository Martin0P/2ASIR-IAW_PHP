<?php
$decaIni=2000;
$decaFin=2100;

echo "<table border='1'>";
echo "<tr><th>Décadas desde el 2000 al 2100</th></tr>";

for ($decada = $decaIni; $decada <= $decaFin; $decada += 10)
    {
        echo "<tr><td>$decada</td></tr>";
    }
    
echo "</table>";
?>