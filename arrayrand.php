<?php

$color=['red','green','blue','yellow','brown'];

// $newarray=array_rand($color,2);
// //print_r($newarray);
// echo $color[$newarray[0]];
// echo $color[$newarray[1]];


shuffle($color);
print_r($color);
?>