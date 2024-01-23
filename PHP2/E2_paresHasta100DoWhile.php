<?php
$numpar = 0;
do
{
    if ($numpar % 2 == 0) {
        echo $numpar;
        echo " | ";
    }
    $numpar++;
}while ($numpar <= 100);
?>