<?php

$array = [];
for($i=0;$i<6; $i++){
    $array[$i] = readline();
}
$countPositivos = 0;
$acumuladorPositivos = 0;
foreach($array as $item){
    if($item > 0){
        $countPositivos++;
        $acumuladorPositivos += $item;
    }
}
$mediaPositivos = $acumuladorPositivos/$countPositivos;

echo "$countPositivos valores positivos\n";
echo number_format($mediaPositivos,1)."\n";
?>