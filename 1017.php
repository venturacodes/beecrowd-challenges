<?php
    const CONSUMO = 12;
    $tempoEmHoras = fgets(STDIN);
    $velocidadeMedia = fgets(STDIN);

    $result = ($tempoEmHoras*$velocidadeMedia)/CONSUMO;

    echo number_format($result, 3)."\n";
?>