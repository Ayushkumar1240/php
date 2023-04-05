<?php
$fruit=['orange','banana','apple','grapes'];
$veggie=['carrot','pea'];

$newarray=array_replace($fruit,$veggie);

print_r($newarray);
echo "<br>";







$fruit=['orange','banana','apple',1=>'grapes'];
$veggie=['carrot','pea'];

$newarray=array_replace($fruit,$veggie);

print_r($newarray);
echo "<br>";






$fruit=['orange','banana','apple','grapes'];
$veggie=['carrot','pea'];
$color=["blue","green","yellow"];

$newarray=array_replace($fruit,$veggie,$color);

print_r($newarray);
echo "<br>";






$fruit=['orange','banana','apple','grapes'];
$veggie=['a'=>'carrot','b'=>'pea'];


$newarray=array_replace($fruit,$veggie);

print_r($newarray);
echo "<br>";






$fruit=['orange','banana','apple','grapes'];
$veggie=['a'=>'carrot','1'=>'pea'];


$newarray=array_replace($fruit,$veggie);

print_r($newarray);
echo "<br>";








$fruit=['orange','banana','a'=>'apple','grapes'];
$veggie=['a'=>'carrot','1'=>'pea'];


$newarray=array_replace($fruit,$veggie);

print_r($newarray);
echo "<br>";


?>