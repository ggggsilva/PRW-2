<?php

$va = fgets(STDIN);

$vanos = (int)($va / 365);
$vmeses = (int)(($va % 365) / 30);
$vdias = (int)(($va % 365) % 30);

echo "$vanos ano(s)\n";
echo "$vmeses mes(es)\n";
echo "$vdias dia(s)\n";