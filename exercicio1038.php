<?php

$y = explode(" ", fgets(STDIN));
$cd = $y[0];
$qua = $y[1];
$prec = 0;
switch ($cd) {
    case 1:
        $prec = 4.00;
        break;
    case 2:
        $prec = 4.50;
        break;
    case 3:
        $prec = 5.00;
        break;
    case 4:
        $prec = 2.00;
        break;
    case 5:
        $prec = 1.50;
        break;
}
echo "Total: R$ " . number_format($prec * $qua, 2, '.', '') . PHP_EOL;
?>