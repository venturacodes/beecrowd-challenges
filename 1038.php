<?php

$entrada = fgets(STDIN);
$entradaArray = explode(" ", $entrada);
$codigo = $entradaArray[0];
$quantidade = $entradaArray[1];

$arrayItens = [1=>4, 2=>4.5, 3=>5, 4=>2, 5=>1.5];

$total = $arrayItens[$codigo] * $quantidade;

echo "Total: R$ ".number_format($total,2)."\n";