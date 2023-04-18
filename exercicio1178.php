<?php

$y = floatval(trim(fgets(STDIN)));
$x = array();

echo "N[0] = " . number_format($y, 4, '.', '') . PHP_EOL;

$x[0] = $y;

for ($i = 1; $i < 100; $i++) {
    $x[$i] = $x[$i - 1] / 2.0;
    echo "N[$i] = " . number_format($x[$i], 4, '.', '') . PHP_EOL;
}
?>