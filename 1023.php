<?php


/*
Leia 3 valores de ponto flutuante e efetue o cálculo das raízes da equação de Bhaskara. 

Se não for possível calcular as raízes, mostre a mensagem correspondente “Impossivel calcular”, caso haja uma divisão por 0 ou raiz de numero negativo.

Entrada
Leia três valores de ponto flutuante (double) A, B e C.

Saída
Se não houver possibilidade de calcular as raízes, apresente a mensagem "Impossivel calcular". Caso contrário, imprima o resultado das raízes com 5 dígitos após o ponto, com uma mensagem correspondente conforme exemplo abaixo. Imprima sempre o final de linha após cada mensagem.

*/

$entrada = fgets(STDIN);
const MSG_IMP_CALCULAR = "Impossivel calcular";
$entradaArray = explode(" ", $entrada);

$a = $entradaArray[0];
$b = $entradaArray[1];
$c = $entradaArray[2];

function baskhara($a,$b,$c){
    if($a == 0){// divisão por zero
        echo MSG_IMP_CALCULAR."\n";
    }else{
        $delta = pow($b, 2) - ((4*$a)*$c);
        if($delta === 0){
            $raiz = -($b)/(2*$a);
            echo "Delta igual a zero. A equação tem 1 raiz.<br>Raiz da equação: ".$raiz;
        }elseif($delta > 0){
            $x1 = (-$b + sqrt($delta))/(2*$a);
            $x2 = (-$b - sqrt($delta))/(2*$a);
            $raiz = array($x1, $x2);
            echo "R1 = ".number_format($raiz[0], 5)."\n";
            echo "R2 = ".number_format($raiz[1], 5)."\n";
        }else{
            echo MSG_IMP_CALCULAR."\n";
        }
    }
}
baskhara($a, $b, $c);