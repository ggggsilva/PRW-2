<?php

$e = explode(" ", readline());
$a = $e[0];
$b = $e[1];
$c = $e[2];

sort($e);
echo implode("\n", $e);
echo"\n\n";
echo"$a\n$b\n$c\n";

?>