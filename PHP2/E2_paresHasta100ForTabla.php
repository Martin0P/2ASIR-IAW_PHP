<?php
$numpar = 0;

echo "<table border='1'>";
echo "<tr><th>Números Pares de 0 a 100</th></tr>";

for ($numpar = 0; $numpar <= 100; $numpar += 2)
    {
        echo "<tr><td>$numpar</td></tr>";
    }

echo "</table>";
?>
