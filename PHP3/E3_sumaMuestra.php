<?php
$n_ini=100;
$n_fin=200;
$suma=0;

echo"<b>Listado de Números</b><br>";

for($num=$n_ini; $num<=$n_fin; $num++){
    echo $num. "<br>";
    $suma+=$num;
}
echo "<b>Suma de los números es: " .$suma. "</b>";
?>