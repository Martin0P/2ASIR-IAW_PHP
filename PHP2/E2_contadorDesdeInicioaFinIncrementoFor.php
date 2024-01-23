<?php
$Ini=3;
$Fin=80;
$Inc=2;

echo "<table border='1'>";
echo "<tr><th>Tabla desde el $Ini al $Fin con incremento de $Inc </th></tr>";

for ($Ini=$Ini; $Ini<=$Fin; $Ini += $Inc)
    {
        echo "<tr><td>$Ini</td></tr>";
    }

echo "</table>";
?>