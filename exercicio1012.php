<?php

    $x = readline(); 
    $x = explode(' ',$x);

    $vA = (double)$x[0];
    $vB = (double)$x[1];
    $vC = (double)$x[2];

    $triang = ($vA * $vC)/2;
    $triang = number_format($triang, 3, ".","");

    $circ = (($vC * $vC) * 3.14159);
    $circ = number_format($circ, 3, ".","");

    $trap = (($vA + $vB) * $vC )/2;
    $trap = number_format($trap, 3, ".","");

    $quad = $vB * $vB;
    $quad = number_format($quad, 3, ".","");

    $retang = $vA * $vB;
    $retang = number_format($retang, 3, ".","");

    echo "TRIANGULO: $triang\n";
    echo "CIRCULO: $circ\n";
    echo "TRAPEZIO: $trap\n";
    echo "QUADRADO: $quad\n";
    echo "RETANGULO: $retang\n";

?>
