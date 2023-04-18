<?php

    $x = array();
    
    for($i = 0; $i < 100; $i++) {
        $x[$i] = floatval(trim(fgets(STDIN)));
        if ($x[$i] <= 10) {
            echo "A[$i] = " . number_format($x[$i], 1, '.', '') . PHP_EOL;
        }
    }

?>