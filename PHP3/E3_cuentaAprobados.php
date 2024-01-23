<?PHP
$cont=1;
$apro=0;

do{
    $alum= random_int(0, 10);
    if ($alum>=5)
    {
        $apro++;
    }
    echo $alum. "<br>";
    $cont++;
}while ($cont<=5);
echo "<b>El número de alumons aprobados es: " .$apro. "</b>";
?>