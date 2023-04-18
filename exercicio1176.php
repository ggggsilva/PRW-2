<?php

$x = array();
$x[0] = 0;
$x[1] = 1;

$n = trim(fgets(STDIN));

for ($i = 2; $i <= 60; $i++) {
    $x[$i] = ($x[$i - 1]) + ($x[$i - 2]);
}

for ($i = 0; $i < $n; $i++) {

    $y = intval(trim(fgets(STDIN)));

    echo "Fib(" . $y . ") = " . $x[$y] . PHP_EOL;
}


?>