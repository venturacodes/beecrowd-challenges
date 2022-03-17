<?php

$entrada1 = fgets(STDIN);
$entrada2 = fgets(STDIN);
$entrada3 = fgets(STDIN);
$entrada4 = fgets(STDIN);
$entrada5 = fgets(STDIN);

$array = [$entrada1, $entrada2, $entrada3, $entrada4, $entrada5];

$countPar = 0;
foreach($array as $item){
    if($item % 2 === 0){
        $countPar++;
    }
}

echo "$countPar valores pares\n";

?>