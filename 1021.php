<?php
/*
Leia um valor de ponto flutuante com duas casas decimais. Este valor representa um valor monetário. A seguir, calcule o menor número de notas e moedas possíveis no qual o valor pode ser decomposto. As notas consideradas são de 100, 50, 20, 10, 5, 2. As moedas possíveis são de 1, 0.50, 0.25, 0.10, 0.05 e 0.01. A seguir mostre a relação de notas necessárias.
*/

$entradaDinheiro = fgets(STDIN);

$qtdNotasCem = floor($entradaDinheiro / 100);
$qtdRestoNotasCem = $entradaDinheiro % 100;

$qtdNotasCinquenta = floor($qtdRestoNotasCem / 50);
$qtdRestoNotasCinquenta = $qtdRestoNotasCem % 50;

$qtdNotasVinte = floor($qtdRestoNotasCinquenta / 20);
$qtdRestoNotasVinte = $qtdRestoNotasCinquenta % 20;

$qtdNotasDez = floor($qtdRestoNotasVinte / 10);
$qtdRestoNotasDez = $qtdRestoNotasVinte % 10;

$qtdNotasCinco = floor($qtdRestoNotasDez / 5);
$qtdRestoNotasCinco = $qtdRestoNotasDez % 5;

$qtdNotasDois = floor($qtdRestoNotasCinco / 2);
$qtdRestoNotasDois = $qtdRestoNotasCinco % 2;

echo $qtdRestoNotasDois;
exit();
/* Moedas */

// $qtdMoedaUm = floor($qtdRestoNotasDois / 1);
// $qtdRestoMoedaUm = $qtdRestoNotasDois % 1;

echo "NOTAS:\n";
echo "$qtdNotasCem nota(s) de R$ 100.00\n";
echo "$qtdNotasCinquenta nota(s) de R$ 50.00\n";
echo "$qtdNotasVinte nota(s) de R$ 20.00\n";
echo "$qtdNotasDez nota(s) de R$ 10.00\n";
echo "$qtdNotasCinco nota(s) de R$ 5.00\n";
echo "$qtdNotasDois nota(s) de R$ 2.00\n";
echo "MOEDAS:";
echo "1 moeda(s) de R$ 1.00";
echo "1 moeda(s) de R$ 0.50";
echo "0 moeda(s) de R$ 0.25";
echo "2 moeda(s) de R$ 0.10";
echo "0 moeda(s) de R$ 0.05";
echo "3 moeda(s) de R$ 0.01";

?>