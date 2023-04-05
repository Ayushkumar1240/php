<?php
$a="hello how are you";
//part1
$array=explode(" ",$a);

echo"<pre>";
print_r($array);
echo"</pre>";


//part2
$array=explode(" ",$a,-2);

echo"<pre>";
print_r($array);
echo"</pre>";


//part3

$array=["hello","how","are","you"];
$str=implode("-",$array);

echo($str);
?>