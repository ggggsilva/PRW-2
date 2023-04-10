<?php

    $x = readline(); 
    $x = explode(' ',$x);

    $cd1 = (int)$x[0];
    $nmr1 = (double)$x[1];
    $valr1 = (double)$x[2];

    $y = readline(); 
    $y = explode(' ',$y);

    $cd2 = (int)$y[0];
    $nmr2 = (double)$y[1];
    $valr2 = (double)$y[2];

    $tot = ($nmr1 * $valr1 ) + ($nmr2 * $valr2); 
    $tot = number_format($tot, 2, ".","");

    echo "VALOR A PAGAR: R$ $tot\n";

?>