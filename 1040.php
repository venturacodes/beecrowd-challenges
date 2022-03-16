<?php

$entrada1 = fgets(STDIN);
$entradaArray = explode(" ", $entrada1);
$n1 = $entradaArray[0];
$n2 = $entradaArray[1];
$n3 = $entradaArray[2];
$n4 = $entradaArray[3];

$media = (($n1 * 2) + ($n2 * 3) + ($n3 * 4) + ($n4 * 1)) / 10;



if($media >= 7.0){
    echo "Media: ".round($media,1, PHP_ROUND_HALF_DOWN)."\n";
    echo "Aluno aprovado.\n";
}elseif($media < 5){
    echo "Media: ".round($media,1, PHP_ROUND_HALF_DOWN)."\n";
    echo "Aluno reprovado.\n";
}elseif($media >= 5.0 && $media <= 6.9){
    $notaExame = fgets(STDIN);
    echo "Media: ".round($media,1, PHP_ROUND_HALF_DOWN)."\n";
    echo "Aluno em exame.\n";
    echo "Nota do exame: ".round($notaExame,1, PHP_ROUND_HALF_DOWN)."\n";
    $novaMedia = ($media + $notaExame) / 2;

    if($novaMedia >= 5.0)
        echo "Aluno aprovado.\n";
    elseif($novaMedia <= 4.9){
        echo "Aluno reprovado.\n";
    }
    echo "Media final: ". round($novaMedia,1, PHP_ROUND_HALF_DOWN)."\n";
}
    
    





?>