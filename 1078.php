<?php

$entrada = readline();
 
$tabuada = [1,2,3,4,5,6,7,8,9,10];

foreach($tabuada as $multi){
    echo "$multi x $entrada = ".($entrada*$multi)."\n";
}