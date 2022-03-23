<?php

    list($x, $DiaInicio) = explode(" ", readline());
    list($horaInicio, $minutoInicio, $segundoInicio) =  explode(" : ",readline());
    list($x, $DiaFim) = explode(" ", readline());
    list($horaFim, $minutoFim, $segundoFim) =  explode(" : ",readline());
    if($DiaInicio - $DiaFim == 0){
        $dia = 0;
        $hora = $horaFim > $horaInicio ? ($horaFim - $horaInicio)  : ($horaInicio - $horaFim);
    }else{
        $dia = $DiaFim > $DiaInicio ? ($DiaFim - 1) -$DiaInicio : ($DiaInicio - 1) -$DiaFim;
    }
    $minuto = $minutoFim > $minutoInicio ? ($minutoFim - $minutoInicio)  : ($minutoInicio - $minutoFim);
    $segundo = $segundoFim > $segundoInicio ? ($segundoFim - $segundoInicio)  : ($segundoInicio - $segundoFim);
    echo "$dia dia(s)\n";
    echo "$hora hora(s)\n";
    echo "$minuto minuto(s)\n";
    echo "$segundo segundos(s)\n";
?>