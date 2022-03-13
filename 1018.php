<?php
    $entrada = fgets(STDIN);
    function contaNotas($valorNota, $entrada){
        $quantidade = $entrada / $valorNota;
        $resto = $entrada % $valorNota;
        $quantidade = floor($quantidade);
        echo "$quantidade nota(s) de R$ $valorNota,00\n";
        return $resto;
    }
    echo trim($entrada)."\n";
    $entrada = contaNotas(100,$entrada);
    $entrada = contaNotas(50,$entrada);
    $entrada = contaNotas(20,$entrada);
    $entrada = contaNotas(10,$entrada);
    $entrada = contaNotas(5,$entrada);
    $entrada = contaNotas(2,$entrada);
    $entrada = contaNotas(1,$entrada);
?>