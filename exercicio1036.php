<?php

$x = fgets(STDIN);

$y = explode(" ", $x);

$vA = $y[0];
$vB = $y[1];
$vC = $y[2];

$delta = ($vB * $vB) - (4 * $vA * $vC);

$r1 = (-$vB + sqrt($delta)) / (2 * $vA);
$r2 = (-$vB - sqrt($delta)) / (2 * $vA);

if($delta < 0 || $vA == 0){
    echo "Impossivel calcular" . PHP_EOL;
} else {
    echo "R1 = " . number_format($r1, 5, '.', '') . PHP_EOL;
    echo "R2 = " . number_format($r2, 5, '.', '') . PHP_EOL;
}
?>