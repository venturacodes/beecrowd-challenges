<?php
/*
Leia um valor de ponto flutuante com duas casas decimais. Este valor representa um valor monetário. A seguir, calcule o menor número de notas e moedas possíveis no qual o valor pode ser decomposto. As notas consideradas são de 100, 50, 20, 10, 5, 2. As moedas possíveis são de 1, 0.50, 0.25, 0.10, 0.05 e 0.01. A seguir mostre a relação de notas necessárias.

Entrada
O arquivo de entrada contém um valor de ponto flutuante N (0 ≤ N ≤ 1000000.00).

Saída
Imprima a quantidade mínima de notas e moedas necessárias para trocar o valor inicial, conforme exemplo fornecido.

Obs: Utilize ponto (.) para separar a parte decimal.
*/

$entradaDinheiro = fgets(STDIN);
$notas = [100, 50, 20, 10, 5, 2];
echo "NOTAS:\n";
foreach($notas as $nota){
    $qtdNotas = intval($entradaDinheiro / $nota);
    $entradaDinheiro = $entradaDinheiro - ($qtdNotas * $nota);
    echo "$qtdNotas nota(s) de R$ ".number_format($nota,2)."\n"; 
}
$moedas = [1, 0.50, 0.25, 0.10, 0.05, 0.01];
echo "MOEDAS:\n";
foreach($moedas as $moeda){
    $qtdMoedas = intval(round($entradaDinheiro,2) / $moeda);
    $entradaDinheiro = $entradaDinheiro - ($qtdMoedas * $moeda);
    echo "$qtdMoedas moeda(s) de R$ ".number_format($moeda,2)."\n"; 
}


// echo "1 moeda(s) de R$ 1.00";
// echo "1 moeda(s) de R$ 0.50";
// echo "0 moeda(s) de R$ 0.25";
// echo "2 moeda(s) de R$ 0.10";
// echo "0 moeda(s) de R$ 0.05";
// echo "3 moeda(s) de R$ 0.01";

?>