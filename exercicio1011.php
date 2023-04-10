<?php

$va = fgets(STDIN);

$volume = (4 / 3.0) * 3.14159 * pow($va, 3);

echo "VOLUME = " . number_format($volume, 3, '.', '') . "\n";
