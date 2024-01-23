<?php
$n_ini=1;
$n_fin=100;
$suma=0;

for($num=$n_ini; $num<=$n_fin; $num++){
    if ($num % 10 == 0 && $num <= $n_fin) {
        echo $num. "<br>";
    }else {
        echo $num. "-";
    }
    $suma+=$num;
}
echo "La suma es de los números entre " .$n_ini. " y " .$n_fin. " es: <b>" .$suma. "</b>";
?>
