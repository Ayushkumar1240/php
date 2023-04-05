<?php
$fruit=['apple','banana','guava'];
$veggie=['carrot','pea'];

$newarray=array_merge($fruit,$veggie);

print_r($newarray);
echo "<br>";






$fruit=['a'=>'apple','b'=>'banana','c'=>'guava'];
$veggie=['carrot','pea'];

$newarray=array_merge($fruit,$veggie);

print_r($newarray);
echo "<br>";








$fruit=['a'=>'apple','b'=>'banana','c'=>'guava'];
$veggie=['b'=>'carrot','e'=>'pea'];

$newarray=array_merge($fruit,$veggie);

print_r($newarray);
echo "<br>";







$fruit=['a'=>'apple','b'=>'banana','c'=>'guava'];
$veggie=['b'=>'carrot',89,'e'=>'pea',55,68];

$newarray=array_merge($fruit,$veggie);

print_r($newarray);
echo "<br>";







$fruit=['a'=>'apple','b'=>'banana','c'=>'guava'];
$veggie=['b'=>'carrot','e'=>'pea'];

$newarray=$fruit+$veggie;

print_r($newarray);
echo "<br>";







$fruit=['a'=>'apple','b'=>'banana','c'=>'guava'];
$veggie=['b'=>'carrot','e'=>'pea'];

$newarray=array_merge_recursive($fruit,$veggie);

print_r($newarray);
echo "<br>";





$name=array("ram","mohan","salman");
$age=array("35","56","67");

$newarray=array_combine($name,$age);         //both the array should have same number of parameters.

print_r($newarray);

?>