<?php
/*
Leia um valor inteiro correspondente à idade de uma pessoa em dias e informe-a em anos, meses e dias

Obs.: apenas para facilitar o cálculo, considere todo ano com 365 dias e todo mês com 30 dias. Nos casos de teste nunca haverá uma situação que permite 12 meses e alguns dias, como 360, 363 ou 364. Este é apenas um exercício com objetivo de testar raciocínio matemático simples.
 */

$entradaEmDias = fgets(STDIN);
const DIAS_NO_ANO = 365;
const DIAS_NO_MES = 30;

$anos = floor($entradaEmDias/DIAS_NO_ANO);
$restoDiasAno = $entradaEmDias%DIAS_NO_ANO;
$meses = floor($restoDiasAno/DIAS_NO_MES);
$dias = $restoDiasAno%DIAS_NO_MES;

echo "$anos ano(s)\n";
echo "$meses mes(es)\n";
echo "$dias dia(s)\n";

?>
