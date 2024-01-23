<?php
$Ini=5;
$Fin=60;
$Inc=3;

echo "<table border='1'>";
echo "<tr><th>Tabla desde el $Ini al $Fin con incremento de $Inc </th></tr>";

while ($Ini<=$Fin)
    {
        echo "<tr><td>$Ini</td></tr>";
        $Ini += $Inc;
    }
echo "</table>";
?>