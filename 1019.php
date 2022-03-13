<?php
    $tempoEmSegundos = fgets(STDIN);

    $tempoEmHoras = $tempoEmSegundos / 3600;
    $tempoEmSegundos = $tempoEmSegundos % 3600;

    $tempoEmMinutos = $tempoEmSegundos / 60;
    $tempoEmSegundos = $tempoEmSegundos % 60;
    

    echo floor($tempoEmSegundos)."\n";
    echo floor($tempoEmMinutos)."\n";
    echo floor($tempoEmHoras)."\n";

    echo floor($tempoEmHoras) . ":" . floor($tempoEmMinutos).":" . floor($tempoEmSegundos) . "\n";
    
?>