<?php
$numpar = 0;

echo "<table border='1'>";
echo "<tr><th>Números Pares de 0 a 100</th></tr>";

while ($numpar <= 100) {
    if ($numpar % 2 == 0) {
        echo "<tr><td>$numpar</td></tr>";
    }
    $numpar++;
}
echo "</table>";
?>
