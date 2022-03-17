<?php
    $entrada1 = readline();
    $entrada2 = readline();

    $arrayLimites = [$entrada2, $entrada1];
    $acumulador = 0;
    for($i=$entrada2+1; $i < $entrada1; $i++){
        if($i % 2 !== 0){
            $acumulador = $acumulador + $i;
        }
    }
    echo $acumulador."\n";
?>