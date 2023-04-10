<?php

    $nmr = readline();
    $hor = readline();
    $valhor = readline();

    $sal = $valhor * $hor; 
    $sal = number_format($sal, 2, ".","");

    echo "NUMBER = $nmr\n";
    echo "SALARY = U$ $sal\n";

?>