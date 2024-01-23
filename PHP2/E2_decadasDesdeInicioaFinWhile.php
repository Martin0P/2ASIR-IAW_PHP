<?php
$decaIni=2000;
$decaFin=2100;

echo "<table border='1'>";
echo "<tr><th>Décadas desde el 2000 al 2100</th></tr>";

while ($decaIni<=$decaFin)
    {
        echo "<tr><td>$decaIni</td></tr>";
        $decaIni += 10;
    }
echo "</table>";
?>