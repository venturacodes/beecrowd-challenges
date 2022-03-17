<?php
    $entrada = readline();
    const LIMITE_VALORES_IMPARES = 6;
    $countImpar = 0;
    while($countImpar < LIMITE_VALORES_IMPARES){
        if($entrada % 2 !== 0){
            echo "$entrada\n";
            $countImpar++;
        }
        $entrada++;
    }
?>