<?php

    $n = array();
    $n[0] = fgets(STDIN);
    
    echo "N[0] = " . $n[0] . PHP_EOL;
    for ($i = 1; $i < 10; $i++) {
        $n[$i] = $n[$i - 1] * 2;

        echo "N[$i] = " . $n[$i] . PHP_EOL;
    }