<?php

$n = array();

for ($i = 19; $i >= 0; $i--) {
    $n[$i] = intval(trim(fgets(STDIN)));
}

for ($i = 0; $i < 20; $i++) {
    echo "N[" . $i . "] = " . $n[$i] . PHP_EOL;
}
?>