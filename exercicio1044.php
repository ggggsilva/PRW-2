<?php
 
$x = fgets(STDIN);

$y = explode(" ", $x);

$vA = $y[0];
$vB = $y[1];

if ($vA % $vB == 0 || $vB % $vA == 0) {
echo "Sao Multiplos" . PHP_EOL;
} else {
echo "Nao sao Multiplos" . PHP_EOL;
}
?>
