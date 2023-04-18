<?php
//Preenchimento de Vetor IV

$x = array();
$imp = array();
$par = array();
$pa = 0;
$im = 0;

for ($i = 0; $i < 15; $i++) {
    $x[$i] = trim(fgets(STDIN));
}

for ($i = 0; $i < 15; $i++) {
    if ($pa == 5) {
            for ($j = 0; $j < 5; $j++) {
                echo "par[$j] = $par[$j]" . PHP_EOL;
            }
            $pa = 0;
        }
    

    if ($im == 5) {
        for ($j = 0; $j < 5; $j++) {
            echo "impar[$j] = $imp[$j]" . PHP_EOL;
        }
        $im = 0;
    }

    if ($x[$i] % 2.0 == 0.0) {
        $par[$pa] = $x[$i];
        $pa++;
    } else {
        $imp[$im] = $x[$i];
        $im++;
    }
}
for ($j = 0; $j < $im; $j++) {
    echo "impar[$j] = $imp[$j]" . PHP_EOL;
}
for ($j = 0; $j < $pa; $j++) {
    echo "par[$j] = $par[$j]" . PHP_EOL;
}

?>