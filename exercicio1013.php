<?php

$a = fgets(STDIN);
$valor = explode(' ', $a);

$x = $valor[0];
$y = $valor[1];
$z = $valor[2];

$maior = ($x + $y + abs($x - $y)) / 2;
$maior = ($maior + $z + abs($maior - $z)) / 2;

echo "$maior eh o maior\n";
