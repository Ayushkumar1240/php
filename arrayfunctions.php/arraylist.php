<?php
$color=['red','green','blue'];

// $a=$color[0];
// $b=$color[1];
// $c=$color[2];

// echo $a,$b,$c;

// list($a,$b,$c)=$color;
// echo $a,$b,$c;



$a="red";
$b="green";
$c="blue";
$d="hey";
$e="hello";

$extra=["a","b","c","d","e"];

$newarray=compact("a",$extra);

print_r($newarray);
?>