<?php

$va = fgets(STDIN);
$vb = fgets(STDIN);

$kml = 12;
$litros = ($va * $vb) / $kml;

echo number_format($litros, 3, '.', '') . "\n";
