<?php

$qtdLidos = readline();
$i = 0;
while($qtdLidos > $i){
    $lidos[$i] = readline();
    $i++;
}

$intervalo = [10,20];
$countIn  = 0;
$countOut = 0;
foreach($lidos as $lido){
    if(($lido >= $intervalo[0]) && ($lido <= $intervalo[1])){
        $countIn++;
    }else{
        $countOut++;
    }
}
echo "$countIn in\n";
echo "$countOut out\n";

?>