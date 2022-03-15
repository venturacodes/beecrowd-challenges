<?php

$entrada = fgets(STDIN);
$array = explode(" ", $entrada);
$a = $array[0];
$b = $array[1];
$c = $array[2];
$d = $array[3];

if(($b > $c) && ($d > $a) && (($c+$d) > ($a +$b)) && ($c > 0 && $d > 0) && ($a % 2 == 0)){
    echo "Valores aceitos\n";
}else{
    echo "Valores nao aceitos\n";
}
?>

