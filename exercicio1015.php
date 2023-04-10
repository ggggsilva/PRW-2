<?php

$va = fgets(STDIN);
$vb = fgets(STDIN);

$exe = explode(' ', $va);
$exe2 = explode(' ', $vb);

$x1 = $exe[0];
$y1 = $exe[1];

$x2 = $exe2[0];
$y2 = $exe2[1];

$distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

echo number_format($distancia, 4, '.', '') . "\n";
?>