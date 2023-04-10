<?php
 
$entrada = explode(" ", readline());
$n1 = intval($entrada[0]);
$n2 = intval($entrada[1]);
$n3 = intval($entrada[2]);
$n4 = intval($entrada[3]);

$minutos_iniciais = $n1 * 60 + $n2;
$minutos_finais = $n3 * 60 + $n4;

if ($minutos_iniciais < $minutos_finais) {
    $duracao = $minutos_finais - $minutos_iniciais;
} else {
    $duracao = (24 * 60 - $minutos_iniciais) + $minutos_finais;
}

$horas = intval($duracao / 60);
$minutos = $duracao % 60;

printf("O JOGO DUROU %d HORA(S) E %d MINUTO(S)\n", $horas, $minutos);
?>