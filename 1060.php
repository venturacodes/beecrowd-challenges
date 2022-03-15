<?php

$entrada1 = fgets(STDIN);
$entrada2 = fgets(STDIN);
$entrada3 = fgets(STDIN);
$entrada4 = fgets(STDIN);
$entrada5 = fgets(STDIN);
$entrada6 = fgets(STDIN);

$lista = [$entrada1, $entrada2, $entrada3, $entrada4, $entrada5, $entrada6];
$countPositivos = 0;
foreach($lista as $item){
    if($item > 0 ){
        $countPositivos++;
    }
}

echo $countPositivos." valores positivos\n";