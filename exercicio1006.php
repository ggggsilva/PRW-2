<?php
    $nA = readline();
    $nB = readline();
    $nC = readline();
    $media = (($nA * 2) + ( $nB * 3) + ($nC * 5))/10;
    $media = number_format($media, 1, ".","");
    
    echo "MEDIA = $media\n";

?>
