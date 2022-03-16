<?php

list($a, $b, $c) = explode(" ", readline());

$perimetro = ($a+$b+$c);
$area = ($a+$b)*$c/2;

if(($c < ($a+$b)) && ($a < ($b+$c)) && ($b < ($a+$c)))
    echo "Perimetro = ". number_format($perimetro,1)."\n";
else
    echo "Area = ". number_format($area,1)."\n";


