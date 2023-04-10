<?php

$x = fgets(STDIN);

$y = explode(" ", $x);

$va = $y[0];
$vb = $y[1];
$vc = $y[2];

if ($va < $vb + $vc && $vb < $va + $vc && $vc < $va + $vb) {
    echo "Perimetro = " . number_format($va + $vb + $vc, 1, '.', '') . PHP_EOL;
} else {
    echo "Area = " . number_format((($va + $vb) * $vc) / 2, 1, '.', '') . PHP_EOL;
}
?>