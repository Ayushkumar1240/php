<!-- <?php
$a=100;
$b=200;
echo "Numbers before swapping are:<br>";
echo "value of a=".$a."value of b=".$b."<br>";
$c=$a;
$a=$b;
$b=$c;
echo "numbers after swapping are:<br>";
echo "value of a=".$a."value of b=".$b;

?> -->



<?php
$a=10;
$b=20;
echo "Numbers before swapping are:<br>";
echo "value of a=".$a."value of b=".$b."<br>";
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "Numbers after swapping are:<br>";
echo "value of a=".$a."value of b=".$b."<br>";

?>