<?php
// Um-Dois-Tres

$x = "";
$n = $m = $a = $d = 0;

$n = (int) fgets(STDIN);

while ($m < $n) {
  $a = $d = 0;
  
  $x = trim(fgets(STDIN));

  if (strlen($x) > 3) {
    $a = 3;
  } else {
    if (($x[0] == 'o') && ($a != 3)) {
      $d++;
    }

    if (($x[1] == 'n') && ($a != 3)) {
      $d++;
    }

    if (($x[2] == 'e') && ($a != 3)) {
      $d++;
    }

    if ($d >= 2) {
      $a = 1;
    } else {
      $a = 2;
    }
  }

  echo $a . "\n";
  $m++;
}

?>