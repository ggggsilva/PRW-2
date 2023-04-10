<?php

$va = fgets(STDIN);
$vb = fgets(STDIN);
$vc = fgets(STDIN);

echo "TOTAL = R$ " . number_format($vb + $vc * 0.15, 2, '.', '') . "\n";
