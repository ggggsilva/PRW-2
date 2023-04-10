<?php

$va = fgets(STDIN);
$vb = fgets(STDIN);

echo number_format($va / $vb, 3, '.', '') . " km/l\n";