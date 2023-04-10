<?php

$x = fgets(STDIN);

$y = explode(" ", $x);

$nA = $y[0];
$nB = $y[1];
$nC = $y[2];
$nD = $y[3];

if ($nB > $nC && $nD > $nA && $nC + $nD > $nA + $nB && $nC > 0 && $nD > 0 && $nA % 2 == 0) {
    echo "Valores aceitos" . PHP_EOL;
} else {
    echo "Valores nao aceitos" . PHP_EOL;
}
?>