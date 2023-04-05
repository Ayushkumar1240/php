<?php

$n1=5; 
$n2=10;
$n3=50;
$n4=30;

$max1 = ($n1 > $n2) ? $n1 : $n2;

$max2 = ($n3 > $max1) ? $n3 : $max1;

$max3 = ($n4 > $max2) ? $n4 : $max2;

echo "Largest number between " .$n1. " , " .$n2 ." , ".$n3." , ".$n4." is " . $max3;

?>
