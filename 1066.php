<?php

$entrada1 = readline();
$entrada2 = readline();
$entrada3 = readline();
$entrada4 = readline();
$entrada5 = readline();

$array = [$entrada1, $entrada2, $entrada3, $entrada4, $entrada5];
$countPar      = 0;
$countImpar    = 0;
$countPositivo = 0;
$countNegativo = 0;

foreach($array as $item){
    if($item % 2 === 0){
        $countPar++;
    }else{
        $countImpar++;
    }
    if($item > 0){
        $countPositivo++;
    }
    if($item < 0){
        $countNegativo++;
    }
}
echo "$countPar valor(es) par(es)\n";
echo "$countImpar valor(es) impar(es)\n";
echo "$countPositivo valor(es) positivo(s)\n";
echo "$countNegativo valor(es) negativo(s)\n";
?>