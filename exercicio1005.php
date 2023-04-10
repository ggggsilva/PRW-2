<?php
 
$nota1 = fgets(STDIN);
$nota2 = fgets(STDIN);
$media;
$media =((($nota1 * 3.5)+($nota2 * 7.5))/11.0);
$media = number_format($media, 5, ".","");
echo "MEDIA = " . $media . "\n";
?>
