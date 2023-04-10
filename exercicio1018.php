<?php
$val = intval(fgets(STDIN));

$not = array(100, 50, 20, 10, 5, 2, 1);

echo $val . "\n";

foreach ($not as $not) {
    $qtd_not = intval($val / $not);
    echo $qtd_not . " nota(s) de R$ " . number_format($not, 2, ",", "") . "\n";
    $val = $val % $not;
}