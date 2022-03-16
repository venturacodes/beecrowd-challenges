<?php

$array = explode(" ", readline());
$arrayOriginal = $array;
sort($array, SORT_NUMERIC);
foreach($array as $item){
    echo $item."\n";
}
echo "\n";
foreach($arrayOriginal as $item){
    echo $item."\n";
}

?>