<?php
$a='hello';
$new=str_split($a);
print_r($new);
echo "<br>";



$c="hello how are you";
$new=str_split($c,3);
print_r($new);
echo "<br>";

$b="hello";
$new=chunk_split($a,1,'.');
echo $new;

?>