<?php

$raio = floatval(fgets(STDIN));
$pi = 3.14159;

$area = $pi * pow($raio, 2);

printf("A=%.4f\n", $area);

?>