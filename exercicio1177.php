<?php

$x = array();
$j = 0;
$n = trim(fgets(STDIN));

for ($i = 0; $i < 1000; $i++) {
    $x[$i] = $j;

    echo "N[$i] = $x[$i]" . PHP_EOL;

    if ($j == $n - 1) {
        $j = 0;
    } else {
        $j++;
    }
}
?>