<?php
$n_ini=1;
$n_fin=100;
$sumapar=0;
$sumaimp=0;

for($num=$n_ini; $num<=$n_fin; $num++)
{
    switch ($num % 2){
        case 0:
            $sumapar=($sumapar+$num);
            break;
        case 1:
            $sumaimp=($sumaimp+$num);
            break;
        default:
            echo "Como es un numero que no es par ni impar";
    }
}
echo "En el rango de " . $n_ini . " a " . $n_fin . "<br>";
echo "La suma de los <b>Pares</b> es: " . $sumapar . "<br>";
echo "La suma de los <b>Impares</b> es: " . $sumaimp . "<br>";
?>