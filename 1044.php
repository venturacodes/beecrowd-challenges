<?php

    list($a, $b) = explode(" ", readline());

    if(($b > $a) && ($b % $a) == 0)
        echo "Sao Multiplos\n";
    elseif(($b < $a) && ($a % $b) == 0)
        echo "Sao Multiplos\n";
    else{
        echo "Nao sao Multiplos\n";
    }        
?>