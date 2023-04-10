<?php

$va = fgets(STDIN);

$hrs = (int)($va / 3600);
$min = (int)(($va % 3600) / 60);
$seg = (int)(($va % 3600) % 60);

echo "$hrs:$min:$seg\n";