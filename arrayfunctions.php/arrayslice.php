<?php
$a=["sanjay",'aman',"rehman","karan"];


$newarray=array_slice($a,1,2);

print_r($newarray);
echo "<br>";






$color=['red','green','blue','yellow','brown'];

$newarray=array_slice($color,1,2);

print_r($newarray);
echo "<br>";

$newarray=array_slice($color,-2,1);
print_r($newarray);
echo "<br>";

$newarray=array_slice($color,1,3,true);
print_r($newarray);
echo "<br>";






$color=["a"=>"red","b"=>"green","42"=>"blue","d"=>"cyan"];

$newarray=array_slice($color,1,3);

print_r($newarray);
echo "<br>";

$newarray=array_slice($color,1,3,true);

print_r($newarray);
echo "<br>";
?>